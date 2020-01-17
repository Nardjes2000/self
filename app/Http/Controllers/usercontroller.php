<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{


  public function getdashboard()
  {

    return view('dashboard');
  }
    public function signup( Request $request )
    {
      //validation des elements en entre du formulaire
      $validatedData = $request->validate([
             'email' => 'bail|required|unique:users|email',
             'name' => 'required|max:100',
             'password'=> 'required|min:5',
             'type'=> 'required|min:5',
         ]);


  $email=$request['email'];
  $name=$request['name'];
  $password=bcrypt($request['password']); // encrypt password
  $user=new user();
  $user->email=$email;
  $user->name=$name;
  $user->password=$password;
 $user->save();       // save in database
Auth::login($user);  //login user

   return redirect()->route('dashboard');// la page aprés authentication



    }
      public function signin(Request $request )
      {
        $validatedData = $request->validate([
               'email' => 'required',
               'password'=> 'required',
               'type'=> 'required',
           ]);

       //verifier s'il est authentifié
       if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
                    return redirect()->route('dashboard');
                }

              return redirect()->back(); //la page d'ou on vient


      }
      public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
