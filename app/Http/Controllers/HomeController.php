<?php
/*Este controaldor es el responsable de  manejar el panel de control y de administracion de los usurtios y  del administrador  */

namespace App\Http\Controllers;

use App\CreateDate;
use App\Exports\CreateDatesExport;
use App\Exports\UsersExport;
use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Mpdf\Mpdf;

// use App\Exports\reporte99;

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
        $users = DB::table('users')->select('id','name', 'phone', 'email')->get();
        $citas = CreateDate::all();
        //dd($citas);
        return view('home', compact('citas','users'));
    }
    public function filterByDay(Request $request)
    {
        $citas = CreateDate::where('day', $request->dateDayFilter)->get();
        //dd($citas);
        return view('home', compact('citas'));
    }

    public function filterByRange(Request $request)
    {
        $citas = CreateDate::where('day', ">=", $request->dateDayFilterIni)->where('day', "<=", $request->dateDayFilterEnd)->get();
        //dd($citas);
        return view('home', compact('citas'));
    }

// Hace las exportaciones de los archivos d eexcell
    public function exportDates()
    {

        return Excel::download(new CreateDatesExport, 'citas.xlsx');

    }
    public function exportUsers()
    {

        return Excel::download(new UsersExport, 'usuarios.xlsx');

    }
    public function reporte2()
    {
        $reporte2 = "";
        return view('reporte2', compact('reporte2'));

    }
    public function reporteClientes()
    {
        $users = DB::table('users')->select('name', 'phone', 'email')->get();
        $usuario = 'Katty Alejandra Alvarez';
        date_default_timezone_set('america/bogota');
        $fecha_hora = date("Y") . '/' . date("m") . '/' . date("d") . ' ' . date("H") . ':' . date("i") . ':' . date("s");
        $registro = "";
        foreach ($users as $user) {
            $registro = $registro . "
                    <tr>
                        <td>" . $user->name . "</td>
                        <td>" . $user->phone . "</td>
                        <td>" . $user->email . "</td>
                    </tr>
            ";
        }
        $html = "
        <!DOCTYPE html>
	    <html>
		<head>
			<style>
			    @page {
			        size: auto;
			        odd-header-name: encabezado;

			        odd-footer-name: pie;
			    }
			</style>
        </head>
        <body>
        <img src='img/cobac.png' width='50' height='50' style=' ' >
        <br>
            <div>
                <section>

                    <article>
                        <p> dolor sit amet, consectetur adipisicing elit. Eligendi doloremque cum libero voluptatem incidunt dicta aperiam odio quis nemo totam possimus ad magni voluptatum, perferendis minus veniam sed porro eaque.</p>
                    </article>
                </section>

                <table table border='1'  >
                    <thead >
                        <tr >

                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                        </tr>
                    </thead>

                    <tbody id='table-body-id' >
                    <br>
                    <br>
                         $registro
                    </tbody>

                </table>
            </div>

            <pageheader name='encabezado'
                content-center='Reporte de Citas PDF '
                header-style='font-weight: bold; color: ; font-size: 14pt;' line='off;'
             />

            <pageheader name='encabezado2'
             content-center='Reporte de Citas '
            header-style='font-weight: bold; color: ; font-size: 14pt;' line='off;' />



	        <pagefooter name='pie' content-left='Elaborado por: $usuario'
	        content-right='$fecha_hora' footer-style='font-family: serif; font-size: 8pt;
            font-weight: bold; font-style: italic; color: #000000;' />
        </body>";

        //Crea una instancia de la clase y le pasa el directorio default/app/temp/
        $mpdf = new \Mpdf\Mpdf();
        // echo $html;
        $mpdf->SetHTMLHeader("
            <table width='100%'>
                <tr>
                    <td width='33%'>
                    <img src='img/cobac.png' width='50' height='50' ></td>
                    <td width='33%' style='text-align:center ;'>Prueba</td>
                    <td width='33%' align='right'>{PAGENO}/{nbpg}</td>
                </tr>
            </table>");
        // $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function reporteCitas()
    {
        $citas = DB::table('create_dates')->select('id', 'userName', 'userPhone', 'day', 'time', 'barber','created_at')->get();
        $citas2 = CreateDate::all();

        $usuario = 'Sergio Valencia Aguirre';
        date_default_timezone_set('america/bogota');
        $fecha_hora = date("Y") . '/' . date("m") . '/' . date("d") . ' ' . date("H") . ':' . date("i") . ':' . date("s");

        $registro = "";
        foreach ($citas as $cita) {
            $registro = $registro . "
                    <tr>
                        <td>" . $cita->id."</td>
                        <td>" . $cita->userName."</td>
                        <td>" . $cita->userPhone."</td>
                        <td>" . $cita->day."</td>
                        <td>" . $cita->time."</td>
                        <td>" . $cita->barber."</td>
                        <td>" . $cita->created_at."</td>
                    </tr>
            ";
        }

        $html = "
        <!DOCTYPE html>
	    <html>
		<head>
			<style>
			    @page {
			        size: auto;
			        odd-header-name: encabezado;

			        odd-footer-name: pie;
			    }
			</style>
        </head>
        <body>
        <img src='img/cobac.png' width='50' height='50' style=' ' >
        <br>
            <div>
                <section>

                    <article>
                        <p> dolor sit amet, consectetur adipisicing elit. Eligendi doloremque cum libero voluptatem incidunt dicta aperiam odio quis nemo totam possimus ad magni voluptatum, perferendis minus veniam sed porro eaque.</p>
                    </article>
                </section>

                <table table border='1'  >
                    <thead >
                        <tr >

                            <th>id</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Día</th>
                            <th>Hora</th>
                            <th>Barbero</th>
                            <th>Fecha Creación</th>
                        </tr>

                        <tbody id='table-body-id' >
                        <br>
                        <br>
                             $registro
                        </tbody>

                    </thead>

                </table>
            </div>

            <pageheader name='encabezado'
                content-center='Reporte de Citas PDF '
                header-style='font-weight: bold; color: ; font-size: 14pt;' line='off;'
             />

            <pageheader name='encabezado2'
             content-center='Reporte de Citas '
            header-style='font-weight: bold; color: ; font-size: 14pt;' line='off;' />



	        <pagefooter name='pie' content-left='Elaborado por: $usuario'
	        content-right='$fecha_hora' footer-style='font-family: serif; font-size: 8pt;
            font-weight: bold; font-style: italic; color: #000000;' />
        </body>";

        //Crea una instancia de la clase y le pasa el directorio default/app/temp/

        $mpdf = new \Mpdf\Mpdf();
        // echo $html;
        $mpdf->SetHTMLHeader("
            <table width='100%'>
                <tr>
                    <td width='33%'>
                    <img src='img/cobac.png' width='50' height='50' ></td>
                    <td width='33%' style='text-align:center ;'>Prueba</td>
                    <td width='33%' align='right'>{PAGENO}/{nbpg}</td>
                </tr>
            </table>");
        // $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

}
