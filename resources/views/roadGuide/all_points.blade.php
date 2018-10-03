<div class="row" id="all-points">
    <div class="card border-success mr-2 ml-2 mb-4">
        <div class="card-header">
            {{trans("words.road_guide_note1")}}
        </div>
        <div class="card-body p-1 text-primary">
            <div class="alert alert-secondary" role="alert">
                {{trans("words.road_guide_note2")}}
            </div>
            <div class="alert alert-success" role="alert">
                {{trans("words.road_guide_note3")}}
            </div>
            <div class="alert alert-warning" role="alert">

                {{trans("words.road_guide_note4")}}
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="mb-4">
            @include("items.cities")
        </div>

        <ul class="timeline">
            @php $i=1; @endphp
            @foreach($allPoints as $point)

                <li @if($i%2==1) class="timeline-inverted" @endif>
                    <div class="timeline-badge shadow {{\App\Enums\PointCategory::getCategoryColor($point->category)}}"
                         data-action="show-calculate-distance-modal" data-t_number="{{$point->t_number}}">
                        <i class="fa {{\App\Enums\PointCategory::getCategoryIcon($point->category)}}"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h5 class="timeline-title">{{$point->name}}</h5>
                            <p class="m-0">
                                <small>
                                    <span>{{trans("words.road_guide_card_corresponding_column_number")}}</span>
                                    <i class="fa fa-caret-left align-middle "></i>
                                    <span>{{$point->t_number}}</span>
                                </small>
                            </p>
                            <a href="javascript:void(0);" class="location" data-latitude="{{$point->latitude}}" data-longitude="{{$point->longitude}}">
                                <small>{{trans("words.road_guide_card_show_location_on_google_map")}}</small>
                            </a>
                        </div>
                        <div class="timeline-body">
                            <div class="alert alert-primary shadow d-none" data-calculate="false">
                                <p>
                                    <span>{{trans("words.road_guide_calculate_distance_estimated_distance")}}</span>
                                    <span> : </span>
                                    <span class="data-estimated-distance"></span>
                                </p>
                                <p>
                                    <span>{{trans("words.road_guide_calculate_distance_estimated_time")}}</span>
                                    <span> : </span>
                                    <span class="data-estimated-time"></span>
                                </p>
                                <p>
                                    <span>{{trans("words.road_guide_calculate_distance_number_of_column")}}</span>
                                    <span> : </span>
                                    <span class="data-number-of-column"></span>
                                </p>
                                <p class="mb-0">
                                    <span>{{trans("words.road_guide_calculate_distance_direction")}}</span>
                                    <span> : </span>
                                    <span class="data-direction"></span>
                                </p>
                            </div>
                            <p class="m-0">{{$point->description}}</p>
                        </div>
                    </div>
                </li>
                @php $i++; @endphp
            @endforeach
        </ul>
    </div>
    <div class="card border-success mr-2 ml-2 mt-5">
        <div class="card-header">ملاحظات</div>
        <div class="card-body p-1 text-primary">


            <div class="alert alert-success" role="alert">
                <li>{{trans("words.road_guide_note5")}}</li>
                <li>{{trans("words.road_guide_note6")}}</li>
                <li>{{trans("words.road_guide_note7")}}</li>
            </div>



        </div>
    </div>
</div>