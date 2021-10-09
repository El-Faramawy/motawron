{{--<script src="{{url('/')}}/admin/assets/js/jquery.js"></script>--}}

{{--<script src="{{url('/')}}/admin/assets/plugins/global/plugins.bundle.js"></script>--}}
<script src="{{url('/')}}/admin/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{url('/')}}/admin/assets/js/custom/widgets.js"></script>
<script src="{{url('/')}}/admin/assets/js/custom/apps/chat/chat.js"></script>
<script src="{{url('/')}}/admin/assets/js/custom/modals/create-app.js"></script>
<script src="{{url('/')}}/admin/assets/js/custom/modals/upgrade-plan.js"></script>
<script src="{{url('/')}}/admin/assets/js/custom/modals/new-target.js"></script>




{{--=================  dropfy  ================--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    // $(document).ready(function () {
    $('.dropify').dropify();
    // });//end jquery
</script>

<script type="text/javascript">
    // $(document).ready(function() {
    $('.file_upload').imageuploadify();
    // })
</script>

{{--===================  toster ==============================--}}
<script src="{{url('admin/js')}}/tostar.js"></script>

<script>

    @if (Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch(type){
        case 'info':

            toastr.options.timeOut = 10000;
            toastr.info("{{Session::get('message')}}");
            break;
        case 'success':

            toastr.options.timeOut = 10000;
            toastr.success("{{Session::get('message')}}");
            break;
        case 'warning':

            toastr.options.timeOut = 10000;
            toastr.warning("{{Session::get('message')}}");
            break;
        case 'error':

            toastr.options.timeOut = 10000;
            toastr.error("{{Session::get('message')}}");
            break;
    }
    @endif
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"></script>
@stack('admin_js')

{{--//===========================    data table  =========================--}}

<script src="{{url('admin')}}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="{{url('admin')}}/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{url('admin')}}/assets/js/custom/documentation/general/datatables/advanced.js"></script>

<script>
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$("meta[name='csrf-token']").attr('content')
        }
    });
</script>
<script>
    $(document).on('click','.delete_element',function (e) {
        var id = $(this).attr('data_id')
        var td = $(this)
        var routeAction = $(this).attr('data_delete')
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'هل انت متأكد من الحذف ؟',
            text: "سيتم حذف المحدد!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'حذف !',
            cancelButtonText: 'الغاء !',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: routeAction,
                    data: {'id':id},
                    success:function(data){
                        // td.parent().parent().remove();
                        table1.ajax.reload();
                        swalWithBootstrapButtons.fire(
                            'تم الحذف !',
                            'تم حذف العنصر بنجاح .',
                            'success'
                        )
                    }
                });
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'تم الغاء الحذف ',
                    'العنصر المحدد موجود بامان ',
                    'error'
                )
            }
        });
    })
</script>



