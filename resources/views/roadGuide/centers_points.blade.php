<div class="row" id="centers-points">
    <div class="col-12">
        <ul class="timeline">
            @php $i=1; @endphp
            @foreach($centerPoints as $point)
            <li @if($i%2==1) class="timeline-inverted" @endif>
                <div class="timeline-badge shadow {{\App\Enums\PointCategory::getCategoryColor($point->category)}}"
                     data-action="show-calculate-distance-modal" data-t_number="{{$point->t_number}}">
                    <i class="fa {{\App\Enums\PointCategory::getCategoryIcon($point->category)}}"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h5 class="timeline-title">{{$point->name}}</h5>
                        <p>
                            <small>
                                <span>{{trans("words.road_guide_card_corresponding_column_number")}}</span>
                                <i class="fa fa-caret-left align-middle "></i>
                                <span>{{$point->t_number}}</span>
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <div class="alert alert-primary d-none" data-calculate="false">
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
</div>