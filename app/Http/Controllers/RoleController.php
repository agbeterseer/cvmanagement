<?php

namespace App\Http\Controllers;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
use App\Permission;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Auth;
class RoleController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */ 
    public function __construct()
    {
        // $this->middleware(['permission:role-create','permission:role-edit', 'permission:role-delete']);
         $this->middleware('auth');
        // $this->middleware('role:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
    {
        // $s = $request->input('s');
        // $rolesme = Roles::latest()->search($s)->paginate(5);
        //return view('admin.role.index',compact('roles', 's'));

        $roles = Role::all();
          // $data = ['roles' => $roles];
     return view('admin.role.index',compact('roles'), array('user' => Auth::user()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions=Permission::all();
        return view('admin.role.create',compact('permissions'), array('user' => Auth::user()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        // $rolesme = new $rolesme;
        // $this->validate($request, [
        //     'rolename' => 'required|unique:roles',
        //     'description'=> 'required']);
        // $rolesm->rolename = $request->rolename;
        // $rolesm->description = $request->description;
        // $rolesme->save();
        // dd($request->all());


        // create the role
        $role=Role::create($request->except(['permission','_token']));
        // add permission
        foreach ($request->permission as $key => $value) {
          
            $role->attachPermission($value);
        }
        Session::flash('success','Role has been created cessfully');
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
     return view('role.show',compact('role')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(Roles $role)
    // {
    //    return view('role.edit',compact('role')); 
    // }
     public function edit($id)
    {
        $role=Role::find($id);
        $permissions=Permission::all();
        $role_permissions = $role->perms()->pluck('id','id')->toArray();

       return view('admin.role.edit',compact(['role','role_permissions','permissions']), array('user' => Auth::user())); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        // $role->update($request->all());
        // Session::flash('success','item has been deleted cessfully');
        // return redirect()->route('role.index');
        // update Role
        // dd($request->all());
        if ($id) {
            # code...
         $role=Role::find($id);
         $role->name=$request->name;
         $role->display_name=$request->display_name;
         $role->description=$request->description;
         $role->save();

         DB::table('permission_role')->where('role_id',$id)->delete();
        // add permission
        foreach ($request->permission as $key => $value) {
            $role->attachPermission($value);
        }
    }
       Session::flash('success','Role has been Updated cessfully');
        return redirect()->route('role.index', array('user' => Auth::user()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id) {

       DB::table("roles")->where('id',$id)->delete();
       Session::flash('success','Role has been deleted successfully');
 
        }else{

            return 'ID is required';
        }
  
 
    return redirect()->route('role.index')->withMessage('Role Deleted'); #
    }
}
