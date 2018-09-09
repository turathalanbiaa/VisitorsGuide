@extends('layout.secondary_layout')

@section('top-title')
    <h1>دليل الزيارات والادعية</h1>

@endsection

@section('content')

    <div class="container prayerAndVisits">
        <div class="row p-0 mb-5">
            <div class="col-md-12 videos-gallery mt-5 mb-2 p-0">
                <div class="p-3" style="background-color: #b8daff">
                    <h2>تجريبي</h2>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-12 videos-gallery mt-5 mb-2 p-0">
                <div class="p-3" style="background-color: #b8daff">
                    <h2>تجريبي</h2>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection