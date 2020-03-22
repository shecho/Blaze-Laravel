<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\CreateDate;

class createDateController extends Controller
{
    public function CreateDate(Request $request)
    {
        //die("test09");
        //capturar datos: se realiza al definir como parametro de la función un objeto de tipo Request
        //guardar en base de datos
        $newDate = new CreateDate();    
        $newDate->userName = $request->userName;
        $newDate->userPhone = $request->userPhone;
        $newDate->day = $request->day;
        $newDate->time = $request->time;
        $newDate->save();
        //retornar respuesta
        return $newDate;
    }
}
