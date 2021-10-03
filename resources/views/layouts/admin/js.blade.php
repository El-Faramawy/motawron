{{--<script src="{{url('/')}}/admin/assets/js/jquery.js"></script>--}}

<script src="{{url('/')}}/admin/assets/plugins/global/plugins.bundle.js"></script>
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
{{--<script src="{{url('admin')}}/assets/js/custom/documentation/general/datatables/advanced.js"></script>--}}

<script>
    $("#kt_datatable_example_5").DataTable({
        "language": {
            "lengthMenu": "اظهار _MENU_",
        },
        "dom":
            "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


