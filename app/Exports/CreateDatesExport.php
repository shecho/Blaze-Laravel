<?php
// Esta earchivo permite exportar el reporte de citas en excel
namespace App\Exports;

use App\CreateDate;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;


class CreateDatesExport implements FromCollection,WithHeadings,WithDrawings
{
    /**
    * @return \Illuminate\Support\Collection
    */
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
   
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
       
        $drawing->setPath(public_path('img/cobac.png'));
        $drawing->setHeight(20);
        // $drawing->setCoordinates('B18');

        return $drawing;
    }
    public function collection()
    {
           
        $createdDates = DB::table('create_dates')->select('id','userName','userPhone', 'day','time','barber')->get();
    

         return $createdDates;
    }
  
}
