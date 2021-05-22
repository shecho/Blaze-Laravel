<?php
/*Este controlador es el responsable de  manejar el panel de control y de administracion de los usuarios y  del administrador  */

namespace App\Http\Controllers;

use App\CreateDate;
use App\Service;
use App\Barber;
use DB;
use Illuminate\Http\Request;


// Esta clase es el controlador 
class WellcomeController extends Controller
{
    /**
     * Crea una nueva instrancia del controlador
     *
     * @return void
     */
    // Estw contructor llama el midleware Auth
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Muestra el panel de administracion
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // Esta es la funcioon principal que consulta la informacion del usario y de citas en la base de datos
    public function index()

    {
        $barberos = Barber::all();
        $servicios = Service::all();
        $users = DB::table('users')->select('id','name', 'phone', 'email')->get();
        $citas = CreateDate::all();
        //dd($citas);
        return view('welcome', compact('citas','users','servicios','barberos'));
    }
    // Esta funcion filtra las citas por dias
   

}
