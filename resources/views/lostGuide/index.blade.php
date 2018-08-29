@extends("layout.secondary_layout")

@section("navbar-color")
    {{"bg-teal-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">دليل التائهين والمفقودات</span>
@endsection

@section("content")
    <div class="container pt-5 pb-5">
        <form id='serch-form' method="GET" action="{{ action('LostController@index') }}">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">

                        <div class="aa-input-container" id="aa-input-container">
                            <input type="search" id="aa-search-input" class="aa-input-search" placeholder="بحث المكان او الصنف او الوصف او رقم العمود والتاريخ" name="search" autocomplete="off" />
                            <a href="javascript:void(0);">
                                <svg id="search-icon" class="aa-input-icon" viewBox="654 -372 1664 1664">
                                    <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            @if($losts->count())
            @foreach($losts as $lost)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img width="400" height="300" class="card-img-top fill" src="@if(is_null($lost->file_name)){{asset("storage/img/lost/empty-photo.jpg")}}@else{{asset("storage/img/lost/". $lost->file_name)}}@endif"    alt="Card image cap">
                        <div class="card-body">
                        <div class="card-text">
                            <ul class="list-group list-group-flush p-0">
                                <li class="list-group-item"> الصنف:  {{\App\Enums\lostCategory::getCategory($lost->category)}}</li>
                                <li class="list-group-item"> الوصف: {{$lost->description}}</li>
                                <li class="list-group-item"> التاريخ: {{date('d-m-Y', strtotime($lost->datetime))}}</li>
                                <li class="list-group-item">  المكان: {{$lost->center->name}}</li>
                                <li class="list-group-item">  رقم العمود: {{$lost->center->t_number}}</li>
                                <li class="list-group-item"> التليفون: {{$lost->center->phone}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
                @else
                <div class="col">
                    <div class="alert alert-primary" role="alert">
                           لا توجد بيانات لعرضها  <a href="{{url("/lost")}}" class="alert-link"> . العودة الى الصفحة الرئيسية  </a>.او ادخل كلمة اخرة للبحث عنها.
                </div>
                </div>
            @endif
        </div>
    </div>
    @if($losts->hasPages())
        @if(isset($_GET['search']))
            <div class="col-12 d-flex justify-content-between pt-0 pb-5">
                @if(is_null($losts->appends(['search'=>$_GET['search']])->previousPageUrl()))
                    <div>
                        <small>&lt;&lt;</small>
                        <span>السابق</span>
                    </div>
                @else
                    <a href="{{$losts->appends(['search'=>$_GET['search']])->previousPageUrl()}}">
                        <small>&lt;&lt;</small>
                        <span>السابق</span>
                    </a>
                @endif

                @if(is_null($losts->appends(['search'=>$_GET['search']])->nextPageUrl()))
                    <div>
                        <span>التالي</span>
                        <small>&gt;&gt;</small>
                    </div>
                @else
                    <a href="{{$losts->appends(['search'=>$_GET['search']])->nextPageUrl()}}">
                        <span>التالي</span>
                        <small>&gt;&gt;</small>
                    </a>
                @endif
            </div>
        @else
            <div class="col-12 d-flex justify-content-between pt-0 pb-5">
                @if(is_null($losts->previousPageUrl()))
                    <div>
                        <small>&lt;&lt;</small>
                        <span>السابق</span>
                    </div>
                @else
                    <a href="{{$losts->previousPageUrl()}}">
                        <small>&lt;&lt;</small>
                        <span>السابق</span>
                    </a>
                @endif

                @if(is_null($losts->nextPageUrl()))
                    <div>
                        <span>التالي</span>
                        <small>&gt;&gt;</small>
                    </div>
                @else
                    <a href="{{$losts->nextPageUrl()}}">
                        <span>التالي</span>
                        <small>&gt;&gt;</small>
                    </a>
                @endif
            </div>
        @endif
    @endif

@endsection
@section("script")
    <script>
        $(function () {
            $("#search-icon" ).click(function() {
                $("#serch-form" ).submit();
            });
        });</script>
@endsection
@section("nav-items-bottom")
    <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-road text-white"></i></a>
@endsection
