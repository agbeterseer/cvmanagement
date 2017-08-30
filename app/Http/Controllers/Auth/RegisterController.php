<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Auth;
 


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers; 

    /**
     * Where to redirect users after registration.
     *
     *  
     */
   protected $redirectTo = '/user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         // $/this->middleware('guest');
           $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

        public function index(Request $request, User $user)
    {
        // dd(Auth::user()->name);
      
    return view('register',array('user' => Auth::user()));
    }
 

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */

      protected function create(array $data) {
        try{
                DB::transaction(function () use ($data)  {
              
                    $user = User::create([
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'password' => bcrypt($data['password']),
                    ]);
                    $user->attachRole(Role::where('name','general-user')->first());

                    Session::flash('success','User has been Created successfully');

                     return $user;


             });

         } catch (\Exception $e) {
           return redirect()->back()
              ->withErrors(['error' => $e->getMessage()]);
        }
       

    }
}
