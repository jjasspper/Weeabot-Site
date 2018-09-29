<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-93933039-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-93933039-2');
    </script>

    <link href="css/app.css?ver={{hash('crc32', date('h:i:s'))}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<title>Weeaboo Detector</title>
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
