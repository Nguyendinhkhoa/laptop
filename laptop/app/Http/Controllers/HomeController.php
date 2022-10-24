<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index(){
        return view('page.home');
    }
    public function login(){
        $urlBack = url()->previous();
        return view('login')->with('urlBack',$urlBack);
    }
}
