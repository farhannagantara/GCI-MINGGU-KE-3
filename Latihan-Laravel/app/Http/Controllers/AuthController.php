<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome2(Request $request)
    {
        $First_name = $request['fn'];
        $Last_name = $request['ln'];

        return view('welcome2', compact('First_name', 'Last_name'));
    }
}
