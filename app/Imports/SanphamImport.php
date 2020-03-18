<?php

namespace App\Imports;

use App\sanpham;
use Maatwebsite\Excel\Concerns\ToModel;

class SanphamImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new sanpham([
            'tensp'=>$row[1],
            'id_loai'=>$row[2],
            'tenhang'=>$row[3],
            'gia'=>$row[4],
            'giakm'=>$row[5],
            'hinhanh'=>$row[6],
            'soluong'=>$row[7],
            'docao'=>$row[8]
        ]);
    }
}
