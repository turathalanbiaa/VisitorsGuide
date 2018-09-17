<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>{{trans("words.app_name")}}</title>

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
    {{--Navbar Fixed Top--}}
    <nav class="navbar fixed-top navbar-dark @yield("navbar-color")">
        <div class="container px-0">
            <a href="javascript:void(0);" class="navbar-brand m-0 w-75 text-truncate">
                @yield("navbar-brand")
            </a>

            <div class="d-flex flex-row justify-content-end w-25" style="margin: 0 -4px;">
                <a class="btn btn-sm btn-dark shadow-sm mx-1 mx-sm-2" data-toggle="modal" data-target="#menu-modal">
                    <i class="fa fa-bars fa-special text-white align-middle"></i>
                </a>

                <a class="btn btn-sm btn-dark shadow-sm mx-1 mx-sm-2" href="/">
                    <i class="fa fa-home fa-special text-white align-middle"></i>
                </a>
            </div>
        </div>
    </nav>

    {{--Content--}}
    <div style="margin: 54px 0 40px 0;">
        @yield("content")
    </div>

    {{--Navbar Fixed Bottom--}}
    <nav class="navbar fixed-bottom navbar-dark bg-dark nav nav-tabs nav-fill rounded-0 border-0 p-0">
        <div class="container px-0">
            <a class="nav-item nav-link rounded-0" href="/road-guide"><i class="fa fa-road text-white"></i></a>
            <a class="nav-item nav-link rounded-0" href="/visitor-feqh"><i class="fa fa-list-alt text-white"></i></a>
            <a class="nav-item nav-link rounded-0" href="/adeua-and-zuarat"><i class="fab fa-audible text-white"></i></a>
            <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-school text-white"></i></a>
            <a class="nav-item nav-link rounded-0" href="/losts"><i class="fa fa-route text-white"></i></a>
            <a class="nav-item nav-link rounded-0" href="/majales"><i class="fa fa-microphone-alt text-white"></i></a>
        </div>
    </nav>

    {{--Menu Modal--}}
    @include("layout.menu")

    {{--Extra Content--}}
    @yield("extra-content")

    {{--Script--}}
    @yield("script")
</body>
</html>
