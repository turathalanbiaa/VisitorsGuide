@extends("layout.primary_layout")

@section("content")
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <form class="col-12 col-sm-6 bg-white text-center border shadow-sm p-5" action="/register" method="post">
                    <p class="h4 mb-4">انشاء حساب</p>

                    @if(count($errors))
                        <div class="alert alert-danger text-right">
                            <ul class="pr-3 mb-0">
                                @foreach($errors->all() as $error)
                                    <li class="my-1">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session("ErrorRegisterMessage"))
                        <div class="alert alert-danger text-center">{{session("ErrorRegisterMessage")}}</div>
                    @endif

                    {{ csrf_field() }}
                    <input type="text" name="name" class="form-control mb-4" placeholder="الاسم الحقيقي">
                    <input type="text" name="username" class="form-control mb-4" placeholder="اسم المستخدم">
                    <input type="password" name="password" class="form-control mb-4" placeholder="كلمة المرور">
                    <input type="password" name="password_confirmation" class="form-control mb-4" placeholder="اعد كتابة كلمة المرور">

                    <P class="mb-4 d-flex justify-content-start"><a href="/login">او قم بتسجيل الدخول</a></P>

                    <button class="btn btn-info btn-block my-4" type="submit">انشاء حساب</button>
                </form>
            </div>
        </div>
    </div>
@endsection