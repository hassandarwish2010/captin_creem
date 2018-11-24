<!DOCTYPE html>
    <html  lang="en" dir="rtl"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Emirates / @yield('title')</title>
@yield('meta')


<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="shortcut icon" href="favicon.ico">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
   <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('public/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{ asset('public/css/superfish.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ asset('public/css/bootstrap-datepicker.min.css') }}">
	<!-- CS Select -->
	<link rel="stylesheet" href="{{ asset('public/css/cs-select.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/cs-skin-border.css') }}">
	
	<link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
	<script src="{{ asset('public/js/modernizr-2.6.2.min.js') }}"></script>
	<style type="text/css">
		html,body{
			font-family: 'Cairo', sans-serif;
		}
	</style>

	</head>
	<body onload="myFunction()">


{{-- <div id="fh5co-wrapper">
<div id="fh5co-page"> --}}

@yield('section')


		<!-- fh5co-blog-section -->

      @include('layouts.footer')


	

{{-- 	</div>
	END fh5co-page

	</div> --}}


<!-- ////////////////////////////////////////// -->

	<script src="{{ asset('public/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('public/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('public/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('public/js/sticky.js') }}"></script>

	<!-- Stellar -->
	<script src="{{ asset('public/js/jquery.stellar.min.js') }}"></script>
	<!-- Superfish -->
	<script src="{{ asset('public/js/hoverIntent.js') }}"></script>
	<script src="{{ asset('public/js/superfish.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('public/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('public/js/magnific-popup-options.js') }}"></script>
	<!-- Date Picker -->
	<script src="{{ asset('public/js/bootstrap-datepicker.min.js') }}"></script>
	<!-- CS Select -->
	<script src="{{ asset('public/js/classie.js') }}"></script>
	<script src="{{ asset('public/js/selectFx.js') }}"></script>
	
	<!-- Main JS -->
	<script src="{{ asset('public/js/main.js') }}"></script>

	</body>
</html>