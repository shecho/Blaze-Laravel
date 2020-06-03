<?php
/* 
Este conrtolador es responsavle de manejar los datos de los cluentes
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\CreateDate;
use DB;
use App\Barber;
use App\Service;

// Esta clase es el controlador de que maneja los cluentes
class UserController extends Controller
{
    //Esta funcion consulta los daros de los citas y usarios en la base de datos
    public function index()
    {
       
        $user = Auth::user();
        $barberos = Barber::all();
        $servicios = Service::all();
        $users = DB::table('users')->select('id','name', 'phone', 'email')->get();
        $citas = CreateDate::all();
        //dd($citas);
        return view('profile', compact('citas','users','user','servicios','barberos'));
    }

    public function deleteUser($idUser)
    {
        $servicios = Service::all();
        $barberos = Barber::all();
        $users = DB::table('users')->select('id','name', 'phone', 'email')->get();
        $response = User::destroy($idUser);
        $citas = CreateDate::all();
        //dd($citas);
        return view('home', compact('citas','users','servicios','barberos'));
        // return redirect()->route('home', [$citas],[$users]);
        //return $response;
    }    


    // Esta funcion actualiza el nombre del usario
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
    // Esta funcion actualiza el telefono de usario
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
