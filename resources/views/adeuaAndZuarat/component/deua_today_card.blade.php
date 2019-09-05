



<div class="col-md-8 prayer-today">
    <div class="majales-zuarat shadow-special card-majales-zuarat">
        <div class="w-100 p-0">
            <img class="w-100" src="{{asset('thumb.jpg')}}">
        </div>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="p-2" style="text-align: center">
                    <i class="fas fa-plus-square fa-2x ml-2" style="color:#dae0e5" id="zoomIn"></i>
                    <i class="fas fa-minus-square fa-2x" style="color: #dae0e5" id="zoomOut"></i>
                </div>
                <div class="p-2 w-100" style="position: absolute; z-index: 999">
                    <a style="float: left" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="fas fa-arrow-alt-circle-left fa-3x"></i>
                    </a>
                    <a style="float: right" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="fas fa-arrow-alt-circle-right fa-3x"></i>
                    </a>
                </div>
                <div class="carousel-inner">
                    @foreach($daysAdeua as $daydeua)
                        <div class="carousel-item">
                            <div class="prayer-today-content">
                                <div class="header mt-3">
                                    <h3 class="text-center">{{$daydeua->title}}</h3>
                                </div>
                                <div class="content p-2">
                                    <p class="font-size">{{$daydeua->content}}</p>
                                </div>
                            </div>
                            <div class="p-2">
                                <audio controls class="w-100">
                                    <source src="" type="audio/ogg">
                                    <source src="{{$daydeua->sound}}" type="audio/mpeg">
                                </audio>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>