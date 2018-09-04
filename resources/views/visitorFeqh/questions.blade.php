<div class="row" id="questions">
    @include("visitorFeqh.ads_app_masael")

    @foreach($questions as $question)
        <div class="col-12">
            <div class="w-100 d-flex justify-content-center" style="margin-bottom: -35px">
                <div class="w-auto rounded shadow text-white" style="background-color: #fd7865">
                    <p class="h6 px-3 py-2 m-0">
                        {{\App\Enums\QuestionCategory::getCategoryName(app()->getLocale(), $question->category)}}
                    </p>
                </div>
            </div>

            <div class="jumbotron shadow-lg my-3 bg-light" style="background-color: #fff3cd;">
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
                <a href="{{$questions->previousPageUrl()}}">
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
                <a href="{{$questions->nextPageUrl()}}">
                    <span>{{trans("words.visitor_feqh_questions_pagination_next")}}</span>
                    <small>&gt;&gt;</small>
                </a>
            @endif
        </div>
    @endif
</div>