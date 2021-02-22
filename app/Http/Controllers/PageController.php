<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('mainPages.home');
    }
    public function about(){
        return view('mainPages.about');
    }
    public function contacts(){
        return view('mainPages.contacts');
    }
}
