@extends("layout.secondary_layout")

@section("navbar-color")
    {{"bg-teal-gradient"}}
@endsection

@section("navbar-brand")
    <span id="title">دليل التائهين والمفقودات</span>
@endsection

@section("content")
    <div class="jumbotron mt-2 mb-5" id="street-view">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <h2 class="text-center pt-2">اضافة اعلان</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="pt-2" method="post" action="{{route('addLost')}}">
            @csrf
            <div class="form-group">
                <label for="description">الوصف</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                          placeholder="الرجاء كتابة تفاصيل الاعلان " required></textarea>
            </div>
            <div class="form-group">
                <label for="cities">الصنف</label>
                <select class="form-control" name="category" required>
                    @for($i=1; $i<7; $i++)
                        <option value="{{$i}}">{{App\Enums\LostCategory::getCategory($i)}}</option>
                    @endfor
                </select>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type" id="lost"
                       value="فقدت" checked>
                <label class="form-check-label col-sm-2" for="lost">فقدت</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type" id="find"
                       value="وجدت">
                <label class="form-check-label col-sm-2" for="find">وجدت</label>
            </div>
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-primary mb-2" id="add-majles">اضافة اعلان</button>
            </div>
        </form>
    </div>
@endsection