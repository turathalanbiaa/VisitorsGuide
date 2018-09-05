<style>
    @switch(app()->getLocale())
        @case("ar")
            .form-custom {padding: 0 20px 0 0!important;}
            .form-check-custom {margin: 0.3rem -20px 0 0!important;}
            @break
        @case("fa")
            .form-custom {padding: 0 20px 0 0!important;}
            .form-check-custom {margin: 0.3rem -20px 0 0!important;}
            @break
    @endswitch
</style>
<div class="modal fade" id="select-language-modal" tabindex="-1" role="dialog" aria-labelledby="select-language-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{trans("words.select_language")}}</h5>
            </div>
            <div class="modal-body">
                <form class="form-row" method="post" action="/select-language">
                    @csrf
                    <div class="col-12 py-2">
                        <div class="form-check form-custom">
                            <input class="form-check-input form-check-custom" type="radio" name="language" id="ar" value="ar" checked>
                            <label class="form-check-label" for="ar">{{trans("words.arabic")}}</label>
                        </div>
                    </div>

                    <div class="col-12 py-2">
                        <div class="form-check form-custom">
                            <input class="form-check-input form-check-custom" type="radio" name="language" id="fa" value="fa">
                            <label class="form-check-label" for="fa">{{trans("words.persian")}}</label>
                        </div>
                    </div>

                    <div class="col-12 py-2">
                        <div class="form-check form-custom">
                            <input class="form-check-input form-check-custom" type="radio" name="language" id="en" value="en">
                            <label class="form-check-label" for="en">{{trans("words.english")}}</label>
                        </div>
                    </div>

                    <div class="col-12 py-2">
                        <hr>
                        <button type="submit" class="btn btn-block btn-primary">{{trans("words.btn_save")}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>