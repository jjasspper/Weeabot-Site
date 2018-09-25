<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../sass/app.css">
</head>
<body>
    @yield('layouts.navbar')
    <div class="content-container">
        @section('content')
        @show
    </div>
    <div class="footer-container">
        @yield('layouts.footer')
    </div>
</body>
</html>
