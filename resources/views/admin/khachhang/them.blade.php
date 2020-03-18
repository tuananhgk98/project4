@extends('admin.layout.index')
@section('content')
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
						<form class="form-horizontal" action="#" method="post">
							<input type="hidden" name="_token" value="{!@crsf_token()!!}">
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
											<label class="col-lg-3 control-label">Tên sản phẩm:</label>
											<div class="col-lg-9">
												<input type="text" name="ten">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">id_loai</label>
											<div class="col-lg-9">
												<input type="text" name="id_loai">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Hãng:</label>
											<div class="col-lg-9">
													<input type="text" class="styled" name="hang">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Độ cao:</label>
											<div class="col-lg-9">
													<input type="text" class="styled" name="docao">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Giá:</label>
											<div class="col-lg-9">
													<input type="text" class="styled" name="gia">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Hình Ảnh:</label>
											<div class="col-lg-9">
												<div class="media no-margin-top">
													<div class="media-left">
														<a href="#"><img src="abc/images/placeholder.jpg" style="width: 58px; height: 58px;" class="img-rounded" alt=""></a>
													</div>

													<div class="media-body">
														<input type="file" name="img" class="file-styled">
														<span class="help-block">Các định dạng được chấp nhận: gif, png, jpg. Kích thước tệp tối đa 2Mb</span>
													</div>
												</div>
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Thêm<i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>
								{{crsf_field()}}
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