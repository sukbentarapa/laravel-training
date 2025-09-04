<?php

namespace App\Http\Controllers;

use App\Models\Gadget;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // DI - Dependency Injection
    public function view(User $user) {
        $active = $user->gadgets()->where('status',1)->count();
        $inactive = $user->gadgets()->where('status',0)->count();
        return view('user.view', compact('user', 'active', 'inactive' ));
    }
}
