@extends("layout.secondary_layout")

@section("navbar-color")
    {{"bg-orange-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">{{trans("words.visitor_feqh_title_questions")}}</span>
@endsection

@section("content")
    <div class="container pt-4 pb-5">
        @include("visitorFeqh.questions")
        @include("visitorFeqh.send_question")
        @include("visitorFeqh.ads_masael")
    </div>
@endsection

@section("menu-modal-content")
    <div class="modal-content border-0 rounded-0 shadow-special">
        <h4 class="modal-header bg-orange-gradient text-white rounded-0 m-0">
            <span>{{trans("words.menu_visitor_feqh")}}</span>
        </h4>

        <div class="modal-body">
            <div class="list-group">
                <a class="list-group-item list-group-item-action" id="show-questions">
                    <i class="fa fa-credit-card"></i>
                    <span>{{trans("words.visitor_feqh_menu_show_all_questions")}}</span>
                </a>
                <a class="list-group-item list-group-item-action" id="show-send-question">
                    <i class="fa fa-paper-plane"></i>
                    <span>{{trans("words.visitor_feqh_menu_send_question")}}</span>
                </a>
                <a class="list-group-item list-group-item-action" id="show-ads-maseal">
                    <i class="fa fa-download"></i>
                    <span>{{trans("words.visitor_feqh_menu_download_app_masael")}}</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section("script")
    {{--Change View Content--}}
    <script>
        $("#questions").addClass("d-block");
        $("#send-question").addClass("d-none");
        $("#ads-maseal").addClass("d-none");

        $("#show-questions").click(function () {
            $("#title").html("{{trans('words.visitor_feqh_title_questions')}}");
            $("#questions").removeClass("d-none").addClass("d-block");
            $("#send-question").removeClass("d-block").addClass("d-none");
            $("#ads-maseal").removeClass("d-block").addClass("d-none");
            setTimeout(function () {
                $("#menu-modal").modal("hide");
            }, 500);
        });

        $("#show-send-question").click(function () {
            $("#title").html("{{trans('words.visitor_feqh_title_send_question')}}");
            $("#questions").removeClass("d-block").addClass("d-none");
            $("#send-question").removeClass("d-none").addClass("d-block");
            $("#ads-maseal").removeClass("d-block").addClass("d-none");
            setTimeout(function () {
                $("#menu-modal").modal("hide");
            }, 500);
        });

        $("#show-ads-maseal").click(function () {
            $("#title").html("{{trans('words.visitor_feqh_title_ads_masael')}}");
            $("#questions").removeClass("d-block").addClass("d-none");
            $("#send-question").removeClass("d-block").addClass("d-none");
            $("#ads-maseal").removeClass("d-none").addClass("d-block");
            setTimeout(function () {
                $("#menu-modal").modal("hide");
            }, 500);
        });

        $("#learn-more").click(function () {
            $("#title").html("{{trans('words.visitor_feqh_title_ads_masael')}}");
            $("#questions").removeClass("d-block").addClass("d-none");
            $("#send-question").removeClass("d-block").addClass("d-none");
            $("#ads-maseal").removeClass("d-none").addClass("d-block");
        });
    </script>
@endsection