@extends('admin.layout.index')
@section('content')
<style>
	input[type="text"]{
width : 50%;
	}
</style>
				<!-- Content area -->
				<div class="content">

					<!-- Bordered table -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Sửa sản phẩm</h5>
							<small>Có tên là:{{$sanpham->tensp}}</small>
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
						<form class="form-horizontal" action="admin/sanpham/sua/{{$sanpham->id}}" method="post">
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
											<label class="col-lg-3 control-label">Hình Ảnh:</label>
											<div class="col-lg-9">
												<div class="media no-margin-top">
													<div class="media-left">
														<img src="source/images/products/small/{{$sanpham->hinhanh}}" style="width: 58px; height: 58px;" class="img-rounded" alt="">
													</div>

													<div class="media-body">
														<input type="file" name="hinhanh" class="file-styled">
														<span class="help-block">Các định dạng được chấp nhận: gif, png, jpg. Kích thước tệp tối đa 2Mb</span>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Tên sản phẩm:</label>
											<div class="col-lg-9">
												<input class="form-control" type="text" width="auto" name="tensp" value="{{$sanpham->tensp}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">id_loai</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="id_loai" value="{{$sanpham->id_loai}}">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Hãng:</label>
											<div class="col-lg-9">
													<input type="text" class="form-control styled" name="tenhang" value="{{$sanpham->tenhang}}">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Độ cao:</label>
											<div class="col-lg-9">
													<input type="text" class="form-control styled" name="docao" value="{{$sanpham->docao}}">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Giá:</label>
											<div class="col-lg-9">
													<input type="text" class="form-control styled" name="gia" value="{{$sanpham->gia}}">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Giá khuyến mại:</label>
											<div class="col-lg-9">
													<input type="text" class="form-control styled" name="giakm" value="{{$sanpham->giakm}}">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Số lượng:</label>
											<div class="col-lg-9">
													<input type="text" class="form-control styled" name="soluong" value="{{$sanpham->soluong}}">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">New:</label>
											<div class="col-lg-9">
													<input type="text" class="form-control styled" name="new" value="{{$sanpham->new}}">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Tình trạng:</label>
											<div class="col-lg-9">
													<input 
													@if($sanpham->tinhtrang=="Sẵn hàng")
													{{"checked"}}
													@endif
													type="radio" class="styled" name="tinhtrang" value="Sẵn hàng"> Sẵn hàng
													<input 
													@if($sanpham->tinhtrang=="Hết hàng")
													{{"checked"}}
													@endif
													type="radio" class="styled" name="tinhtrang" value="Hết hàng"> Hết hàng
											</div>
										</div>
										<div style="text-align : center">
											<button type="submit" class="btn btn-success">Sửa</button>
											<button type="reset" class="btn btn-primary">Làm mới</button>
										</div>
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