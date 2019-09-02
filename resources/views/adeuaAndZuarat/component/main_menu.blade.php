


@section("menu-modal-content")
<div class="modal-content border-0 rounded-0 shadow-special">
    <h4 class="modal-header bg-orange-gradient text-white rounded-0 m-0">
        <span>{{trans("words.menu-adeua-and-zuarat-title")}}</span>
    </h4>

    <div class="modal-body">
        <div class="list-group">
            <a href="{{route('main')}}" class="list-group-item list-group-item-action">
                <span>{{trans("words.adeua-and-zuarat-main-menu-zuarat")}}</span>
            </a>
            <a href="{{route('adeua')}}" class="list-group-item list-group-item-action">
                <span>{{trans("words.adeua-and-zuarat-main-menu-adeua")}}</span>
            </a>
            <a href="{{route('image')}}" class="list-group-item list-group-item-action">
                <span>{{trans("words.adeua-and-zuarat-main-menu-images-gallery")}}</span>
            </a>
            <a href="{{route('videos')}}" class="list-group-item list-group-item-action">
                <span>{{trans("words.adeua-and-zuarat-main-menu-videos-gallery")}}</span>
            </a>
        </div>
    </div>
</div>
@endsection