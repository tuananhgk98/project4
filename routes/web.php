<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',['as'=>'trangchu',
	'uses'=>'PageController@getIndex'
]);
Route::get('search',['as'=>'search',
	'uses'=>'PageController@getSearch'
]);
Route::get('gioithieu',['as'=>'gioithieu',
	'uses'=>'PageController@getGioithieu'
]);
Route::get('lienhe',['as'=>'lienhe',
	'uses'=>'PageController@getLienhe'
]);
Route::get('hang_s_x/{type}',['as'=>'hangsanxuat',
	'uses'=>'PageController@getHangsx'
]);
Route::get('loaisanpham-sp/{id}',
	['as'=>'loaisanpham',
	'uses'=>'PageController@getLoaisp'
]);
Route::get('chitiet-sp/{id}',['as'=>'chitietsp',
	'uses'=>'PageController@getChitiet'
]);
Route::get('thongtinkhachhang',['as'=>'thongtin',
	'uses'=>'PageController@getThongtin'
]);

Route::group(['prefix'=>'admin'],function(){
	Route::get('quantri','QuantriController@getQuantri');
	Route::group(['prefix'=>'loaisp'],function(){
	Route::get('danhsach','Loaispcontroller@getDanhsach')->name("admin.loaisp.getdanhsach");
	Route::get('them','Loaispcontroller@getThem');
	Route::post('them','Loaispcontroller@postThem');
	Route::get('sua/{id}','Loaispcontroller@getSua');
	Route::post('sua/{id}','Loaispcontroller@postSua');
	Route::get('showhide/{id}','Loaispcontroller@showhide')->name('admin.loaisp.changetrangthai');
   });
	Route::group(['prefix'=>'sanpham'],function(){
	Route::get('danhsach','Sanphamcontroller@getDanhsach')->name("admin.sanpham.getdanhsach");
	Route::get('them','Sanphamcontroller@getThem');
	Route::get('showhide/{id}','Sanphamcontroller@showhide')->name('admin.sanpham.changetrangthai');
	Route::post('them','Sanphamcontroller@postThem');
	Route::get('sua/{id}','Sanphamcontroller@getSua');
	Route::post('sua/{id}','Sanphamcontroller@postSua');
	Route::post('import','Sanphamcontroller@postImport')->name('import');
	Route::get('export','Sanphamcontroller@Export')->name('export');
   });
	Route::group(['prefix'=>'khachhang'],function(){
	Route::get('danhsach','Khachhangcontroller@getDanhsach');
	Route::get('them','Khachhangcontroller@getThem');
	Route::post('them','Khachhangcontroller@postThem');
	Route::get('sua/{id}','Khachhangcontroller@getSua');
	Route::post('sua/{id}','Khachhangcontroller@postSua');
	Route::get('xoa/{id}','Khachhangcontroller@getXoa');
   });
	Route::group(['prefix'=>'hoadonban'],function(){
	Route::get('danhsach','Hoadonbancontroller@getDanhsach');
	Route::get('them','Hoadonbancontroller@getThem');
	Route::post('them','Hoadonbancontroller@postThem');
	Route::get('chitiet/{id}','Hoadonbancontroller@getChitiet');
	Route::get('sua/{id}','Hoadonbancontroller@getSua');
	Route::get('xoa/{id}','Hoadonbancontroller@getXoa');
	Route::post('import','Hoadonbancontroller@postImport')->name('import');
	Route::get('export','Hoadonbancontroller@Export')->name('export');
   });
});


Route::group(['prefix'=>'cart'],function(){
	Route::get('add/{id}','Cartcontroller@getAddCart');
	Route::get('show','Cartcontroller@getShowCart');
	Route::get('delete/{id}','Cartcontroller@getDeleteCart');
	Route::get('update','Cartcontroller@getUpdateCart');
	Route::post('show','Cartcontroller@postcheckout');
});
Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');

	});
});