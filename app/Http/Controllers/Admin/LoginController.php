<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use User;

class LoginController extends Controller
{
    public function getLogin(){
    	return view('backend.login');
    }
    public function postLogin(Request $req){
    	$data=array('email'=>$req->email,'password'=>$req->password);
    	if(Auth::attempt($data)) {

    	return redirect('admin/quantri');
    	}
    	else
    	{
    		return back()->with('thongbao','DNKTC');
    	}
    }
}
