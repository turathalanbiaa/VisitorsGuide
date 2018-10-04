@extends("CP.layout.layout")
@section("content")
<div class="container col-2 mb-4">
    @include("items.cities")
</div>

    @foreach($points as $point)
        <li class="list-group-item">
            <div class="container">
                <div class="row">
                    <div class="col-sm ">
                        {{$point->name}}

                    </div>
                    <div class="col-sm">
                        @if($point->category == 1)
                        موكب
                        @elseif($point->category == 2)
                      حمامات
                        @elseif($point->category == 3)
                            نقاط عامة
                        @elseif($point->category == 4)
                            مركز مفقودين
                        @elseif($point->category == 5)
                            مركز استفتاء
                        @elseif($point->category == 6)
                            مركز صحي
                        @endif


                    </div>
                    <div class="col-sm">
                        <button class="btn btn-success">تعديل</button>
                        <button class="btn btn-primary">حذف</button>
                    </div>
                </div>
            </div>
        </li>
    @endforeach


@endsection