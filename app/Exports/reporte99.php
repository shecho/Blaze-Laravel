<!-- Esta arhcivo contiene un ejemplo de como exportar un arhicvo en  pdf  retornando una vista con mensajes y sin html -->
<?php
// Require composer autoload
require_once APP_PATH . '../../vendor/autoload.php';
use Mpdf\Mpdf;
/**
 * Controller por defecto si no se usa el routes
 *
 */
$mpdf = new Mpdf();
        $mpdf->WriteHTML('este es un ejemplo de blade');
        $mpdf->Output();