@extends("layout.secondary_layout")

@section("top-title")
    <span id="title">{{trans("words.road_guide_title_all_points")}}</span>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include("roadGuide.all_points")
                @include("roadGuide.mawakep_points")
                @include("roadGuide.hemamat_points")
                @include("roadGuide.public_points")
                @include("roadGuide.street_view")
            </div>
        </div>
    </div>
@endsection

@section("nav-items-bottom")
    <a class="nav-item nav-link rounded-0" id="show-all-points"><i class="fa fa-shoe-prints text-white"></i></a>
    <a class="nav-item nav-link rounded-0" id="show-mawakep-points"><i class="fa fa-hotel text-white"></i></a>
    <a class="nav-item nav-link rounded-0" id="show-hemamat-points"><i class="fa fa-bath text-white"></i></a>
    <a class="nav-item nav-link rounded-0" id="show-public-points"><i class="fa fa-map-marked-alt text-white"></i></a>
    <a class="nav-item nav-link rounded-0" id="show-street-view"><i class="fa fa-street-view text-white"></i></a>
@endsection

@section("script")
    <script>
        $("#all-points").addClass("d-block");
        $("#mawakep-points").addClass("d-none");
        $("#hemamat-points").addClass("d-none");
        $("#public-points").addClass("d-none");
        $("#street-view").addClass("d-none");

        $("#show-all-points").click(function () {
            $("#title").html("{{trans('words.road_guide_title_all_points')}}");
            $("#all-points").removeClass("d-none").addClass("d-block");
            $("#mawakep-points").removeClass("d-block").addClass("d-none");
            $("#hemamat-points").removeClass("d-block").addClass("d-none");
            $("#public-points").removeClass("d-block").addClass("d-none");
            $("#street-view").removeClass("d-block").addClass("d-none");
        });

        $("#show-mawakep-points").click(function () {
            $("#title").html("{{trans('words.road_guide_title_mawakep_points')}}");
            $("#all-points").removeClass("d-block").addClass("d-none");
            $("#mawakep-points").removeClass("d-none").addClass("d-block");
            $("#hemamat-points").removeClass("d-block").addClass("d-none");
            $("#public-points").removeClass("d-block").addClass("d-none");
            $("#street-view").removeClass("d-block").addClass("d-none");
        });

        $("#show-hemamat-points").click(function () {
            $("#title").html("{{trans('words.road_guide_title_hemamat_points')}}");
            $("#all-points").removeClass("d-block").addClass("d-none");
            $("#mawakep-points").removeClass("d-block").addClass("d-none");
            $("#hemamat-points").removeClass("d-none").addClass("d-block");
            $("#public-points").removeClass("d-block").addClass("d-none");
            $("#street-view").removeClass("d-block").addClass("d-none");
        });

        $("#show-public-points").click(function () {
            $("#title").html("{{trans('words.road_guide_title_public_points')}}");
            $("#all-points").removeClass("d-block").addClass("d-none");
            $("#mawakep-points").removeClass("d-block").addClass("d-none");
            $("#hemamat-points").removeClass("d-block").addClass("d-none");
            $("#public-points").removeClass("d-none").addClass("d-block");
            $("#street-view").removeClass("d-block").addClass("d-none");
        });

        $("#show-street-view").click(function () {
            $("#title").html("{{trans('words.road_guide_title_street_view')}}");
            $("#all-points").removeClass("d-block").addClass("d-none");
            $("#mawakep-points").removeClass("d-block").addClass("d-none");
            $("#hemamat-points").removeClass("d-block").addClass("d-none");
            $("#public-points").removeClass("d-block").addClass("d-none");
            $("#street-view").removeClass("d-none").addClass("d-block");
        });
    </script>
    <script>
        $("button[data-action='street-view']").click(function () {
            var formErrorMessage = $("#form-error-message");
            var streetViewResult = $("#street-view-result");
            var emptyMessage = $("#empty");
            var unacceptableMessage = $("#unacceptable");
            var source = $("input[type='number']#source").val();
            var destination = $("input[type='number']#destination").val();

            emptyMessage.addClass("d-none");
            unacceptableMessage.addClass("d-none");
            streetViewResult.removeClass("d-block").addClass("d-none");

            if (source === "" || destination ==="") {
                formErrorMessage.removeClass("d-none").addClass("d-block");
                emptyMessage.removeClass("d-none");
            } else if (source < 0 || destination < 0) {
                formErrorMessage.removeClass("d-none").addClass("d-block");
                unacceptableMessage.removeClass("d-none");
            } else {
                $.ajax({
                    type:'post',
                    url: '/road-guide/street-view',
                    dataType: 'json',
                    data: {source:source, destination:destination},
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (result) {
                        $("#distance").html(result["distance"]);
                        $("#time").html(result["time"]);
                        $("#number-of-column").html(result["numberOfColumn"]);
                        if (result["direction"] === "forwards")
                            $("#direction").html("{{trans("words.road_guide_street_view_direction_forwards")}}");
                        else
                            $("#direction").html("{{trans("words.road_guide_street_view_direction_backwards")}}");

                        if (jQuery.isEmptyObject(result["publicPoints"])) {
                            $("#list-public-points").html("{{trans("words.road_guide_street_view_not_found_public_points")}}");
                        } else {
                            var cards = "";
                            $.map( result["publicPoints"], function(point, index) {
                                var card =  '<div class="card bg-transparent border-0">' +
                                                '<div class="card-header border-0 mb-1 shadow-special" id="heading-' + index + '" role="tab">' +
                                                    '<div class="collapsed" href="#collapse-' + index + '" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">' +
                                                        '<p class="text-white mb-0">' +
                                                            '<span>' + point["name"] + '</span>' +
                                                            '<i class="fa fa-angle-down rotate-icon mt-2 float-left"></i>' +
                                                        '</p>' +
                                                    '</div>' +
                                                '</div>' +

                                                '<div class="collapse"  id="collapse-' + index + '" role="tabpanel" aria-labelledby="heading-' + index + '" data-parent="#accordion">' +
                                                    '<div class="card-body mb-1 bg-light-special text-white">' +
                                                        '<p class="text-justify">' + point["description"] + '</p>' +
                                                    '</div>' +
                                                '</div>' +
                                            '</div>' ;

                                cards = cards + card;
                            });

                            var accordionDiv = '<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">' + cards + '</div>';
                            var colDiv = '<div class="col-12 col-sm-8 py-5">' + accordionDiv + '</div>';
                            var rowDiv = '<div class="row gradient-background d-flex justify-content-center mt-2">' + colDiv + '</div>';

                            $("#list-public-points").html(rowDiv);
                        }
                    },
                    error: function () {
                        alert("يرجى التحقق من الأتصال بالأنترنيت")
                    },
                    complete: function () {
                        formErrorMessage.removeClass("d-block").addClass("d-none");
                        streetViewResult.removeClass("d-none").addClass("d-block");
                    }
                });
            }
        });
    </script>
@endsection