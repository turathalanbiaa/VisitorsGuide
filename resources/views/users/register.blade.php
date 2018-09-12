@extends('layout.secondary_layout')

@section("navbar-color")
    {{"bg-orange-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">المجالس - عرض الجميع</span>
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
                <label for="name">الاسم واللقب</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="الرجاء كتابة الاسم الثلاثي مع اللقب" required/>
            </div>
            <div class="form-group">
                <label for="email">البريد الألكتروني</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="الرجاء كتابة عنوان بريد الكتروني صحيح" required/>
            </div>
            <div class="form-group">
                <label for="phone-number">رقم الهاتف</label>
                <input type="number" class="form-control" id="phone-number" name="phone-number" placeholder="الرجاء كتابة رقم هاتف صحيح" required/>
            </div>
            <div class="form-group">
                <label for="password">كلمة السر</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="الرجاء كتابة كلمة سر لا تقل عن 8 حروف" required/>
            </div>
            <div class="form-group">
                <label for="password-confirm">تاكيد كلمة السر</label>
                <input type="password" class="form-control" id="password-confirm" name="password-confirm" placeholder="الرجاء قم باعدة كتابة كلمة السر" required/>
            </div>
            <button type="submit" class="btn btn-primary mb-2" id="add-majles">اضافة مجلس</button>
        </form>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/bootstrap-validate.js')}}"></script>
    <script>
        bootstrapValidate('#email', 'email:يجب كتابة عبوان بريد الكتروني صحيح', function (isValid) {
            $('#email').addClass('is-valid');
        });
        bootstrapValidate('#name', 'min:8:الرجاء كتابة الاسم الحقيقي', function (isValid) {
            $('#email').addClass('is-valid');
        });
        bootstrapValidate('#name', 'max:60:الاسم تعدى عدد الحروف المسموح بها', function (isValid) {
            $('#email').addClass('is-valid');
        });
        bootstrapValidate('#phone-number', 'min:السلام عليكم', function (isValid) {
            $('#email').addClass('is-valid');
        });
        bootstrapValidate('#email', 'password:السلام عليكم', function (isValid) {
            $('#email').addClass('is-valid');
        });
        bootstrapValidate('#email', 'password-confirm:السلام عليكم', function (isValid) {
            $('#email').addClass('is-valid');
        });
    </script>
@endsection
