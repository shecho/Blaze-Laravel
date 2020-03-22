<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use Date;

class createDateController extends Controller
{
    public function createDate(Request $request)
    {
        //capturar datos: se realiza al definir como parametro de la función un objeto de tipo Request
        //guardar en base de datos
        $newDate = new createDate();
        $newDate->userName = $request->userName;
        $newDate->userPhone = $request->userPhone;
        $newDate->day = $request->day;
        $newDate->time = $request->time;
        $newDate->save();
        //retornar respuesta
        return $newDate;
    }
}
