<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link href="{{ asset('/') }}assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="{{ asset('/') }}assets/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="{{ asset('/') }}assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/') }}assets/css/form.css" rel="stylesheet" type="text/css" media="all" />

<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="bike,cycle" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="{{ asset('/') }}assets/js/jquery.easydropdown.js"></script>
<link href="{{ asset('/') }}assets/css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="{{ asset('/') }}assets/js/scripts.js" type="text/javascript"></script>
<!--js-->

</head>
<body>
<!--banner-->
<script src="{{ asset('/') }}assets/js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
        auto: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>

@include('frontend.includes.header')
<!--/banner-->

</div>
@yield('body')
<!---->

@include('frontend.includes.footer')
<!---->

</body>
</html>

