@extends("layout.vue-layout")

@section("content")
<router-view name="VisitorsReceptionIndex"></router-view>
<router-view></router-view>
@endsection

@section("nav-items-bottom")
    <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-road text-white"></i></a>
@endsection
