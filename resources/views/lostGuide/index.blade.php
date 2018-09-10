@extends("layout.vue-layout")

@section("navbar-color")
    {{"bg-teal-gradient"}}
@endsection

@section("navbar-brand")
    <span >دليل التائهين والمفقودات</span>
@endsection

@section("content")
        <router-view name="lostIndex"></router-view>
        <router-view></router-view>
@endsection

@section("nav-items-bottom")
    <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-road text-white"></i></a>
@endsection
