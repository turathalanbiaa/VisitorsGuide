




<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تحذير</h5>
                <button type="button" class="close ml-0" style="left: 4px" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>سوف يتم حذف المجلس بعد الضغط على كلمة حـذف</p>
            </div>
            <div class="modal-footer align-self-start">
                <form method="post" action="{{route('deleteMajles')}}">
                    @csrf
                    <button type="submit" class="btn btn-danger">حـذف</button>
                    <input id="delete" type="hidden" name="id">
                </form>
            </div>
        </div>
    </div>
</div>