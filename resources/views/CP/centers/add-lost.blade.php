@extends("CP.layout.layout")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="col bg-white text-center border shadow-sm p-5" action="/control-panel/center/add-lost" method="post">
                    <p class="h4 mb-4">اضافة تائه او مفقود</p>

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
                    <div class="input-group mb-4">
                        <div class="w-25 input-group-append">
                            <span class="w-100 input-group-text">اسم المركز</span>
                        </div>
                        <input class="w-75 py-3 px-2" type="text" name="center" value="{{session()->get("CENTER_NAME")}}" readonly>
                    </div>

                    <div class="input-group mb-4">
                        <div class="w-25 input-group-append">
                            <span class="w-100 input-group-text">الصنف</span>
                        </div>

                        <select class="w-75 rounded-0 py-3 px-2" name="category">
                            <option class="py-1 px-2" value="{{\App\Enums\LostCategory::PERSON}}">{{\App\Enums\LostCategory::getCategory(\App\Enums\LostCategory::PERSON)}}</option>
                            <option class="py-1 px-2" value="{{\App\Enums\LostCategory::Money}}">{{\App\Enums\LostCategory::getCategory(\App\Enums\LostCategory::Money)}}</option>
                            <option class="py-1 px-2" value="{{\App\Enums\LostCategory::GOLD_PIECES}}">{{\App\Enums\LostCategory::getCategory(\App\Enums\LostCategory::GOLD_PIECES)}}</option>
                            <option class="py-1 px-2" value="{{\App\Enums\LostCategory::BAGS}}">{{\App\Enums\LostCategory::getCategory(\App\Enums\LostCategory::BAGS)}}</option>
                            <option class="py-1 px-2" value="{{\App\Enums\LostCategory::MOBILE}}">{{\App\Enums\LostCategory::getCategory(\App\Enums\LostCategory::MOBILE)}}</option>
                            <option class="py-1 px-2" value="{{\App\Enums\LostCategory::OTHER}}">{{\App\Enums\LostCategory::getCategory(\App\Enums\LostCategory::OTHER)}}</option>
                        </select>
                    </div>

                    <div class="input-group mb-4">
                        <div class="w-25 input-group-append">
                            <span class="w-100 input-group-text">الوصف  باللغة العربية</span>
                        </div>
                        <textarea class="w-75 rounded-0" rows="5" name="des_ar"></textarea>
                    </div>

                    <div class="input-group mb-4">
                        <div class="w-25 input-group-append">
                            <span class="w-100 input-group-text">الوصف باللغة الفارسية</span>
                        </div>
                        <textarea class="w-75 rounded-0" rows="5" name="des_fa"></textarea>
                    </div>

                    <div class="input-group mb-4">
                        <div class="w-25 input-group-append">
                            <span class="w-100 input-group-text">الوصف باللغة الانكليزية</span>
                        </div>
                        <textarea class="w-75 rounded-0" rows="5" name="des_en"></textarea>
                    </div>

                    <div class="input-group mb-4">
                        {{--<div class="w-25 input-group-append">--}}
                            {{--<span class="w-100 input-group-text">صورة المادة</span>--}}
                        {{--</div>--}}
                        <div class="w-75 custom-file rounded-0">
                            <input type="file" class="custom-file-input">
                            <label class="custom-file-label">تحميل  صورة </label>
                        </div>
                    </div>

                    <button class="btn btn-info btn-block btn-lg my-4" type="submit">حفظ </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script>

    </script>
@endsection