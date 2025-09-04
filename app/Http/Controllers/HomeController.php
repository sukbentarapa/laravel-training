<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutUs() {
        return view('home.about-us');
    }

    public function contact() {
        return view('home.contact');
    }

    public function history() {
        return view('home.history');
    }
}

