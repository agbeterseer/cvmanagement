<?php

namespace App\Http\Controllers;
use Auth;
use App\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
          public function login(Request $request){

          if (Auth::attempt([
               'email' => $request->email,
               'password' => $request->password
          ])){

          $user = User::where('email', $request->email)->first();
          // $user_id=$user->id;

          if ($user->is_admin()) 
          {

          return redirect()->route('board');
          
          }
          
          return redirect()->route('home');
          
          }

          return back()->withInput()->withErrors(['email'=>'Username or password is invalid']);
        
     } 

} 
     // public function login(Request $request){
      

     // 	if (Auth::attempt([
     // 		'email' => $request->email,
     // 		'password' => $request->password
     // 	])){

     // 	$user = User::where('email', $request->email)->first();
        
     
          
     	
     //      return redirect()->route('home');
     	
     //      }

     //      return back()->withInput()->withErrors(['email'=>'Username or password is invalid']);
        
     // } 

 
 
