@extends('layout.secondary_layout')

@section('top-title')
    <h1>دليل الزيارات والادعية</h1>

@endsection

@section('content')

    <div class="container prayerAndVisits">
        <div class="row justify-content-center mt-5 mb-5">
            @foreach($zuarat as $zuara)
            <div class="col-md-4 mt-2 mb-2">
                <div class="rounded p-0 shadow-special" style=" overflow: hidden">
                    <div class="w-100">
                        <img class="w-100" src="{{asset('naj.jpg')}}">
                    </div>
                    <div class="mt-3 p-3 zuarat">
                        <h3 id="tit-2334">{{$zuara->title}}</h3>
                        <p id="cont-2334" class="text-truncate">{{$zuara->content}}</p>
                        <button class="btn btn-primary btn-sm rounded" type="button" data-toggle="collapse"
                                data-target="#collapse-1" aria-expanded="false" aria-controls="collapseExample">استماع للزيارة
                        </button>
                        <button class="btn btn-secondary btn-sm rounded read-more" value="2334" data-toggle="modal"
                                data-target=".exampleModalLong">قراءة للزيارة
                        </button>
                    </div>
                    <div class="collapse p-3" id="collapse-1">
                        <audio controls class="w-100">
                            <source src="horse.ogg" type="audio/ogg">
                            <source src="horse.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mb-5">
            {{$zuarat->links()}}
        </div>

        <div class="modal fade exampleModalLong" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="modal-title" id="exampleModalLongTitle"></h5>
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
    <script>
        $('.read-more').click(function () {
            var id = $(this).attr('value');
            var content = $('#cont-'+id).text()
            var title = $('#tit-'+id).text()
            $('#modal-title').text(title)
            $('#modal-content').text(content)
        })
    </script>
@endsection