<div class="pt-4" id="street-view">
    <div class="form-inline">
        <div class="form-group col-12">
            <div class="alert alert-danger mb-0" role="alert" id="error-message">
                <ul class="pr-3 mb-0"><li>يرجى ملئ جميع الحقول</li></ul>
            </div>
        </div>

        <div class="form-group col-12 col-sm-6">
            <input type="number" class="form-control" required="required" id="source" placeholder="من رقم العمود" style="width: 100%;">
        </div>

        <div class="form-group col-12 col-sm-6">
            <input type="number" class="form-control" required="required" id="destination" placeholder="الى رقم العمود" style="width: 100%;">
        </div>

        <div class="form-group col-12 col-sm-12 mt-sm-3 justify-content-center text-center">
            <button class="btn btn-info" data-action="street-view">حساب المسافه</button>
        </div>
    </div>
</div>

<div class="pt-3" id="street-view-result">

</div>