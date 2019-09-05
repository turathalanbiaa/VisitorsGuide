@extends('layout.secondary_layout')

@section("navbar-color")
    {{"bg-orange-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">المجالس - اضافة مجلس</span>
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
        <form class="pt-2" method="post" action="{{route('updateMajles')}}">
            @csrf
            <div class="form-group">
                <label for="description">الوصف</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                          placeholder="الرجاء ادخال الوصف" required>{{$majles->description}}</textarea>
                <small id="descHelp" class="form-text text-muted">الرجاء كتابة وصف مختصر للمناسبة</small>
            </div>
            <div class="form-group">
                <label for="cities">المحافظة</label>
                <select class="form-control" id="cities" name="cities" required>
                    <option value="{{route('eventsCity', App\Enums\Cities::CITIES[app()->getLocale()][$i])}}">
                        {{App\Enums\Cities::CITIES[app()->getLocale()][$i]}}
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="district">الحي او القضاء</label>
                <input type="text" class="form-control" value="{{$majles->district}}"
                       name="district" id="district" placeholder="الرجاء ادخال اسم الحي او القضاء" required>
            </div>
            <div class="form-group">
                <label for="closesPoint">اقرب نقطة دالة</label>
                <input type="text" class="form-control" name="closesPoint" value ="{{$majles->closes_point}}"
                       id="closesPoint" placeholder="الرجاء كتابة عنوان اقرب نقطة دالة" required>
            </div>
            <div class="form-group">
                <label for="majlesStart">تاريخ بدء المناسبة</label>
                <input type="datetime-local" class="form-control" name="majlesStart" value ="{{$majles->majles_start}}"
                       id="majlesStart" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">تاريخ انتهاء المناسبة</label>
                <input type="date" class="form-control" name="majlesEnd" value="{{$majles->majles_end}}"
                       id="exampleInputPassword1" placeholder="الرجاء كتابة عن،ان اقرب نقطة دالة" required>
                <input type="hidden" class="form-control" value="{{$majles->id}}" name="id">
            </div>
            <button type="submit" class="btn btn-primary mb-2">تعديل المجلس</button>
        </form>
    </div>

@endsection

@component('majales.component.main_menu')
@endcomponent

@section('script')
    <script src="{{asset('js/js-webshim/minified/polyfiller.js')}}"></script>
    <script>
        webshim.polyfill('forms-ext');
        webshim.setOptions({
            extendNative: true
        });
    </script>
    <script>
        const option = document.getElementsByTagName('option');
        document.getElementById('majlesStart').value = '{{$majles->majles_start}}'.replace(' ', 'T');

        for (let i =0; i<option.length; i++)
        {
            if (option[i].value === '{{$majles->city}}')
            {
                option[i].setAttribute('selected',true)
            }
        }
    </script>
@endsection