<div class="row" id="street-view">

    <div class="col-12">
        <div class="jumbotron bg-white text-center shadow m-0">
            <h4 class="mb-4">{{trans("words.road_guide_street_view_message_thanks")}}</h4>
            <p>{{trans("words.road_guide_street_view_description")}}</p>
            <hr class="my-4">

            <div class="form-inline">
                <div class="form-group col-12 col-sm-12 mb-sm-3 mb-3 d-none" id="form-error-message">
                    <div class="alert w-100 m-0 alert-danger" role="alert">
                        <ul class="p-0 m-0" style="list-style: none;">
                            <li id="empty">{{trans("words.road_guide_calculate_distance_empty_error_message")}}</li>
                            <li id="unacceptable">{{trans("words.road_guide_calculate_distance_unacceptable_error_message")}}</li>
                        </ul>
                    </div>
                </div>

                <div class="form-group col-12 col-sm-6 mb-sm-3 mb-3">
                    <input type="number" class="form-control w-100" id="source" placeholder="{{trans("words.road_guide_calculate_distance_from_column_number")}}">
                </div>

                <div class="form-group col-12 col-sm-6 mb-sm-3 mb-3">
                    <input type="number" class="form-control w-100" id="destination" placeholder="{{trans("words.road_guide_calculate_distance_to_column_number")}}">
                </div>

                <div class="form-group col-12 col-sm-12 mb-sm-0 mb-0 justify-content-center text-center">
                    <button class="btn btn-info" data-action="calculate-distance">
                        {{trans("words.road_guide_calculate_distance_btn_calculate")}}
                    </button>
                </div>
            </div>

            <div class="card mt-4 d-none" id="calculate-distance-result">
                <ul class="list-group pr-0">
                    <li class="list-group-item">
                        <span>{{trans("words.road_guide_calculate_distance_estimated_distance")}}</span>
                        <span> : </span>
                        <span class="data-estimated-distance"></span>
                    </li>
                    <li class="list-group-item">
                        <span>{{trans("words.road_guide_calculate_distance_estimated_time")}}</span>
                        <span> : </span>
                        <span class="data-estimated-time"></span>
                    </li>
                    <li class="list-group-item">
                        <span>{{trans("words.road_guide_calculate_distance_number_of_column")}}</span>
                        <span> : </span>
                        <span class="data-number-of-column"></span>
                    <li class="list-group-item">
                        <span>{{trans("words.road_guide_calculate_distance_direction")}}</span>
                        <span> : </span>
                        <span class="data-direction"></span>
                    </li>
                    <li class="list-group-item">
                        <span>{{trans("words.road_guide_calculate_distance_public_points")}}</span>
                        <span> : </span>
                        <span id="list-public-points"></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>