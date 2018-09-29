@extends("layout.primary_layout")

@section("content")
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <form class="col-12 col-sm-6 bg-white text-center border shadow-sm p-5" action="/login" method="post">
                    <p class="h4 mb-4">تسجيل دخول</p>

                    @if(count($errors))
                        <div class="alert alert-danger text-right">
                            <ul class="pr-3 mb-0">
                                @foreach($errors->all() as $error)
                                    <li class="my-1">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session("ErrorLoginMessage"))
                        <div class="alert alert-danger text-center">{{session("ErrorLoginMessage")}}</div>
                    @endif

                    {{ csrf_field() }}
                    <input type="text" name="phone" class="form-control mb-4" placeholder="رقم الهاتف">
                    <input type="password" name="password" class="form-control mb-4" placeholder="كلمة المرور">

                    <P class="mb-4 d-flex justify-content-start"><a href="/register">او قم بانشاء حساب</a></P>

                    <button class="btn btn-info btn-block my-4" type="submit">تسجيل دخول</button>
                </form>
            </div>
        </div>
    </div>
@endsection