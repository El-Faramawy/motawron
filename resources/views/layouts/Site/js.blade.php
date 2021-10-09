<script src="{{url('Site')}}/js/jquery-3.4.1.min.js"></script>
<script src="{{url('Site')}}/js/popper.min.js"></script>
<script src="{{url('Site')}}/js/bootstrap.min.js"></script>
<script src="{{url('Site')}}/js/mdb.min.js"></script>
<script src="{{url('Site')}}/js/smooth-scroll.min.js"></script>
<script src="{{url('Site')}}/js/owl.carousel.min.js"></script>
<script src="{{url('Site')}}/js/wow.min.js"></script>
<script src="{{url('Site')}}/js/swiper.js"></script>
<script src="{{url('Site')}}/js/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{url('Site')}}/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{url('Site')}}/js/jvectormap.custom.js"></script>
<script src="{{url('Site')}}/js/Custom.js"></script>

{{--===================  toster ==============================--}}
<script src="{{url('Site/js')}}/tostar.js"></script>

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
