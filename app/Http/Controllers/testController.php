<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function test(Request $req)
    {
        return view('/testCase')->with('name', $req->name);
    }
}
