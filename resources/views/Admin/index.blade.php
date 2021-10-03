@extends('layouts.admin.app')
@section('page_name') الرئيسية @endsection
@section('content')
<div class="row gy-5 gx-xl-8">
    <!--begin::Col-->
    <div class="col-xl-4">
        <!--begin::List Widget 2-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title fw-bolder text-dark">بعض منتجاتنا</h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end"></button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
{{--            @foreach($products as $product)--}}
{{--                <!--begin::Item-->--}}
{{--                    <div class="d-flex align-items-center mb-7">--}}
{{--                        <!--begin::Avatar-->--}}
{{--                        <div class="symbol symbol-50px me-5">--}}
{{--                            <img src="{{asset($product->photo)}}" class="" alt="">--}}
{{--                        </div>--}}
{{--                        <!--end::Avatar-->--}}
{{--                        <!--begin::Text-->--}}
{{--                        <div class="flex-grow-1">--}}
{{--                            <a href="{{route('products')}}" class="text-dark fw-bolder text-hover-primary fs-6">{{$product->name}}</a>--}}
{{--                            <span class="text-muted d-block fw-bold">{{$product->price}} <i class="fa fa-money-bill-alt"></i></span>--}}
{{--                        </div>--}}
{{--                        <!--end::Text-->--}}
{{--                    </div>--}}
{{--            @endforeach--}}
            <!--end::Item-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::List Widget 2-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xxl-4">
        <!--begin::List Widget 3-->
        <div class="card card-xxl-stretch mb-xl-3">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title fw-bolder text-dark">بعض العربات</h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
{{--                @foreach($cars as $car)--}}
{{--                <!--begin::Item-->--}}
{{--                <div class="d-flex align-items-center mb-8">--}}
{{--                    <!--begin::Bullet-->--}}
{{--                    @if($car->is_work == '1')--}}
{{--                        <span class="bullet bullet-vertical h-40px bg-danger"></span>--}}
{{--                    @else--}}
{{--                        <span class="bullet bullet-vertical h-40px bg-success"></span>--}}
{{--                    @endif--}}
{{--                        <!--end::Bullet-->--}}
{{--                    <!--begin::Checkbox-->--}}
{{--                    <div class="form-check form-check-custom form-check-solid mx-5">--}}
{{--                        <input class="form-check-input" type="checkbox" value="">--}}
{{--                    </div>--}}
{{--                    <!--end::Checkbox-->--}}
{{--                    <!--begin::Description-->--}}
{{--                    <div class="flex-grow-1">--}}
{{--                        <a href="{{route('edit_car',$car->id)}}" class="text-gray-800 text-hover-primary fw-bolder fs-6">{{$car->name}}</a>--}}
{{--                        <span class="text-muted fw-bold d-block fs-6">منذ {{date_format($car->created_at,'Y-m-d')}}</span>--}}
{{--                    </div>--}}
{{--                    <!--end::Description-->--}}
{{--                        @if($car->is_work == '1')--}}
{{--                            <span class="badge badge-light-danger fs-8 fw-bolder">مشغول</span>--}}
{{--                        @else--}}
{{--                        <span class="badge badge-light-success fs-8 fw-bolder">غير مشغول</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <!--end:Item-->--}}
{{--                @endforeach--}}
            </div>
            <!--end::Body-->
        </div>
        <!--end:List Widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-4">
        <!--begin::List Widget 2-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title fw-bolder text-dark">بعض العملاء</h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end"></button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
{{--            @foreach($clients as $client)--}}
{{--                <!--begin::Item-->--}}
{{--                    <div class="d-flex align-items-center mb-7">--}}
{{--                        <!--begin::Avatar-->--}}
{{--                        <div class="symbol symbol-50px me-5">--}}
{{--                            <img src="{{asset($client->photo)}}" class="" alt="">--}}
{{--                        </div>--}}
{{--                        <!--end::Avatar-->--}}
{{--                        <!--begin::Text-->--}}
{{--                        <div class="flex-grow-1">--}}
{{--                            <a href="{{route('users')}}" class="text-dark fw-bolder text-hover-primary fs-6">{{$client->name}}</a>--}}
{{--                            <span class="text-muted d-block fw-bold">{{$client->phone}} <i class="fa fa-phone-alt"></i></span>--}}
{{--                        </div>--}}
{{--                        <!--end::Text-->--}}
{{--                    </div>--}}
{{--            @endforeach--}}
            <!--end::Item-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::List Widget 2-->
    </div>
    <!--end::Col-->
</div>
@endsection

