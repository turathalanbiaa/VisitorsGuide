




<div class="row justify-content-center pb-2 pt-4">
    <div class="col-md-8 shadow" style="background-color: white; color: white">
        <div class="row">
            <div class="col-md-12 p-0" style="background-color: #424242; text-align: center; height: fit-content">
                 <span style="font-size: 60px; color:#ff9e0f">
                     {{Carbon\Carbon::parse($majlesy->majles_start)->format('d')}}
                  /span>
                <p class="m-0" style="background-color: #ff9e0f;">
                    {{\App\Enums\WeekDays::nameOfDays(Carbon\Carbon::parse($majlesy->majles_start)->localeDayOfWeek)}}
                </p>
            </div>
            <div class="col-md-12">
                <p class="mt-3" style="color: black">{{$majlesy->description}}</p>
                <p class="mb-0" style="color: #ff9e0f">
                    <span>وقت المناسبة :</span>
                    <span>
                        {{Carbon\Carbon::parse($majlesy->majles_start)->format('h:i')}}
                    </span>
                    <span>
                        {{\App\Enums\TimeArabic::getTimeInArabic(Carbon\Carbon::parse($majlesy->majles_start)->format('A'))}}
                    </span>
                </p>
                <p class="mb-1" style="color: #ff9e0f;">
                    <span>
                        {{$majlesy->city}}</span> - <span>{{$majlesy->district}}</span> - <span>{{$majlesy->closes_point}}
                    </span>

                </p>
                <i class="fas fa-map" style="color: #658aff"></i>
                <a  href="#" class="location" data-longitude="{{$majlesy->longitude}}" data-latitude="{{$majlesy->latitude}}"
                    data-toggle="modal" data-target=".bd-example-modal-lg">
                    اضغط هنا لتحديد العنوان على الخريطة
                </a>
                <div class="d-flex flex-row-reverse" style="position: absolute; top: 0; width:calc(100% - 15px);">
                    <div class="btn-group-vertical">
                        <a class="btn btn-light" href="/majales/update-majles-form/{{$majlesy->id}}" style="padding: 15px 2px 15px 2px; background-color: #4dd0e1">
                            <p class="rotate-90 p-0 m-0">تعديل</p>
                        </a>
                        <a class="btn btn-light delete" data-toggle="modal" data-id="{{$majlesy->id}}"
                           data-target="#deleteModal" style="padding: 15px 2px 15px 2px; background-color: #ff9e0f">
                            <p class="rotate-90 p-0 m-0">حذف</p>
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <div class="row mt-2">
            <div class="col-md-12 p-0" style="overflow: hidden">
                <div style="display: inline; font-size: 12px">
                    <div class="p-1" style="background-color: #4dd0e1; width: fit-content; display: inline">
                        <span>تبدء المنسابة</span>
                    </div>
                    <div class="p-1" style="width: fit-content; background-color: #ff9e0f; display: inline">
                        <span>{{Carbon\Carbon::parse($majlesy->majles_start)->format('y-m-d')}}</span>
                    </div>
                </div>
                <div style="display: inline; font-size: 12px">
                    <div class="p-1" style="background-color: #999999; width: fit-content; display: inline">
                        <span>تنتهي المناسبة</span>
                    </div>
                    <div class="p-1" style="background-color: #ff9e10; width: fit-content; display: inline">
                        <span>{{$majlesy->majles_end}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>