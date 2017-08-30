<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProfessionController extends Controller
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
     public function index(Request $request)
    {
 
     $professions = Profession::all()->paginate(5);;
         
     return view('admin.profession.index',compact('professions'), array('user_d' => Auth::user()));
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

    
}
