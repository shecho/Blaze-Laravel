
 <?php
require_once __DIR__ . '/vendor/autoload';

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('hellow word');

$mpdf->Output();


?>