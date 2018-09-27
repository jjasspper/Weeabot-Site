<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/app.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>
</head>
<body>
	@include('includes.navbar')
	<div class="content-container">
		@section('content')
		@show
	</div>
	@include('includes.footer')
</body>
<script data-main="js/app.js" src="js/require.js" type="text/javascript"></script>
</html>
