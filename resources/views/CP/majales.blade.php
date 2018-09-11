@extends("CP.layout.layout")

@section("content")
    <div class="container">
        <div class="row">
            @forelse($majales as $item)
                <div class="col-sm-6 col-12 mb-sm-5 mb-4">
                    <div class="jumbotron h-100 m-0">
                        <h5>
                            <i class="fa fa-user"></i>
                            {{$item->user->name}}
                        </h5>
                        <h5>
                            <i class="fa fa-calendar-alt"></i>
                            {{$item->datetime}}
                        </h5>
                        <p class="lead text-justify">{{$item->description}}</p>

                        <input type="hidden" name="majles" value="{{$item->id}}">

                        <button class="btn btn-success" data-action="accept">
                            {{trans("cp_words.btn_accept")}}
                        </button>
                        <button class="btn btn-primary" data-action="reject">
                            {{trans("cp_words.btn_reject")}}
                        </button>
                        <button class="btn btn-danger"  data-action="delete">
                            {{trans("cp_words.btn_delete")}}
                        </button>

                        <div class="progress mt-4 d-none">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">0%</div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 mb-sm-5 mb-4">
                    <div class="jumbotron m-0">
                        <h2 class="text-center my-5">
                            {{trans("cp_words.message_not_found")}}
                        </h2>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection

@section("script")
    <script>
        $("button[data-action='accept']").click(function () {
            $(this).attr("disabled", "disabled");
            var divCol = $(this).parent().parent().attr("data-content", "hidden");
            var progress = $(this).parent().find(".progress");
            progress.removeClass("d-none");
            var progressBar = progress.find(".progress-bar");
            progressBar.attr("aria-valuenow","75");
            progressBar.css("width", "75%");
            progressBar.html("75%");
            var majles = $(this).parent().find("input[name='majles']").val();
            $.ajax({
                type:'post',
                url: '/control-panel/majles/accept',
                dataType: 'json',
                data: {id:majles},
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (result) {
                    progressBar.attr("aria-valuenow","100");
                    progressBar.css("width", "100%");
                    progressBar.html("100%");
                    if (result["majles"]==="notFound") {
                        var message = "{{trans('cp_words.majles_not_found')}}";
                        snackbar(message , 1000 , "info");
                    } else if (result["success"]===true) {
                        var message = "{{trans('cp_words.accept_majles_success_true')}}";
                        snackbar(message , 1000 , "success");
                    } else if (result["success"]===false) {
                        var message = "{{trans('cp_words.accept_majles_success_false')}}";
                        snackbar(message , 1000 , "error");
                    }
                },
                error: function () {
                    var message = "{{trans('cp_words.majles_error_connection')}}";
                    snackbar(message , 1000 , "warning");
                },
                complete: function () {
                    setTimeout(function () {progress.addClass("d-none");}, 500);
                    setTimeout(function () {divCol.addClass("fadeOut");}, 500);
                    setTimeout(function () {divCol.addClass("d-none");}, 1000);
                    setTimeout(function () {divCol.removeAttr("data-content");divCol.removeClass("fadeOut")},1000);
                }
            });
        });
        $("button[data-action='reject']").click(function () {
            $(this).attr("disabled", "disabled");
            var divCol = $(this).parent().parent().attr("data-content", "hidden");
            var progress = $(this).parent().find(".progress");
            progress.removeClass("d-none");
            var progressBar = progress.find(".progress-bar");
            progressBar.attr("aria-valuenow","75");
            progressBar.css("width", "75%");
            progressBar.html("75%");
            var majles = $(this).parent().find("input[name='majles']").val();
            $.ajax({
                type:'post',
                url: '/control-panel/majles/reject',
                dataType: 'json',
                data: {id:majles},
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (result) {
                    progressBar.attr("aria-valuenow","100");
                    progressBar.css("width", "100%");
                    progressBar.html("100%");
                    if (result["majles"]==="notFound") {
                        var message = "{{trans('cp_words.majles_not_found')}}";
                        snackbar(message , 1000 , "info");
                    } else if (result["success"]===true) {
                        var message = "{{trans('cp_words.reject_majles_success_true')}}";
                        snackbar(message , 1000 , "success");
                    } else if (result["success"]===false) {
                        var message = "{{trans('cp_words.reject_majles_success_false')}}";
                        snackbar(message , 1000 , "error");
                    }
                },
                error: function () {
                    var message = "{{trans('cp_words.majles_error_connection')}}";
                    snackbar(message , 1000 , "warning");
                },
                complete: function () {
                    setTimeout(function () {progress.addClass("d-none");}, 500);
                    setTimeout(function () {divCol.addClass("fadeOut");}, 500);
                    setTimeout(function () {divCol.addClass("d-none");}, 1000);
                    setTimeout(function () {divCol.removeAttr("data-content");divCol.removeClass("fadeOut")},1000);
                }
            });
        });
        $("button[data-action='delete']").click(function () {
            $(this).attr("disabled", "disabled");
            var divCol = $(this).parent().parent().attr("data-content", "hidden");
            var progress = $(this).parent().find(".progress");
            progress.removeClass("d-none");
            var progressBar = progress.find(".progress-bar");
            progressBar.attr("aria-valuenow","75");
            progressBar.css("width", "75%");
            progressBar.html("75%");
            var majles = $(this).parent().find("input[name='majles']").val();
            $.ajax({
                type:'post',
                url: '/control-panel/majles/delete',
                dataType: 'json',
                data: {id:majles},
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (result) {
                    progressBar.attr("aria-valuenow","100");
                    progressBar.css("width", "100%");
                    progressBar.html("100%");
                    if (result["majles"]==="notFound") {
                        var message = "{{trans('cp_words.majles_not_found')}}";
                        snackbar(message , 1000 , "info");
                    } else if (result["success"]===true) {
                        var message = "{{trans('cp_words.delete_majles_success_true')}}";
                        snackbar(message , 1000 , "success");
                    } else if (result["success"]===false) {
                        var message = "{{trans('cp_words.delete_majles_success_false')}}";
                        snackbar(message , 1000 , "error");
                    }
                },
                error: function () {
                    var message = "{{trans('cp_words.majles_error_connection')}}";
                    snackbar(message , 1000 , "warning");
                },
                complete: function () {
                    setTimeout(function () {progress.addClass("d-none");}, 500);
                    setTimeout(function () {divCol.addClass("fadeOut");}, 500);
                    setTimeout(function () {divCol.addClass("d-none");}, 1000);
                    setTimeout(function () {divCol.removeAttr("data-content");divCol.removeClass("fadeOut")},1000);
                }
            });
        });
    </script>
@endsection