@extends('admin.layout.index')
@section('content')
				<!-- Content area -->
				<div class="content">

					<!-- Bordered table -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Sửa Loại</h5>
							<small>{{$loaisp->tenlsp}}</small>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<form class="form-horizontal" action="admin/loaisp/sua/{{$loaisp->id}}" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}"/>
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
											<label class="col-lg-3 control-label">Tên loại sản phẩm:</label>
											<div class="col-lg-9">
												<input type="text" name="Ten" placeholder="điền tên loại sản phẩm" value="{{$loaisp->tenlsp}}">
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Sửa</button>
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