<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadonnhap extends Model
{
    protected $table="hoadonnhap";
     public function chitiethoadonnhap(){
    	return $this->hasMany('app\chitiethoadonnhap','id_hdn','id');
    }
     public function khachhang(){
    	return $this->belongsTo('app\hangsx','id_hang','id');
    }
}
