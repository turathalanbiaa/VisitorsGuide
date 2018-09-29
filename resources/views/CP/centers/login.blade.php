@extends("CP.layout.layout")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <form class="col-12 col-sm-6 bg-white text-center border shadow-sm p-5" action="/control-panel/center/login" method="post">
                    <p class="h4 mb-4">تسجيل الدخول</p>

                    @if(count($errors))
                        <div class="alert alert-danger text-right">
                            <ul class="pr-3">
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
                    <input type="text" id="username" name="username" class="form-control mb-4" placeholder="اسم المركز">
                    <input type="password" id="password" name="password" class="form-control mb-4" placeholder="كلمة المرور">

                    <button class="btn btn-info btn-block my-4" type="submit">تسجيل الدخول</button>
                </form>
            </div>
        </div>
    </div>
@endsection