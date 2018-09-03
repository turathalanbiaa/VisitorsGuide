@extends('layout.secondary_layout')

@section('top-title')
    <h1>دليل الزيارات والادعية</h1>

@endsection

@section('content')

    <div class="container prayerAndVisits">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-sm-1 p-0 gallery-images" id="gallery-images">
                <img src="{{asset('1.jpg')}}" class="w-100 h-100 image" data-toggle="modal" data-target="#modal-dialog-centered">
            </div>
            <div class="col-md-6 col-sm-1 p-0 gallery-images" id="gallery-images" data-toggle="modal" data-target="#modal-dialog-centered">
                <img src="{{asset('1.jpg')}}" class="w-100 h-100 image">
            </div>
            <div class="col-md-6 col-sm-1 p-0 gallery-images" id="gallery-images" data-toggle="modal" data-target="#modal-dialog-centered">
                <img src="{{asset('1.jpg')}}" class="w-100 h-100 image">
            </div>
            <div class="col-md-6 col-sm-1 p-0 gallery-images" id="gallery-images" data-toggle="modal" data-target="#modal-dialog-centered">
                <img src="{{asset('1.jpg')}}" class="w-100 h-100 image">
            </div>
            <div class="col-md-6 col-sm-1 p-0 gallery-images" id="gallery-images" data-toggle="modal" data-target="#modal-dialog-centered">
                <img src="{{asset('1.jpg')}}" class="w-100 h-100 image">
            </div>
            <div class="col-md-6 col-sm-1 p-0 gallery-images" id="gallery-images" data-toggle="modal" data-target="#modal-dialog-centered">
                <img src="{{asset('1.jpg')}}" class="w-100 h-100 image">
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-dialog-centered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-image" role="document">
            <img src="8.jpg" class="w-100 h-100 image" id="image" style="position: relative">
        </div>
    </div>
    <script>
        var getHeight = document.getElementById('gallery-images').clientHeight;
        console.log(getHeight);
        getHeight = getHeight + 'px';
        $('.gallery-images').css('height',getHeight)

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