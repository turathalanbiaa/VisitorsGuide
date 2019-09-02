@extends('layout.secondary_layout')

@section("navbar-color")
    {{"bg-aqua-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">{{trans('words.adeua-and-zuarat-main-menu-images-gallery')}}</span>
@endsection

@section('content')
    <div class="container prayerAndVisits pt-2 pt-5">
        <div class="row pb-4">
            @foreach($images as $image)
                @component('adeuaAndZuarat.component.image_card')
                    @slot('image')
                        {{$image->$image}}
                    @endslot
                @endcomponent
            @endforeach
        </div>
        <div class="pb-2 pt-2">
            {{$images->links()}}
        </div>
    </div>
@endsection

@extends('adeuaAndZuarat.component.image_modal')

@extends('adeuaAndZuarat.component.main_menu')

@section('script')
    <script>
        function resize ()
        {
            let getHeight = $('.gallery-images').width();
            console.log(getHeight);
            getHeight = getHeight * 80 / 100 + 'px';
            getHeight.css('height',getHeight);
        }
        resize();
        $(window).resize(function () {
            resize()
        })
    </script>
    <script>
        $(document).ready(function () {
            $('.image').on('' , function () {
                let src = $(this).attr('src');
                $('#image').attr('src',src)
            })
        })
    </script>
@endsection