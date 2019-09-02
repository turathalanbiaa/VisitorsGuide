@extends('layout.secondary_layout')

@section("navbar-color")
    {{"bg-orange-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">المجالس - الاستديو</span>
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
                           <span style="color: #c8cbcf"><i class="fas fa-tv"></i> {{$post->views}}</span>
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
                           <span style="color: #c8cbcf"><i class="fas fa-tv"></i> {{$post->views}}</span>
                       </div>
                   </div>
               @endif
           @endforeach
       </div>
       <div>
           {{$posts->links()}}
       </div>
    </div>


@endsection

@section("menu-modal-content")
    <div class="modal-content border-0 rounded-0 shadow-special">
        <h4 class="modal-header bg-orange-gradient text-white rounded-0 m-0">
            <span>المجالس</span>
        </h4>

        <div class="modal-body">
            <div class="list-group">
                <a href="/majales/events-gallery" class="list-group-item list-group-item-action" id="show-questions">
                    <i class="fas fa-camera-retro"></i>
                    <span>الاستديو</span>
                </a>
                <a href="/majales/add-majles" class="list-group-item list-group-item-action" id="show-questions">
                    <i class="fas fa-plus"></i>
                    <span>اضافة مجلس</span>
                </a>
                <a href="/majales/majalesy" class="list-group-item list-group-item-action" id="show-questions">
                    <i class="fas fa-calendar-alt"></i>
                    <span>مجالسي</span>
                </a>
                <a href="/majales" class="list-group-item list-group-item-action" id="show-questions">
                    <i class="fas fa-calendar-alt"></i>
                    <span>عرض جميع المناسبات</span>
                </a>
                <a href="/majales/events-upcoming" class="list-group-item list-group-item-action" id="show-questions">
                    <i class="fas fa-hourglass-start"></i>
                    <span>عرض المناسبات التي لم تبدء الى الان</span>
                </a>
                <a href="/majales/events-ended" class="list-group-item list-group-item-action" id="show-send-question">
                    <i class="fas fa-hourglass-end"></i>
                    <span>عرض المناسبات الفائتة</span>
                </a>
                <a href="/majales/events-started" href="events" class="list-group-item list-group-item-action" id="show-ads-maseal">
                    <i class="fas fa-hourglass-half"></i>
                    <span>عرض المناسبات التي بدأت </span>
                </a>

                <div class="list-group-item" data-toggle="collapse" data-target="#category-list" aria-expanded="false" aria-controls="category-list">
                    <i class="fas fa-building"></i>
                    <span>عرض المناسبات حسب المحافظة</span>

                    <div class="collapse" id="category-list">
                        <div class="list-group list-group-flush mx-3">
                            <a href="/majales/events-city/{{\App\Enums\Cities::NAJ}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::NAJ}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::KAR}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::KAR}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::BAGH}}" class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::BAGH}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::BAB}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::BAB}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::QAD}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::QAD}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::WAS}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::WAS}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::MUTH}}" class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::MUTH}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::MAY}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::MAY}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::THI}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::THI}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::BAS}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::BAS}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::ANB}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::ANB}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::DIY}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::DIY}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::SAL}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::SAL}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::KIR}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::KIR}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::NIN}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::NIN}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::ARB}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::ARB}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::SUL}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::SUL}}
                            </a>
                            <a href="/majales/events-city/{{\App\Enums\Cities::DHU}}"  class="list-group-item list-group-item-action">
                                {{\App\Enums\Cities::DHU}}
                            </a>
                        </div>
                    </div>
                </div>
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
            $('.image-modal').click(function () {
                let src = $(this).attr('src');
                $('#image').attr('src', src);
            });
        })
    </script>
    <script>
        $(document).ready(function () {
            $('.ajax-request').click(function () {
                let id = $(this).attr('data-id');
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


