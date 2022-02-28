<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Daily_history;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function signup(Request $req)
    {
        $req->validate([
            'name' => 'required | regex:/^[a-zA-Z ]*$/',  //The field under validation must be entirely alphabetic characters.
            'email' => 'required | email | unique:users',  // the field should be an email an should not match to existing email
            'password' => 'required',
            'gender' => 'required | alpha',
            'designation' => 'required | regex:/^[a-zA-Z ]*$/',
            'agree' => 'required',
            'phone' => 'required | alpha_num | digits:11'  //The field under validation must be entirely alpha-numeric characters.
        ]);

        $user = new User; //user object declared

        $user->name = $req->name;
        $user->email= $req->email;
        $user->phone = $req->phone;
        $user->gender = $req->gender;
        $user->designation = $req->designation;
        $user->type = "general";
        $user->active = 0;  //
        $user->image = "https://icon-library.com/images/default-profile-icon/default-profile-icon-1.jpg";
        $user->password = Hash::make($req->password); // the value from the request is saved to the user object
        // return $user;
        $user->save(); //user is saved to database
        $req->session()->put('user', $user);  //starts a session against the user after successful registration 

        return redirect('Home'); 
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
                $req->session()->put('user', $user);    //starts a session against the user after successful login

                return redirect('Home');  //redirects to view teh posts in the home
            }
            else{
                return redirect('Login')->with('PasswordMissmatch','password does not match'); //throw error if the password does not matches
            }
        }
        else{
            return redirect('Login')->with('NoUser','no user found');  //throw error if the email does not matches with any user
        }   
    }
    public function moodGraph()
    {
        $moods = Daily_history::select('mood')->where('user_id', session('user')->id)->get();
        $an = 0;
        $de = 0;
        
        $ne = 0;
        $re = 0;
        $vh = 0;
        foreach ($moods as $mood) {
            if($mood->mood == 1){
                $an++;
            }
            if($mood->mood == 2){
                $de++;
            }
            if($mood->mood == 3){
                $ne++;
            }

            if($mood->mood == 4){
                $re++;
            }
            if($mood->mood == 5){
                $vh++;
            }

        }
        $moodArr = [$an, $de,$ne,$re,$vh];
        return response()->json($moodArr);
    }

    public function EditProfile(Request $req)
    {
        $user = User::where('id', session('user')->id)->first();
        if ($req->hasfile('image')) {
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() .".". $extension;
            $file->move('image/',$fileName);
            $user->image = "image/" . $fileName;
            
        }
        
        if(!empty($req->input('phone'))){
            $req->validate([
                'phone' => 'alpha_num | digits:11'  //The field under validation must be entirely alpha-numeric characters.
            ]);
            $user->phone = $req->input('phone');
            
        }
        if(!empty($req->input('newPass'))){
            if(!empty($req->input('currentPass'))){
                if(Hash::check($req->input('currentPass'), $user->password) && Hash::check($req->input('currentPass'), session('user')->password)){
                    $user->password = Hash::make($req->input('newPass'));
                }
                else{
                    return redirect('./EditProfileForm')->with('passwordError',"Password dosn't match");
                }
            }
            else{
                return redirect('./EditProfileForm')->with('passwordError',"please provide current password if you want to change your password");
            }
        }
        $user->save(); 
        session()->pull('user');
        $req->session()->put('user', $user);
        return redirect('./Home');
    }

    public function Attend()
    {
        $attend = new Attendance;
        $attend->user_id = session('user')->id;
        $attend->attend = 1;
        // $attend->save();


        // $mins variable have the time in min ho much time left for today
        $timezone=new DateTimeZone( 'Asia/Dhaka' );
        $now=new DateTime( 'now', $timezone );
        $midnight=new DateTime( date('Y-m-d H:i:s', strtotime('11.59pm') ), $timezone );
        $diff = $now->diff( $midnight );
        $mins=( intval( $diff->format('%h') ) * 60 ) + intval( $diff->format('%i') );

        
        
        // $cookie = Cookie::make('attend', "1", 1 , "/");
        // $lala = Cookie::get('name');
        // $response = new Response("present");
        // $response->withCookie(cookie('name', "user", 1));

        return redirect('./Home')->withCookie(cookie('attend', 1, 1));
        
    }

    public function getcookie(Request $req)
    {
        $name = $req->cookie('attend');
        return view('home');
    }
}
