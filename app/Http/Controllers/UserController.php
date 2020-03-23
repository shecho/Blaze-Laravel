<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        //dd($user);
        //die("test user profile");
        return view('profile', compact('user'));
    }
}
