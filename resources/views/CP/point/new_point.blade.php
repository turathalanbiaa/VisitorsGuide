@extends("CP.layout.layout")



@section("content")
    <div class="container">


        <div class="row">
            @if(session('message'))
                <div class="col">
                </div>
                <div class="col">
                    <div class="alert alert-success w-100" role="alert">
                        {{session('message')}}
                    </div>

                </div>
                <div class="col">
                </div>
            @endif


            <div class="col-12 d-flex justify-content-center">
                <form class="col-12 col-sm-6" method="post" action="/control-panel/point/insert_point">
                    @csrf

                    <div class="form-group">

                        @include("items.cities")

                    </div>


                    <div class="form-group">
                        <label for="text">اسم المكان</label>
                        <input type="text" class="form-control" id="input_name" name="name" required placeholder="اسم الموكب , مركز صحي , حسينية  ...">
                    </div>

                    <div class="form-group ">
                        <label for="input_t_number">رقم العمود</label>
                        <input type="number" class="form-control" id="input_t_number"  name="t_number" placeholder="">
                    </div>


                    <div class="form-group">
                        <label for="input_category">النوع</label>
                        <select id="input_category" name="category" required class="form-control">

                            <option selected value="{{\App\Enums\PointCategory::MAWAKEP}}">موكب</option>
                            <option value="{{\App\Enums\PointCategory::LOST_CENTER}}">مركز تائهين</option>
                            <option value="{{\App\Enums\PointCategory::MEDICAL_CENTER}}">مركز صحي</option>
                            <option value="{{\App\Enums\PointCategory::PUBLIC}}">نقاط عامة</option>
                            <option value="{{\App\Enums\PointCategory::REFERENDUM_CENTER}}">مراكز استفتاءات</option>


                        </select>
                    </div>



                    <div class="form-group ">
                        <label for="input_description">وصف</label>
                        <input type="text" class="form-control" id="input_description"  name="description" placeholder="وجود حمامات , خدمات صحية ,....">
                    </div>

                    <div class="row">
                        <div class="col">
                        </div>
                        <div class="col">
                            <a class="btn btn-outline-info w-100" onclick="getLocation()">جلب الموقع</a>
                            <p id="demo"></p>
                        </div>
                        <div class="col">

                        </div>
                    </div>




                    <div class="row">
                        <div class="col">
                            <label for="text">خط الطول</label>
                            <input type="text" class="form-control" id="input_latitude"  name="latitude"  required placeholder="يجب جلب البيانات">

                        </div>
                        <div class="col">

                            <label for="text">خط العرض</label>
                            <input type="text" class="form-control" id="input_longitude"  name="longitude"  required placeholder="يجب جلب البيانات">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col">

                            <button type="submit" class="btn btn-primary w-100 mt-5"><i class="fa fa-street-view fa-2x">   </i>    حفظ    </button>


                        </div>
                        <div class="col">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script>
        var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {

            $("#input_latitude").val(position.coords.latitude);
            $("#input_longitude").val(position.coords.latitude);
            $("#input_latitude").attr("readonly","readonly");
            $("#input_longitude").attr("readonly","readonly");
        }

        function showError(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    x.innerHTML = "لم تسمح بالوصول الى الموقع"
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.innerHTML = "معلومات الموقع غير متوفرة"
                    break;
                case error.TIMEOUT:
                    x.innerHTML = "الاتصال بالشبكة ضعيف جدا"
                    break;
                case error.UNKNOWN_ERROR:
                    x.innerHTML = "خطأ غير معروف"
                    break;
            }
        }
    </script>

@endsection