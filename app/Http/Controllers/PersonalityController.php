<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;
use App\Models\User;
use App\Models\Personalitie;



class PersonalityController extends Controller
{
    //

    function  PersonalityFnc(Request $req)
    {
        $e=0;
        $i=0;
        $s=0;
        $n=0;
        $t=0;
        $f=0;
        $j=0;
        $p=0;

        $x=0;
        $pers=array();
 
        $user = User::where('id', session('user')->id)->first();

        for($x=1; $x<=50; $x++)
        {              
            if($x==25)
            {
                $u=$req->input(25);

                for($y=0;$y<=1;$y++)
                {
                    if($u[$y]=='j1')
                    {
                        $j+=1; 
                    }
                    if($u[$y]=='p1')
                    {
                        $p+=1;
                    }
                } 
            }
            else
            {
                switch  ($req->input($x)[0]) {
                    case 'e':
                        $e+= $req->input($x)[1];
                    break;
                    case 'i':
                        $i+= $req->input($x)[1];
                    break;
                    case 's':
                        $s+= $req->input($x)[1];
                    break;
                    case 'n':
                        $n+= $req->input($x)[1];
                    break;
                    case 't':
                        $t+= $req->input($x)[1];
                    break;
                    case 'f':
                        $f+= $req->input($x)[1];
                    break;
                    case 'j':
                        $j+= $req->input($x)[1];
                    break;
                    case 'p':
                        $p+= $req->input($x)[1];
                    break;

                    default:
                    break;
                }

            }
            
        }

        if($e <= $i){
            array_push($pers,'I');
        }
        else{
            array_push($pers,'E');
        }

        if($s <= $n){
            array_push($pers,'N');
        }
        else{
            array_push($pers,'S');
        }

        if($t <= $f && $user->gender=="Male"){
            array_push($pers,'T');
        }
        else if($t <= $f && $user->gender=="Female"){
            array_push($pers,'F');
        }
        else{
            array_push($pers,'T');
        }

        if($j <= $p){
            array_push($pers,'P');
        }
        else{
            array_push($pers,'J');
        }
        
            

        //$personality = implode(",", $pers);
        $user->personality = $pers;
        $user->save();
        session()->pull('user');
        $req->session()->put('user', $user);
        return redirect('personalityResult');

        // echo "e = " . $e;
        // echo "<br>";
        // echo "i = " . $i;
        // echo "<br>";
        // echo "s = " . $s;
        // echo "<br>";
        // echo "n = " . $n;
        // echo "<br>";
        // echo "t = " . $t;
        // echo "<br>";
        // echo "f = " . $f;
        // echo "<br>";
        // echo "j = " . $j;
        // echo "<br>";
        // echo "p = " . $p;
    }

    public function getPersonalityResult(Request $req)
    {     
        $personalitie = Personalitie::select('personality_type', 'youtube_link')->where('personality_type', session('user')->personality)->first();

        return $personalitie;
    }
}
