<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Document;
use App\Region;
use App\City;
use App\Profession;
use App\DocumentProfession;
use Artisan;
use Auth;
use \Storage;
use Response;
use Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
    {
        $disk = Storage::disk(config('laravel-backup.backup.destination.disks')[0]);
        $files = $disk->files(config('laravel-backup.backup.name'));
        $backups = [];
        // make an array of backup files, with their filesize and creation date
        foreach ($files as $k => $f) {
            // only take the zip files into account
            if (substr($f, -4) == '.zip' && $disk->exists($f)) {
                $backups[] = [
                    'file_path' => $f,
                    'file_name' => str_replace(config('laravel-backup.backup.name') . '/', '', $f),
                    'file_size' => $disk->size($f),
                    'last_modified' => $disk->lastModified($f),
                ];
            }
        }
        // reverse the backups, so the newest one would be on top
        $backups = array_reverse($backups);
        return view("admin.backupsys.backups", array('user' => Auth::user()))->with(compact('backups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
        try {
            // start the backup process
            Artisan::call('backup:run');
            $output = Artisan::output();
            // log the results
            Log::info("Backpack\BackupManager -- new backup started from admin interface \r\n" . $output);
            // return the results as a response to the ajax call
            Alert::success('New backup created');
            return redirect()->back();
        } catch (Exception $e) {
            Flash::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function download($file_name)
    {
        $file = config('laravel-backup.backup.name') . '/' . $file_name;
        $disk = Storage::disk(config('laravel-backup.backup.destination.disks')[0]);
        if ($disk->exists($file)) {
            $fs = Storage::disk(config('laravel-backup.backup.destination.disks')[0])->getDriver();
            $stream = $fs->readStream($file);
            return \Response::stream(function () use ($stream) {
                fpassthru($stream);
            }, 200, [
                "Content-Type" => $fs->getMimetype($file),
                "Content-Length" => $fs->getSize($file),
                "Content-disposition" => "attachment; filename=\"" . basename($file) . "\"",
            ]);
        } else {
            abort(404, "The backup file doesn't exist.");
        }
    }

      public function delete($file_name)
    {
        $disk = Storage::disk(config('laravel-backup.backup.destination.disks')[0]);
        if ($disk->exists(config('laravel-backup.backup.name') . '/' . $file_name)) {
            $disk->delete(config('laravel-backup.backup.name') . '/' . $file_name);
            return redirect()->back();
        } else {
            abort(404, "The backup file doesn't exist.");
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function importExport()
    {

        return view('admin.backupsys.importExport', array('user' => Auth::user()));
    }

    public function downloadExcel($type)
    {
        $data = Document::get()->toArray();
        return Excel::create('rhizome_cv', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }
      
    //     public function backUpDocumentProfession($type)
    // {
    //      $data = Document::get()->toArray();

   
    //     return Excel::create('rhizome_cv', function($excel) use ($document) {
    //         $excel->sheet('mySheet', function($sheet) use ($document)
    //         {
    //             $sheet->fromArray($document);
    //         });
    //     })->download($type);
    // }


    // public function importExcel()
    // {
    //     if(Input::hasFile('import_file')){
    //         $path = Input::file('import_file')->getRealPath();
    //         $data = Excel::load($path, function($reader) {
    //         })->get();
    //         if(!empty($data) && $data->count()){
    //             foreach ($data as $key => $value) {
    //                 $insert[] = ['title' => $value->title, 'description' => $value->description];
    //             }
    //             if(!empty($insert)){
    //                 DB::table('documents')->insert($insert);
    //                 dd('Insert Record successfully.');
    //             }
    //         }
    //     }
    //     return back();
    // }
}
