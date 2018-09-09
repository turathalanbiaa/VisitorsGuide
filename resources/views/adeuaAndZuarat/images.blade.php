@extends('layout.secondary_layout')

@section('top-title')
    <h1>دليل الزيارات والادعية</h1>
@endsection

@section('content')

    <div class="container prayerAndVisits">
        <div class="row pb-5 pt-5">
            @foreach($images as $image)
            <div class="gallery-images col-md-6 p-0">
                <img src="{{$image->image}}{{$image->id}}" class="image w-100 h-100" data-toggle="modal" data-target="#modal-dialog-centered">
            </div>
            @endforeach
        </div>
        <div class="pb-5">
            {{$images->links()}}
        </div>
    </div>
    <div class="modal fade" id="modal-dialog-centered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-image" role="document">
            <img src="" class="w-100 h-100 image" id="image" style="position: relative">
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