<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>{{$name}}</title>
</head>
<body>
    <style>
        body {
            margin: 0;
            background-color: #000000d6;
        }

        .card {
            position: absolute;
            top: 25%;
            right: 12.5%;
            bottom: 25%;
            left: 12.5%;
            width: 75%;
            height: 50%;
            box-sizing: border-box;
        }

        .card>img {
            width: 100%;
            height: auto;
            color: white;
            font-size: 50px;
            text-align: center;
        }
    </style>
    <div class="card">
        <img src="{{asset("storage/$name")}}" alt="error: this image is not found"/>
    </div>
</body>
</html>