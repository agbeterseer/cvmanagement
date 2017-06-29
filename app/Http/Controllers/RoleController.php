<?php

namespace App\Http\Controllers;
use App\Roles;
use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
    {
        $s = $request->input('s');
        $rolesme = Roles::latest()->search($s)->paginate(5);
        //->paginate(5);
     return view('rolesme.index',compact('rolesme', 's'));
    }

    // public function index()
    // {
    //     $rolesme = Roles::all();
    //     //->paginate(5);
    //  return view('rolesme.index',compact('rolesme'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rolesme.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
     {
    //     $rolesme = new $rolesme;
    //     $this->validate($request, [
    //         'rolename' => 'required|unique:roles',
    //         'description'=> 'required']);
    //     $rolesm->rolename = $request->rolename;
    //     $rolesm->description = $request->description;
    //     $rolesme->save();

        Roles::create($request->all());

        Session::flash('success','item has been created cessfully');


        return redirect()->route('role.index');
      // need some validation
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Roles $role)
    {
     return view('rolesme.show',compact('role')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Roles $role)
    {
       return view('rolesme.edit',compact('role')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Roles $role)
    {
        $role->update($request->all());
        Session::flash('success','item has been deleted cessfully');
        return redirect()->route('role.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roles $role)
    {
       $role->delete();
       Session::flash('success','item has been deleted cessfully');

       return redirect()->route('role.index');

    }
}
