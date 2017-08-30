<?php

namespace App\Http\Controllers;
use App\User;
use App\Document;
use App\Region;
use App\City;
use App\Profession;
use Auth;
 
use Illuminate\Http\Request;

class RegionController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */ 
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('role:superuser')->only('create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $region = $request->region;
        $regions = Region::all();
        $documents = Document::all();

       return view('admin.region.index', compact('regions', 'region', 'documents'),array('user' => Auth::user()));
    }

    public function getRegion(Request $request)
    {
        // dd($request->all());
        $region = $request->region;
        $region = Region::find($region);
        $regions = Region::all();
        $documents = Document::all();


          // foreach ($region->cities as $city) {
          //   $region_name->name;
          // }


       //dd($region->id);
        return view('admin.region.filter_by_region', compact('regions', 'region', 'documents'),array('user' => Auth::user()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
