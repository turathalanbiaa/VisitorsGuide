<div class="modal fade" id="select-language-modal" tabindex="-1" role="dialog" aria-labelledby="select-language-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-special" role="document">
        <div class="modal-content border-0 rounded-0 shadow-special">
            <h4 class="modal-header text-white rounded-0 m-0">
                <span>{{trans("words.select_language")}}</span>
            </h4>

            <div class="modal-body">
                <div class="list-group">
                    <a href="/select-language?language=ar" class="list-group-item list-group-item-action">
                        <span>{{trans("words.arabic")}}</span>
                    </a>
                    <a href="/select-language?language=fa" class="list-group-item list-group-item-action">
                        <span>{{trans("words.persian")}}</span>
                    </a>
                    <a href="/select-language?language=en" class="list-group-item list-group-item-action">
                        <span>{{trans("words.english")}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>