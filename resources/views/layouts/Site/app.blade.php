<!doctype html>
<html lang="ar">

<head>
@include('layouts.Site.css')
</head>

<body>

<!-- ================ Navbar ================= -->
@include('layouts.Site.header')
<!-- =============== Main section ================== -->

@yield('site_content')

@include('layouts.Site.footer')
@include('layouts.Site.js')


</body>

</html>

