@extends('admin.layout.index')
@section('content')
<div class="content">

					<!-- Bordered table -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Thông tin hóa đơn bán</h5>
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
						<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
					<input type="file" name="file" class="form-control" style="width: 300px">
					<br>
					<button class="btn btn-success">Import Data</button>
					<a class="btn btn-warning" href="{{ route('export') }}">Export Data</a>
				</form>
							<table class="table table-bordered">
								{{-- <thead>
									<th colspan="10"><a href="admin/sanpham/them"><button class="btn btn-success" style="float: right;">Thêm</button></a></th>
								</thead> --}}
									<tr>
										<th>ID khách hàng</th>
										<th>Tên khách hàng</th>
										<th>Ngày mua</th>
										<th>Tổng tiền</th>
										<th>Ghi chú</th>
										<!-- <th>Trạng thái</th> -->
										<th>Chi tiết</th>
										<th>Giao hàng</th>
										<th>Huỷ</th>
									</tr>
								<tbody>
                                    @foreach($qlhdb as $sp)
									<tr>
                                    <td>{{$sp->id_kh}}</td>
                                    <td>{{$sp->tenkh}}</td>
                                    <td>{{$sp->ngaymua}}</td>
                                    <td>{{$sp->tongtien}}</td>
                                    <td>{{$sp->ghichu}}</td>
									<!-- <td>{{$sp->status}}</td> -->
                                    <td>
									<a href="admin/hoadonban/chitiet/{{$sp->id}}"><button class="btn btn-primary"><i class="glyphicon glyphicon-info-sign"></i></button></a></td>
                                    <td>
									@if($sp->status !== 1 && $sp->status !== 2)
									<a href="admin/hoadonban/sua/{{$sp->id}}"><button class="btn btn-success" style="color : green; background : green;">
									<i class="glyphicon glyphicon-ok-sign" style="color : black;"></i></button></a>
									@endif
									@if($sp->status == 1)
									<p>Đã giao</p>
									@endif
									</td>
									<td>
									@if($sp->status !== 1 && $sp->status !== 2)
									<a href="admin/hoadonban/xoa/{{$sp->id}}"><button class="btn btn-danger">
									<i class="glyphicon glyphicon-remove-sign"></i></button></a>
									@endif
									@if($sp->status == 2)
									<p>Đã huỷ</p>
									@endif
									</td>
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