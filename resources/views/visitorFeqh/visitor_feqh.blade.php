@extends("layout.secondary_layout")

@section("top-title")
    <span id="title">{{trans("words.visitor_feqh_title_questions")}}</span>
@endsection

@section("content")
    <div class="container pt-4 pb-5">
        @include("visitorFeqh.questions")
        @include("visitorFeqh.send_question")
        @include("visitorFeqh.ads_masael")
    </div>
@endsection

@section("nav-items-bottom")
    <a class="nav-item nav-link rounded-0" id="show-questions"><i class="fa fa-credit-card text-white"></i></a>
    <a class="nav-item nav-link rounded-0" id="show-send-question"><i class="fa fa-paper-plane text-white"></i></a>
    <a class="nav-item nav-link rounded-0" id="show-ads-maseal"><i class="fa fa-download text-white"></i></a>
@endsection

@section("script")
    <script>
        $("#questions").addClass("d-block");
        $("#send-question").addClass("d-none");
        $("#ads-maseal").addClass("d-none");

        $("#show-questions").click(function () {
            $("#title").html("{{trans('words.visitor_feqh_title_questions')}}");
            $("#questions").removeClass("d-none").addClass("d-block");
            $("#send-question").removeClass("d-block").addClass("d-none");
            $("#ads-maseal").removeClass("d-block").addClass("d-none");
        });

        $("#show-send-question").click(function () {
            $("#title").html("{{trans('words.visitor_feqh_title_send_question')}}");
            $("#questions").removeClass("d-block").addClass("d-none");
            $("#send-question").removeClass("d-none").addClass("d-block");
            $("#ads-maseal").removeClass("d-block").addClass("d-none");
        });

        $("#show-ads-maseal").click(function () {
            $("#title").html("{{trans('words.visitor_feqh_title_ads_masael')}}");
            $("#questions").removeClass("d-block").addClass("d-none");
            $("#send-question").removeClass("d-block").addClass("d-none");
            $("#ads-maseal").removeClass("d-none").addClass("d-block");
        });

        $("#learn-more").click(function () {
            $("#title").html("{{trans('words.visitor_feqh_title_ads_masael')}}");
            $("#questions").removeClass("d-block").addClass("d-none");
            $("#send-question").removeClass("d-block").addClass("d-none");
            $("#ads-maseal").removeClass("d-none").addClass("d-block");
        });
    </script>
@endsection