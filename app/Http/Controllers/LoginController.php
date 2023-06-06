<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    public function index(Session $session)
    {

        return view('login.index');
    }


    public function store(Request $request)
    {

        alert('Welcome!');

        return redirect()->route('user');
    }
}
