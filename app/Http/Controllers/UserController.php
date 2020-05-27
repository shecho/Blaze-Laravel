<?php
/* 
Este conrtolador es responsavle de manejar el modelo de usuario
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\CreateDate;

class UserController extends Controller
{
    //
    public function index()
    {
        $citas = CreateDate::all();
        $user = Auth::user();
        //dd($user);
        //die("test user profile");
        return view('profile', compact('user','citas'));
    }

    public function updateName($iduser, $nameUser)
    {
        $citas = CreateDate::all();
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
        return view('profile', compact('user','citas'));
    }

    public function updatePhone($iduser, $phone)
    {
        $citas = CreateDate::all();
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
        return view('profile', compact('user','citas'));
    }


}
