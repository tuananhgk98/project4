<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table="khachhang";
     public function hoadonban(){
    	return $this->belongsTo('app\hoadonban','id_kh','id');
    }
}
