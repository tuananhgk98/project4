@extends('admin.layout.index')
@section('content')
<div class="content">

					<!-- Bordered table -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Thông tin hóa đơn</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>hình ảnh</th>
										<th>ID hóa đơn bán</th>
										<th>ID sản phẩm</th>
										<th>Số lượng</th>
										<th>Tên sản phẩm</th>
										<th>Số lượng</th>
										<th>Size</th>
										<th>Giá bán</th>
										<th>Sửa</th>
										<th>Xóa</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($qlhdb as $sp)
									<tr>
										 <td><img height="80" width="80" src="source/images/products/small/{{$sp->hinhanh}}" alt=""></td>
                                    <td>{{$sp->id_hdb}}</td>
                                    <td>{{$sp->idsp}}</td>
                                    <td>{{$sp->tensp}}</td>
                                    <td>{{$sp->soluong}}</td>
                                    <td>{{$sp->size}}</td>
                                    <td>{{$sp->giaban}}</td>
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