<?php
/* 
    Este controlador es el responsable manejar las citas

*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\CreateDate;
use DB;
use App\Service;
use App\Barber;

// Esta es la clase es el contralador de citas 
class createDateController extends Controller
{
    // Esta funcoion crea la citas 
    public function CreateDate(Request $request)
    {
        //validar en bd si existe cita en la fecha y hora seleccionada
        $dateToSearch =  CreateDate::where('day',$request->day)->where('time', $request->time)->where('barber',$request->barber) ->first();
        if($dateToSearch != null || $dateToSearch != "")
        {
            //para procesar la respuesta en el cliente
            //se define que al encontrar un registro de cita
            //se devuelve el entero 1 con el fin de que se notifique 
            //que no se pudo guardar la cita
            $response = 1;
        }
        else
        {
            //guardar en base de datos
            $newDate = new CreateDate();    
            $newDate->userName = $request->userName;
            $newDate->userPhone = $request->userPhone;
            $newDate->day = $request->day;
            $newDate->time = $request->time;
            $newDate->barber = $request->barber;
            $newDate->service = $request->service;
            $newDate->save();
            $response = $newDate;
            //retornar respuesta            
        }
        return $response;
        //capturar datos: se realiza al definir como parametro de la función un objeto de tipo Request      
    }
    // Esta funcion borra las citas
    public function DeleteDate($iddate)
    {
        $barberos = Barber::all();
        $servicios = Service::all();
        $users = DB::table('users')->select('id','name', 'phone', 'email')->get();
        //dd($iddate);
        $response = CreateDate::destroy($iddate);
        //1: borrado; 0 no borrado.
        $citas = CreateDate::all();
        //dd($citas);

        return redirect()->route('home');
        // return view('home', compact('citas','users','servicios','barberos'));
        // return redirect()->route('home', [$citas],[$users]);
        //return $response;
    }

}
