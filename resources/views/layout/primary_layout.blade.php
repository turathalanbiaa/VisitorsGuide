<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>{{trans("words.app_name")}}</title>

    <!-- StyleSheet -->
    <link href="{{asset("css/app.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("css/style.css")}}" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Script -->
    <script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{asset("js/app.js")}}"></script>

    @include("layout.body_direction")
</head>
<body>
    {{--Navbar Fixed Top--}}
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-dark bg-dark">
            <a href="#" class="navbar-brand mr-0">
                {{trans("words.app_name")}}
            </a>

            <a class="btn btn-sm shadow-lg bg-primary mx-1 mx-sm-2" data-toggle="modal" data-target="#select-language-modal">
                <i class="fa fa-globe text-white align-middle"></i>
            </a>
        </nav>
    </div>

    {{--Content--}}
    @yield("content")

    {{--Select Language Model--}}
    @include("layout.select_language")

    {{--Script--}}
    @yield("script")
</body>
</html>
