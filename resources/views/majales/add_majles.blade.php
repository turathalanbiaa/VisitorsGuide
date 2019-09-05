@extends('layout.secondary_layout')

@section("navbar-brand")
    <span id="title">اضافة مجلس</span>
@endsection

@section('content')
    <div class="container shadow-sm p-2" style="background-color: white">
        <h2 class="text-center pt-2">اضافة مجلس</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="pt-2" method="post" action="/majales/save-majles">
            @csrf
            <div class="form-group">
                <label for="description">الوصف</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="الرجاء ادخال الوصف" required></textarea>
                <small id="descHelp" class="form-text text-muted">الرجاء كتابة وصف مختصر للمناسبة</small>
            </div>
            <div class="form-group">
                <label for="cities">المحافظة</label>
                <select class="form-control" id="cities"  name="cities" required>
                    @foreach(\App\Enums\Cities::CITIES[app()->getLocale()] as $city)
                        <option value="{{$city}}">{{$city}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="district">الحي او القضاء</label>
                <input type="text" class="form-control" name="district" id="district"
                       placeholder="الرجاء ادخال اسم الحي او القضاء"
                       required />
            </div>
            <div class="form-group">
                <label for="closesPoint">اقرب نقطة دالة</label>
                <input type="text" class="form-control" name="closesPoint" id="closesPoint"
                       placeholder="الرجاء كتابة عن،ان اقرب نقطة دالة"
                       />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">تاريخ بدء المناسبة</label>
                <input type="datetime-local" class="form-control" name="majlesStart"
                       placeholder="الرجاء كتابة عن،ان اقرب نقطة دالة"
                       required />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">تاريخ انتهاء المناسبة</label>
                <input type="date" class="form-control" name="majlesEnd"
                       placeholder="الرجاء كتابة عنوان اقرب نقطة دالة"
                       required />
                <input type="hidden" class="form-control" name="latitude" id="latitude">
                <input type="hidden" class="form-control" name="longitude" id="longitude">
                <input type="hidden" class="form-control" name="fingerPrint" id="fingerPrint">
            </div>
            {{-- remove comment if you need to detect location on map --}}
            {{--
            <div class="form-group">
                <i class="fas fa-map-marker-alt" style="color: #007bff"></i>
                <button type="button" class="btn btn-link pr-1" id="location">  الرجاء اضغط هنا لتحديد الموقع</button>
            </div>
            --}}

            <button type="submit" class="btn btn-primary mb-2" id="add-majles">اضافة مجلس</button>
        </form>
    </div>
@endsection

@component('majales.component.main_menu')@endcomponent

{{-- remove comment if you need to detect location on map --}}
@section('script')
    {{--
    <script src="{{asset('js/js-webshim/minified/polyfiller.js')}}"></script>
    <script>
        webshim.polyfill('forms-ext');
        webshim.setOptions({
            extendNative: true
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#location').click(function () {
                if (navigator.geolocation) {
                    $('#location').text('الرجاء الانتظار جاري تحديد الموقع');
                    $('#add-majles').attr('disabled',true);
                    navigator.geolocation.getCurrentPosition(showPosition)
                }
            })
        });
        function showPosition(position) {
            $('#latitude').val(position.coords.latitude);
            $('#longitude').val(position.coords.longitude);
            $('#location').text('شكراً لك تم تحديد الموقع');
            $('#location').attr('disabled',true);
            $('#add-majles').attr('disabled',false);
        }
    </script>
    <script src="{{asset('js/fingerprint.js')}}"></script>
    <script>
        $(document).ready(function () {
            var fingerPrint = new Fingerprint().get();
            $('#fingerPrint').val(fingerPrint);
        })
    </script>
    --}}
@endsection