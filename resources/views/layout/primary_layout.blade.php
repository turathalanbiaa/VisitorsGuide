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
    <link href="{{asset("css/style.css")}}" rel="stylesheet" type="text/css">

    <!-- Script -->
    <script src="{{asset("js/jquery-3.3.1.slim.min.js")}}"></script>
    <script src="{{asset("js/app.js")}}"></script>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar fixed-top justify-content-center navbar-dark bg-dark">
            <div class="navbar-brand">دليل الزائرين</div>
        </nav>
    </div>

    <div class="container" style="margin-top: 75px;">
        @yield("content")
    </div>

    @yield("extra-content")
    @yield("script")
</body>
</html>
