<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('client.login', [
            'loginForm' => true
        ]);
    }
    public function signup()
    {
        return view('client.login', [
            'loginForm' => false
        ]);
    }
}
