<div class="row justify-content-center pb-2 pt-4">
    <div class="col-md-8 shadow bg-white text-white">
        <div class="row">
            <div class="col-md-12 text-center p-0" style="background-color: #424242; text-align: center; height: fit-content">
                <p class="text-vg-light p-3" style="font-size: 50px;">
                    {{\App\Enums\WeekDays::nameOfDays(Carbon\Carbon::parse($event->majles_start)->localeDayOfWeek)}}
                </p>
                <p class="py-1 mb-0 bg-vg-light"></p>
            </div>
            <div class="col-md-12">
                <p class="mt-3 text-dark">{{$event->description}}</p>
                <p class="mb-0 text-vg-light">
                    <span>وقت المناسبة :</span>
                    <span>
                        {{Carbon\Carbon::parse($event->majles_start)->format('h:i')}}
                    </span>
                    <span>
                        {{\App\Enums\TimeArabic::getTimeInArabic(Carbon\Carbon::parse($event->majles_start)->format('A'))}}
                    </span>
                </p>
                <p class="mb-1 text-vg-light">
                    <span>{{$event->city}}</span>
                    <span>{{' - ' . $event->district}}</span>
                    @if(!is_null($event->closes_point))
                        <span>{{' - ' . $event->closes_point}}</span>
                    @endif
                </p>

                {{-- remove comment if you need to show location on map --}}
                {{--
                <i class="fas fa-map" style="color: #658aff"></i>
                <a href="#" class="location" data-longitude="" data-latitude="" data-toggle="modal" data-target=".bd-example-modal-lg">
                    اضغط هنا لتحديد العنوان على الخريطة
                </a>
                --}}
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12 p-0" style="overflow: hidden">
                <div style="display: inline; font-size: 12px">
                    <div class="p-1" style="background-color: #999999; width: fit-content; display: inline">
                        <span>تبدء المنسابة</span>
                    </div>
                    <div class="p-1 bg-vg-light" style="width: fit-content; display: inline">
                        <span>{{Carbon\Carbon::parse($event->majles_start)->format('Y-m-d')}}</span>
                    </div>
                </div>
                <div style="display: inline; font-size: 12px">
                    <div class="p-1" style="background-color: #999999; width: fit-content; display: inline">
                        <span>تنتهي المناسبة</span>
                    </div>
                    <div class="p-1 bg-vg-light" style="width: fit-content; display: inline">
                        <span>{{$event->majles_end}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>