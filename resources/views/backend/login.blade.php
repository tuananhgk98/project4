<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{asset('')}}">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="source/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="source/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="source/assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="source/assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="source/assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="source/assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="source/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="source/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="source/assets/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="source/assets/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="source/assets/js/plugins/ui/drilldown.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="source/assets/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="source/assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="source/assets/js/core/app.js"></script>
	<script type="text/javascript" src="source/assets/js/pages/login_validation.js"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container login-cover">

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Form with validation -->
				<form action="#" class="form-validate">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<fieldset>
					<div class="panel panel-body login-form">
						<div class="text-center">
							<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
							<h5 class="content-group">Đăng nhập vào tài khoản<small class="display-block"></small></h5>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" placeholder="Email" name="email" type="email" required="required">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="password" class="form-control" placeholder="Password" name="password" type="password" required="required">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="form-group login-options">
							<div class="row">
								<div class="col-sm-6">
									<label class="checkbox-inline">
										<input type="checkbox" class="styled" checked="checked">
										Nhớ mật khẩu
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn bg-blue btn-block"><a href="admin/quantri">Đăng nhập </a><i class="icon-arrow-right14 position-right"></i></button>
						</div>
					{{csrf_field()}}
				</form>
				<!-- /form with validation -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Footer -->
	<div class="footer text-white text-center">
		&copy; 2015. <a href="#" class="text-white">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" class="text-white" target="_blank">Eugene Kopyov</a>
	</div>
	<!-- /footer -->

</body>
</html>
