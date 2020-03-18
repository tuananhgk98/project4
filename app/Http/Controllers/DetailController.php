<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
     public function getDetail($id){
        $data['item']=sampham::find($id);
        return view('page.chitietsp',compact('data'));

    }
}
