<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }

    /*
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username == 'admin' && $password == 'admin') {
            return redirect('admin');
        } else {
            return redirect('login');
        }
    }*/
}
