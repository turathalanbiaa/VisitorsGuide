<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>دليل الزائرين</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- StyleSheet -->
    <link href="{{asset("css/app.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("css/time-line.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("css/style.css")}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Script -->
    <script src="{{asset("js/jquery-3.3.1.slim.min.js")}}"></script>
    <script src="{{asset("js/app.js")}}"></script>
</head>
<body>
    <div class="container-fluid" style="padding: 0 0;">
        <nav class="navbar justify-content-center navbar-dark bg-danger">
            <div class="navbar-brand" style="margin-right: 0;">
                @yield("top-title")
            </div>
        </nav>
    </div>

    @yield("content")

    <div class="container-fluid">
        <div class="navbar fixed-bottom navbar-dark bg-danger nav nav-tabs nav-fill p-0">
            <a class="nav-item nav-link" href="/main"><i class="fa fa-home" style="color: white;"></i></a>
            @yield("nav-items-bottom")
        </div>
    </div>

    @yield("extra-content")
    @yield("script")
</body>
</html>
