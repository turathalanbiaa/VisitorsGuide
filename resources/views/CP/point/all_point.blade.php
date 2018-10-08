@extends("CP.layout.layout")
@section("content")
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


    <div >

     <a href="/123456789123456789/new_point"><i  class="rounded-circle m-4 fa fa-plus-circle fa-3x shadow"></i></a>

    </div>

<div class="container col-7 mb-4" style="margin-top: -95px">

    @include("items.cities")

</div>

    @foreach($points as $point)
        <li class="list-group-item">
            <div class="container">
                <div class="row">

                    <div class="col-sm-5 ">
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
                        <a href="/123456789123456789/edit_point/{{$point->id}}" class="btn btn-success"><i class="fa fa-edit  "> تعديل </i></a>
                        <a href="/123456789123456789/ensure_delete/{{$point->id}}"  class="btn btn-primary"><i class="fa fa-trash-alt  "> حذف </i></a>
                    </div>
                </div>
            </div>
        </li>
    @endforeach


@endsection