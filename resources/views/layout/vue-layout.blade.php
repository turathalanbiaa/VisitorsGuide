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
    <link href="{{asset("css/style.css")}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Script -->
    <script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{asset("js/popper.min.js")}}"></script>


    @include("layout.body_direction")
</head>
<body >
{{--Content--}}
<div id="app" style="margin: 54px 0 56px 0;">
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

{{--Script--}}
<script src="{{asset("js/app.js")}}"></script>
<script>
    window.trans = <?php
    // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
    $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
    $trans = [];
    foreach ($lang_files as $f) {
        $filename = pathinfo($f)['filename'];
        $trans[$filename] = trans($filename);
    }
    echo json_encode($trans);
    ?>;
</script>
</body>
</html>
