@extends('layout.secondary_layout')
@section("navbar-color")
    {{"bg-aqua-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">الادعية والزيارات - معرض الفيديوهات</span>
@endsection

@section('content')
    <div class="container prayerAndVisits pt-2 pb-2">
        @foreach($posts as $post)
            <div class="row p-0 pb-4">
                <div class="col-md-12 shadow-special p-0">
                    <div class="p-3" style="background-color: #b8daff">
                        <h2>{{$post->title}}</h2>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{$post->video_link}}" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        @endforeach
        <div>{{$posts->links()}}</div>
    </div>
@endsection
@section("menu-modal-content")
    <div class="modal-content border-0 rounded-0 shadow-special">
        <h4 class="modal-header bg-orange-gradient text-white rounded-0 m-0">
            <span>الادعية والزيارات</span>
        </h4>

        <div class="modal-body">
            <div class="list-group">
                <a href="/adeua-and-zuarat/" class="list-group-item list-group-item-action">
                    <span>الزيازات</span>
                </a>
                <a href="/adeua-and-zuarat/adeua" class="list-group-item list-group-item-action">
                    <span>الادعية</span>
                </a>
                <a href="/adeua-and-zuarat/images" href="events" class="list-group-item list-group-item-action">
                    <span>معرض الصور</span>
                </a>
                <a href="/adeua-and-zuarat/videos" href="events" class="list-group-item list-group-item-action">
                    <span>معرض الفيديوهات</span>
                </a>
            </div>
        </div>
    </div>
@endsection