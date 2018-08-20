<div class="row" id="send-question">
    <div class="col-12">
        <div class="jumbotron bg-white text-center shadow">
            <h4 class="mb-4">{{trans("words.visitor_feqh_send_question_title")}}</h4>
            <p>{{trans("words.visitor_feqh_send_question_description_one")}}</p>

            <p class="py-2 m-0">
                <span> {{trans("words.visitor_feqh_send_question_description_two")}} </span>
                <a class="btn-link" href="http://masael.turathalanbiaa.com/ar/send-question" target="_blank" style="cursor: pointer;">{{trans("words.visitor_feqh_send_question_click_here")}}</a>
            </p>

            @include("visitorFeqh.masael")
        </div>
    </div>
</div>