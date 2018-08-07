@extends("layout.secondary_layout")

@section("top-title")
    <span id="title">دليل الطريق - جميع المناطق</span>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include("roadGuide.all_points")
                @include("roadGuide.mawakep_points")
                @include("roadGuide.hemamat_points")
                @include("roadGuide.public_points")
                @include("roadGuide.street_view")
            </div>
        </div>
    </div>
@endsection

@section("nav-items-bottom")
    <a class="nav-item nav-link" id="show-all-points"><i class="fa fa-shoe-prints" style="color: white;"></i></a>
    <a class="nav-item nav-link" id="show-mawakep-points"><i class="fa fa-hotel" style="color:white;"></i></a>
    <a class="nav-item nav-link" id="show-hemamat-points"><i class="fa fa-bath" style="color:white;"></i></a>
    <a class="nav-item nav-link" id="show-public-points"><i class="fa fa-map-marked-alt" style="color:white;"></i></a>
    <a class="nav-item nav-link" id="show-street-view"><i class="fa fa-street-view" style="color:white;"></i></a>
@endsection

@section("script")
    <script>
        $("#all-points").addClass("d-block");
        $("#mawakep-points").addClass("d-none");
        $("#hemamat-points").addClass("d-none");
        $("#public-points").addClass("d-none");
        $("#street-view").addClass("d-none");

        $("#show-all-points").click(function () {
            $("#title").html("دليل الطريق - جميع المناطق");
            $("#all-points").removeClass("d-none").addClass("d-block");
            $("#mawakep-points").removeClass("d-block").addClass("d-none");
            $("#hemamat-points").removeClass("d-block").addClass("d-none");
            $("#public-points").removeClass("d-block").addClass("d-none");
            $("#street-view").removeClass("d-block").addClass("d-none");
        });

        $("#show-mawakep-points").click(function () {
            $("#title").html("دليل الطريق - المواكب");
            $("#all-points").removeClass("d-block").addClass("d-none");
            $("#mawakep-points").removeClass("d-none").addClass("d-block");
            $("#hemamat-points").removeClass("d-block").addClass("d-none");
            $("#public-points").removeClass("d-block").addClass("d-none");
            $("#street-view").removeClass("d-block").addClass("d-none");
        });

        $("#show-hemamat-points").click(function () {
            $("#title").html("دليل الطريق - الحمامات");
            $("#all-points").removeClass("d-block").addClass("d-none");
            $("#mawakep-points").removeClass("d-block").addClass("d-none");
            $("#hemamat-points").removeClass("d-none").addClass("d-block");
            $("#public-points").removeClass("d-block").addClass("d-none");
            $("#street-view").removeClass("d-block").addClass("d-none");
        });

        $("#show-public-points").click(function () {
            $("#title").html("دليل الطريق - المناطق العامة والمشهورة");
            $("#all-points").removeClass("d-block").addClass("d-none");
            $("#mawakep-points").removeClass("d-block").addClass("d-none");
            $("#hemamat-points").removeClass("d-block").addClass("d-none");
            $("#public-points").removeClass("d-none").addClass("d-block");
            $("#street-view").removeClass("d-block").addClass("d-none");
        });

        $("#show-street-view").click(function () {
            $("#title").html("دليل الطريق - حساب المسافة");
            $("#all-points").removeClass("d-block").addClass("d-none");
            $("#mawakep-points").removeClass("d-block").addClass("d-none");
            $("#hemamat-points").removeClass("d-block").addClass("d-none");
            $("#public-points").removeClass("d-block").addClass("d-none");
            $("#street-view").removeClass("d-none").addClass("d-block");
        });
    </script>
    <script>
        $("#error-message").removeClass("d-block").addClass("d-none");
        $("button[data-action='street-view']").click(function () {
            var source = $("input[type='number']#source").val();
            var destination = $("input[type='number']#destination").val();

            if (source == "" || destination == "")
                $("#error-message").removeClass("d-none").addClass("d-block");
            else
                $.ajax({
                    type:'post',
                    url: '/road-guide/street-view',
                    dataType: 'json',
                    data: {source:source, destination:destination},
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (result) {
                        $("#error-message").removeClass("d-block").addClass("d-none");
                    },
                    error: function () {
                        alert("يرجى التحقق من الأتصال بالأنترنيت")
                    },
                    complete: function () {

                    }
                });
        });
    </script>
@endsection