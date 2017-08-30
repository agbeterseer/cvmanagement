<?php
 namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Document;
use App\Region;
use App\City;
use App\Profession;
use \Storage;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
 //   public function addItem(Request $request)
 //    {
 
 //        $rules =[
 //            'candidates_name' => 'required',
 //            'years_of_experience' => 'required',
 //            'region_id' => 'required',
 //            'city_id' => 'required',
 //            'profession'=>'required',
    
 //        ];
    
     
 //        $validator = Validator::make(Input::all(), $rules);
 //        if ($validator->fails()) {
 //            return Response::json(array(

 //                    'errors' => $validator->getMessageBag()->toArray(),
 //            ));
 //        } else {

 //        $file = $request->file;
       
 //         $allowedFileTypes = config('app.allowedFileTypes');

 //         $maxFileSize = config('app.maxFileSize');

 //         $rules = [
 //            'file' => 'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize
 //        ];
 //  		dd($rules);

 //       $check = $this->validate($request, $rules);
    
       
 //        $fileName = $file->getClientOriginalName();
 //        $uploaded = Storage::cloud()->put($fileName, file_get_contents($file->getRealPath()));

 //        if ($uploaded) {
 //            $data = new Document;
 //            $data->candidates_name = $request->candidates_name;
 //            $data->years_of_experience = $request->years_of_experience;
 //            $data->city_id = $request->city_id;
 //            $data->region_id = $request->region_id;
 //            $data->save();

 //            if ($data) {
 //     		$data = Document::find($indocument->id);
 //        	$data->cv_file=$fileName;
 //        	$data->save();


	// 	       foreach ($request->profession as $key => $value) {
		      
	// 	        $data->professions()->attach($value);
	// 	    }
 //        }

	// }
 //          return response()->json($data);
 //        }
 //    }

 public function addCandidate(Request $request)
    {

    if ($this->uploadIsValid($request)) {
         // validate
        $this->validate($request, [
            'candidates_name' => 'required',
            'years_of_experience' => 'required',
            'region_id' => 'required',
            'city_id' => 'required',
            'profession'=>'required',
            
            ]);
       //access to the file
        $file = $request->file('file');
       
        // set document types
         $allowedFileTypes = config('app.allowedFileTypes');
         $maxFileSize = config('app.maxFileSize');
         $rules = [
            'file' => 'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize
        ];

        $fileName = $file->getClientOriginalName();
        $uploaded = Storage::cloud()->put($fileName, file_get_contents($file->getRealPath()));
    	// dd($request->all());
        if ($uploaded) {
        //create new object
        $indocument = new Document;
       //get input and store into variables set all input to insert to db
        $indocument->candidates_name = $request->candidates_name;
        $indocument->years_of_experience = $request->years_of_experience;
        $indocument->city_id = $request->city_id;
        $indocument->region_id = $request->region_id;
        $indocument->save();

        // dd($destinationPath);
        if ($indocument) {
        $indocument = Document::find($indocument->id);
        $indocument->cv_file=$fileName;
        $indocument->save();
        //mapping City to candidates
        // $city = new City;
        $city= $request->location;
      
        //link candidats to a city
        // map profession to candidate
        foreach ($request->profession as $key => $value) {
          
            $indocument->professions()->attach($value);
     	   }
        }

        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', $fileName .'CV Uploaded successfully!');
        }else{
        $request->session()->flash('message.level', 'danger');
        $request->session()->flash('message.content', 'There was an error Error!');

            return view('uploaderror');
        }
    }
    else{
        $request->session()->flash('message.level', 'danger');
        $request->session()->flash('message.content', 'There was an error Error!');

    }
        return redirect()->route('candidate.index');
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

    public function readItems(Request $req)
    {
        $regions = Region::all();
        $cities = City::all();
        $aop = Profession::all();
        return view('candidate.index', compact(['regions', 'cities', 'aop' ]));
    }


    public function readManual()
    {
        return view('manual');
    }

}
