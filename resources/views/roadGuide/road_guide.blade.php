@extends("layout.secondary_layout")

@section("top-title")
    <span>دليل الطريق</span>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach($points as $point)
                    {{$point->name}}
                @endforeach
            </div>
        </div>
    </div>
@endsection