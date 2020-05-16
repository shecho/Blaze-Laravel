<?php
/*Este controaldor es el responsable de  manejar el panel de control y de administracion de los usurtios y  del administrador  */




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateDate;

use App\Exports\CreateDatesExport;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Mpdf\Mpdf;
use App\Exports\reporte99;
$html = "hola
 ";
class HomeController extends Controller
{
    /**
     * Crea una nueva instrancia del controlador
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Muestra el panel de administracion 
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
    
// Hace las exportaciones de los archivos d eexcell
    public function exportDates()
    {
      
      return Excel::download(new CreateDatesExport, 'dates.xlsx');

    }
    public function exportUsers()
    {
     
      return Excel::download(new UsersExport, 'users.xlsx');

    }
    public function reporte1()
    {
        $citas = CreateDate::all();
        $reporte1 = "";
        return view('reporte1', compact('citas'));

    }
    public function reporte2()
    {
        $reporte2 = "";
        return view('reporte2', compact('reporte2'));

    }

    public function reporte99()
    {
        $html = '
        <div  class=" table table-dark text-center">
            <table table border="1" class="bg-dark" >
                <thead >
                    <tr >
                        <th>Administrar</th>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Día</th>
                        <th>Hora</th>
                        <th>Barbero</th>
                        

                    </tr>
                </thead>
        
            </table>
         </div>';
         //Importante: Sin vista y sin tamplate
        // View::select(null, null);
        //Crea una instancia de la clase y le pasa el directorio default/app/temp/
        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }


// Require composer autoload

/**
 * Controller por defecto si no se usa el routes
 *
 */

   


    
    ///definir el usuario admin como
    ///crear una constante con el id del usuario admin
    /// se define que siempre el usuario con id = 1 es el administrador del sistema
   
    /// si el usuario es administrador se presentan los registros de todas las citas
    /// adicionalmente las opciones de realizar reportes.
    /// Si el usuario no es admin se muestra el boton de perfil y el de crear cita

    
    
}
