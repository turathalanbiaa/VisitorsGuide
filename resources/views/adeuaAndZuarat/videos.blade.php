@extends('layout.secondary_layout')
@section("navbar-color")
    {{"bg-aqua-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">{{trans('words.deua-and-zuarat-main-menu-videos-gallery')}}</span>
@endsection

@section('content')
    <div class="container prayerAndVisits pt-2 pb-2">
        @foreach($posts as $post)
            @component('adeuaAndZuarat.component.video_card')
                @slot('postTitle')
                    {{$post->title}}
                @endslot
                @slot('postVideoLink')
                    {{$post->video_link}}
                @endslot
            @endcomponent
        @endforeach
        <div>{{$posts->links()}}</div>
    </div>
@endsection