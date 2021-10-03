@extends('layouts.admin.app')
@section('page_name') اضافة بائع @endsection
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
                تسجيل بيانات بائع
            </h3>
        </div>
    </div>

    <!--begin::Form-->
    <form class="form" method="post" action="{{route('create.car')}}" enctype="multipart/form-data">
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
                        <input type="file" name="image" accept=".png, .jpg, .jpeg">
                        <input type="hidden" name="avatar_remove" value="1">
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
                            <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="اسم البائع" autocomplete="off">
                            </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                            <input type="text" name="user_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="اسم المستخدم" autocomplete="off">
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
                            <input type="password" name="password" class="form-control form-control-lg form-control-solid" placeholder="كلمة المرور"  autocomplete="off">
                            </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                            <input type="password" name="confirm" class="form-control form-control-lg form-control-solid" placeholder="تاكيد كلمة المرور"  autocomplete="off">
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
                    <input class="form-check-input m--margin-bottom-20-mobile" type="checkbox" id="flexSwitchCheckChecked" name="is_work" style="border-radius: 10px;margin-right: 27%;">
                </div>
            </div>
        <input type="hidden" id="latitude" name="latitude" style="width: 300px">
        <input type="hidden" id="longitude" name="longitude" style="width: 300px">

        <div id="mapid" style="height: 300px"></div>
        <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
        <script>
            var mymap = L.map('mapid').setView([30.55681,31.01401], 13);

            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoiYWhtZWR5YWh5YSIsImEiOiJja3NudXkycGwwM2FlMnBwajB2dTFyZXA4In0.bcpuoTbeJjCMFP5QlFnqHA', {
                maxZoom: 18,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(mymap);

            L.marker([30.55681,  31.01401]).addTo(mymap)
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

        {{--        <div id="map" style="height: 500px;width: 100%;"></div>--}}
{{--        <script>--}}
{{--            function initAutocomplete() {--}}
{{--                var map = new google.maps.Map(document.getElementById('map'), {--}}
{{--                    center: {lat: 24.740691, lng: 46.6528521},--}}
{{--                    zoom: 13,--}}
{{--                    mapTypeId: 'roadmap'--}}
{{--                });--}}
{{--                // move pin and current location--}}
{{--                infoWindow = new google.maps.InfoWindow;--}}
{{--                geocoder = new google.maps.Geocoder();--}}
{{--                if (navigator.geolocation) {--}}
{{--                    navigator.geolocation.getCurrentPosition(function (position) {--}}
{{--                        var pos = {--}}
{{--                            lat: position.coords.latitude,--}}
{{--                            lng: position.coords.longitude--}}
{{--                        };--}}
{{--                        map.setCenter(pos);--}}
{{--                        var marker = new google.maps.Marker({--}}
{{--                            position: new google.maps.LatLng(pos),--}}
{{--                            map: map,--}}
{{--                            title: 'موقعك الحالي'--}}
{{--                        });--}}
{{--                        markers.push(marker);--}}
{{--                        marker.addListener('click', function () {--}}
{{--                            geocodeLatLng(geocoder, map, infoWindow, marker);--}}
{{--                        });--}}
{{--                        // to get current position address on load--}}
{{--                        google.maps.event.trigger(marker, 'click');--}}
{{--                    }, function () {--}}
{{--                        handleLocationError(true, infoWindow, map.getCenter());--}}
{{--                    });--}}
{{--                } else {--}}
{{--                    // Browser doesn't support Geolocation--}}
{{--                    console.log('dsdsdsdsddsd');--}}
{{--                    handleLocationError(false, infoWindow, map.getCenter());--}}
{{--                }--}}
{{--                var geocoder = new google.maps.Geocoder();--}}
{{--                google.maps.event.addListener(map, 'click', function (event) {--}}
{{--                    SelectedLatLng = event.latLng;--}}
{{--                    geocoder.geocode({--}}
{{--                        'latLng': event.latLng--}}
{{--                    }, function (results, status) {--}}
{{--                        if (status == google.maps.GeocoderStatus.OK) {--}}
{{--                            if (results[0]) {--}}
{{--                                deleteMarkers();--}}
{{--                                addMarkerRunTime(event.latLng);--}}
{{--                                SelectedLocation = results[0].formatted_address;--}}
{{--                                console.log(results[0].formatted_address);--}}
{{--                                splitLatLng(String(event.latLng));--}}
{{--                                $("#pac-input").val(results[0].formatted_address);--}}
{{--                            }--}}
{{--                        }--}}
{{--                    });--}}
{{--                });--}}

{{--                function geocodeLatLng(geocoder, map, infowindow, markerCurrent) {--}}
{{--                    var latlng = {lat: markerCurrent.position.lat(), lng: markerCurrent.position.lng()};--}}
{{--                    /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/--}}
{{--                    $('#latitude').val(markerCurrent.position.lat());--}}
{{--                    $('#longitude').val(markerCurrent.position.lng());--}}
{{--                    geocoder.geocode({'location': latlng}, function (results, status) {--}}
{{--                        if (status === 'OK') {--}}
{{--                            if (results[0]) {--}}
{{--                                map.setZoom(8);--}}
{{--                                var marker = new google.maps.Marker({--}}
{{--                                    position: latlng,--}}
{{--                                    map: map--}}
{{--                                });--}}
{{--                                markers.push(marker);--}}
{{--                                infowindow.setContent(results[0].formatted_address);--}}
{{--                                SelectedLocation = results[0].formatted_address;--}}
{{--                                $("#pac-input").val(results[0].formatted_address);--}}
{{--                                infowindow.open(map, marker);--}}
{{--                            } else {--}}
{{--                                window.alert('No results found');--}}
{{--                            }--}}
{{--                        } else {--}}
{{--                            window.alert('Geocoder failed due to: ' + status);--}}
{{--                        }--}}
{{--                    });--}}
{{--                    SelectedLatLng = (markerCurrent.position.lat(), markerCurrent.position.lng());--}}
{{--                }--}}

{{--                function addMarkerRunTime(location) {--}}
{{--                    var marker = new google.maps.Marker({--}}
{{--                        position: location,--}}
{{--                        map: map--}}
{{--                    });--}}
{{--                    markers.push(marker);--}}
{{--                }--}}

{{--                function setMapOnAll(map) {--}}
{{--                    for (var i = 0; i < markers.length; i++) {--}}
{{--                        markers[i].setMap(map);--}}
{{--                    }--}}
{{--                }--}}

{{--                function clearMarkers() {--}}
{{--                    setMapOnAll(null);--}}
{{--                }--}}

{{--                function deleteMarkers() {--}}
{{--                    clearMarkers();--}}
{{--                    markers = [];--}}
{{--                }--}}

{{--                // Create the search box and link it to the UI element.--}}
{{--                var input = document.getElementById('pac-input');--}}
{{--                $("#pac-input").val("أبحث هنا ");--}}
{{--                var searchBox = new google.maps.places.SearchBox(input);--}}
{{--                map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);--}}
{{--                // Bias the SearchBox results towards current map's viewport.--}}
{{--                map.addListener('bounds_changed', function () {--}}
{{--                    searchBox.setBounds(map.getBounds());--}}
{{--                });--}}
{{--                var markers = [];--}}
{{--                // Listen for the event fired when the user selects a prediction and retrieve--}}
{{--                // more details for that place.--}}
{{--                searchBox.addListener('places_changed', function () {--}}
{{--                    var places = searchBox.getPlaces();--}}
{{--                    if (places.length == 0) {--}}
{{--                        return;--}}
{{--                    }--}}
{{--                    // Clear out the old markers.--}}
{{--                    markers.forEach(function (marker) {--}}
{{--                        marker.setMap(null);--}}
{{--                    });--}}
{{--                    markers = [];--}}
{{--                    // For each place, get the icon, name and location.--}}
{{--                    var bounds = new google.maps.LatLngBounds();--}}
{{--                    places.forEach(function (place) {--}}
{{--                        if (!place.geometry) {--}}
{{--                            console.log("Returned place contains no geometry");--}}
{{--                            return;--}}
{{--                        }--}}
{{--                        var icon = {--}}
{{--                            url: place.icon,--}}
{{--                            size: new google.maps.Size(100, 100),--}}
{{--                            origin: new google.maps.Point(0, 0),--}}
{{--                            anchor: new google.maps.Point(17, 34),--}}
{{--                            scaledSize: new google.maps.Size(25, 25)--}}
{{--                        };--}}
{{--                        // Create a marker for each place.--}}
{{--                        markers.push(new google.maps.Marker({--}}
{{--                            map: map,--}}
{{--                            icon: icon,--}}
{{--                            title: place.name,--}}
{{--                            position: place.geometry.location--}}
{{--                        }));--}}
{{--                        $('#latitude').val(place.geometry.location.lat());--}}
{{--                        $('#longitude').val(place.geometry.location.lng());--}}
{{--                        if (place.geometry.viewport) {--}}
{{--                            // Only geocodes have viewport.--}}
{{--                            bounds.union(place.geometry.viewport);--}}
{{--                        } else {--}}
{{--                            bounds.extend(place.geometry.location);--}}
{{--                        }--}}
{{--                    });--}}
{{--                    map.fitBounds(bounds);--}}
{{--                });--}}
{{--            }--}}

{{--            function handleLocationError(browserHasGeolocation, infoWindow, pos) {--}}
{{--                infoWindow.setPosition(pos);--}}
{{--                infoWindow.setContent(browserHasGeolocation ?--}}
{{--                    'Error: The Geolocation service failed.' :--}}
{{--                    'Error: Your browser doesn\'t support geolocation.');--}}
{{--                infoWindow.open(map);--}}
{{--            }--}}

{{--            function splitLatLng(latLng) {--}}
{{--                var newString = latLng.substring(0, latLng.length - 1);--}}
{{--                var newString2 = newString.substring(1);--}}
{{--                var trainindIdArray = newString2.split(',');--}}
{{--                var lat = trainindIdArray[0];--}}
{{--                var Lng = trainindIdArray[1];--}}
{{--                $("#latitude").val(lat);--}}
{{--                $("#longitude").val(Lng);--}}
{{--            }--}}
{{--        </script>--}}
{{--        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiqMoTJHpUOwn6jeeVNTQIbs36Tf8YAUQ&libraries=places&callback=initAutocomplete&language=ar&region=EG--}}
{{--async defer"></script>--}}


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
