<?php
// Esta earchivo permite exportar el reporte de citas en excel usando la libreia de Maatwebsite

namespace App\Exports;
// Importes
use App\CreateDate;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
// ---------------------------------------


// Esta clase crea un reporte de citas
class CreateDatesExport implements FromCollection,WithHeadings,WithDrawings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // Funcion encargada de agragar los Haders
    public function headings(): array
    {

        return [
            'Id',
            'Nombre',
            'Telefono',
            'Dia',
            'Hora',
            'Barbero',

        ];
         
    }
    // Funcion encargada de agrrgar imanegeenes
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setPath(public_path('img/cobac.png'));
        $drawing->setHeight(20);
        // $drawing->setCoordinates('B18');

        return $drawing;
    }
    // Funcion encargada de consultar los datos en la base de datos
    public function collection()
    {
           
        $createdDates = DB::table('create_dates')->select('id','userName','userPhone', 'day','time','barber')->get();
    

         return $createdDates;
    }
  
}
