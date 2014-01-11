<!DOCTYPE html>
<html>
<head>
	<title>
		@section('title')
		{{ $site_title }}
		:: Universe
		@show
	</title>
	{{ HTML::style('css/bootstrap.min.css') }}

	<style type="text/css">
		body {
			padding-top: 5em;
		}
		.container {
			width: 95%;
			margin: 0 auto;
		}
		#main-body {
			min-height: 37em;
		}

		#footer {
			clear: both;
			padding-top: 1em;
			min-height: 6em;
			width: 100%;
			background-color: orange;
			color: white;
		}
	</style>
</head>
<body>
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
	<div class="container">
		<div class="navbar-header">
			<a href="{{ url() }}" class="navbar-brand">Universe Blog</a>
		</div>
	</div>	
</header>

<div class="container row" id="main-body">
	@yield('content')
</div>

<div class="container row" id="footer">
	@yield('footer')
</div>

</body>
</html>