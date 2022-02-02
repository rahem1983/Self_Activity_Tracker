<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

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
        // foreach ($req as $reqs) {
        //     echo $req;
        // }

        for($x=25; $x<=25; $x++)
        {
            // switch  ($req->input($x)[0]) {
            //     case 'e':
            //         $e+= $req->input($x)[1];
            //       break;
            //     case 'i':
            //         $i+= $req->input($x)[1];
            //       break;
            //     case 's':
            //         $s+= $req->input($x)[1];
            //       break;
            //     case 'n':
            //         $n+= $req->input($x)[1];
            //       break;
            //     case 't':
            //         $t+= $req->input($x)[1];
            //       break;
            //     case 'f':
            //         $f+= $req->input($x)[1];
            //     break;
            //     case 'j':
            //         $j+= $req->input($x)[1];
            //       break;
            //     case 'p':
            //         $p+= $req->input($x)[1];
            //       break;

            //     default:
            //       break;
            //   }
            
               echo $req->input($x);
        }

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
}
