<?php
// Este archivi es el controlador de las clase Barbero
namespace App\Http\Controllers;

use App\Barber;
use App\Service;
use DB;
use App\CreateDate;
use Illuminate\Http\Request;

// Crea una clase controlador de Barbero
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
    //Esta funcion  crea un nuevo empleador (Barbero) en y guarda en la Base de datos
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
    
    // Esta funcion elimina un baqbhero
    public function deleteBarber($idBarber)
    {
        $barberos = Barber::all();
        $servicios = Service::all();
        $users = DB::table('users')->select('id','name', 'phone', 'email')->get();
        $response = Barber::destroy($idBarber);
        //1: borrado; 0 no borrado.
        $citas = CreateDate::all();
        //dd($citas);

        return redirect()->route('home');
        // return view('home', compact('citas','users','servicios','barberos'));
        // return redirect()->route('home', [$citas],[$users]);
        //return $response;
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
