<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GadgetController extends Controller
{
    public function view() {
        return view('gadget.view');
    }
}
