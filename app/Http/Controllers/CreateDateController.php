<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\CreateDate;

class createDateController extends Controller
{
    public function CreateDate(Request $request)
    {
        //validar en bd si existe cita en la fecha y hora seleccionada
        $dateToSearch =  CreateDate::where('day',$request->day)->where('time', $request->time)->first();
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
            $newDate->save();
            $response = $newDate;
            //retornar respuesta            
        }
        return $response;
        //capturar datos: se realiza al definir como parametro de la función un objeto de tipo Request      
    }

    public function DeleteDate($iddate)
    {
        //dd($iddate);
        $response = CreateDate::destroy($iddate);
        //1: borrado; 0 no borrado.
        $citas = CreateDate::all();
        //dd($citas);
        return view('home', compact('citas'));
        //return $response;
    }

}
