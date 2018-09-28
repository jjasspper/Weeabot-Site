<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/app.css?ver={{hash('crc32', date('h:i:s'))}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<title>@yield('title')</title>
</head>
<body>
	@include('includes.navbar')
	<div class="content__container">
		@section('content')
		@show
	</div>
	@include('includes.footer')
</body>
<script data-main="js/app.js?ver={{hash('crc32', date('h:i:s'))}}" src="js/require.js" type="text/javascript"></script>
</html>
