<?php

namespace App\Http\Controllers;

use App\Barber;
use Illuminate\Http\Request;

class BarberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    //Esta funcion  crea un nuevo empleado en y guarda en la Base de datos
    public function CreateBarber(Request $request)
    {
        //
        $newBarber = new Barber();    
        $newBarber->barberName = $request->barberName;
        $newBarber->barberDocument = $request->barberDocument;
        $newBarber->barberPhone = $request->barberPhone;
        $newBarber->barberEmail = $request->barberEmail;
        $newBarber->save();
        $response = $newBarber;

        return $response;
    }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function show(Barber $barber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function edit(Barber $barber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barber $barber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barber $barber)
    {
        //
    }
}
