<div class="row" id="mawakep-points">
    <div class="col-12">
        <ul class="timeline">
            @php $i=1; @endphp
            @foreach($mawakepPoints as $point)
                <li @if($i%2==1) class="timeline-inverted" @endif>
                    <div class="timeline-badge {{\App\Enums\PointCategory::getCategoryColor($point->category)}}">
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
                            <p>{{$point->description}}</p>
                        </div>
                    </div>
                </li>
                @php $i++; @endphp
            @endforeach
        </ul>
    </div>
</div>