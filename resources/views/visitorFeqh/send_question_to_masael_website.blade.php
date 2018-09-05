<div class="row" id="send-question">
    <div class="col-12">
        <div class="jumbotron bg-white text-center shadow mb-3">
            <h4 class="mb-4">{{trans("words.visitor_feqh_message_thanks")}}</h4>
            <p>{{trans("words.visitor_feqh_send_question_description")}}</p>

            <p class="py-2 m-0">
                <span> {{trans("words.visitor_feqh_send_question_detail")}} </span>
                <a class="btn-link" href="http://masael.turathalanbiaa.com/ar/send-question" target="_blank" style="cursor: pointer;">
                    {{trans("words.visitor_feqh_send_question_btn")}}
                </a>
            </p>

            @include("visitorFeqh.masael")
        </div>
    </div>
</div>