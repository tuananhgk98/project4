<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    protected $table="loaisp";
    public function product(){
    	return $this->hasMany('app\sanpham','id_loai','id');
    }
}
