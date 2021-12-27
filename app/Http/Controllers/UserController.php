<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function signup(Request $req)
    {
        $req->validate([
            'name' => 'required | alpha',  //The field under validation must be entirely alphabetic characters.
            'email' => 'required | email | unique:users',  // the field should be an email an should not match to existing email
            'password' => 'required',
            'gender' => 'required | alpha',
            'designation' => 'required | alpha',
            'agree' => 'required',
            'phone' => 'required | alpha_num'  //The field under validation must be entirely alpha-numeric characters.
        ]);

        $user = new User; //user object declared

        $user->name = $req->name;
        $user->email= $req->email;
        $user->phone = $req->phone;
        $user->gender = $req->gender;
        $user->designation = $req->designation;
        $user->type = "general";
        $user->active = 0;  //
        $user->password = Hash::make($req->password); // the value from the request is saved to the user object
        // return $user;
        $user->save(); //user is saved to database
        $req->session()->put('user', $user);  //starts a session against the user after successful registration 

        return redirect(''); 
    }

    public function login(Request $req)
    {   
        // $req->validate([
        //     'email' => 'required | email | unique:users',  // the field should be an email an should not match to existing email
        //     'password' => 'required',
        // ]);
        $user = DB::table('users')->where('email',$req->email)->first(); //gets the user form the database where the email matches
        if($user != null){
            if (Hash::check($req->password, $user->password)) {  //checks the request->password matches with the user password from database
                $user->password;
                $req->session()->put('user', $user);    //starts a session against the user after successful login

                return redirect('');  //redirects to view teh posts in the home
            }
            else{
                return redirect('Login')->with('PasswordMissmatch','password does not match'); //throw error if the password does not matches
            }
        }
        else{
            return redirect('Login')->with('NoUser','no user found');  //throw error if the email does not matches with any user
        }
    }
}
