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
						<!-- <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
					<input type="file" name="file" class="form-control" style="width: 300px">
					<br>
					<button class="btn btn-success">Import Data</button>
					<a class="btn btn-warning" href="{{ route('export') }}">Export Data</a>
				</form> -->
							<table class="table table-bordered">
								<thead>
									<th colspan="10"><a href="admin/sanpham/them"><button class="btn btn-success" style="float: right;">Thêm</button></a></th>
								</thead>
									<tr>
										<th>hình ảnh</th>
										<th>Tên sản phẩm</th>
										<th>Id_loai</th>
										<th>Hãng</th>
										<th>độ cao</th>
										<th>Số lượng</th>
										<th>Giá</th>
										<th>Tình trạng</th>
										<th>Trạng thái</th>
										<th>Sửa</th>
									</tr>
								<tbody>
                                    @foreach($qlsp as $sp)
									<tr>
									<td><img height="80" width="80" src="source/images/products/small/{{$sp->hinhanh}}" alt=""></td>
                                    <td>{{$sp->tensp}}</td>
                                    <td>{{$sp->id_loai}}</td>
                                    <td>{{$sp->tenhang}}</td>
                                    <td>{{$sp->docao}}</td>
                                    <td>{{$sp->soluong}}</td>
                                    <td>{{$sp->gia}}</td>
                                    <td>{{$sp->tinhtrang}}</td>
                                    <td>
                                    	@if($sp->trangthai)
                                    		<a href="{{route('admin.sanpham.changetrangthai',$sp->id)}}"  class="btn btn-info"><em class="glyphicon glyphicon-eye-open"></em></a>
                          
                                    	@else
											<a href="{{route('admin.sanpham.changetrangthai',$sp->id)}}"  class="btn btn-danger"><em class="glyphicon glyphicon-eye-close"></em></a>
                                    	@endif

                                    </td>

									<td><a href="admin/sanpham/sua/{{$sp->id}}"><button class="btn btn-primary">Sửa</button></a></td>
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