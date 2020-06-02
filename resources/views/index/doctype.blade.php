<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{asset('img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="{{asset('https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700')}}" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	{{-- <div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div> --}}

    <header class="header-section">
		<div class="logo">
			@foreach ($logo->slice(0,1) as $logo)
			<img src="{{asset('storage/'.$logo->url)}}" alt=""><!-- Logo -->
			@endforeach
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				@foreach ($navigator->slice(0,5) as $key=> $nav)
			<li class="{{$key == 0 ? 'active' : '' }}"><a href="{{$nav->link}}">{{$nav->name}}</a></li>
				@endforeach

				@if (Route::has('login'))
                
				@auth
				@if (Auth::user()->role_id ==1 || Auth::user()->role_id ==2 || Auth::user()->role_id ==3)
					<li><a href="{{ url('/home') }}">Back office</a></li>
					@else
					<li><a href="{{ url('/home') }}">My profile</a></li>
					@endif
				@else
					<li><a href="{{ route('login') }}">Login</a></li>
				

					 @if (Route::has('register'))
					   <li><a href="{{ route('register') }}">Register</a> </li> 
					@endif 
				@endauth
			
		@endif
			</ul>
		</nav>
	</header>

@yield('content')




<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/circle-progress.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
