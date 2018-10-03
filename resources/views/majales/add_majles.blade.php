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
                <label for="district">الحي او القضاء</label>
                <input type="text" class="form-control" name="district" id="district" placeholder="الرجاء ادخال اسم الحي او القضاء" required>
            </div>
            <div class="form-group">
                <label for="closesPoint">اقرب نقطة دالة</label>
                <input type="text" class="form-control" name="closesPoint" id="closesPoint" placeholder="الرجاء كتابة عن،ان اقرب نقطة دالة" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">تاريخ بدء المناسبة</label>
                <input type="datetime-local" class="form-control" name="majlesStart" id="exampleInputPassword1" placeholder="الرجاء كتابة عن،ان اقرب نقطة دالة" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">تاريخ انتهاء المناسبة</label>
                <input type="date" class="form-control" name="majlesEnd" id="exampleInputPassword1" placeholder="الرجاء كتابة عن،ان اقرب نقطة دالة" required>
                <input type="hidden" class="form-control" name="latitude" id="latitude">
                <input type="hidden" class="form-control" name="longitude" id="longitude">
                <input type="hidden" class="form-control" name="fingerPrint" id="fingerPrint">
            </div>
            <div class="form-group">
                <i class="fas fa-map-marker-alt" style="color: #007bff"></i>
                <button type="button" class="btn btn-link pr-1" id="location">  الرجاء اضغط هنا لتحديد الموقع</button>
            </div>
            <button type="submit" class="btn btn-primary mb-2" id="add-majles">اضافة مجلس</button>
        </form>
    </div>

@endsection
@section("menu-modal-content")
    <div class="modal-content border-0 rounded-0 shadow-special">
        <h4 class="modal-header bg-orange-gradient text-white rounded-0 m-0">
            <span>المجالس</span>
        </h4>

        <div class="modal-body">
            <div class="list-group">
                <a href="/majales/events-gallery" class="list-group-item list-group-item-action" id="show-questions">
                    <i class="fas fa-camera-retro"></i>
                    <span>الاستديو</span>
                </a>
                <a href="/majales/add-majles" class="list-group-item list-group-item-action" id="show-questions">
                    <i class="fas fa-plus"></i>
                    <span>اضافة مجلس</span>
                </a>
                <a href="/majales/majalesy" class="list-group-item list-group-item-action" id="show-questions">
                    <i class="fas fa-calendar-alt"></i>
                    <span>مجالسي</span>
                </a>
                <a href="/majales" class="list-group-item list-group-item-action" id="show-questions">
                    <i class="fas fa-calendar-alt"></i>
                    <span>عرض جميع المناسبات</span>
                </a>
                <a href="/majales/events-upcoming" class="list-group-item list-group-item-action" id="show-questions">
                    <i class="fas fa-hourglass-start"></i>
                    <span>عرض المناسبات التي لم تبدء الى الان</span>
                </a>
                <a href="/majales/events-ended" class="list-group-item list-group-item-action" id="show-send-question">
                    <i class="fas fa-hourglass-end"></i>
                    <span>عرض المناسبات الفائتة</span>
                </a>
                <a href="/majales/events-started" href="events" class="list-group-item list-group-item-action" id="show-ads-maseal">
                    <i class="fas fa-hourglass-half"></i>
                    <span>عرض المناسبات التي بدأت </span>
                </a>

                <div class="list-group-item" data-toggle="collapse" data-target="#category-list" aria-expanded="false" aria-controls="category-list">
                    <i class="fas fa-building"></i>
                    <span>عرض المناسبات حسب المحافظة</span>

                    <div class="collapse" id="category-list">
                        <div class="list-group list-group-flush mx-3">
                            <a href="/majales/events-city/{{\App\Enums\Cities::NAJ}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::NAJ}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::KAR}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::KAR}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::BAGH}}" class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::BAGH}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::BAB}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::BAB}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::QAD}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::QAD}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::WAS}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::WAS}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::MUTH}}" class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::MUTH}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::MAY}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::MAY}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::THI}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::THI}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::BAS}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::BAS}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::ANB}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::ANB}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::DIY}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::DIY}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::SAL}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::SAL}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::KIR}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::KIR}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::NIN}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::NIN}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::ARB}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::ARB}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::SUL}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::SUL}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::DHU}}"  class="list-group-item list-group-item-action">
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
            let fingerPrint = new Fingerprint().get();
            $('#fingerPrint').val(fingerPrint);
        })
    </script>

@endsection