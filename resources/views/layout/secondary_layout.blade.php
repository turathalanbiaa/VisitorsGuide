<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>دليل الزائرين</title>

    <!-- StyleSheet -->
    <link href="{{asset("css/app.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("css/time-line.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("css/style.css")}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Script -->
    <script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{asset("js/app.js")}}"></script>

    @include("layout.body_direction")
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-dark bg-danger">
            <div class="navbar-brand mr-0">
                @yield("top-title")
            </div>

            <div data-toggle="modal" data-target="#select-language-model">
                <i class="fa fa-globe text-white"></i>
            </div>
        </nav>
    </div>

    @yield("content")

    <div class="container-fluid">
        <div class="navbar fixed-bottom navbar-dark bg-danger nav nav-tabs nav-fill rounded-0 p-0">
            <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-home text-white"> </i></a>
            @yield("nav-items-bottom")
        </div>
    </div>

    {{--Select Language Model--}}
    @include("layout.select_language")

    @yield("script")
</body>
</html>
