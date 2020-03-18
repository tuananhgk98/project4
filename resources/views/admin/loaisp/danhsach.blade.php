@extends('admin.layout.index')
@section('content')
<div class="content">

					<!-- Bordered table -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Thông tin loại sản phẩm</h5>
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
									<th colspan="10"><a href="admin/loaisp/them"><button class="btn btn-success" style="float: right;">Thêm</button></a></th>
								</thead>
								<tr>
										<th>id</th>
										<th>Tên loại</th>
										<th>Trạng thái</th>
										<th>Sửa</th>
									</tr>
								<tbody>
									@foreach($qllsp as $ql)
									<tr>
										<td>{{$ql->id}}</td>
										<td>{{$ql->tenlsp}}</td>
										<td>
                                    	@if($ql->trangthai)
                                    		<a href="{{route('admin.loaisp.changetrangthai',$ql->id)}}"  class="btn btn-info"><em class="glyphicon glyphicon-eye-open"></em></a>
                          
                                    	@else
											<a href="{{route('admin.loaisp.changetrangthai',$ql->id)}}"  class="btn btn-danger"><em class="glyphicon glyphicon-eye-close"></em></a>
                                    	@endif

                                    </td>
										<td><a href="admin/loaisp/sua/{{$ql->id}}"><button class="btn btn-primary">Sửa</button></a></td>
										
									</tr>
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