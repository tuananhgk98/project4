<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\loaisp;
use App\khachhang;
use App\hoadonban;


class PageController extends Controller
{
    
    public function getIndex(){
        $newsp= sanpham::where([['trangthai',1],['new',1]])->paginate(8);
        $topsp= sanpham::where('giakm',0)->paginate(8);
        return view('page.home',compact('newsp','topsp'));
    }
    public function getLienhe(){
       return view('page.lienhe');
    }
    public function getGioithieu(){
       return view('page.gioithieu');
    }
    public function getHangsx($type){
        $sptheohang=sanpham::where('tenhang',$type)->paginate(4);
        return view('page.hangsx',compact('sptheohang'));

    }
    public function getLoaisp($id){
        $sptheoloai=sanpham::where('id_loai',$id)->paginate(8);
        return view('page.loaisp',compact('sptheoloai'));

    }
    public function getChitiet(Request $req){
        $ctsp=sanpham::where('id',$req->id)->first();
        $sp_theoloai=sanpham::where('id_loai',$ctsp->id_loai)->paginate(6);
        return view('page.chitiet',compact('ctsp','sp_theoloai'));
    }
    // public function getThongtin(){
    //     return view('page.thongtinkh');
    // }
    // public function getSize(){
    //     return view('page.thongtinkh');
    // }
   public function getSearch(Request $req){
    $sp=sanpham::where('tensp','like','%'.$req->key.'%')->orwhere('gia',$req->key)->get();
    return view('page.Search',compact('sp'));

   }

}
