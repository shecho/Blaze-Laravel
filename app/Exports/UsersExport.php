<?php
//Este archivo permite exportar el reporte de usuarios en Excel 
namespace App\Exports;
// Importes
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
// --------------------------------------------------------------

// Esta clase crea el perote de Usuarios
class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // Esta funcion crea los Headerd
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Telefono',
            'Email',
        ];
    }

    // Esta fucnion consulta la base de datos 
    public function collection()
    {
        
        $users = DB::table('users')->select('id','name','phone', 'email')->get();
         return $users;
    }
}
