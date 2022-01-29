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

        echo $req->input('50');
        

    }
}
