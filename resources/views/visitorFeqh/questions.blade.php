<div class="row" id="questions">
    @include("visitorFeqh.ads_app_masael")

    @if(isset($_GET["category"]))
        <div class="col-12">
            <p class="h6 text-center">
                {{\App\Enums\QuestionCategory::getFliterName(app()->getLocale(), $_GET["category"])}}
            </p> <hr class="border-warning">
        </div>
    @endif

    @foreach($questions as $question)
        <div class="col-12">
            @if(!isset($_GET["category"]))
                <div class="w-100 d-flex justify-content-center" style="margin-bottom: -40px">
                    <div class="w-50 rounded shadow-sm" style="background-color: #fd7865">
                        <p class="h6 px-3 py-2 m-0 text-center text-white text-truncate">
                            {{\App\Enums\QuestionCategory::getCategoryName(app()->getLocale(), $question->category)}}
                        </p>
                    </div>
                </div>
            @endif

            <div class="jumbotron bg-light border shadow-sm my-4">
                <h6 class="m-0 text-justify font-height-normal pb-3">
                    <strong>{{trans("words.visitor_feqh_questions_card_question")}}</strong>
                    <span>{{$question->title}}</span>
                </h6>

                <h6 class="m-0 text-justify font-height-normal">
                    <strong>{{trans("words.visitor_feqh_questions_card_answer")}}</strong>
                    <span>{{$question->answer}}</span>
                </h6>
            </div>
        </div>
    @endforeach

    @if($questions->hasPages())
        <div class="col-12 d-flex justify-content-between">
            @if(is_null($questions->previousPageUrl()))
                <div>
                    <small>&lt;&lt;</small>
                    <span>{{trans("words.visitor_feqh_questions_pagination_prev")}}</span>
                </div>
            @else
                <a href="{{$questions->previousPageUrl()}}@if(isset($_GET["category"])){{"&category=".$_GET["category"]}}@endif">
                    <small>&lt;&lt;</small>
                    <span>{{trans("words.visitor_feqh_questions_pagination_prev")}}</span>
                </a>
            @endif

            @if(is_null($questions->nextPageUrl()))
                <div>
                    <span>{{trans("words.visitor_feqh_questions_pagination_next")}}</span>
                    <small>&gt;&gt;</small>
                </div>
            @else
                <a href="{{$questions->nextPageUrl()}}@if(isset($_GET["category"])){{"&category=".$_GET["category"]}}@endif">
                    <span>{{trans("words.visitor_feqh_questions_pagination_next")}}</span>
                    <small>&gt;&gt;</small>
                </a>
            @endif
        </div>
    @endif
</div>