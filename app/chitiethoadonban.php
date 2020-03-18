<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitiethoadonban extends Model
{
     protected $table="chitiethoadonban";
    public function sanpham(){
    	return $this->belongsTo('app\sanpham','id_sp','id');
    }
     public function hoadonban(){
    	return $this->belongsTo('app\hoadonban','id_hoadon','id');
    }
}
