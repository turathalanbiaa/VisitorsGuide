@extends("layout.primary_layout")

@section("content")
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-12 col-sm-6 mt-5">
                <div class="card border-0 shadow-card bg-transparent h-100">
                    <div class="text-white text-center p-4 mx-3 shadow-card-heading rounded bg-aqua-gradient" style="margin-top: -16px;">
                        <h4 class="m-0 py-3">{{trans("words.main_road_guide_title")}}</h4>
                    </div>

                    <div class="card-body rounded mx-0">
                        <p class="text-justify">{{trans("words.main_road_guide_detail")}}</p>
                        <div class="d-flex flex-row-reverse">
                            <a href="/road-guide" class="btn bg-aqua-gradient btn-shadow">
                                <span>{{trans("words.main_btn_enter")}}</span>
                                <i class="fa fa-road text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 mt-5">
                <div class="card border-0 shadow-card bg-transparent h-100">
                    <div class="text-white text-center p-4 mx-3 shadow-card-heading rounded bg-orange-gradient" style="margin-top: -16px;">
                        <h4 class="m-0 py-3">{{trans("words.main_visitor_feqh_title")}}</h4>
                    </div>

                    <div class="card-body rounded mx-0">
                        <p class="text-justify">{{trans("words.main_visitor_feqh_detail")}}</p>
                        <div class="d-flex flex-row-reverse">
                            <a href="/visitor-feqh" class="btn bg-orange-gradient btn-shadow">
                                <span>{{trans("words.main_btn_enter")}}</span>
                                <i class="fa fa-list-alt text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 mt-5">
                <div class="card border-0 shadow-card bg-transparent h-100">
                    <div class="text-white text-center p-4 mx-3 shadow-card-heading rounded bg-olive-gradient" style="margin-top: -16px;">
                        <h4 class="m-0 py-3">{{trans("words.main_majales_guide_title")}}</h4>
                    </div>

                    <div class="card-body rounded mx-0">
                        <p class="text-justify">{{trans("words.main_majales_guide_detail")}}</p>
                        <div class="d-flex flex-row-reverse">
                            <a href="/majales" class="btn bg-olive-gradient btn-shadow">
                                <span>{{trans("words.main_btn_enter")}}</span>
                                <i class="fa fa-microphone-alt text-white align-middle"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 mt-5">
                <div class="card border-0 shadow-card bg-transparent h-100">
                    <div class="text-white text-center p-4 mx-3 shadow-card-heading rounded bg-blue-gradient" style="margin-top: -16px;">
                        <h4 class="m-0 py-3">{{trans("words.main_visitor_reception_title")}}</h4>
                    </div>

                    <div class="card-body rounded mx-0">
                        <p class="text-justify">{{trans("words.main_visitor_reception_detail")}}</p>
                        <div class="d-flex flex-row-reverse">
                            <a href="/reception" class="btn bg-blue-gradient btn-shadow">
                                <span>{{trans("words.main_btn_enter")}}</span>
                                <i class="fa fa-school text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 my-sm-5 mt-5">
                <div class="card border-0 shadow-card bg-transparent h-100">
                    <div class="text-white text-center p-4 mx-3 shadow-card-heading rounded bg-teal-gradient" style="margin-top: -16px;">
                        <h4 class="m-0 py-3">{{trans("words.main_centers_title")}}</h4>
                    </div>

                    <div class="card-body rounded mx-0">
                        <p class="text-justify">{{trans("words.main_centers_detail")}}</p>
                        <div class="d-flex flex-row-reverse">
                            <a href="{{url("/lost")}}" class="btn bg-teal-gradient btn-shadow">
                                <span>{{trans("words.main_btn_enter")}}</span>
                                <i class="fa fa-route text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 my-sm-5 my-5">
                <div class="card border-0 shadow-card bg-transparent h-100">
                    <div class="text-white text-center p-4 mx-3 shadow-card-heading rounded bg-purple-gradient" style="margin-top: -16px;">
                        <h4 class="m-0 py-3">{{trans("words.main_adeua_and_zuarat_title")}}</h4>
                    </div>

                    <div class="card-body rounded mx-0">
                        <p class="text-justify">{{trans("words.main_adeua_and_zuarat_detail")}}</p>
                        <div class="d-flex flex-row-reverse">
                            <a href="/adeua-and-zuarat/" class="btn bg-purple-gradient btn-shadow">
                                <span>{{trans("words.main_btn_enter")}}</span>
                                <i class="fab fa-audible text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection