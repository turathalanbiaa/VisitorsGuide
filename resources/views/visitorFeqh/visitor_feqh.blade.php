@extends("layout.secondary_layout")

@section("navbar-color")
    {{"bg-orange-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">{{trans("words.visitor_feqh_title_questions")}}</span>
@endsection

@section("content")
    <div class="container pt-4 pb-2">
        @include("visitorFeqh.questions")
        @include("visitorFeqh.app_masael")
    </div>
@endsection

@section("menu-modal-content")
    <div class="modal-content border-0 rounded-0 shadow-special">
        <h4 class="modal-header bg-orange-gradient text-white rounded-0 m-0">
            <span>{{trans("words.menu_visitor_feqh")}}</span>
        </h4>

        <div class="modal-body">
            <div class="list-group">
                <a class="list-group-item list-group-item-action" @if(isset($_GET["category"])) href="/visitor-feqh" @else id="show-questions" @endif>
                    <i class="fa fa-credit-card"></i>
                    <span>{{trans("words.visitor_feqh_menu_show_all_questions")}}</span>
                </a>
                <a class="list-group-item list-group-item-action" id="send-question" href="http://masael.turathalanbiaa.com/ar/send-question" target="_blank">
                    <i class="fa fa-paper-plane"></i>
                    <span>{{trans("words.visitor_feqh_menu_send_question")}}</span>
                </a>
                <a class="list-group-item list-group-item-action" id="show-app-maseal">
                    <i class="fa fa-download"></i>
                    <span>{{trans("words.visitor_feqh_menu_app_masael")}}</span>
                </a>
                <div class="list-group-item" data-toggle="collapse" data-target="#category-list" aria-expanded="false" aria-controls="category-list">
                    <i class="fa fa-filter"></i>
                    <span>{{trans("words.visitor_feqh_menu_filter")}}</span>

                    <div class="collapse" id="category-list">
                        <div class="list-group list-group-flush mx-3">
                            <a class="list-group-item list-group-item-action" href="/visitor-feqh?category={{\App\Enums\QuestionCategory::QA_ZUAREA}}">
                                {{\App\Enums\QuestionCategory::getFliterName(app()->getLocale(), \App\Enums\QuestionCategory::QA_ZUAREA)}}
                            </a>
                            <a class="list-group-item list-group-item-action" href="/visitor-feqh?category={{\App\Enums\QuestionCategory::QA_ZUAREA_INTENTION}}">
                                {{\App\Enums\QuestionCategory::getFliterName(app()->getLocale(), \App\Enums\QuestionCategory::QA_ZUAREA_INTENTION)}}
                            </a>
                            <a class="list-group-item list-group-item-action" href="/visitor-feqh?category={{\App\Enums\QuestionCategory::QA_WUDOO}}">
                                {{\App\Enums\QuestionCategory::getFliterName(app()->getLocale(), \App\Enums\QuestionCategory::QA_WUDOO)}}
                            </a>
                            <a class="list-group-item list-group-item-action" href="/visitor-feqh?category={{\App\Enums\QuestionCategory::QA_PRAYER}}">
                                {{\App\Enums\QuestionCategory::getFliterName(app()->getLocale(), \App\Enums\QuestionCategory::QA_PRAYER)}}
                            </a>
                            <a class="list-group-item list-group-item-action" href="/visitor-feqh?category={{\App\Enums\QuestionCategory::QA_PROSTRATION}}">
                                {{\App\Enums\QuestionCategory::getFliterName(app()->getLocale(), \App\Enums\QuestionCategory::QA_PROSTRATION)}}
                            </a>
                            <a class="list-group-item list-group-item-action" href="/visitor-feqh?category={{\App\Enums\QuestionCategory::QA_TRAVELERS_PRAYER}}">
                                {{\App\Enums\QuestionCategory::getFliterName(app()->getLocale(), \App\Enums\QuestionCategory::QA_TRAVELERS_PRAYER)}}
                            </a>
                            <a class="list-group-item list-group-item-action" href="/visitor-feqh?category={{\App\Enums\QuestionCategory::QA_COMMUNITY_PRAYER}}">
                                {{\App\Enums\QuestionCategory::getFliterName(app()->getLocale(), \App\Enums\QuestionCategory::QA_COMMUNITY_PRAYER)}}
                            </a>
                            <a class="list-group-item list-group-item-action" href="/visitor-feqh?category={{\App\Enums\QuestionCategory::QA_THE_SHOT}}">
                                {{\App\Enums\QuestionCategory::getFliterName(app()->getLocale(), \App\Enums\QuestionCategory::QA_THE_SHOT)}}
                            </a>
                            <a class="list-group-item list-group-item-action" href="/visitor-feqh?category={{\App\Enums\QuestionCategory::QA_WALK_TO_THE_HOLY_SHRINES}}">
                                {{\App\Enums\QuestionCategory::getFliterName(app()->getLocale(), \App\Enums\QuestionCategory::QA_WALK_TO_THE_HOLY_SHRINES)}}
                            </a>
                            <a class="list-group-item list-group-item-action" href="/visitor-feqh?category={{\App\Enums\QuestionCategory::SPORADIC_PROVISIONS}}">
                                {{\App\Enums\QuestionCategory::getFliterName(app()->getLocale(), \App\Enums\QuestionCategory::SPORADIC_PROVISIONS)}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    {{--Change View Content--}}
    <script>
        $("#questions").addClass("d-block");
        $("#app-maseal").addClass("d-none");
        $("#show-questions").click(function () {
            $("#title").html("{{trans('words.visitor_feqh_title_questions')}}");
            $("#questions").removeClass("d-none").addClass("d-block");
            $("#app-maseal").removeClass("d-block").addClass("d-none");
            setTimeout(function () {
                $("#menu-modal").modal("hide");
            }, 500);
        });
        $("#show-app-maseal").click(function () {
            $("#title").html("{{trans('words.visitor_feqh_title_app_masael')}}");
            $("#questions").removeClass("d-block").addClass("d-none");
            $("#app-maseal").removeClass("d-none").addClass("d-block");
            setTimeout(function () {
                $("#menu-modal").modal("hide");
            }, 500);
        });
        $("#learn-more").click(function () {
            $("#title").html("{{trans('words.visitor_feqh_title_app_masael')}}");
            $("#questions").removeClass("d-block").addClass("d-none");
            $("#app-maseal").removeClass("d-none").addClass("d-block");
        });
        $("#send-question").click(function () {
            setTimeout(function () {
                $("#menu-modal").modal("hide");
            }, 500);
        });
    </script>
@endsection