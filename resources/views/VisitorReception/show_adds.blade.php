@extends("layout.secondary_layout")

@section("top-title")
    دليل استضافة الزائرين
@endsection

@section("content")


    <div class="container mt-3 mb-3">


        <div class="accordion " id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card bg-secondary border-0 mb-3 shadow p-3 bg-white rounded">
                <div class="card-header border-0 mb-1 shadow-special" id="heading-0" role="tab">
                    <div class="collapsed " href="#collapse-0" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
                        <p class="text-black-50 mb-0">
                            <span>البحث</span>
                            <i class="fa fa-angle-down rotate-icon mt-2 float-left"></i>
                        </p>
                    </div>
                </div>
                <div class="collapse" id="collapse-0" role="tabpanel" aria-labelledby="heading-0" data-parent="#accordion">
                    <div class="card-body mb-1 bg-light-special text-white">

                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        سعة البيت
                                        <input type="number" class="form-control" id="number" placeholder="اكبر من .... اشخاص ">
                                    </div>

                                </div>


                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label for="inputState">النوع</label>
                                        <select id="inputState" class="form-control">
                                            <option>رجال</option>
                                            <option>نساء</option>
                                            <option>عوائل</option>



                                        </select>
                                    </div>


                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label for="inputState">المدينة</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>الكل...</option>
                                            <option>النجف</option>
                                            <option>كربلاء</option>
                                            <option>بغداد</option>
                                            <option>سامراء</option>
                                            <option>الحلة</option>
                                            <option>البصرة</option>
                                            <option>الديوانية</option>


                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">الحي</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary">بحث</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>



        <div class="row">


            <div class="col-12 col-sm-6">
                <div class="card text-center shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header bg-white ">

                        <h6><span class="badge badge-secondary fa fa-user-alt  text-white p-2"> عبد الله عبد الصمد</span></h6>
                        <h6><span class="badge ">2018-3-22 10:40:29</span></h6>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">بيت سكن 1</h5>
                        <p class="card-text">العوان : نجف - حي الصحة</p>
                        <p class="card-text">عدد الافراد : 20</p>
                        <p class="card-text">الاشخاض : عوائل</p>
                        <a class="btn  fa fa-phone-square " href="tel:+1-303-499-7111">اتصال بصاحب البيت</a>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card text-center shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header bg-white ">

                        <h6><span class="badge badge-secondary fa fa-user-alt  text-white p-2  "> عبد الله عبد الصمد</span></h6>
                        <h6><span class="badge ">2018-3-22 10:40:29</span></h6>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">بيت سكن 1</h5>
                        <p class="card-text">العوان : نجف - حي الصحة</p>
                        <p class="card-text">عدد الافراد : 20</p>
                        <p class="card-text">الاشخاض : عوائل</p>
                        <a class="btn  fa fa-phone-square " href="tel:+1-303-499-7111">اتصال بصاحب البيت</a>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card text-center shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header bg-white ">

                        <h6><span class="badge badge-secondary fa fa-user-alt  text-white p-2  "> عبد الله عبد الصمد</span></h6>
                        <h6><span class="badge ">2018-3-22 10:40:29</span></h6>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">بيت سكن 1</h5>
                        <p class="card-text">العوان : نجف - حي الصحة</p>
                        <p class="card-text">عدد الافراد : 20</p>
                        <p class="card-text">الاشخاض : عوائل</p>
                        <a class="btn  fa fa-phone-square " href="tel:+1-303-499-7111">اتصال بصاحب البيت</a>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card text-center shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header bg-white ">

                        <h6><span class="badge badge-secondary fa fa-user-alt  text-white p-2  "> عبد الله عبد الصمد</span></h6>
                        <h6><span class="badge ">2018-3-22 10:40:29</span></h6>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">بيت سكن 1</h5>
                        <p class="card-text">العوان : نجف - حي الصحة</p>
                        <p class="card-text">عدد الافراد : 20</p>
                        <p class="card-text">الاشخاض : عوائل</p>
                        <a class="btn  fa fa-phone-square " href="tel:+1-303-499-7111">اتصال بصاحب البيت</a>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card text-center shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header bg-white ">

                        <h6><span class="badge badge-secondary fa fa-user-alt  text-white p-2  "> عبد الله عبد الصمد</span></h6>
                        <h6><span class="badge ">2018-3-22 10:40:29</span></h6>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">بيت سكن 1</h5>
                        <p class="card-text">العوان : نجف - حي الصحة</p>
                        <p class="card-text">عدد الافراد : 20</p>
                        <p class="card-text">الاشخاض : عوائل</p>
                        <a class="btn  fa fa-phone-square " href="tel:+1-303-499-7111">اتصال بصاحب البيت</a>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card text-center shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header bg-white ">

                        <h6><span class="badge badge-secondary fa fa-user-alt  text-white p-2  "> عبد الله عبد الصمد</span></h6>
                        <h6><span class="badge ">2018-3-22 10:40:29</span></h6>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">بيت سكن 1</h5>
                        <p class="card-text">العوان : نجف - حي الصحة</p>
                        <p class="card-text">عدد الافراد : 20</p>
                        <p class="card-text">الاشخاض : عوائل</p>
                        <a class="btn  fa fa-phone-square " href="tel:+1-303-499-7111">اتصال بصاحب البيت</a>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card text-center shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header bg-white ">

                        <h6><span class="badge badge-secondary fa fa-user-alt  text-white p-2  "> عبد الله عبد الصمد</span></h6>
                        <h6><span class="badge ">2018-3-22 10:40:29</span></h6>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">بيت سكن 1</h5>
                        <p class="card-text">العوان : نجف - حي الصحة</p>
                        <p class="card-text">عدد الافراد : 20</p>
                        <p class="card-text">الاشخاض : عوائل</p>
                        <a class="btn  fa fa-phone-square " href="tel:+1-303-499-7111">اتصال بصاحب البيت</a>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card text-center shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header bg-white ">

                        <h6><span class="badge badge-secondary fa fa-user-alt  text-white p-2  "> عبد الله عبد الصمد</span></h6>
                        <h6><span class="badge ">2018-3-22 10:40:29</span></h6>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">بيت سكن 1</h5>
                        <p class="card-text">العوان : نجف - حي الصحة</p>
                        <p class="card-text">عدد الافراد : 20</p>
                        <p class="card-text">الاشخاض : عوائل</p>
                        <a class="btn  fa fa-phone-square " href="tel:+1-303-499-7111">اتصال بصاحب البيت</a>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card text-center shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header bg-white ">

                        <h6><span class="badge badge-secondary fa fa-user-alt  text-white p-2  "> عبد الله عبد الصمد</span></h6>
                        <h6><span class="badge ">2018-3-22 10:40:29</span></h6>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">بيت سكن 1</h5>
                        <p class="card-text">العوان : نجف - حي الصحة</p>
                        <p class="card-text">عدد الافراد : 20</p>
                        <p class="card-text">الاشخاض : عوائل</p>
                        <a class="btn  fa fa-phone-square " href="tel:+1-303-499-7111">اتصال بصاحب البيت</a>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card text-center shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header bg-white ">

                        <h6><span class="badge badge-secondary fa fa-user-alt  text-white p-2  "> عبد الله عبد الصمد</span></h6>
                        <h6><span class="badge ">2018-3-22 10:40:29</span></h6>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">بيت سكن 1</h5>
                        <p class="card-text">العوان : نجف - حي الصحة</p>
                        <p class="card-text">عدد الافراد : 20</p>
                        <p class="card-text">الاشخاض : عوائل</p>
                        <a class="btn  fa fa-phone-square " href="tel:+1-303-499-7111">اتصال بصاحب البيت</a>
                        </a>

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection






@section("nav-items-bottom")

    <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-plus  text-white"></i></a>
    <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-home text-white"></i></a>
    <a class="nav-item nav-link rounded-0" href="/"><i class="fa fa-home text-white"></i></a>
@endsection



@section("script")
@endsection
