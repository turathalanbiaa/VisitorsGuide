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
<div id="app" style="margin-top: 55px;">
@yield("content")
</div>

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
