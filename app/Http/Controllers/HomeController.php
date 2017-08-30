<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Document;
use App\Role;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all()->count();
        $roles = Role::all()->count();
        $users = User::all()->count();

        return view('home', compact('documents', 'roles', 'users'), array('user' => Auth::user()));
    }
}
