@extends('layouts.admin.app')
@section('page_name') قائمة المنتجات @endsection
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

<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">كل المنتجات</span>
        </h3>
        <div class="card-toolbar">
            <a href="" class="btn btn-light-primary er fs-6 px-7 py-3 ml-2" data-bs-toggle="modal" data-bs-target="#create_product">
                <span><i class="bi bi-plus-circle"></i></span>
                اضافة جديد</a>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table id="kt_datatable_example_5" class="table align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bolder text-muted bg-light">
                    <th class="min-w-70px">#</th>
                    <th class="min-w-125px">صورة المنتج</th>
                    <th class="min-w-125px">اسم المنتج</th>
                    <th class="min-w-125px">السعر</th>
                    <th class="min-w-200px rounded-end">العمليات</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
								<span class="symbol-label bg-light">
									<img class="h-100" onclick="window.open(this.src)" style='cursor: pointer' src={{asset($product->photo)}}  alt="">
								</span>
                                </div>
                            </div>
                        </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}{{--<i class="fa fa-pound-sign text-grey-500"></i>--}}</td>
                        <td>
                            <button data-bs-toggle='modal' data-bs-target="#edit_product" class="btn btn-icon btn-bg-light btn-primary btn-sm me-1" data-toggle="modal" style="border-radius: 50% !important"
                                    data-id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->price}}" data-image="{{asset($product->photo)}}">
                            <span class="svg-icon svg-icon-3">
                                    <i class="fa fa-edit"></i>
                            </span>
                            </button>

                            <button data-bs-toggle='modal' data-bs-target="#delete_product" class="btn btn-icon btn-bg-light btn-danger btn-sm me-1" data-toggle="modal" style="border-radius: 50% !important"
                                    data-id="{{$product->id}}" data-product_name="{{$product->name}}"
                            >
                            <span class="svg-icon svg-icon-3">
                                <span class="svg-icon svg-icon-3">
                                    <i class="fa fa-trash"></i>
                                </span>
                            </span>
                                <!--end::Svg Icon-->
                            </button>
                        </td>
                    </tr>
                @endforeach

                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
</div>
<!-----------------------------------end Data Table ------------------------------------->



<!-------------------------start ADD modal -------------------------------------------------------------->
<div class="modal fade show" id="create_product" tabindex="-1" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h2>اضافة منتج جديد</h2>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-1">
                <!--begin::Form-->
                <form method="post" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{route('create.product')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="fv-row mb-3">
                        <label class="d-block fw-bold fs-6 mb-1 required">رفع صورة</label>
                        <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url(assets/media/avatars/upload.png)">
                            <div class="image-input-wrapper w-250px h-250px" style="background-image: none; border-radius: 50%"></div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="اضافة صورة">
                                <i class="fa fa-pen fs-7"></i>
                                <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                <input type="hidden" name="avatar_remove" value="1">
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="الغاء الصورة">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                        </div>
                        <div class="form-text">مسموح بالصيغ الاتية : png, jpg, jpeg.</div>
                    </div>

                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <div class="row">
                            <div class="col-6">
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">اسم المنتج</span>
                                </label>
                                <input type="text" class="form-control form-control-solid mb-4 fs-3" placeholder="" name="name" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">السعر</span>
                                </label>
                                <input type="number" class="form-control form-control-solid mb-4 fs-3" placeholder="" name="price" min="0" autocomplete="off">
                            </div>
                        </div>
                        <div class="text-center pt-5">
                            <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-white me-3" data-bs-dismiss="modal">الغاء</button>
                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                <span class="indicator-label">اضافة</span>
                            </button>
                        </div>
                        <div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-------------------------end ADD modal -------------------------------------------------------------->

<!-------------------------start EDIT modal -------------------------------------------------------------->
<div class="modal fade show" id="edit_product" tabindex="-1" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>تعديل منتج</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                    </div>
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-1">
                    <!--begin::Form-->
                    <form method="post" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{route('update.product')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="fv-row mb-3">
                            <label class="d-block fw-bold fs-6 mb-1 required">تغيير الصورة</label>
                            <div class="row">
                            <div class="col-6 image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url(assets/media/avatars/upload.png)">
                                <div class="image-input-wrapper w-250px h-250px" style="background-image: none; border-radius: 50%"></div>
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="اضافة صورة">
                                    <i class="fa fa-pen fs-7"></i>
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="id" id="id">
                                    <input type="hidden" name="num" value="1">
                                </label>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="الغاء الصورة">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            </div>
                            <div class="col-6 text-center">
                                <label class="d-block fw-bold fs-6 mb-1">الصورة الحالية</label>
                                <img height="200px" width="100%" id="img_show" onclick="window.open(this.src)" style="cursor: pointer;border-radius: 50%">
                            </div>
                            </div>
                            <div class="form-text">مسموح بالصيغ الاتية : png, jpg, jpeg.</div>
                        </div>

                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-6">
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">اسم المنتج</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid mb-4 fs-3" name="name" id="name" autocomplete="off">
                                </div>
                                <div class="col-6">
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">السعر</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid mb-4 fs-3" id="price" name="price" min="0" autocomplete="off">
                                </div>
                            </div>
                            <div class="text-center pt-5">
                                <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-white me-3" data-bs-dismiss="modal">الغاء</button>
                                <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                    <span class="indicator-label">اضافة</span>
                                </button>
                            </div>
                            <div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-------------------------end EDIT modal -------------------------------------------------------------->

<!-------------------------Start DELETE modal ------------------------------------------------------------>
<div class="modal fade" id="delete_product" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h2>حذف منتج</h2>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <i class="bi bi-x fs-2"></i>
					</span>
                </div>
            </div>
            <div class="modal-body scroll-y mx-3 mx-xl-15 my-3">
                <form id="kt_modal_new_card_form" class="form" action="{{route('delete.product')}}" method="post">
                    {{csrf_field()}}
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <h4 class="pb-3">هل انت متاكد من حذف هذا المنتج</h4>
                        <input type="hidden" class="form-control form-control-solid pt" name="id" id="id" value="">
                        <input type="text" disabled class="form-control form-control-solid fs-2" placeholder="" name="product_name" id="product_name" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div></div>

                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-white me-3" data-bs-dismiss="modal">الغاء</button>
                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-danger">
                            <span class="indicator-label">تأكيد</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-------------------------End DELETE modal -------------------------------------------------------------->

@endsection

<script src="{{url('/')}}/admin/assets/js/jquery.js"></script>
<script src="{{url('/')}}/admin/assets/js/sweet.js"></script>
<script>
    $(document).ready(function(){
        //Show data in the delete form
        $('#delete_product').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var product_name = button.data('product_name')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #product_name').val(product_name);
        });

        //Show data in the edit form
        $('#edit_product').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var price = button.data('price')
            var image = button.data('image')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #img_show').attr('src',image);
            modal.find('.modal-body #price').val(price);
        });
    });
</script>

