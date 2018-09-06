@extends('layout.secondary_layout')

@section("navbar-color")
    {{"bg-orange-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">{{trans("words.visitor_feqh_title_questions")}}</span>
@endsection

@section('content')
    <div class="container mt-5">
        @if(session('notFond'))
            <div class="mt-lg-5 text-center">
                <h1>{{session('notFond')}}</h1>
            </div>
        @endif
    @foreach($events as $event)
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 shadow" style="background-color: white; color: white">
                <div class="row">
                    <div class="col-md-12 p-0" style="background-color: #424242; text-align: center; height: fit-content">
                            <span style="font-size: 60px; color:#ff9e0f">
                                {{Carbon\Carbon::parse($event->majles_start)->daysInMonth}}
                            </span>
                        <p class="m-0" style="background-color: #ff9e0f;">
                            {{\App\Enums\WeekDays::nameOfDays(Carbon\Carbon::parse($event->majles_start)->localeDayOfWeek)}}
                        </p>
                    </div>
                    <div class="col-md-12">
                        <p class="mt-3" style="color: black">{{$event->description}}</p>
                        <p class="mb-0" style="color: #ff9e0f">
                            <span>وقت المناسبة :</span>
                            <span> {{Carbon\Carbon::parse($event->time_start)->format('h:i')}} </span>
                            <span>{{\App\Enums\TimeArabic::getTimeInArabic(Carbon\Carbon::parse($event->majles_start)->format('A'))}}</span>
                        </p>
                        <p class="mb-1" style="color: #ff9e0f;">
                            <span>{{$event->city}}</span> - <span>{{$event->district}}</span> - <span>{{$event->closes_point}}</span>

                        </p>
                        <i class="fas fa-map" style="color: #658aff"></i>
                        <a  href="#" id="location" longitude="{{$event->longitude}}" latitude="{{$event->latitude}}"
                            data-toggle="modal" data-target=".bd-example-modal-lg">
                            اضغط هنا لتحديد العنوان على الخريطة
                        </a>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12 p-0">
                        <div style="display: inline; font-size: 12px">
                            <div class="p-1" style="background-color: #ff9e10; width: fit-content; display: inline">
                                <span>تبدء المنسابة</span>
                            </div>
                            <div class="p-1" style="width: fit-content; background-color: #d26a37; display: inline">
                                <span>{{$event->majles_start}}</span>
                            </div>
                        </div>
                        <div style="display: inline; font-size: 12px">
                            <div class="p-1" style="background-color: #4dd0e1; width: fit-content; display: inline">
                                <span>تنتهي المناسبة</span>
                            </div>
                            <div class="p-1" style="background-color: #ff9e10; width: fit-content; display: inline">
                                <span>{{$event->majles_end}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    <div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div id="map-canvas" style="height: 600px"></div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@section("menu-modal-content")
    <div class="modal-content border-0 rounded-0 shadow-special">
        <h4 class="modal-header bg-orange-gradient text-white rounded-0 m-0">
            <span>{{trans("words.menu_visitor_feqh")}}</span>
        </h4>

        <div class="modal-body">
            <div class="list-group">
                <a class="list-group-item list-group-item-action" id="show-questions">
                    <i class="fas fa-hourglass-start"></i>
                    <span>عرض المناسبات التي لم تبدء الى الان</span>
                </a>
                <a class="list-group-item list-group-item-action" id="show-send-question">
                    <i class="fas fa-hourglass-end"></i>
                    <span>عرض المناسبات الفائتة</span>
                </a>
                <a href="events" class="list-group-item list-group-item-action" id="show-ads-maseal">
                    <i class="fas fa-hourglass-half"></i>
                    <span>عرض المناسبات التي بدأت </span>
                </a>

                <div class="list-group-item" data-toggle="collapse" data-target="#category-list" aria-expanded="false" aria-controls="category-list">
                    <i class="fas fa-building"></i>
                    <span>عرض المناسبات حسب المحافظة</span>

                    <div class="collapse" id="category-list">
                        <div class="list-group list-group-flush mx-3">
                            <a href="/majales/city/{{\App\Enums\Cities::NAJ}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::NAJ}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::KAR}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::KAR}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::BAGH}}" class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::BAGH}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::BAB}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::BAB}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::QAD}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::QAD}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::WAS}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::WAS}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::MUTH}}" class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::MUTH}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::MAY}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::MAY}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::THI}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::THI}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::BAS}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::BAS}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::ANB}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::ANB}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::DIY}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::DIY}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::SAL}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::SAL}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::KIR}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::KIR}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::NIN}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::NIN}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::ARB}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::ARB}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::SUL}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::SUL}}
                            </a>
                            <a href="/majales/city/{{\App\Enums\Cities::DHU}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::DHU}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false">

    </script>
    <script>
        function initialize(x ,y) {
            var center = new google.maps.LatLng(x, y);
            var mapOptions = {
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: center
            };

            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            var marker = new google.maps.Marker({
                map: map,
                position: center
            });
        }

        $('#location').on('click', function () {
            $('#modal').modal({
                backdrop: 'static',
                keyboard: false
            });
            initialize($(this).attr('latitude'),$(this).attr('longitude'));
        });

    </script>
@endsection


