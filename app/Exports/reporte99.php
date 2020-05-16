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