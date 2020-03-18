<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use App\hoadonban;
use App\chitiethoadonban;
use App\sanpham;
use App\Exports\HoadonExport;
use App\Imports\HoadonImport;
use Maatwebsite\Excel\Facades\Excel;

class HoadonbanController extends Controller
{
     public function getDanhsach(){
    	$qlhdb= hoadonban::all();
    	return view('admin.hoadonban.danhsach',compact('qlhdb'));
    }

    public function getChitiet($id, Request $request){
      $hoadonban=hoadonban::find($id);
      $sanpham = sanpham::all();
      $chitietHDB = chitiethoadonban::where('id_hdb', $id)->get();
    

      // dd($chitietHDB->toArray());
      return view('admin.hoadonban.chitiet',compact('hoadonban', 'chitietHDB'));
    }

    public function getSua($id){
    
      $hoadonban=hoadonban::find($id);
      $sanpham = sanpham::all();
      $chitietHDB = chitiethoadonban::where('id_hdb', $id)->get();
      $arrayCtHdb = $chitietHDB->toArray();
      for($i=0; $i < count($arrayCtHdb); $i++){
        $slMua = $chitietHDB[$i]->soluong;
        $idSP = $chitietHDB[$i]->id_sp;
      $sl = sanpham::where('id', $idSP)->get()[0]->soluong;
       $sp = sanpham::find($idSP);
       $sp->soluong = $sl - $slMua;
       $sp->save();
      }
      
    	$hoadonban->status = 1;
    	$hoadonban->save();
    	return redirect('admin/hoadonban/danhsach')->with('thongbao','Đã giao hàng');
    }

    public function getXoa($id){
    	$hoadonban=hoadonban::find($id);
      $hoadonban->status = 2;
      $hoadonban->save();
    	return redirect('admin/hoadonban/danhsach')->with('thongbao','Đã huỷ đơn hàng');
    }

    public function postImport(Request $request)
{
  $hoadonban=Excel::toCollection(new hoadonbanImport,$request->file('file'));
  foreach ($hoadonban[0] as $sp) {
   hoadonban::where('id',$sp[0])->update([
            'id_kh'=>$sp[1],
            'tenkh'=>$sp[2],
            'ngaymua'=>$sp[3],
            'tongtien'=>$sp[4],
            'ghichu'=>$sp[5] 
   ]);
 }

 return back();
}
public function Export() 
{
  return Excel::download(new HoadonExport, 'hoadonban.xlsx');
}
}
