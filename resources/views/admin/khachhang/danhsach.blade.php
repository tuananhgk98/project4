@extends('admin.layout.index')
@section('content')
<div class="content">

					<!-- Bordered table -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Thông tin sản phẩm</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="table-responsive">
							<div class="alert-danger">
							@if(session('thongbao'))
							<div class="alert alert-success">
							{{session('thongbao')}}
							</div>
							@endif
						</div>
							<table class="table table-bordered">
								<thead>
									<th colspan="10"><a href="admin/sanpham/them"><button class="btn btn-success" style="float: right;">Thêm</button></a></th>
								</thead>
									<tr>
										<th>Tên khách hàng</th>
										<th>Giới tính</th>
										<th>Email</th>
										<th>Địa chỉ </th>
										<th>Số điện thoại</th>
										<th>Ghi chú</th>
										<th>Thêm</th>
										<th>Sửa</th>
										<th>Xóa</th>
									</tr>
								<tbody>
									@foreach($qlkh as $kh)
									<tr>
										<td>{{$kh->tenkh}}</td>
										<td>{{$kh->gioitinh}}</td>
										<td>{{$kh->email}}</td>
										<td>{{$kh->diachi}}</td>
										<td>{{$kh->sodt}}</td>
										<td>{{$kh->ghichu}}</td>
										<td> <button class="btn btn-success">Thêm</button></td>
										<td><button class="btn btn-primary">Sửa</button></td>
                                        <td><button class="btn btn-danger">Xóa</button></td>
										
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<!-- /bordered table -->

					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
@endsection