<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

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

    public function updateName($iduser, $nameUser)
    {
        //dd($iduser, $nameUser);
        //buscar usuarios
        $user = User::findOrFail($iduser);
        //asignar los registros que se van a editar mediante el modelo
        $user->name = $nameUser;
        //$user->phone = $request->phone;
        $response = $user->save();
        //retornar la respuesta
        if($response == true)
        {
            $response = 1;
        }
        else
        {
            $response = 0;
        }
        $user = Auth::user();
        //dd($user);
        //die("test user profile");
        return view('profile', compact('user'));
    }

    public function updatePhone($iduser, $phone)
    {
        //dd($iduser, $nameUser);
        //buscar usuarios
        $user = User::findOrFail($iduser);
        //asignar los registros que se van a editar mediante el modelo
        //$user->name = $nameUser;
        $user->phone = $phone;
        $response = $user->save();
        //retornar la respuesta
        if($response == true)
        {
            $response = 1;
        }
        else
        {
            $response = 0;
        }
        $user = Auth::user();
        //dd($user);
        //die("test user profile");
        return view('profile', compact('user'));
    }

}
