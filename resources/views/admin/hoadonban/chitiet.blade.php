@extends('admin.layout.index')
@section('content')
				<!-- Content area -->
				<div class="content">

					<!-- Bordered table -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Sửa hóa đơn</h5>
							<small>Của khách hàng tên là:{{$hoadonban->tenkh}}</small>
						</div>
						@if(count($errors)>0)
						<div class="alert-danger">
							@foreach($errors->all() as $er)
							{{$er}}<br>
							@endforeach
							@endif
							@if(session('thongbao'))
							<div class="alert alert-success">
							{{session('thongbao')}}
							</div>
							@endif
						</div>
						<form class="form-horizontal" action="admin/hoadonban/sua/{{$hoadonban->id}}" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>

									<div class="panel-body">
										<div class="form-group">
											<label class="col-lg-3 control-label">Tên khách hàng:</label>
											<div class="col-lg-9">
												<input type="text" style="width:50%" class="form-control" name="tenkh" value="{{$hoadonban->tenkh}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">ID Khách hàng</label>
											<div class="col-lg-9">
												<input type="text" style="width:50%" class="form-control" name="id_kh" value="{{$hoadonban->id_kh}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Ngày mua:</label>
											<div class="col-lg-9">
													<input type="text" style="width:50%" class="form-control" class="styled" name="ngaymua" value="{{$hoadonban->ngaymua}}">
											</div>
										</div>
										<div style="width:50%; padding : 10px; margin : 10px; text-align : center; ">
										<table class="table table-bordered">
								<thead>
									<th colspan="10">Danh sách sản phẩm</th>
								</thead>
									<tr>
										<th>hình ảnh</th>
										<th>Tên sản phẩm</th>
									
										<!-- <th>Hãng</th>
										<th>độ cao</th> -->
										<th>Số lượng</th>
										<th>Giá</th>
									
									</tr>
								<tbody>
                                 @foreach($chitietHDB as $ct)
									<tr>
                                   
                                    <td><img src="source/images/products/small/{{$ct->hinhanh}}" alt="Product Name" style="width : 100px;height:100px;"></td>
									<td>{{$ct->tensp}}</td>
                                    <!-- <td>asdasdasd</td>
                                    <td>asdasd</td> -->
                                    <td>{{$ct->soluong}}</td>
									<td>{{$ct->giaban}}</a></td>
									</tr>
									@endforeach
                                  
								</tbody>
							</table>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Tổng tiền:</label>
											<div class="col-lg-9">
													<input type="text" style="width:50%" class="form-control" class="styled" name="tongtien" value="{{$hoadonban->tongtien}}">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Ghi chú:</label>
											<div class="col-lg-9">
													<input type="text" style="width:50%" class="form-control" class="styled" name="ghichu" value="{{$hoadonban->ghichu}}">
											</div>
										</div>
										<!-- <div class="text-right">
											<button type="submit" class="btn btn-default">Sửa</button>
											<button type="reset" class="btn btn-default">Làm mới</button>
										</div> -->
									</div>
								</div>
								{{csrf_field()}}
						</form>
					</div>
					<!-- /bordered table -->

					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->
@endsection