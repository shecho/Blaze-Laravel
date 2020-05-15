<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
$mpdf->WriteHTML('
<table border="1">
<tr>
    <td>header1</td>
    <td>header2</td>
    <td>header3</td>
</tr>
<tr>
    <td>1232</td>
    <td>cliente1</td>
    <td>3194953019</td>
</tr>
<tr>
    <td>890</td>
    <td>cliente1</td>
    <td>3191896139</td>
</tr>


</table>
');

// Output a PDF file directly to the browser
$mpdf->Output();
















































// ejemplo de luis



// require_once __DIR__ . '/vendor/autoload.php';

// $html = "
// <!DOCTYPE html>
   
// </head>
// <body>
//         <table>
//             <tr>
//                 <td>header1</td>
//                 <td>header2</td>
//                 <td>header3</td>
//             </tr>
//             <tr>
//                 <td>1232</td>
//                 <td>cliente1</td>
//                 <td>3194953019</td>
//             </tr>
//             <tr>
//                 <td>890</td>
//                 <td>cliente1</td>
//                 <td>3191896139</td>
//             </tr>
            

//         </table>

    
// </body>
// </html>

// "
// ;



// $mpdf = new \Mpdf\Mpdf();



// $mpdf->WriteHTML($html);

// $mpdf->Output();

// 
// <!DOCTYPE html>
// <html lang="en">
// <head>
   
// </head>
// <body>
//         <table>
//             <tr>
//                 <td>header1</td>
//                 <td>header2</td>
//                 <td>header3</td>
//             </tr>
//             <tr>
//                 <td>1232</td>
//                 <td>cliente1</td>
//                 <td>3194953019</td>
//             </tr>
//             <tr>
//                 <td>890</td>
//                 <td>cliente1</td>
//                 <td>3191896139</td>
//             </tr>
            

//         </table>
// </body>
// </html>