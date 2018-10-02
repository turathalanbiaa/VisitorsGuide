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
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <div class="container px-0">
            <a href="javascript:void(0);" class="navbar-brand mr-0">
                {{trans("words.app_name")}}
            </a>

            <div class="d-flex flex-row justify-content-end w-25" style="margin: 0 -4px;">
                <a class="btn btn-sm btn-primary shadow-sm mx-1 mx-sm-2" data-toggle="modal" data-target="#select-language-modal">
                    <i class="fa fa-globe fa-special text-white align-middle"></i>
                </a>

                @php $currentPath = \Illuminate\Support\Facades\Request::path(); @endphp

                @if($currentPath == "login" || $currentPath == "register")
                    <a class="btn btn-sm btn-primary shadow-sm mx-1 mx-sm-2" href="/">
                        <i class="fa fa-home fa-special text-white align-middle"></i>
                    </a>
                @else
                    @if(isset($_COOKIE["USER_SESSION"]))
                        <a class="btn btn-sm btn-primary shadow-sm mx-1 mx-sm-2" href="/logout">
                            <i class="fa fa-sign-out-alt fa-special text-white align-middle"></i>
                        </a>
                    @else
                        <a class="btn btn-sm btn-primary shadow-sm mx-1 mx-sm-2" href="/login">
                            <i class="fa fa-sign-in-alt fa-special text-white align-middle"></i>
                        </a>
                    @endif
                @endif
            </div>
        </div>
    </nav>

    {{--Content--}}
    @yield("content")

    {{--Select Language Model--}}
    @include("layout.select_language")

    {{--Script--}}
    @yield("script")
</body>
</html>
