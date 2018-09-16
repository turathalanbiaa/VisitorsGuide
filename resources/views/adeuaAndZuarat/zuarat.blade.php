@extends('layout.secondary_layout')

@section('navbar-color')
    {{"bg-aqua-gradient"}}
@endsection

@section('navbar-brand')
    <span>دليل الزيارات والادعية - الزيارات</span>
@endsection

@section('content')

    <div class="container prayerAndVisits pt-3 pb-2">
        <div>
            <form action="/adeua-and-zuarat/search-by-zuarat" method="get">
                <div class="form-group aa-input-container">
                    <input class="form-control form-control-lg" type="text"
                           name="search"
                           placeholder="أدخل كلمة للبحث عنها"
                           autocomplete="off">
                    <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
                        <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z"/>
                    </svg>
                </div>
            </form>
        </div>
        @if($zuarat->count() == 0)
            <div class="row justify-content-center">
                <div>
                    <h2>لاتوجد بيانات لعرضها</h2>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            @foreach($zuarat as $zuara)
            <div class="col-md-6 pb-4">
                <div class="rounded p-0 shadow-special majales-zuarat" style=" overflow: hidden">
                    <div class="w-100">
                        <img class="w-100" src="{{asset('naj.jpg')}}">
                    </div>
                    <div class="mt-3 p-3 zuarat">
                        <h3 id="tit-{{$zuara->id}}">{{$zuara->title}}</h3>
                        <p id="cont-{{$zuara->id}}" class="text-truncate">{{$zuara->content}}</p>
                        <button class="btn btn-primary btn-sm rounded" type="button" data-toggle="collapse"
                                data-target="#collapse-{{$zuara->id}}" aria-expanded="false" aria-controls="collapseExample">استماع للزيارة
                        </button>
                        <button class="btn btn-secondary btn-sm rounded read-more" value="{{$zuara->id}}" data-toggle="modal"
                                data-target=".exampleModalLong">قراءة للزيارة
                        </button>
                    </div>
                    <div class="collapse p-3" id="collapse-{{$zuara->id}}">
                        <audio controls class="w-100">
                            <source src="" type="audio/ogg">
                            <source src="VisitorsGuide/storage/app/public/zuarat/{{$zuara->id}}.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pt-2">
            {{$zuarat->links()}}
        </div>

        <div class="modal fade exampleModalLong" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="modal-title"></h5>
                    </div>
                    <div class="modal-body">
                        <p id="modal-content"></p>
                    </div>
                    <div class="modal-footer align-self-start border-0">
                        <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">اغلاق</button>
                    </div>
                </div>
            </div>
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
                <a href="/adeua-and-zuarat/images" href="events" class="list-group-item list-group-item-action">
                    <span>معرض الصور</span>
                </a>
                <a href="/adeua-and-zuarat/videos" href="events" class="list-group-item list-group-item-action">
                    <span>معرض الفيديو</span>
                </a>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.read-more').click(function () {
            var id = $(this).attr('value');
            var content = $('#cont-'+id).text();
            var title = $('#tit-'+id).text();
            $('#modal-title').text(title);
            $('#modal-content').text(content)
        })
    </script>
@endsection