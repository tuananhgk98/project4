<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadonban extends Model
{
    protected $table="hoadonban";
     public function chitiethoadonban(){
    	return $this->hasMany('app\chitiethoadonban','id_hoadon','id');
    }
     public function khachhang(){
    	return $this->belongsTo('app\khachhang','id_kh','id');
    }
}
