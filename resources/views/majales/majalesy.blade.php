@extends('layout.secondary_layout')

@section("navbar-brand")
    <span id="title">مجالسي</span>
@endsection

@section('content')
    <div class="container pt-2 pb-2">
        @if(session('update'))
            <div class="alert alert-success" role="alert">
                {{session('update')}}
            </div>
        @endif
        @if(session('delete'))
            <div class="alert alert-success" role="alert">
                {{session('delete')}}
            </div>
        @endif
        @if($majalesy->count() == 0)
            <div class="mt-lg-5 text-center">
                <h1>لاتوحد بيانات لعرضها</h1>
            </div>
        @endif
        @foreach($majalesy as $majlesy)
            @component('majales.component.majalesy_card', ['majlesy'=>$majlesy])@endcomponent
        @endforeach
        <div class="d-flex justify-content-center py-2">
            {{$majalesy->links()}}
        </div>
    </div>

    @component('majales.component.main_menu')@endcomponent

    @component('majales.component.modal_delete_message')@endcomponent

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