@extends('layout.secondary_layout')

@section("navbar-brand")
    <span id="title">المجالس حسب المدينة</span>
@endsection

@section('content')
    <div class="container pt-2 pb-2">
        @if($events->count() == 0)
            <div class="mt-lg-5 text-center">
                <h1>لاتوجد بيانات لعرضها</h1>
            </div>
        @endif
        @foreach($events as $event)
            @component('majales.component.majles_card', ['event'=>$event])
            @endcomponent
        @endforeach
        <div class="d-flex justify-content-center py-2">
            {{$events->links()}}
        </div>
    </div>

    @component('majales.component.main_menu')
    @endcomponent

    @component('majales.component.maps_modal')@endcomponent
@endsection

@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKYUdCrdRfLxHyfmp7DioNrGMOt7fI-E4"></script>
    <script>
        function initialize(x,y) {
            var center = new google.maps.LatLng(x,y);
            var mapOptions = {
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: center
            };
           map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        }
        $('.location').on('click', function () {
            $('#modal').modal({
                backdrop: 'static',
                keyboard: false
            });
            initialize($(this).attr('data-latitude'),$(this).attr('data-longitude'));
        });
    </script>
@endsection