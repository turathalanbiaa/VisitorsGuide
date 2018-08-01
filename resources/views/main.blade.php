@extends("layout.main_layout")

@section("content")
    <div class="container-fluid">
        <nav class="navbar fixed-top justify-content-center navbar-expand-lg navbar-dark bg-danger">
            <a class="navbar-brand" href="#">Sticky top</a>
        </nav>

        <div class="container" style="margin-top: 75px;">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-6">
                    One of six columns
                </div>

                <div class="col-md-4 col-sm-6 col-6">
                    One of six columns
                </div>

                <div class="col-md-4 col-sm-6 col-6">
                    One of six columns
                </div>

                <div class="col-md-4 col-sm-6 col-6">
                    One of six columns
                </div>

                <div class="col-md-4 col-sm-6 col-6">
                    One of six columns
                </div>

                <div class="col-md-4 col-sm-6 col-6">
                    One of six columns
                </div>
            </div>
        </div>
    </div>
@endsection