<div class="row" id="questions">
    <div class="col-12">
        <div class="alert alert-info text-center shadow">
            <h6>{{trans("words.visitor_feqh_questions_ads_title")}}</h6>
            <p class="py-2 m-0">
                <span> {{trans("words.visitor_feqh_questions_ads_sub_title")}} </span>
                <span class="btn-link" id="learn-more" style="cursor: pointer;">{{trans("words.visitor_feqh_questions_ads_learn_more")}}</span>
            </p>
        </div>
    </div>

    @php $date = "0000-00-00"; @endphp
    @foreach($questions as $question)
        <div class="col-12">
            @if($question->date !== $date)
                <div class="w-100 d-flex justify-content-center" style="margin-bottom: -35px">
                    <div class="w-auto bg-success shadow">
                        <p class="px-3 py-2 text-white m-0">
                            <i class="fa fa-calendar-alt"></i>
                            <span>{{$question->date}}</span>
                        </p>
                    </div>
                    @php $date = $question->date; @endphp
                </div>
            @endif
            <div class="jumbotron text-white shadow my-3 bg-secondary">
                <p class="m-0 pb-3 font-weight-normal text-justify">
                    <strong>{{trans("words.visitor_feqh_questions_card_question")}}</strong>
                    <span>{{$question->title}}</span>
                </p>

                <p class="m-0 font-weight-normal text-justify">
                    <strong>{{trans("words.visitor_feqh_questions_card_answer")}}</strong>
                    <span>{{$question->answer}}</span>
                </p>
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