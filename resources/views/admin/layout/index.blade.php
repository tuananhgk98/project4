<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản trị</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="source/abc/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="source/abc/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="source/abc/css/core.css" rel="stylesheet" type="text/css">
    <link href="source/abc/css/components.css" rel="stylesheet" type="text/css">
    <link href="source/abc/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="source/abc/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="source/abc/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="source/abc/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="source/abc/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="source/abc/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="source/abc/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="source/abc/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="source/abc/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="source/abc/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="source/abc/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="source/abc/js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="source/abc/js/core/app.js"></script>
    <script type="text/javascript" src="source/abc/js/pages/dashboard.js"></script>
    <!-- /theme JS files -->
</head>

<body>

    <!-- Main navbar -->
   @include('admin.layout.head')
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
          @include('admin.layout.menu')
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
               @yield('content')
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>
</html>
