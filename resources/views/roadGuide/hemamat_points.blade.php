<ul class="timeline" id="hemamat-points">
    <?php $i=0;?>
    @foreach($hemamatPoints as $point)
        @if($i%2==0)
            <li>
                <div class="timeline-badge {{\App\Enums\PointCategory::getCategoryColor($point->category)}}">
                    <i class="fa {{\App\Enums\PointCategory::getCategoryIcon($point->category)}}"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">{{$point->name}}</h4>
                        <p>
                            <small class="text-muted">
                                <span>{{trans("words.road_guide_card_corresponding_column_number")}}</span>
                                <i class="fa fa-caret-left"></i>
                                <span>{{$point->t_number}}</span>
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <p>{{$point->description}}</p>
                    </div>
                </div>
            </li>
        @else
            <li class="timeline-inverted">
                <div class="timeline-badge {{\App\Enums\PointCategory::getCategoryColor($point->category)}}">
                    <i class="fa {{\App\Enums\PointCategory::getCategoryIcon($point->category)}}"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">{{$point->name}}</h4>
                        <p>
                            <small class="text-muted">
                                <span>{{trans("words.road_guide_card_corresponding_column_number")}}</span>
                                <i class="fa fa-caret-left"></i>
                                <span>{{$point->t_number}}</span>
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <p>{{$point->description}}</p>
                    </div>
                </div>
            </li>
        @endif
        <?php $i++;?>
    @endforeach
</ul>