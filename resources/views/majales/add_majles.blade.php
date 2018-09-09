@extends('layout.secondary_layout')

@section('top-title')
    <h1>دليل الزيارات والادعية</h1>

@endsection

@section('content')
    <div class="container mt-5 shadow-sm p-2" style="background-color: white">
        <h2 class="text-center">اضافة مناسبة</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="pt-5" method="post" action="/majales/save-majles">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">ال،صف</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="الرجاء ادخال الوصف" required></textarea>
                <small id="descHelp" class="form-text text-muted">الرجاء كتابة وصف مختصر للمناسبة</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">المحافظة</label>
                <select class="form-control" id="exampleFormControlSelect1"  name="cities" required>
                    <option value="{{\App\Enums\Cities::NAJ}}">{{\App\Enums\Cities::NAJ}}</option>
                    <option value="{{\App\Enums\Cities::KAR}}">{{\App\Enums\Cities::KAR}}</option>
                    <option value="{{\App\Enums\Cities::BAGH}}">{{\App\Enums\Cities::BAGH}}</option>
                    <option value="{{\App\Enums\Cities::BAB}}">{{\App\Enums\Cities::BAB}}</option>
                    <option value="{{\App\Enums\Cities::QAD}}">{{\App\Enums\Cities::QAD}}</option>
                    <option value="{{\App\Enums\Cities::MUTH}}">{{\App\Enums\Cities::MUTH}}</option>
                    <option value="{{\App\Enums\Cities::WAS}}">{{\App\Enums\Cities::WAS}}</option>
                    <option value="{{\App\Enums\Cities::MAY}}">{{\App\Enums\Cities::MAY}}</option>
                    <option value="{{\App\Enums\Cities::THI}}">{{\App\Enums\Cities::THI}}</option>
                    <option value="{{\App\Enums\Cities::BAS}}">{{\App\Enums\Cities::BAS}}</option>
                    <option value="{{\App\Enums\Cities::ANB}}">{{\App\Enums\Cities::ANB}}</option>
                    <option value="{{\App\Enums\Cities::DIY}}">{{\App\Enums\Cities::DIY}}</option>
                    <option value="{{\App\Enums\Cities::SAL}}">{{\App\Enums\Cities::SAL}}</option>
                    <option value="{{\App\Enums\Cities::NIN}}">{{\App\Enums\Cities::NIN}}</option>
                    <option value="{{\App\Enums\Cities::KIR}}">{{\App\Enums\Cities::KIR}}</option>
                    <option value="{{\App\Enums\Cities::ARB}}">{{\App\Enums\Cities::ARB}}</option>
                    <option value="{{\App\Enums\Cities::DHU}}">{{\App\Enums\Cities::DHU}}</option>
                    <option value="{{\App\Enums\Cities::SUL}}">{{\App\Enums\Cities::SUL}}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">الحي او القضاء</label>
                <input type="text" class="form-control" name="district" id="exampleInputPassword1" placeholder="الرجاء ادخال اسم الحي او القضاء" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">اقرب نقطة دالة</label>
                <input type="text" class="form-control" name="closesPoint" id="exampleInputPassword1" placeholder="الرجاء كتابة عن،ان اقرب نقطة دالة" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">تاريخ بدا المناسبة</label>
                <input type="datetime-local" class="form-control" name="majlesStart" id="exampleInputPassword1" placeholder="الرجاء كتابة عن،ان اقرب نقطة دالة" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">تاريخ بدا المناسبة</label>
                <input type="time" class="form-control" name="" id="exampleInputPassword1" placeholder="الرجاء كتابة عن،ان اقرب نقطة دالة" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">تاريخ انتهاء المناسبة</label>
                <input type="date" class="form-control" name="majlesEnd" id="exampleInputPassword1" placeholder="الرجاء كتابة عن،ان اقرب نقطة دالة" required>
                <input type="hidden" class="form-control" name="latitude" id="latitude">
                <input type="hidden" class="form-control" name="longitude" id="longitude">
            </div>
            <div class="form-group">
                <i class="fas fa-map-marker-alt" style="color: #007bff"></i>
                <button type="button" class="btn btn-link pr-1" id="location">  الرجاء اضغط هنا لتحديد الموقع</button>
            </div>
            <button type="submit" class="btn btn-primary mb-2" id="add-majles">اضافة مجلس</button>
        </form>
    </div>

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
@endsection