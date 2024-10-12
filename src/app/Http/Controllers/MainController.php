<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function test()
    {
        return view('test');
    }
    public function index()
    {
        return view('index');
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
}
