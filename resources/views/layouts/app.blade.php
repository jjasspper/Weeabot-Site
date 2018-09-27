<!doctype html>
<html lang="en">
<head>
	<link href="css/app.css?ver={{hash('crc32', date('h:i:s'))}}" rel="stylesheet">
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
<script data-main="js/app.js?ver={{hash('crc32', date('h:i:s'))}}" src="js/require.js" type="text/javascript"></script>
</html>
