@extends('layouts.admin.app')
@section('page_name') المشرفين @endsection
@section('content')
    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="card-label fw-bolder fs-3 mb-1">
                            مشرفين كافية اب
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item"></li>

                        <li class="m-portlet__nav-item">
                            <a href="{{route('add-admin')}}" class="btn btn-primary m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air" >
                            <span>
                                <i class="fa fa-plus-circle"></i>
                                <span>مشرف جديد</span>
                            </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">

                <!--begin: Datatable -->

                <table id="example" class="table table-striped- table-bordered table-hover table-checkable" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>الإسم</th>
                        <th>البريد الإلكترونى</th>
                        <th>تعديل</th>
                        <th>حذف</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($get as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>

                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td >
                                <form action="{{route('admin_edit',$user->id)}}" enctype="application/x-www-form-urlencoded" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <button type="submit" class="btn btn-icon btn-info btn-sm" style="border-radius: 50% !important;"><i class="fa fa-edit" style="margin-left: 1px"></i></button>
                                </form>
                            </td>
                            <td>
                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-toggle="modal"  data-name="{{$user->name}}" data-id="{{$user->id}}"  style="border-radius: 50% !important;" data-target="#delete" ><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div id="delete" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="fs-2 fw-bolder" style="float: right">حذف مشرف</span>
                        <button class="btn btn-sm btn-info" style="float: left" data-dismiss="modal">x</button>
                    </div>
                    <form action="{{route('admin_delete')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id" value="">
                            <h4>هل أنت متاكد من حذف  <span id="name" class="fs-2"></span> ؟ </h4>
                        </div>
                        <div class="modal-footer">
                            <button  type="button" class="btn btn-info " data-dismiss="modal">الغاء</button>
                            <button class="btn btn-danger" type="submit">حذف</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="{{url('/')}}/admin/assets/js/jquery.js"></script>

<script>
    $(document).ready(function(){
        //Show data in the delete form
        $('#delete').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').text('');
            modal.find('.modal-body #name').text(name);
        });
    });
</script>

