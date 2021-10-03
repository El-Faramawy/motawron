<div id="delete" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <span class="fs-2 fw-bolder" style="float: right">حذف </span>
                <button class="btn btn-sm btn-info" style="float: left" data-dismiss="modal">x</button>
            </div>
            <form action="" method="post" id="delete_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value="">
                    <h4>هل أنت متاكد من حذف المحدد <span id="name" class="fs-2"></span> ؟ </h4>
                </div>
                <div class="modal-footer">
                    <button  type="button" class="btn btn-info " data-dismiss="modal">الغاء</button>
                    <button class="btn btn-danger" type="submit">حذف</button>
                </div>
            </form>
        </div>
    </div>
</div>
