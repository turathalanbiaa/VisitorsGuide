<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{trans("words.app_name")}}</title>

    <!-- StyleSheet -->
    <link href="{{asset("css/app.css")}}" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Script -->
    <script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{asset("js/app.js")}}"></script>
    <style>
        body {
            text-align: right;
            background-color: #d3d3d38f;
        }
        .cover {
            width: calc(100% - 20px);
            height: 130px;
            background-color: #40e0d0;
            margin-left: 20px;
        }
        .cover-skew {
            width: calc(100%);
            height: 165px;
            background-color: #40e0d0;
            border-radius: 0 0 0 25px;
            transform: skew(0deg, -5deg);
            box-shadow: 0 0 7px 1px #17a2b8c7;
            padding-top: 32px;
            margin-top: -32px;
            box-sizing: content-box;
        }
        .demo {
            position: absolute;
            top: 0;
            width: calc(100% - 20px);
            height: 150px;
            background-color: transparent;
            padding-top: 16px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .demo-img {
            width: 85px;
            height: 85px;
            background-color: transparent;
            border-radius: 100% 100%;
            box-shadow: 0 0 7px 1px #6c757db5;
        }
        .demo-img>img {
            width: 100%;
            height: 100%;
            border: 10px solid white;
            border-radius: 100% 100%;
        }

        .demo-btn:active,
        .demo-btn:hover,
        .demo-btn:focus,
        .demo-btn:visited {
            text-decoration: none!important;
        }


        .content {
            width: 100%;
            margin-top: 100px;

        }
        .content-right {
            width: 60%;
            height: 336px;
            background-color: turquoise;
        }
        .content-left {
            width: 40%;
            max-width: 170px;
            height: auto;
            min-height: 336px;
            max-height: 336px;
            overflow: scroll;
        }
        .content-left .col-special {
            width: 100%;
            padding: 8px 24px;
        }
        .col-special img {
            width: 100%;
            height: 100%;
            padding: 16px;
            border-radius: 100% 100%;
        }
    </style>
</head>
<body>
<div class="cover">
    <div class="cover-skew"></div>
    <div class="demo">
        <div class="w-auto h-100 p-3 d-flex flex-column">
            <div class="demo-img">
                <img src="{{asset("storage/img/lost/empty-photo.jpg")}}" alt="logo">
                <p class="text-center text-white m-0 pt-2">{{trans("words.app_name")}}</p>
            </div>
        </div>

        <div class="w-auto h-100 p-3 d-flex flex-column">
            <a class="text-white font-weight-bold demo-btn" href="/login" style="margin-top: 20px!important;">
                <span>تسجيل الدخول</span>
                <i class="fa fa-user-circle fa-2x text-white align-middle"></i>
            </a>
            <a class="text-secondary font-weight-bold demo-btn" href="/login" style="margin-top: 80px!important;">
                <span>اللغة</span>
                <i class="fa fa-globe text-secondary align-middle"></i>
            </a>
        </div>
    </div>
</div>

<div class="content d-flex flex-row">
    <div class="content-right">right</div>
    <div class="content-left">
        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <img src="{{asset("storage/img/lost/empty-photo.jpg")}}" alt="logo">
            </div>
            <p class="m-0 text-center pt-1 d-none">
                Road Gide Way Location Emad
            </p>
        </div>

        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <img src="{{asset("storage/img/lost/empty-photo.jpg")}}" alt="logo">
            </div>
            <p class="m-0 text-center pt-1 d-none">
                Road Gide Way Location Emad
            </p>
        </div>

        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <img src="{{asset("storage/img/lost/empty-photo.jpg")}}" alt="logo">
            </div>
            <p class="m-0 text-center pt-1 d-none">
                Road Gide Way Location Emad
            </p>
        </div>

        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <img src="{{asset("storage/img/lost/empty-photo.jpg")}}" alt="logo">
            </div>
            <p class="m-0 text-center pt-1 d-none">
                Road Gide Way Location Emad
            </p>
        </div>

        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <img src="{{asset("storage/img/lost/empty-photo.jpg")}}" alt="logo">
            </div>
            <p class="m-0 text-center pt-1 d-none">
                Road Gide Way Location Emad
            </p>
        </div>

        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <img src="{{asset("storage/img/lost/empty-photo.jpg")}}" alt="logo">
            </div>
            <p class="m-0 text-center pt-1 d-none">
                Road Gide Way Location Emad
            </p>
        </div>

        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <img src="{{asset("storage/img/lost/empty-photo.jpg")}}" alt="logo">
            </div>
            <p class="m-0 text-center pt-1 d-none">
                Road Gide Way Location Emad
            </p>
        </div>
    </div>
</div>

</body>
</html>
