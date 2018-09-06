@extends("layout.secondary_layout")

@section("navbar-color")
    {{"bg-teal-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">دليل التائهين والمفقودات</span>
@endsection
@section("content")
    <div id="app">
        <Losts></Losts>
    </div>
@endsection

@section("nav-items-bottom")
    <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-road text-white"></i></a>
@endsection
