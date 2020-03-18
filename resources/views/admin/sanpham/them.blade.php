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
							<h5 class="panel-title">Thêm sản phẩm</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
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
						<form class="form-horizontal" action="admin/sanpham/them" method="post">
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
														<a href="#"><img src="source/abc/images/anh.jpg" style="width: 58px; height: 58px;" class="img-rounded" alt=""></a>
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
												<input class="form-control" type="text" name="tensp">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">id_loai</label>
											<div class="col-lg-9">
												<input class="form-control" type="text" name="id_loai">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Hãng:</label>
											<div class="col-lg-9">
													<input type="text" class="form-control styled" name="tenhang">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Độ cao:</label>
											<div class="col-lg-9">
													<input type="text" class="form-control styled" name="docao">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Giá:</label>
											<div class="col-lg-9">
													<input type="text" class="form-control styled" name="gia">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Giá khuyến mại:</label>
											<div class="col-lg-9">
													<input type="text" class="form-control styled" name="giakm">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Số lượng:</label>
											<div class="col-lg-9">
													<input type="text" class="form-control styled" name="soluong">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">New:</label>
											<div class="col-lg-9">
													<input type="text" class="form-control styled" name="new">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Tình trạng:</label>
											<div class="col-lg-9">
													<input type="text" class="form-control styled" name="tinhtrang">
											</div>
										</div>
										<div style="text-align : center">
											<button type="submit" class="btn btn-success">Thêm</button>
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