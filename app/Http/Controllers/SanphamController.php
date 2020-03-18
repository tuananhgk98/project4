<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\Exports\SanphamExport;
use App\Imports\SanphamImport;
use Maatwebsite\Excel\Facades\Excel;

class SanphamController extends Controller
{
     public function getDanhsach(){
    	$qlsp= sanpham::all();
    	return view('admin.sanpham.danhsach',compact('qlsp'));
    }
    public function getThem(){
    	return view('admin.sanpham.them');
    	
    }
    public function showhide($id){
        $sanpham=sanpham::find($id);
        if($sanpham->trangthai==0){
            $sanpham->trangthai=1;
        }
        else{
            $sanpham->trangthai=0;
        }
        $sanpham->save();
        // $qlsp= sanpham::all();
        return redirect()->route('admin.sanpham.getdanhsach');
    }
    public function postThem(Request $request){
         $this->validate($request,
            [
            'tensp' => 'required',
            'id_loai' => 'required',
            'tenhang'=>'required',
            'docao'=>'required|integer|max:15',
            'gia'=>'required|numeric',
            'soluong'=>'required|integer',
            'new'=>'required|integer',
            'tinhtrang'=>'required'

        ],

        [
            'required' => ':attribute Không được để trống',
            'min' => ':attribute Không được nhỏ hơn :min',
            'max' => ':attribute Không được lớn hơn :max',
            'integer' => ':attribute Chỉ được nhập số nguyên',
            'numeric'=>':attribute Chỉ được nhập kiểu số'
        ],

        [
            
           'tensp' => 'Tên sản phẩm:',
            'id_loai' => 'ID loại:',
            'tenhang'=>'Tên hãng:',
            'docao'=>'Độ cao:',
            'gia'=>'Giá:',
            'soluong'=>'Số lượng:',
            'new'=>'New:',
            'tinhtrang'=>'Tình trạng:'
        ]
    );
    	$sanpham=new sanpham;
    	$sanpham->hinhanh=$request->hinhanh;
        $sanpham->tensp=$request->tensp;
        $sanpham->id_loai=$request->id_loai;
        $sanpham->tenhang=$request->tenhang;
        $sanpham->docao=$request->docao;
        $sanpham->gia=$request->gia;
        $sanpham->giakm=$request->giakm;
        $sanpham->soluong=$request->soluong;
        $sanpham->new=$request->new;
        $sanpham->tinhtrang=$request->tinhtrang;

    	$sanpham->save();
    	return redirect('admin/sanpham/danhsach')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
    	$sanpham=sanpham::find($id);
    	return view('admin.sanpham.sua',compact('sanpham'));
    	
    }
    public function postSua(Request $request,$id){
          $this->validate($request,
            [
            'tensp' => 'required',
            'id_loai' => 'required',
            'tenhang'=>'required|',
            'docao'=>'required|integer|max:15',
            'gia'=>'required|numeric',
            'soluong'=>'required|integer',
            'new'=>'required|integer',
            'tinhtrang'=>'required'

        ],

        [
            'required' => ':attribute Không được để trống',
            'min' => ':attribute Không được nhỏ hơn :min',
            'max' => ':attribute Không được lớn hơn :max',
            'integer' => ':attribute Chỉ được nhập số nguyên',
            'numeric'=>':attribute Chỉ được nhập kiểu số'
        ],

        [
           'tensp' => 'Tên sản phẩm:',
            'id_loai' => 'ID loại:',
            'tenhang'=>'Tên hãng:',
            'docao'=>'Độ cao:',
            'gia'=>'Giá:',
            'soluong'=>'Số lượng:',
            'new'=>'New:',
            'tinhtrang'=>'Tình trạng:'
        ]
    );
    	$sanpham=sanpham::find($id);
    	$sanpham->hinhanh=$request->hinhanh;
    	$sanpham->tensp=$request->tensp;
    	$sanpham->id_loai=$request->id_loai;
    	$sanpham->tenhang=$request->tenhang;
    	$sanpham->docao=$request->docao;
    	$sanpham->gia=$request->gia;
    	$sanpham->giakm=$request->giakm;
    	$sanpham->soluong=$request->soluong;
    	$sanpham->new=$request->new;
        $sanpham->tinhtrang=$request->tinhtrang;
    	$sanpham->save();
    	return redirect('admin/sanpham/danhsach')->with('thongbao','Sửa thành công');
    }
    public function postImport(Request $request)
{
  $sanpham=Excel::toCollection(new SanphamImport,$request->file('file'));
  foreach ($sanpham[0] as $sp) {
   sanpham::where('id',$sp[0])->update([
    'tensp'=>$sp[1],
            'id_loai'=>$sp[2],
            'tenhang'=>$sp[3],
            'gia'=>$sp[4],
            'giakm'=>$sp[5],
            'hinhanh'=>$sp[6],
            'soluong'=>$sp[7],
            'docao'=>$sp[8]  
   ]);
 }

 return back();
}
public function Export() 
{
  return Excel::download(new SanphamExport, 'sanpham.xlsx');
}
}
