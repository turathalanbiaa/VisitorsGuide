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
    <div class="container-fluid" style="padding: 0 0;">
        <nav class="navbar justify-content-center navbar-dark bg-danger">
            <div class="navbar-brand">
                <img src="" width="30" height="30" alt="">
                @yield("top-title")
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="navbar fixed-bottom navbar-dark bg-danger nav nav-tabs nav-fill p-0">
            <a class="nav-item nav-link" href="#">Active</a>
            <a class="nav-item nav-link active" href="#">Link</a>
            <a class="nav-item nav-link" href="#">Link</a>
            <a class="nav-item nav-link" href="#">Disabled</a>
        </div>
    </div>

    @yield("content")


    @yield("extra-content")
    @yield("script")
</body>
</html>
