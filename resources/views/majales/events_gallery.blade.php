@extends('layout.secondary_layout')

@section("navbar-brand")
    <span id="title">الاستديو</span>
@endsection

@section('content')
    <div class="container pt-2 pb-2">
       <div class="row justify-content-center">
           @foreach($posts as $post)
               @if($post->video_link == null)
                   <div class="col-md-10 p-0 mb-3" style="background-color: white">
                       <div class="gallery-images w-100">
                           <img class="image-modal b-lazy w-100 rounded ajax-request" src="{{asset('lame.gif')}}"
                                data-echo="{{asset('storage/img/studio')}}{{$post->image}}"
                                data-toggle="modal" data-target="#modal-dialog-centered" data-id="{{$post->id}}">
                       </div>
                       <div class="p-2">
                           <p class="p-1 m-0">{{$post->title}}</p>
                       </div>
                   </div>
               @else
                   <div class="col-md-10 p-0 mb-3" style="background-color: white">
                       <div class="embed-responsive embed-responsive-16by9">
                           <iframe class="embed-responsive-item" data-id="{{$post->id}}"
                                src="{{$post->video_link}}" allowfullscreen>
                           </iframe>
                       </div>
                       <div class="p-2">
                           <p class="p-1 m-0">{{$post->title}}</p>
                       </div>
                   </div>
               @endif
           @endforeach
       </div>
        <div class="d-flex justify-content-center py-2">
           {{$posts->links()}}
       </div>
    </div>
@endsection

@component('majales.component.main_menu')@endcomponent

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
            $('.image-modal').click(function () {
                var src = $(this).attr('src');
                $('#image').attr('src', src);
            });
        })
    </script>
    <script>
        $(document).ready(function () {
            $('.ajax-request').click(function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: 'get',
                    url: '/majales/post-views/'+id,
                    success: function () {
                        console.log('Viewed successfully')
                    }

                })
            })
        })
    </script>
    <script src="{{asset('js/echo.min.js')}}"></script>
    <script>
        echo.init({
            offset: 100,
            throttle: 250,
            unload: false,
            callback: function (element, op) {
                console.log(element, 'has been', op + 'ed')
            }
        });

        echo.render();
    </script>
@endsection