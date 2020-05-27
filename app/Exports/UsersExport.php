<?php
//Este archivo permite exportar el reporte de usuarios en Excel 
namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;


class UsersExport implements FromCollection,WithHeadings
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
            'Email',
        ];
    }


    public function collection()
    {
        
        $users = DB::table('users')->select('id','name','phone', 'email')->get();
         return $users;
    }
}
