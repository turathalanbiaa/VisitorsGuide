@extends('layout.secondary_layout')
@section('top-title')

@endsection
@section("navbar-color")
    {{"bg-aqua-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">{{trans('words.adeua-and-zuarat-adeua-title')}}</span>
@endsection

@section('content')
    <div class="container prayerAndVisits pt-3 pb-2">
        <div>
            @component('adeuaAndZuarat.component.search' , ['routeName'=>'searchByAdeua'])
            @endcomponent
        </div>

        <div class="row justify-content-center pt-2 pb-5">
            @if($publicAdeua->count() == 0)
                <div class="row justify-content-center">
                    <div>
                        <h2>{{trans('words.adeua-zuarat-no-data')}}</h2>
                    </div>
                </div>
            @endif
        </div>

        <div class="row">
            @foreach($publicAdeua as $publicDeua)
                @component('adeuaAndZuarat.component.deua_card')
                    @slot('titleID')
                        {{$publicDeua->id}}
                    @endslot
                    @slot('title')
                        {{$publicDeua->title}}
                    @endslot
                    @slot('contentID')
                        {{$publicDeua->id}}
                    @endslot
                    @slot('content')
                        {{$publicDeua->content}}
                    @endslot
                    @slot('readingCollapseID')
                        {{$publicDeua->id}}
                    @endslot
                    @slot('readingTrans')
                        {{trans("words.adeua-and-zuarat-main-btn-reading-deua")}}
                    @endslot
                    @slot('btnReadingValue')
                        {{$publicDeua->id}}
                    @endslot
                    @slot('listenCollapseID')
                        {{$publicDeua->id}}
                    @endslot
                    @slot('sound')
                        {{$publicDeua->sound}}
                    @endslot
                    @slot('listenTrans')
                        {{trans("words.adeua-and-zuarat-main-btn-listen-deua")}}
                    @endslot
                @endcomponent
            @endforeach
        </div>

        <div class="d-flex justify-content-center py-2">
            {{$publicAdeua->links()}}
        </div>
    </div>


@endsection

@extends('adeuaAndZuarat.component.content_modal')

@extends('adeuaAndZuarat.component.main_menu')

@section('script')
    <script>
        let readMore = $('.read-more');
        readMore.on('click' , function () {
            let id = $(this).attr('value');
            let content = $('#cont-'+id).text();
            let title = $('#tit-'+id).text();
            $('#modal-title').text(title);
            $('#modal-content').text(content)
        })
    </script>
    <script>
        document.addEventListener('play', function(e){
            let audios = document.getElementsByTagName('audio');
            for(let i = 0, len = audios.length; i < len;i++){
                if(audios[i] !== e.target){
                    audios[i].pause();
                }
            }
        }, true);
    </script>
@endsection
