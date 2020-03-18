<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuantriController extends Controller
{
     public function getQuantri(){
    	return view('admin.layout.quantri');
    	
    }
}
