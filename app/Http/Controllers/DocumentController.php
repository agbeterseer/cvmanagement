<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Document;
use App\Region;
use App\City;
use App\Profession;
use App\DocumentProfession;
use Auth;
use \Storage;
use Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class DocumentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */ 
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $s = $request->input('s');
        $documents = Document::latest()
        ->search($s)
        ->paginate(20);
        $professions = Profession::all();
        $cities = City::all();
        // dd($s);

     return view('admin.document.index', compact('documents', 's', 'professions', 'cities'), array('user' => Auth::user()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        $cities = City::all();
        $aop = Profession::all();
    return view('admin.document.create', compact(['regions', 'cities', 'aop']), array('user' => Auth::user()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
    if ($this->uploadIsValid($request)) {

         // validate
        $this->validate($request, [
                'candidates_name' => 'required',
                'years_of_experience' => 'required',
                'location' => 'required',
                'region' => 'required',
            ]);
       //access to the file
        $file = $request->file('file');
   
        // set document types
         $allowedFileTypes = config('app.allowedFileTypes');
         $maxFileSize = config('app.maxFileSize');
         $rules = [
            'file' => 'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize
        ];
        $this->validate($request, $rules);

        $fileName = $file->getClientOriginalName();
        $uploaded = Storage::cloud()->put($fileName, file_get_contents($file->getRealPath()));
   
        if ($uploaded) {
        $indocument = new Document;
        $indocument->candidates_name = $request->candidates_name;
        $indocument->years_of_experience = $request->years_of_experience;
        $indocument->city_id = $request->location;
        $indocument->region_id = $request->region;
        $profession=$request->profession;
try{
        DB::transaction(function () use ($indocument, $fileName, $profession)  {
 
            $indocument->save();
 
       if ($indocument) {
             // DB::table("documents")->where('id',$id)
        $indocument = Document::find($indocument->id);
        $indocument->cv_file=$fileName;
        $indocument->save();
 
        // map profession to candidate
        foreach ($profession as $key => $value) {
          
            $indocument->professions()->attach($value);
        }
    }

     });

     } catch (\Exception $e) {
       return redirect()->back()
          ->withErrors(['error' => $e->getMessage()]);
    }
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', $fileName .'CV Uploaded successfully!');
        }else{
        $request->session()->flash('message.level', 'danger');
        $request->session()->flash('message.content', 'There was an error Error!');

            return 'There was an error Error!';
        }
    }
    else{
        $request->session()->flash('message.level', 'danger');
        $request->session()->flash('message.content', 'There was an error Error!');
    }  
        return redirect()->route('document.index');
    }

    public function getFile(Request $request)
    {
        // dd($request->all());

    $filename = $request->cv_file;
    if ($filename) {

    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));
    $file = $contents
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        ->first(); 

        if ($file) {
          $rawData = Storage::cloud()->get($file['path']);
        }else{
            return 'File Dose not Exist on Google Drive';
        }
    // there can be duplicate file names! 
    //return $file; // array with file info file_get_contents($file->getRealPath())
    
  // return Response::make($rawData, 200)
  //   ->header('ContentType', $file['mimetype'])  
  //   ->header('Content-Disposition', "inline; filename='$filename'");
       
 return Response::make($rawData, 200)
    ->header('ContentType', $file['mimetype'])  
    ->header('Content-Disposition', "attachment; filename='$filename'");
            }
    return view('document.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
         $value = $request->session()->get('key');

        return view('document.show',compact('document') , array('user' => Auth::user())); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id){
        $document=Document::find($id);
        $regions = Region::all();
        $cities = City::all();
        $aop = Profession::all();
    }else{
      return 'ID MUST BE AVAILABLE';
    }
      return view('admin.document.edit',compact(['document', 'aop', 'regions', 'cities']), array('user' => Auth::user())); 
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
                   // dd($request->all());
         if ($id) {
          //  get the candidate
            $document = Document::find($id);

            $document->candidates_name=$request->candidates_name;
            $document->years_of_experience=$request->years_of_experience;
            $document->city_id=$request->location;
            $document->region_id=$request->region;
 
            $document->save(); 
            DB::table('document_profession')->where('document_id',$id)->delete();
        // add Update
           $dds =  $request->profession;
           // dd($dds);
        foreach ($dds as $key => $value) {
 
             $document->professions()->attach($value);
             
            }
        }else{
            return 'ID CANNOT BE EMPTY';
        }

    return redirect()->route('document.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("documents")->where('id',$id)->delete();
        Session::flash('success','Document has been deleted successfully');
       return redirect()->route('document.index')->withMessage('Document Deleted');
    }

    // view for upload cv
    public function show_upload(Request $request)
    {
        $directory = config('app.fileDestinationPath');
        $files = Storage::files($directory);

        return view('admin.document.uploadcv', array('user' => Auth::user()))->with(array('files' => $files));
    }

    public function uploadIsValid($request)
    {

        if ($request->file('file')) {
            
        foreach ($request->file('file') as $file) {
 
            if (!$file->isValid()) {
                return false;
            }
        }
    }
    return true;
}
// upload files here
    public function handleUploadcv(Request $request, $id){
        
        dd($request->all());
// if ($this->uploadIsValid($request)) {
    if ($request->file('file')) {
    //access to the file
    $file = $request->file('file');

    // set document types
     $allowedFileTypes = config('app.allowedFileTypes');
     $maxFileSize = config('app.maxFileSize');
     $rules = [
        'file' => 'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize
    ];
    $this->validate($request, $rules);
    // dd($request->file('file'));
    //get the file name getClientOriginalName

    $fileName = $file->getClientOriginalName();
    $destinationPath = config('app.fileDestinationPath').'/'.$fileName;

    // get the content of the file and store in destinationPath
    // $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));

    $uploaded = Storage::disk('google')->put($fileName, file_get_contents($file->getRealPath()));

    if ($uploaded) {
        $document=Document::find($id);
        $document->cv_file=$fileName;
        $document->save();

        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'File Uploaded successfully!');

   } else {
        $request->session()->flash('message.level', 'danger');
        $request->session()->flash('message.content', 'There was an error Error!');
    }
}
    return redirect()->route('document.uploadcv');
   }

   public function search(Request $request) {
 // dd($request->all());
        $locations= $request;
        $documents = Document::all();
        $regions = Region::all();
        $cities = City::all();
        $aop = Profession::all();

        return view('admin.document.search', compact(['regions', 'cities', 'aop', 'documents', 'locations']), array('user' => Auth::user()));
   }

   public function custom_search(Request $request) {
        $regions = Region::all();
        $cities = City::all();
        $aop = Profession::all();
        $documents = Document::paginate(20)->search($s);
        return view('admin.document.custom_search', compact(['regions', 'cities', 'aop', 's']), array('user' => Auth::user()));
   }

public function post_search(Request $request) {
        // dd($request->all());
        $s = $request->input('s');
        $cities = City::all();
        $regions = Region::all();
        $aop = Profession::all();
        $documents = Document::search($s)->paginate(20);

        return redirect()->route('document.search_category', compact(['documents','regions', 'cities', 'aop', 's']), array('user' => Auth::user()));
   }

      public function show_search(Request $request) {
        
          // dd($request->all());
        
        $s = $request->input('s');
        $cities = City::all();
        $regions = Region::all();
        $aop = Profession::all();
        $documents = Document::search($s)->paginate(20);

        return view('admin.document.search_category', compact(['documents','regions', 'cities', 'aop', 's']), array('user' => Auth::user()));
   }

   // filter by city; get all candidates that belongs to a city
    public function view_filter_by_city(Request $request)
    {
        if ($request) {
         $location = $request->locations;      
    // It has valid data
       
        $location = City::find($location);
        $cities = City::all();
            }else{

        return redirect()->back()->withErrors(['error' => 'canot find city']);

            }
         //find candidates by city
        return view('admin.document.filter_by_city', compact(['location', 'cities']), array('user' => Auth::user()));
    }

    public function searchCandidatesByCity(Request $request)
    {
         $location = $request->location;
          // get a specific Loaction by ID
         $locations = City::find($location);


      return redirect()->route('document.filter_by_city', compact('locations'));
    }


    public function search_category()
    {
        return view('admin.document.search_category');
    }



     public function document_search(Request $request) {
          $location = $request->location;
          // get a specific Loaction by ID
          $locations = City::find($location);
          return redirect()->route('document.search_category', compact('locations'));
       }



    public function show_profession()
    {

      return view('admin.document.filter_by_professions',   array('user' => Auth::user()));
    }

    public function view_filter_by_professions(Request $request)
    {

        $aop = $request->aop;
        // get the size of the array
        $max = sizeof($aop);
        // loop through and find each item
        for ($i=0; $i < $max ; $i++) {
           
         $professions = Profession::find($aop); 
    }
 
   // foreach ($professions as $profession) {
      // dd($profession->id);
    //   $documents = DB::table('professions')
    //   ->join('documents', 'professions.id', '=', 'documents.profession_id')
    //     ->where('professions.name', '=', $aop)->paginate(5);
    
    // dd($documents);
           // }
        //   DB::table('tags')
        // ->join('posts', 'tags.id', '=', 'posts.tag_id')
        // ->where('tags.name', '=', $tag)
        // ->paginate(5);
        // $company = \Company::find($companyId)
        //     ->with('users')
        //     ->first();

        // $users = $company->users()->paginate(10);

 
    

    return view('admin.document.filter_by_professions', compact(['aop', 'professions', 'documents']), array('user' => Auth::user()));
    }

    public function searchCandidatesByProfession(Request $request)
    {
     
        $aop = $request->profession;
       
      return redirect()->route('document.filter_by_professions', compact(['aop']));
    }

    // filter by Years of Experience
   
    public function searchCandidatesByYearsOfExperience(Request $request)
    {
         
        $location = $request->location;
          // get a specific Loaction by ID
        $yoe = $request->yoe;
        $documents = Document::where('years_of_experience', '=', $yoe);

      return redirect()->route('document.filter_by_yoe', array('documents' =>$documents));
    }

   public function view_filter_by_years(Request $request)
    {
        dd($request->all());
          $yoe = $request->yoe;
        // dd($yoe);
        $documents = Document::where('years_of_experience', '=', $yoe);
         //find candidates by city
        return view('admin.document.filter_by_yoe', compact(['documents']), array('user' => Auth::user()));
    }

    public function view_filter_by_region(Request $request)
    {
    dd($request->region);

       return view('admin.document.filter_by_region');
    }

    public function search_filter_by_region(Request $request)
    {
     
         $region = $request->region;

       return redirect()->route('document.filter_by_region', compact('region'));
    }

     public function showFormCSV()
    {
        # code...
        return view('admin.document.uploadfromcsv',  array('user' => Auth::user()));
    }

    public function importFromCSV(Request $request)
    {

        $this->validate($request, [
            'upload-file' => 'required']);
        //get file
        $upload=$request->file('upload-file');
        $filePath=$upload->getRealPath();
        //open and read
        $file=fopen($filePath, 'r');
        $header= fgetcsv($file);
          $escapedHeader=[];
        //validate
        foreach ($header as $key => $value) {
            $lheader=strtolower($value);
            $escapedItem=preg_replace('/[ ]/', '', $lheader);
            array_push($escapedHeader, $escapedItem);
        }
        // dd($header);
        //looping through othe columns
        while($columns=fgetcsv($file))
        {

            if($columns[0]=="")
            {
                continue;
            } 
        // dd($columns);

            //trim data
            foreach ($columns as $key => &$value) {
                $value=preg_replace('//','',$value);
            }   
           $data= array_combine($escapedHeader, $columns);
            $candidates_name=title_case($data['candidates_name']);

            $years_of_experience=$data['years_of_experience'];
            $cv_file=$data['cv_file'];
            $city_id=$data['city_id'];
            $region_id=$data['region_id'];
            $profession_id=$data['profession_id'];
    try{
        DB::transaction(function () use ($request, $candidates_name, $years_of_experience, $cv_file, $city_id, $region_id, $profession_id)  {
  // Table update
           $document = Document::firstOrNew(['candidates_name'=>$candidates_name]);
           $document->years_of_experience=$years_of_experience;
           $document->cv_file=$cv_file;
           $document->city_id=$city_id;
           $document->region_id=$region_id;
           $document->save();
           // $findDoc = Document::find($document->id);
           $profession = (int)$profession_id;
           // dd($profession_id);
      DB::table('document_profession')->where('document_id',$document)->delete();
        // dd($done); 
        $document->professions()->attach($profession);
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Records Uploaded successfully!');
          
     });

     } catch (\Exception $e) {
       // return redirect()->back()
       //    ->withErrors(['error' => $e->getMessage()]);
    }
    }

 return redirect()->route('document.index');
    }
}
