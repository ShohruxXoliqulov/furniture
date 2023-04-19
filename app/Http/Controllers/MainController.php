<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function about(){
        return view('pages.about');
    }

    public function design(){
        return view('pages.design');
    }

    public function shop(){
        return view('pages.shop');
    }

    public function contact(){
        return view('pages.contact');
    }
}
