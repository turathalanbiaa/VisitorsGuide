@extends('layout.secondary_layout')

@section('navbar-color')
    {{"bg-aqua-gradient"}}
@endsection

@section('navbar-brand')
    <span>{{trans('words.adeua-and-zuarat-zuarat-title')}}</span>
@endsection

@section('content')

    <div class="container prayerAndVisits pt-3 pb-2">
        <div>
            @component('adeuaAndZuarat.component.search' , ['routeName'=>'searchByZuarat'])
            @endcomponent
        </div>
        @if($zuarat->count() == 0)
            <div class="row justify-content-center">
                <div>
                    <h2>{{trans('words.adeua-zuarat-no-data')}}</h2>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            @foreach($zuarat as $zuara)
                @component('adeuaAndZuarat.component.deua_card')
                    @slot('titleID')
                        {{$zuara->id}}
                    @endslot
                    @slot('title')
                        {{$zuara->title}}
                    @endslot
                    @slot('contentID')
                        {{$zuara->id}}
                    @endslot
                    @slot('content')
                        {{$zuara->content}}
                    @endslot
                    @slot('readingCollapseID')
                        {{$zuara->id}}
                    @endslot
                    @slot('readingTrans')
                        {{trans("words.adeua-and-zuarat-main-btn-reading-deua")}}
                    @endslot
                    @slot('btnReadingValue')
                        {{$zuara->id}}
                    @endslot
                    @slot('listenCollapseID')
                        {{$zuara->id}}
                    @endslot
                    @slot('sound')
                        {{$zuara->sound}}
                    @endslot
                    @slot('listenTrans')
                        {{trans("words.adeua-and-zuarat-main-btn-listen-deua")}}
                    @endslot
                @endcomponent
            @endforeach
        </div>
        <div class="pt-2">
            {{$zuarat->links()}}
        </div>

        @extends('adeuaAndZuarat.component.content_modal')

        @extends('adeuaAndZuarat.component.main_menu')
    </div>

@endsection


@section('script')
    <script>
        $('.read-more').on('click' , function () {
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