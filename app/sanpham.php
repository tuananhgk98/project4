<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    
   protected $table="sanpham";
    public function product(){
    	return $this->belongsTo('app\loaisp','id_loai','id');
    }
    public function chitiethoadon(){
    	return $this->hasMany('app\chitiethoadonban','id_sp','id');
    }
}
