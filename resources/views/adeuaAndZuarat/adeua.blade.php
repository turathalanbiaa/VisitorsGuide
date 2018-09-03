@extends('layout.secondary_layout')

@section('top-title')
    <h1>دليل الزيارات والادعية</h1>

@endsection

@section('content')

    <div class="container prayerAndVisits">
        <div class="row justify-content-center">
            <div class="col-md-8 prayer-today mt-5">
                <div class="row">
                    <div class="col-md-12 w-100 p-0">
                        <img class="w-100" src="{{asset('thumb.jpeg')}}">
                    </div>

                    <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner">
                                @foreach($daysAdeua as $daydeua)
                                    <div class="carousel-item">
                                        <div class="prayer-today-content">
                                            <div class="header mt-3">
                                                <h2 class="text-center">{{$daydeua->title}}</h2>
                                            </div>

                                            <div class="content">
                                                <p>{{$daydeua->content}}</p>
                                            </div>

                                        </div>

                                        <button class="btn btn-primary rounded mb-3" type="button" data-toggle="collapse"
                                                data-target="#collapse-{{$daydeua->id}}" aria-expanded="false" aria-controls="collapseExample">استماع للزيارة
                                        </button>

                                        <div class="collapse p-3" id="collapse-{{$daydeua->id}}">
                                            <audio controls class="w-100">
                                                <source src="horse.ogg" type="audio/ogg">
                                                <source src="horse.mp3" type="audio/mpeg">
                                            </audio>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <a class="" style="float: left" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" style="background-color: #0c5460" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="" style="float: right" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" style="background-color: #0c5460" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($publicAdeua as $publicDeua)
                <div class="col-md-4 mt-5 mb-2">
                    <div class="rounded p-0 shadow-special" style=" overflow: hidden">
                        <div class="w-100">
                            <img class="w-100" src="{{asset('child.jpg')}}">
                        </div>
                        <div class="mt-3 p-3 zuarat">
                            <h3 id="tit-{{$publicDeua->id}}">{{$publicDeua->title}}</h3>
                            <p id="cont-{{$publicDeua->id}}" class="text-truncate">{{$publicDeua->content}}</p>
                            <button class="btn btn-primary btn-sm rounded" type="button" data-toggle="collapse"
                                    data-target="#collapse-{{$publicDeua->id}}" aria-expanded="false" aria-controls="collapseExample">استماع للزيارة
                            </button>
                            <button class="btn btn-secondary btn-sm rounded read-more" value="{{$publicDeua->id}}" data-toggle="modal"
                                    data-target=".exampleModalLong">قراءة للزيارة
                            </button>
                        </div>
                        <div class="collapse p-3" id="collapse-{{$publicDeua->id}}">
                            <audio controls class="w-100">
                                <source src="horse.ogg" type="audio/ogg">
                                <source src="horse.mp3" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                </div>
            @endforeach

                <div class="mb-5">
                    {{$publicAdeua->links()}}
                </div>
        </div>
    </div>

    <div class="modal fade exampleModalLong" id="exampleModalLong"
         tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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



    <script>
        $('.read-more').click(function () {
            var id = $(this).attr('value');
            var content = $('#cont-'+id).text()
            var title = $('#tit-'+id).text()
            $('#modal-title').text(title)
            $('#modal-content').text(content)
        })
    </script>
    <script>
        $(document).ready(function () {
            $('.carousel-item:first').addClass('active');
        })
    </script>

@endsection