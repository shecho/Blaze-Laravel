<?php

namespace App\Exports;

use App\CreateDate;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class CreateDatesExport implements FromCollection,WithHeadings
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
    public function collection()
    {
           
        $createdDates = DB::table('create_dates')->select('id','userName','userPhone', 'day','time','barber')->get();
         return $createdDates;
    }
}
