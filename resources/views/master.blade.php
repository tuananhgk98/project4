<!DOCTYPE html>
<html>
   <head>
      <base href="{{asset('')}}">
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="source/images/favicon.png">
      <title>Welcome to EVASHOES</title>
      <link href="source/css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="source/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="source/css/flexslider.css" type="text/css" media="screen"/>
      <link href="source/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="source/css/style.css" rel="stylesheet">
      <script type="text/javascript" src="source/js/jquery-1.10.2.min.js"></script>
     <script type="text/javascript" src="source/js/jquery.easing.1.3.js"></script>
     <script type="text/javascript" src="source/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="source/js/jquery.sequence-min.js"></script>
     <script type="text/javascript" src="source/js/jquery.carouFredSel-6.2.1-packed.js"></script>
     <script defer src="source/js/jquery.flexslider.js"></script>
     
      {{-- <script type="text/javascript" src="source/js/script.min.js" ></script> --}}
   </head>
   <body id="home">
      @include('header')
      @yield('content')
      @include('footer')
   </body>
</html>