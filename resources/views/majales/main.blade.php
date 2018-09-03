@extends('layout.secondary_layout')

@section('top-title')
    <h1>دليل الزيارات والادعية</h1>

@endsection

@section('content')
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 shadow" style="background-color: white; color: white">
                    <div class="row">
                        <div class="col-md-12 p-0" style="background-color: #424242; text-align: center; height: fit-content">
                            <span style="font-size: 60px; color:#ff9e0f">
                                {{Carbon\Carbon::parse('2018-09-01 01:02:00')->daysInMonth}}
                            </span>
                            <p class="m-0" style="background-color: #ff9e0f;">
                                {{\App\Enums\WeekDays::nameOfDays(Carbon\Carbon::parse('2018-09-01 01:02:00')->localeDayOfWeek)}}
                            </p>
                        </div>
                        <div class="col-md-12">
                            <p class="mt-3" style="color: black">أنتم مدعوون الى

                                المجلس الحسيني الاسبوعي

                                غدا، يوم الخميس، الموافق 21-11-2013

                                في تمام الساعة الثامنة مساءا

                                ابتداءا بدعاء كميل وزيارة الامام الحسين (ع)

                                يليها مجلس حسيني للخطيب الحسيني

                                سماحة الشيخ حيدر الخفاجي

                                تليها لطميات ومرثيات حسينية

                                في مؤسسة الامام الحسين (ع) الخيرية

                                *الدعوة عامة للجميع رجالا ونساءا*
                            </p>
                            {{--<span style="color: #1b1e21">{{Carbon\Carbon::parse('2018-09-01 01:02:00')->format('i A')}}</span>--}}
                            <p style="color: #1b1e21; background-color: #ff9e0f; display: inline-block">
                                <span>وقت المناسبة :</span>
                                <span> {{Carbon\Carbon::parse('2018-09-01 01:02:00')->format('h:i')}} </span>
                                <span>{{\App\Enums\TimeArabic::getTimeInArabic(Carbon\Carbon::parse('2018-09-01 01:02:00')->format('A'))}}</span>
                            </p>
                            <p class="mb-1" style="color: #1b1e21; background-color: #ff9e0f">
                                <span>النجف</span> - <span>قرية الغيدير</span> - <span> بلوك ٦٤ - دار رقم ٨ قرب - اسواق القاسم</span>

                            </p>
                            <i class="fas fa-map" style="color: #658aff"></i>
                            <a  href="#" id="location" longitude="44.313654199999995" latitude="31.993136900000003" data-toggle="modal" data-target=".bd-example-modal-lg">اضغط هنا لتحديد العنوان على الخريطة</a>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12 p-0">
                            <div style="display: inline; font-size: 12px">
                                <div class="p-1" style="background-color: #4dd0e1; width: fit-content; display: inline; margin: 0">
                                    <span>تبدء المناسبة</span>
                                </div>
                                <div class="p-1" style="background-color: #573e39; width: fit-content; display: inline; margin: 0">
                                    <span>22</span>
                                </div>
                                <div class="p-1" style="background-color: #d26a37; width: fit-content; display: inline">
                                    <span>8</span>
                                </div>
                                <div class="p-1" style="background-color: #e2b100; width: fit-content; display: inline">
                                    <span>2018</span>
                                </div>
                            </div>
                            <div style="display: inline; font-size: 12px">
                                <div class="p-1" style="background-color: #4dd0e1; width: fit-content; display: inline">
                                    <span>تبدء المناسبة</span>
                                </div>
                                <div class="p-1" style="background-color: #573e39; width: fit-content; display: inline">
                                    <span>22</span>
                                </div>
                                <div class="p-1" style="background-color: #d26a37; width: fit-content; display: inline">
                                    <span>8</span>
                                </div>
                                <div class="p-1" style="background-color: #e2b100; width: fit-content; display: inline">
                                    <span>2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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


