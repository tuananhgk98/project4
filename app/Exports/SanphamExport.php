<?php

namespace App\Exports;

use App\sanpham;
use Maatwebsite\Excel\Concerns\FromCollection;

class SanphamExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return sanpham::all();
    }
}
