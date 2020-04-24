<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateDate;

use App\Exports\CreateDatesExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $citas = CreateDate::all();
        //dd($citas);
        return view('home', compact('citas'));
    }
    public function filterByDay(Request $request)
    {
        $citas= CreateDate::where('day', $request->dateDayFilter)->get();        
        //dd($citas);
        return view('home', compact('citas'));
    }
    
    public function filterByRange(Request $request)
    {
        $citas= CreateDate::where('day',">" ,$request->dateDayFilterIni)->where('day',"<",$request->dateDayFilterEnd)->get();
        //dd($citas);
        return view('home', compact('citas'));
    }

    public function export()
    {
      //$dates = CreateDate::select('id', 'userName', 'userPhone', 'day', 'time', 'barber')->get();
      // return Excel::create('reportDates', function($excel) use ($dates){
      //   $excel->sheet('mysheet', function($sheet) use ($dates){
      //     $sheet->fromArray($dates);
      //   });
      // })->download('xls');
      return Excel::download(new CreateDatesExport, 'dates.xlsx');

    }

    

    ///fase1
    ///definir el usuario admin como
    ///crear una constante con el id del usuario admin
    /// se define que siempre el usuario con id = 1 es el administrador del sistema


    ///en la vista home se debe validar el tipo de usuario que inicio sesión

    
    /// si el usuario es administrador se presentan los registros de todas las citas
    /// adicionalmente las opciones de realizar reportes.
    /// Si el usuario no es admin se muestra el boton de perfil y el de crear cita




    ///fase 2 de este requerimiento comprende reutilizar el modal de citas y crear un enlace
    /// a la vista de perfil y ajustar esta vista
    
}
