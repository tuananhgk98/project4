<?php

namespace App\Imports;

use App\hoadonban;
use Maatwebsite\Excel\Concerns\ToModel;

class HoadonImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new hoadonban([
            'id_kh'=>$row[1],
            'tenkh'=>$row[2],
            'ngaymua'=>$row[3],
            'tongtien'=>$row[4],
            'ghichu'=>$row[5] 
        ]);
    }
}
