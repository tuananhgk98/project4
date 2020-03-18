<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
// use Response;
use Illuminate\Http\Response;
use App\sanpham;
use App\khachhang;
use App\hoadonban;
use App\chitiethoadonban;

class Cartcontroller extends Controller
{
    public function getAddCart($id){
        $sanpham=sanpham::find($id);
        Cart::add(['id' => $id, 'name' =>$sanpham->tensp,'qty' => 1, 'price' =>$sanpham->gia, 'options' => ['img' =>$sanpham->hinhanh]]);
        return redirect('cart/show'); 

    }
    public function getShowCart(){
        $data['total']=Cart::total();
        $data['items']=Cart::content();
        return view('page.cart',$data);
    }
    public function getDeleteCart($id){
        Cart::remove($id);
        return back();
    }
    public function getUpdateCart(Request $req){
        Cart::update($req->rowId,$req->qty);

    }
public function postcheckout(Request $request) {
        $cartInfor = Cart::content();

        try {

            $khachhang = new khachhang;
            $khachhang->tenkh=$request->tenkh;
            $khachhang->email=$request->email;
            $khachhang->sodt=$request->sodt;
            $khachhang->diachi=$request->diachi;
            $khachhang->ghichu=$request->ghichu;
            // $khachhang->note=$request->txtghichu;
            $khachhang->save();

            $khachhangid=khachhang::where('tenkh',$request->tenkh)->orderby('id','desc')->first();

            $hoadon = new hoadonban;
            $hoadon->id_kh = $khachhangid->id;
            $hoadon->tenkh = $khachhang->tenkh;
            $hoadon->ngaymua = date('Y-m-d H:i:s');
            $hoadon->ghichu=$khachhang->ghichu;
            $hoadon->tongtien = str_replace(',', '', Cart::total());
            $hoadon->status = 0;
            $hoadon->save();
            // $hoadonid=hoadonban::where('tenkh',$request->name)->orderby('id','desc')->first();
            if (count($cartInfor) >0) {
                foreach ($cartInfor as $key => $item) {

                    $hoadonchitiet = new chitiethoadonban ;
                    $hoadonchitiet->id_hdb = $hoadon->id;
                    $hoadonchitiet->hinhanh=$item->options->img;
                    $hoadonchitiet->id_sp = $item->id;
                    $hoadonchitiet->tensp=$item->name;
                    $hoadonchitiet->soluong = $item->qty;
                    $hoadonchitiet->size = '36';
                    $hoadonchitiet->giaban = $item->price;
                   
                    $hoadonchitiet->save();
                    $sanpham=sanpham::find($item->id);
                    $sanpham->soluong=$sanpham->soluong-$item->qty;
                    $sanpham->save();
                }
            }

            $response = new Response('Set Cookie');
            $cartItem =  Cart::content();
            $response->withCookie(cookie('cart', 'asdsa'));
            Cart::destroy();
        } catch (Exception $e) {
            echo $e->getMessage();

        }
        return redirect('index');
    }
}
