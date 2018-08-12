<div class="jumbotron mt-2 mb-5" id="street-view">
    <h3 class="text-justify">{{trans("words.road_guide_street_view_title")}}</h3>
    <p class="lead text-justify">{{trans("words.road_guide_street_view_description")}}</p>
    <hr class="my-4">

    <div class="form-inline pt-4">
        <div class="form-group col-12 col-sm-12 mb-sm-3 d-none" id="form-error-message">
            <div class="alert w-100 m-0 alert-danger" role="alert">
                <ul class="pr-3 m-0">
                    <li id="empty">{{trans("words.road_guide_street_view_empty_error_message")}}</li>
                    <li id="unacceptable">{{trans("words.road_guide_street_view_unacceptable_error_message")}}</li>
                </ul>
            </div>
        </div>

        <div class="form-group col-12 col-sm-6 mb-sm-3">
            <input type="number" class="form-control w-100" id="source" placeholder="{{trans("words.road_guide_street_view_from_column_number")}}">
        </div>

        <div class="form-group col-12 col-sm-6 mb-sm-3">
            <input type="number" class="form-control w-100" id="destination" placeholder="{{trans("words.road_guide_street_view_to_column_number")}}">
        </div>

        <div class="form-group col-12 col-sm-12 mb-sm-3 justify-content-center text-center">
            <button class="btn btn-info" data-action="street-view">{{trans("words.road_guide_street_view_calculate_distance")}}</button>
        </div>
    </div>

    <hr class="my-4">

    <div class="card d-none" id="street-view-result">
        <ul class="list-group pr-0">
            <li class="list-group-item">
                <span>{{trans("words.road_guide_street_view_estimated_distance")}}</span>
                <span> : </span>
                <span id="distance"></span>
            </li>
            <li class="list-group-item">
                <span>{{trans("words.road_guide_street_view_estimated_time")}}</span>
                <span> : </span>
                <span id="time"></span>
            </li>
            <li class="list-group-item">
                <span>{{trans("words.road_guide_street_view_number_of_column")}}</span>
                <span> : </span>
                <span id="number-of-column"></span>
            <li class="list-group-item">
                <span>{{trans("words.road_guide_street_view_direction")}}</span>
                <span> : </span>
                <span id="direction"></span>
            </li>
            <li class="list-group-item">
                <span>{{trans("words.road_guide_street_view_public_points")}}</span>
                <span> : </span>
                <span id="list-public-points"></span>
            </li>
        </ul>
    </div>
</div>