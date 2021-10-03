<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    @include('layouts.admin.css')

</head>

<!-- end::Head -->

<!--begin::Body-->
<body id="kt_body" style="direction: rtl" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
    @include('layouts.admin.sidebar')


        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        @include('layouts.admin.header')

            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            @include('layouts.admin.toolbar')

                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container">
            <br>
            <br>
            <br>
            @yield('content')

                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
            <!--end::Content-->
            @include('layouts.admin.footer')

        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>





@include('layouts.admin.js')
@stack('js')
</body>

<!-- end::Body -->
</html>
