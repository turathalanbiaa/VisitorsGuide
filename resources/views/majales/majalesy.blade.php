@extends('layout.secondary_layout')

@section("navbar-color")
    {{"bg-orange-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">المجالس - عرض الجميع</span>
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
            @component('majales.component.majalesy_card', ['majlesy'=>$majlesy])
            @endcomponent
        @endforeach
    </div>

    @component('majales.component.maps_modal')
    @endcomponent

    @component('majales.component.main_menu')
    @endcomponent

    @component('majales.component.modal_delete_message')
    @endcomponent

@endsection



@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKYUdCrdRfLxHyfmp7DioNrGMOt7fI-E4">

    </script>
    <script>
        function initialize(x ,y) {
            let center = new google.maps.LatLng(x, y);
            let mapOptions = {
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: center
            };

            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            marker = new google.maps.Marker({
                map: map,
                position: center
            });
        }

        $('.location').on('click', function () {
            $('#modal').modal({
                backdrop: 'static',
                keyboard: false
            });
            initialize($(this).attr('latitude'),$(this).attr('longitude'));
        });

    </script>
    <script>
        $(document).ready(function () {
            $('.delete').click(function () {
                $('#delete').val($(this).attr('data-id'));
            });
        })
    </script>
@endsection


