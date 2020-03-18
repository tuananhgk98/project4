<?php

namespace App\Exports;

use App\hoadonban;
use Maatwebsite\Excel\Concerns\FromCollection;

class HoadonExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return hoadonban::all();
    }
}
