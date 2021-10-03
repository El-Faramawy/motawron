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
