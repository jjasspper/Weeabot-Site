<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
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
