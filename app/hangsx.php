<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hangsx extends Model
{ protected $table="hangsx";
    public function product(){
    	return $this->hasMany('app\sanpham','tenhang','tenhang');
    }
}
