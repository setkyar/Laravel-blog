<!DOCTYPE html>
<html>
<head>
	<title>
		@section('title')
		{{ $site_title }}
		:: Blog Application
		@show
	</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	<style type="text/css">
		body {
			padding-top: 70px;
		}	

		.container {
			width: 90%;
			margin: 0 auto;
		}
	</style>
</head>
<body>
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
	<div class="container">
		<div class="navbar-header">
			<a href="{{ URL::to('admin/dashboard') }}" class="navbar-brand">Laravel Blog</a>
		</div>
	</div>
</header>
<div class="container row" id="main-body">
	@yield('content')
</div>

</body>
</html>