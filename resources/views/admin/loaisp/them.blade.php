@extends('admin.layout.index')
@section('content')
				<!-- Content area -->
				<div class="content">

					<!-- Bordered table -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Thêm loại sản phẩm</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="alert-danger">
							@if(session('thongbao'))
							<div class="alert alert-success">
							{{session('thongbao')}}
							</div>
							@endif
						</div>
						<form class="form-horizontal" action="admin/loaisp/them" method="POST">
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
											<label class="col-lg-3 control-label">Tên sản phẩm:</label>
											<div class="col-lg-9">
												<input type="text" name="Ten" placeholder="nhập tên loại sản phẩm">
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-default">Thêm</button>
											<button type="reset" class="btn btn-default">Làm mới</button>
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