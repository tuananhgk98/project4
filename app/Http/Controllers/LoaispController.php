<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaisp;

class LoaispController extends Controller
{
    public function getDanhsach(){
    	$qllsp= loaisp::all();
    	return view('admin.loaisp.danhsach',compact('qllsp'));

    }
    public function showhide($id){
        $loaisanpham=loaisp::find($id);
        if($loaisanpham->trangthai==0){
            $loaisanpham->trangthai=1;
        }
        else{
            $loaisanpham->trangthai=0;
        }
        $loaisanpham->save();
        // $qlsp= sanpham::all();
        return redirect()->route('admin.loaisp.getdanhsach');
    }
    public function getThem(){
    	return view('admin.loaisp.them');
    	
    }
    public function postThem(Request $request){
    	$loai=new loaisp;
    	$loai->tenlsp=$request->Ten;
    	$loai->save();
    	return redirect('admin/loaisp/danhsach')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
    	$loaisp=loaisp::find($id);
    	return view('admin.loaisp.sua',compact('loaisp'));
    	
    }
    public function postSua(Request $request,$id){
    	$loaisp=loaisp::find($id);
    	$loaisp->tenlsp=$request->Ten;
    	$loaisp->save();
    	return redirect('admin/loaisp/danhsach')->with('thongbao','Sủa thành công');
    }
    // public function getXoa($id){
    // 	$loaisp=loaisp::find($id);
    // 	$loaisp->delete();
    // 	return redirect('admin/loaisp/danhsach')->with('thongbao','Xóa thành công');


    // }
}
