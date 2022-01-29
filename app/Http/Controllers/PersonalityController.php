<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        for($x=1;$x<=50;$x++)
        {
            echo $req($x);

        }

        

    }
}
