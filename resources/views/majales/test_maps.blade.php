@extends('layout.secondary_layout')

@section("navbar-color")
    {{"bg-orange-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">المجالس - عرض الجميع</span>
@endsection

@section('content')
    <div class="container p-0" style="height: 100%; width: 100%">
        <div style="width: 100%; height: 850px" id="map-canvas">
        </div>
    </div>
@endsection

@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKYUdCrdRfLxHyfmp7DioNrGMOt7fI-E4">
    </script>
    <script>
        const latAndLong ={!! json_encode($latAndLong) !!};
        const content = function (i) {
            return   '<div style="width: 200px; overflow: hidden">'+
                      '<p style="font-size: 14px">'+latAndLong[i]['name']+'</p>'+
                      '<p style="font-size: 9px">'+latAndLong[i]['description']+'</p>'+
                     '</div>'
        };
        const category = function(category)
        {
            switch (category) {
                case 1: return '1.svg';
                case 2: return '2.svg';
                case 3: return '3.svg';
                case 4: return '4.svg';
                case 5: return '5.svg';
                case 6: return '6.svg';
            }
        };

        console.log(latAndLong[1]['category']);

        function initialize() {
            let mapOptions = {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: new google.maps.LatLng(32.02594,44.34625),
            };
            let map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            let infowindow = new google.maps.InfoWindow();

            for(let i=0; i<latAndLong.length; i++)
            {

               let latLng = new google.maps.LatLng(latAndLong[i]['latitude'], latAndLong[i]['longitude']);
               let marker = new google.maps.Marker({
                    position: latLng,
                    icon: {
                        url: "{{asset('maps-icon')}}/" + category(latAndLong[i]['category']),
                        scaledSize: new google.maps.Size(50, 50),
                    },
                    map     : map,
                   setContent: content(i)
                });
                google.maps.event.addListener(marker,'click', function() {
                    infowindow.close();
                    infowindow.setContent(this.setContent);
                    infowindow.open(map, this);
                })
            }
        }
        initialize();

    </script>
@endsection