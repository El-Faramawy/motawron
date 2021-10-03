@extends('layouts.admin.app')
@section('page_name') تعديل بائع @endsection
@section('content')
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: '@foreach ($errors->all() as $error){{ $error }}<br>@endforeach',
                text: 'حاول مرة اخري!',
                confirmButtonText: 'حسنا',
            })
        </script>
    @endif

<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
    <div class="card card-custom mr-3">
        <div class="card-header">
            <div class="row">
                <h3 class="card-title fs-2">
                    تعديل بيانات بائع
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form class="form" method="post" action="{{route('update.car')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card-body">
                <div class="text-center">
                    <!--begin::Image input-->
                    <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px" style="border-radius: 50%"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="اضافة صورة" data-original-title="">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--begin::Inputs-->
                            <input type="hidden" name="id" value="{{$car->id}}">
                            <input type="hidden" name="num" value="1">
                            <input type="file" name="image" accept=".png, .jpg, .jpeg">
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="الغاء الصورة" data-original-title="">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                        <!--end::Cancel-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::Hint-->
                    <div class="form-text mb-4">مسموح بالصيغ الاتية: png, jpg, jpeg.</div>
                    <!--end::Hint-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-2 col-form-label required fw-bold fs-4">اسم البائع :</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="اسم البائع" autocomplete="off" value="{{$car->name}}">
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="text" name="user_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="اسم المستخدم" autocomplete="off" value="{{$car->user_name}}">
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-2 col-form-label required fw-bold fs-4">كلمة المرور :</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="password" name="password" class="form-control form-control-lg form-control-solid" placeholder="*********"  autocomplete="off">
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="password" name="confirm" class="form-control form-control-lg form-control-solid" placeholder="*********"  autocomplete="off">
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <div class="row mb-6">
                <label class="col-lg-2 col-form-label required fw-bold fs-4 mr-4">مشغول :</label>
                <div class="col-4 form-check form-switch m--margin-10">
                    <input class="form-check-input m--margin-bottom-20-mobile" type="checkbox" id="flexSwitchCheckChecked" name="is_work"  {{$status}} style="border-radius: 10px;margin-right: 27%;">
                </div>
            </div>
            <input type="hidden" id="latitude" name="latitude" style="width: 300px" value="{{$car->latitude}}">
            <input type="hidden" id="longitude" name="longitude" style="width: 300px" value="{{$car->longitude}}" >

            <div id="mapid" style="height: 300px"></div>
            <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
            <script>
                var mymap = L.map('mapid').setView([{{$car->latitude}},{{$car->longitude}}], 13);

                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoiYWhtZWR5YWh5YSIsImEiOiJja3NudXkycGwwM2FlMnBwajB2dTFyZXA4In0.bcpuoTbeJjCMFP5QlFnqHA', {
                    maxZoom: 18,
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1
                }).addTo(mymap);

                L.marker([{{$car->latitude}} ,  {{$car->longitude}}]).addTo(mymap)
                    .bindPopup("<b>حرك المؤشر</b><br />لتحديد عنوان العربة").openPopup();


                var popup = L.popup();

                function onMapClick(e) {
                    popup
                        .setLatLng(e.latlng)
                        .setContent("تم تحديد العنوان التالي " + e.latlng.toString())
                        .openOn(mymap);
                    var lat = e.latlng.toString().substr(7,9).replace(',','');
                    var lon = e.latlng.toString().replace('LatLng(', '').substring(9).replace(')','');
                    $('#longitude').val(lon);
                    $('#latitude').val(lat);
                }
                mymap.on('click', onMapClick);
            </script>

            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-2">
                        <button type="submit" class="btn font-weight-bold btn-success mr-4">حفظ البيانات</button>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>

@endsection

<script src="{{url('/')}}/admin/assets/js/jquery.js"></script>
<script src="{{url('/')}}/admin/assets/js/sweet.js"></script>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">

</script>
