<?php

namespace App\Exports;

use App\CreateDate;
use Maatwebsite\Excel\Concerns\FromCollection;

class CreateDatesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CreateDate::all();
    }
}
