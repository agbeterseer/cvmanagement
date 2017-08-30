<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
 
use App\Document;
use Illuminate\Http\Request;
use App\Region;
use App\City;
use App\Profession;
use Response;

class CandidateUploadcvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::all();
        $cities = City::all();
        $aop = Profession::all();
       

    return view('candidate.addItem', compact(['regions', 'cities', 'aop' ]));
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
    
    return view('candidate.addItem', compact(['regions', 'cities', 'aop' ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
     $rules = array (
            'candidates_name' => 'required',
            'years_of_experience' => 'required',
            'region' => 'required',
            'location' => 'required',
            'profession' => 'required'
    );
    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (
                    
                'errors' => $validator->getMessageBag ()->toArray ()
        ) );
        else {
            $data = new Document ();
            $data->candidates_name = $request->candidates_name;
            $data->years_of_experience = $request->years_of_experience;
            $data->profession = $request->profession;
            $data->region = $request->region;
            $data->location = $request->location;
            $data->save ();
            return response ()->json ( $data );
        }
    }


public function addItem(Request $request) {
         $rules = array (
            'candidates_name' => 'required',
            'years_of_experience' => 'required',
            'region' => 'required',
            'location' => 'required',
            'profession' => 'required'
    );
         
    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (
                    
                'errors' => $validator->getMessageBag ()->toArray ()
        ) );
        else {
            $data = new Document();
            $data->candidates_name = $request->candidates_name;
            $data->years_of_experience = $request->years_of_experience;
            $data->profession = $request->profession;
            $data->region = $request->region;
            $data->location = $request->location;
            $data->save ();
            return response ()->json ( $data );
        }
}
   public function readItems(Request $req)
    {
        $regions = Region::all();
        $cities = City::all();
        $aop = Profession::all();
    return view('candidate.addItem', compact(['regions', 'cities', 'aop']));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
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
}
