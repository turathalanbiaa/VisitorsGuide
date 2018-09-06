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
    <script src="{{asset("js/popper.min.js")}}"></script>
    <script src="{{asset("js/app.js")}}"></script>

    @include("layout.body_direction")
</head>
<body >
<div id="app">
    {{--Navbar Top--}}
  <div class="container-fluid p-0" >
        <nav class="navbar navbar-dark @yield("navbar-color")">
            <a href="javascript:void(0);" class="navbar-brand m-0 w-75 text-truncate">
                @yield("navbar-brand")
            </a>

            <div class="d-flex flex-row w-25" style="justify-content: space-evenly;">
                <a class="btn btn-sm btn-shadow bg-secondary" data-toggle="modal" data-target="#menu-modal">
                    <i class="fa fa-bars text-white align-middle"></i>
                </a>

                <a class="btn btn-sm btn-shadow bg-secondary" data-toggle="modal" data-target="#select-language-modal">
                    <i class="fa fa-globe text-white align-middle"></i>
                </a>
            </div>
        </nav>
    </div>

    {{--Content--}}
    <div class="pt-3">
    @yield("content")</div>
</div>
    {{--Navbar Fixed Bottom--}}
    <div class="container-fluid">
        <div class="navbar fixed-bottom navbar-dark bg-secondary nav nav-tabs nav-fill rounded-0 p-0">
            <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-home text-white"></i></a>
            <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-home text-white"></i></a>
            <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-home text-white"></i></a>
            <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-home text-white"></i></a>
            <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-home text-white"></i></a>
            <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-home text-white"></i></a>
        </div>
    </div>

    {{--Select Language Modal--}}
    @include("layout.select_language")

    {{--Menu Modal--}}
    @include("layout.menu")

    {{--Extra Content--}}
    @yield("extra-content")

    {{--Script--}}
    @yield("script")
</body>
</html>
