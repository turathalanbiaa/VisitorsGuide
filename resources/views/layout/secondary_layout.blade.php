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
    <script src="{{asset("js/material.min.js")}}"></script>
    <script src="{{asset("js/material-kit.js")}}"></script>
    <script src="{{asset("js/popper.min.js")}}"></script>


    @include("layout.body_direction")
</head>
<body>
    {{--Navbar Fixed Top--}}
    <div class="container">
        <nav class="navbar fixed-top navbar-dark @yield("navbar-color")">
            <a href="javascript:void(0);" class="navbar-brand m-0 w-75 text-truncate">
                @yield("navbar-brand")
            </a>

            <div class="d-flex flex-row justify-content-end w-25">
                <a class="btn btn-sm btn-shadow bg-secondary mx-1 mx-sm-2" data-toggle="modal" data-target="#menu-modal">
                    <i class="fa fa-bars text-white align-middle"></i>
                </a>

                <a class="btn btn-sm btn-shadow bg-secondary mx-1 mx-sm-2" data-toggle="modal" data-target="#select-language-modal">
                    <i class="fa fa-globe text-white align-middle"></i>
                </a>
            </div>
        </nav>
    </div>

    {{--Content--}}
    <div class="mt-5">
        @yield("content")
    </div>

    {{--Navbar Fixed Bottom--}}
    <div class="container">
        <div class="navbar fixed-bottom navbar-dark bg-secondary nav nav-tabs nav-fill rounded-0 px-0">
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
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>
