
 <?php
require_once __DIR__ . '/vendor/autoload';

// $mpdf = new \Mpdf\Mpdf();

// $mpdf->WriteHTML('hellow word');

// $mpdf->Output();

use Mpdf\Mpdf;
class ExportsReporte00 extends Controller{


    public function reporte00()
    {
        $citas = CreateDate::all();
        $usuario = 'Sergio Valencia Aguirre';    
        date_default_timezone_set('america/bogota');
        $fecha_hora = date("Y").'/'.date("m").'/'.date("d").' '.date("H").':'.date("i").':'.date("s");
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
        $mpdf->WriteHTML( $html);
        $mpdf->Output();
    }

}
?>