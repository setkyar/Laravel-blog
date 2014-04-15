<!DOCTYPE html>
<html>
<head>
	<title>
		@section('title')
		Universe | {{ $site_title }}
		@show
	</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap.css') }}
	<style type="text/css">
		html, 
		body {
			100%;
		}
		.blog-nav {
			margin-top: 1%;
		}
		.message {
			color:red; 
			margin-top:80px;
			margin-bottom: 48%;
		}
		.footer a {
			text-decoration: none;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="navbar blog-nav">
		<div class="navbar-inner">
		    <ul class="nav nav-pills">
			  	<li class="active"><a href="{{URL::to('/')}}">Home</a></li>
		  		<li class="active"><a href="{{ URL::to('about-me')}}">About Me</a></li>
		  		<li class="active"><a href="{{ URL::to('contact-me') }}">Contact Me</a></li>
		  		<li class="active"><a href="{{ URL::to('portfolio') }}">Portfolio</a></li>
			</ul>
	  	</div>

@yield('content')

@yield('footer')
	<p class="footer">Copyright <?php echo date("Y") ?> | Developed by <a href="{{ URL::to('/about-me') }}">Universe</a>.</p>
</div>

</body>
</html>