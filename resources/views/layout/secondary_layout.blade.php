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

    <div class="modal fade" id="select-language-model" tabindex="-1" role="dialog" aria-labelledby="select-language-model" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{trans("words.select_language")}}</h5>
                </div>
                <div class="modal-body">
                    <form class="form-row" method="post" action="/select-language">
                        @csrf
                        <div class="col-12 py-2">
                            <div class="form-check pl-0" style="padding-right: 20px;">
                                <input class="form-check-input ml-0" style="margin-right: -20px;" type="radio" name="language" id="ar" value="ar" checked>
                                <label class="form-check-label" for="ar">{{trans("words.arabic")}}</label>
                            </div>
                        </div>

                        <div class="col-12 py-2">
                            <div class="form-check pl-0" style="padding-right: 20px;">
                                <input class="form-check-input ml-0" style="margin-right: -20px;" type="radio" name="language" id="fa" value="fa">
                                <label class="form-check-label" for="fa">{{trans("words.persian")}}</label>
                            </div>
                        </div>

                        <div class="col-12 py-2">
                            <div class="form-check pl-0" style="padding-right: 20px;">
                                <input class="form-check-input ml-0" style="margin-right: -20px;" type="radio" name="language" id="en" value="en">
                                <label class="form-check-label" for="en">{{trans("words.english")}}</label>
                            </div>
                        </div>

                        <div class="col-12 py-2">
                            <hr>
                            <button type="submit" class="btn btn-block btn-success">{{trans("words.save")}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @yield("extra-content")

    @yield("script")
</body>
</html>
