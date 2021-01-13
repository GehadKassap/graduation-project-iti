<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function testFun()
    {
        $name = "admona el m2dmna";
        $age = "232";
        return view('user.temp' , compact( 'name' , 'age'));
    }
}
