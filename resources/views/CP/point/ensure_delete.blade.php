@extends("CP.layout.layout")

@section("content")




    <div class="card text-center">
        <div class="card-header">
            <a href="/123456789123456789/all_point" class="btn btn-success"><i class="fa fa-chevron-right  "> الغاء العملية</i> </a>

        </div>
        <div class="card-body">
            <h5 class="card-title">سوف تقوم بحذف نقطة من على الخريطة</h5>
            <p class="card-text">هل انت متأكد ؟</p>

        </div>
        <div class="card-footer text-muted">
            <a href="/123456789123456789/delete_point/{{$id}}"  class="btn btn-warning"><i class="fa fa-trash-alt  ">  نعم , احذف  </i></a>
        </div>
    </div>









@endsection
