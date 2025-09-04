<?php

namespace App\Http\Controllers;

use App\Models\Gadget;
use Illuminate\Http\Request;

class GadgetController extends Controller
{
    public function view($id) {
        // dd($id);
        $gadget = Gadget::find($id);
        return view('gadget.view', compact('gadget'));
    }
}
