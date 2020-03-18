<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khachhang;

class KhachhangController extends Controller
{
	
     public function getDanhsach(){
    	$qlkh= khachhang::all();
    	return view('admin.khachhang.danhsach',compact('qlkh'));

    }
}
