@extends('layout.secondary_layout')
@section("navbar-color")
    {{"bg-aqua-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">الادعية والزيارات - معرض الصور</span>
@endsection

@section('content')
    <div class="container prayerAndVisits pt-2 pt-5">
        <div class="row pb-4">
            @foreach($images as $image)
            <div class="gallery-images col-md-6 p-0">
                <img src="{{asset('storage/img/studio')}}/{{$image->image}}" class="image w-100 h-100" data-toggle="modal" data-target="#modal-dialog-centered">
            </div>
            @endforeach
        </div>
        <div class="pb-2 pt-2">
            {{$images->links()}}
        </div>
    </div>
    <div class="modal fade" id="modal-dialog-centered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-image" role="document">
            <img src="" class="w-100 h-100 image" id="image" style="position: relative">
        </div>
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
                <a href="/adeua-and-zuarat/images" class="list-group-item list-group-item-action">
                    <span>معرض الصور</span>
                </a>
                <a href="/adeua-and-zuarat/videos" class="list-group-item list-group-item-action">
                    <span>معرض الفيديوهات</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function resize ()
        {
            var getHeight = $('.gallery-images').width();
            console.log(getHeight);
            getHeight = getHeight * 80 / 100 + 'px';
            $('.gallery-images').css('height',getHeight);
        }
        resize();
        $(window).resize(function () {
            resize()
        })
    </script>
    <script>
        $(document).ready(function () {
            $('.image').click(function () {
                var src = $(this).attr('src');
                $('#image').attr('src',src)
            })
        })
    </script>
@endsection