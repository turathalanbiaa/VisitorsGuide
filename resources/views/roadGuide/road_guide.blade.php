@extends("layout.secondary_layout")

@section("navbar-color")
    {{"bg-aqua-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">{{trans("words.road_guide_title_all_points")}}</span>
@endsection

@section("content")
    <div class="container pt-4 pb-5">
        @include("roadGuide.all_points")
        @include("roadGuide.mawakep_points")
        @include("roadGuide.hemamat_points")
        @include("roadGuide.public_points")
        @include("roadGuide.centers_points")
        @include("roadGuide.street_view")
    </div>
@endsection

@section("menu-modal-content")
    <div class="modal-content border-0 rounded-0 shadow-special">
        <h4 class="modal-header bg-success text-white rounded-0 m-0">
            <span>{{trans("words.menu_road_guid")}}</span>
        </h4>

        <div class="modal-body">
            <div class="list-group">
                <a class="list-group-item list-group-item-action" id="show-all-points">
                    <i class="fa fa-shoe-prints fa-rotate-270"></i>
                    <span>{{trans("words.road_guide_menu_show_all_points")}}</span>
                </a>
                <a class="list-group-item list-group-item-action" id="show-mawakep-points">
                    <i class="fa {{\App\Enums\PointCategory::getCategoryIcon(\App\Enums\PointCategory::MAWAKEP)}}"></i>
                    <span>{{trans("words.road_guide_menu_show_mawakep_points")}}</span>
                </a>
                <a class="list-group-item list-group-item-action" id="show-hemamat-points">
                    <i class="fa {{\App\Enums\PointCategory::getCategoryIcon(\App\Enums\PointCategory::HEMAMAT)}}"></i>
                    <span>{{trans("words.road_guide_menu_show_hemamat_points")}}</span>
                </a>
                <a class="list-group-item list-group-item-action" id="show-public-points">
                    <i class="fa {{\App\Enums\PointCategory::getCategoryIcon(\App\Enums\PointCategory::PUBLIC)}}"></i>
                    <span>{{trans("words.road_guide_menu_show_public_points")}}</span>
                </a>
                <a class="list-group-item list-group-item-action" id="show-centers-points">
                    <i class="fa {{\App\Enums\PointCategory::getCategoryIcon(\App\Enums\PointCategory::CENTER)}}"></i>
                    <span>{{trans("words.road_guide_menu_show_centers_points")}}</span>
                </a>
                <a class="list-group-item list-group-item-action" id="show-street-view">
                    <i class="fa fa-street-view"></i>
                    <span>{{trans("words.road_guide_menu_street_view")}}</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section("extra-content")
    {{--Calculate Distance and Time Modal--}}
    <div class="modal fade" id="calculate-distance-modal" tabindex="-1" role="dialog" aria-labelledby="calculate-distance-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-special" role="document">
            <div class="modal-content bg-aqua-gradient shadow-special">
                <div class="modal-body">
                    <div class="text-center text-white border border-light p-5">
                        <p class="h4 mb-4">{{trans("words.road_guide_calculate_distance_modal_title")}}</p>
                        <p class="h6 mb-4">{{trans("words.road_guide_calculate_distance_modal_description")}}</p>
                        <div class="alert w-100 p-2 mb-2 alert-danger d-none" role="alert" id="alert-error-message">
                            <ul class="p-0 m-0" style="list-style: none;">
                                <li id="item-empty">{{trans("words.road_guide_calculate_distance_empty_error_message")}}</li>
                                <li id="item-unacceptable">{{trans("words.road_guide_calculate_distance_unacceptable_error_message")}}</li>
                            </ul>
                        </div>
                        <input type="number" name="source" class="form-control mb-4" placeholder="{{trans("words.road_guide_calculate_distance_column_number")}}">
                        <input type="hidden" name="destination">
                        <button class="btn btn-outline-success text-white btn-block" data-action="calculate-distance-modal">
                            <span>{{trans("words.road_guide_calculate_distance_btn_calculate")}}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
     {{--change Show Points--}}
    <script>
        $("#all-points").addClass("d-block");
        $("#mawakep-points").addClass("d-none");
        $("#hemamat-points").addClass("d-none");
        $("#public-points").addClass("d-none");
        $("#centers-points").addClass("d-none");
        $("#street-view").addClass("d-none");

        $("#show-all-points").click(function () {
            $("#title").html("{{trans('words.road_guide_title_all_points')}}");
            $("#all-points").removeClass("d-none").addClass("d-block");
            $("#mawakep-points").removeClass("d-block").addClass("d-none");
            $("#hemamat-points").removeClass("d-block").addClass("d-none");
            $("#public-points").removeClass("d-block").addClass("d-none");
            $("#centers-points").removeClass("d-block").addClass("d-none");
            $("#street-view").removeClass("d-block").addClass("d-none");
            setTimeout(function () {
                $("#menu-modal").modal("hide");
            }, 500);
        });

        $("#show-mawakep-points").click(function () {
            $("#title").html("{{trans('words.road_guide_title_mawakep_points')}}");
            $("#all-points").removeClass("d-block").addClass("d-none");
            $("#mawakep-points").removeClass("d-none").addClass("d-block");
            $("#hemamat-points").removeClass("d-block").addClass("d-none");
            $("#public-points").removeClass("d-block").addClass("d-none");
            $("#centers-points").removeClass("d-block").addClass("d-none");
            $("#street-view").removeClass("d-block").addClass("d-none");
            setTimeout(function () {
                $("#menu-modal").modal("hide");
            }, 500);
        });

        $("#show-hemamat-points").click(function () {
            $("#title").html("{{trans('words.road_guide_title_hemamat_points')}}");
            $("#all-points").removeClass("d-block").addClass("d-none");
            $("#mawakep-points").removeClass("d-block").addClass("d-none");
            $("#hemamat-points").removeClass("d-none").addClass("d-block");
            $("#public-points").removeClass("d-block").addClass("d-none");
            $("#centers-points").removeClass("d-block").addClass("d-none");
            $("#street-view").removeClass("d-block").addClass("d-none");
            setTimeout(function () {
                $("#menu-modal").modal("hide");
            }, 500);
        });

        $("#show-public-points").click(function () {
            $("#title").html("{{trans('words.road_guide_title_public_points')}}");
            $("#all-points").removeClass("d-block").addClass("d-none");
            $("#mawakep-points").removeClass("d-block").addClass("d-none");
            $("#hemamat-points").removeClass("d-block").addClass("d-none");
            $("#public-points").removeClass("d-none").addClass("d-block");
            $("#centers-points").removeClass("d-block").addClass("d-none");
            $("#street-view").removeClass("d-block").addClass("d-none");
            setTimeout(function () {
                $("#menu-modal").modal("hide");
            }, 500);
        });

        $("#show-centers-points").click(function () {
            $("#title").html("{{trans('words.road_guide_title_centers_points')}}");
            $("#all-points").removeClass("d-block").addClass("d-none");
            $("#mawakep-points").removeClass("d-block").addClass("d-none");
            $("#hemamat-points").removeClass("d-block").addClass("d-none");
            $("#public-points").removeClass("d-block").addClass("d-none");
            $("#centers-points").removeClass("d-none").addClass("d-block");
            $("#street-view").removeClass("d-block").addClass("d-none");
            setTimeout(function () {
                $("#menu-modal").modal("hide");
            }, 500);
        });

        $("#show-street-view").click(function () {
            $("#title").html("{{trans('words.road_guide_title_street_view')}}");
            $("#all-points").removeClass("d-block").addClass("d-none");
            $("#mawakep-points").removeClass("d-block").addClass("d-none");
            $("#hemamat-points").removeClass("d-block").addClass("d-none");
            $("#public-points").removeClass("d-block").addClass("d-none");
            $("#centers-points").removeClass("d-block").addClass("d-none");
            $("#street-view").removeClass("d-none").addClass("d-block");
            setTimeout(function () {
                $("#menu-modal").modal("hide");
            }, 500);
        });
    </script>
    {{--Calculate Distance--}}
    <script>
        $("button[data-action='calculate-distance']").click(function () {
            var formErrorMessage = $("#form-error-message");
            var emptyMessage = $("#empty");
            var unacceptableMessage = $("#unacceptable");
            var source = $("input[type='number']#source").val();
            var destination = $("input[type='number']#destination").val();
            emptyMessage.addClass("d-none");
            unacceptableMessage.addClass("d-none");
            var cardResult = $("#calculate-distance-result");
            cardResult.removeClass("d-block").addClass("d-none");
            if (source === "" || destination ==="") {
                formErrorMessage.removeClass("d-none").addClass("d-block");
                emptyMessage.removeClass("d-none");
            } else if (source < 0 || destination < 0) {
                formErrorMessage.removeClass("d-none").addClass("d-block");
                unacceptableMessage.removeClass("d-none");
            } else {
                formErrorMessage.removeClass("d-block").addClass("d-none");
                var result = calculateDistance(source, destination);
                cardResult.addClass("d-block").removeClass("d-none");
                cardResult.find(".data-estimated-distance").html(result["distance"]);
                cardResult.find(".data-estimated-time").html(result["time"]);
                cardResult.find(".data-number-of-column").html(result["numberOfColumn"]);
                if (result["direction"] === "forwards")
                    cardResult.find(".data-direction").html("{{trans("words.road_guide_calculate_distance_direction_forwards")}}");
                else
                    cardResult.find(".data-direction").html("{{trans("words.road_guide_calculate_distance_direction_backwards")}}");

                $.ajax({
                    type:'post',
                    url: '/road-guide/get-public-points',
                    dataType: 'json',
                    data: {source:source, destination:destination},
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (result) {
                        if (jQuery.isEmptyObject(result["publicPoints"])) {
                            $("#list-public-points").html("{{trans("words.road_guide_calculate_distance_public_points_empty")}}");
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
                            var colDiv = '<div class="col-12 col-sm-8 py-3">' + accordionDiv + '</div>';
                            var div = '<div class="d-flex justify-content-center gradient-background  mt-2">' + colDiv + '</div>';

                            $("#list-public-points").html(div);
                        }
                    },
                    error: function () {
                        var alertDiv = '<div class="alert alert-danger mt-2 mb-0">' +
                                            '<strong>' + '{{trans("words.road_guide_calculate_distance_error_connection_message")}}' + '</strong>' +
                                        '</div>';
                        $("#list-public-points").html(alertDiv);
                    },
                    complete: function () {}
                });
            }
        });
    </script>
    {{--Calculate Distance Modal--}}
    <script>
        $("div[data-action='show-calculate-distance-modal']").click(function () {
            $(this).addClass('shake').delay(500).queue(function(){
                    $(this).removeClass("shake").dequeue();
                });
            $("div").attr("data-calculate","false");
            $(this).parent().find("div.alert").attr("data-calculate","true");
            var t_number = $(this).data("t_number");
            $("input[type='hidden'][name='destination']").val(t_number);
            $("#calculate-distance-modal").modal("show");
        });
        $("button[data-action='calculate-distance-modal']").click(function () {
            var alertErrorMessage = $("#alert-error-message");
            var emptyMessage = $("#item-empty");
            var unacceptableMessage = $("#item-unacceptable");
            var source = $("input[type='number'][name='source']").val();
            var destination = $("input[type='hidden'][name='destination']").val();
            emptyMessage.addClass("d-none");
            unacceptableMessage.addClass("d-none");
            if (source === "" || destination ==="") {
                alertErrorMessage.removeClass("d-none").addClass("d-block");
                emptyMessage.removeClass("d-none");
            } else if (source < 0 || destination < 0) {
                alertErrorMessage.removeClass("d-none").addClass("d-block");
                unacceptableMessage.removeClass("d-none");
            } else {
                alertErrorMessage.removeClass("d-block").addClass("d-none");
                var result = calculateDistance(source, destination);
                var alertActive = $("div[data-calculate='true']");
                alertActive.removeClass("d-none");
                alertActive.find(".data-estimated-distance").html(result["distance"]);
                alertActive.find(".data-estimated-time").html(result["time"]);
                alertActive.find(".data-number-of-column").html(result["numberOfColumn"]);
                if (result["direction"] === "forwards")
                    alertActive.find(".data-direction").html("{{trans("words.road_guide_calculate_distance_direction_forwards")}}");
                else
                    alertActive.find(".data-direction").html("{{trans("words.road_guide_calculate_distance_direction_backwards")}}");
                $("#calculate-distance-modal").modal("hide");
            }
        });
    </script>
    {{--Function Calculate Distance--}}
    <script>
        function calculateDistance(source, destination) {
            var direction = (destination > source) ? "forwards": "backwards";
            var numberOfColumn = Math.abs(destination - source);
            var distance = getDistance(numberOfColumn);
            var time = getTime(numberOfColumn);
            return {
                "distance":distance,
                "numberOfColumn":numberOfColumn,
                "direction":direction,
                "time":time
            };
        }
        function getDistance(numberOfColumn) {
            var language = "{{app()->getLocale()}}", meter, kiloMeter;
            switch (language) {
                case "ar": {meter = " م"; kiloMeter = " كم";} break;
                case "en": {meter = " M"; kiloMeter = " Km";} break;
                case "fa": {meter = " M"; kiloMeter = " Km";} break;
                default:   {meter = " م"; kiloMeter = " كم";}
            }
            var distance = numberOfColumn * 50;
            distance = (distance<1000)? (distance+meter):((distance / 1000)+kiloMeter);
            return distance;
        }
        function getTime(numberOfColumn) {
            var language = "{{app()->getLocale()}}", minute, hour;
            switch (language) {
                case "ar": {minute = " دقيقة";  hour = " ساعة";} break;
                case "en": {minute = " Minute"; hour = " Hour";} break;
                case "fa": {minute = " دقيقه";  hour = " ساعت";} break;
                default:   {minute = " دقيقة";  hour = " ساعة";}
            }
            var time = Math.round((numberOfColumn*50)/83.3334);
            if (time < 60)
                time = time+minute ;
            else {
                var numberOfHour = parseInt(time/60,10)+hour;
                var numberOfMinute = (time%60)+minute;
                time = numberOfHour+" ،"+numberOfMinute;
            }
            return time;
        }
    </script>
@endsection