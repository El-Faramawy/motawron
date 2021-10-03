@extends('layouts.admin.app')
@section('page_name') خدماتنا @endsection
@section('content')
    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="card-label fw-bolder fs-3 mb-1">
                            خدماتنا
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item"></li>

                        <li class="m-portlet__nav-item">
                            <a  class="btn btn-primary m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air" >
{{--                                href="{{route('add_service')}}"--}}
                                <span>
                                <i class="fa fa-plus-circle"></i>
                                <span>خدمة جديدة</span>
                            </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">

                <!--begin: Datatable -->

{{--                <table  id="contact_table" class="table table-striped- table-bordered table-hover table-checkable" style="width:100%">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th>#</th>--}}
{{--                        <th>الايقونة</th>--}}
{{--                        <th>الإسم</th>--}}
{{--                        <th>المحتوى</th>--}}
{{--                        <th>تعديل</th>--}}
{{--                        <th>حذف</th>--}}

{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($services as $key=>$user)--}}
{{--                        <tr>--}}
{{--                            <td>{{$key}}</td>--}}

{{--                            <td><i class="{{$user->icon}}"></i></td>--}}
{{--                            <td>{{$user->title}}</td>--}}
{{--                            <td>{{$user->content}}</td>--}}
{{--                            <td >--}}
{{--                                <form action="{{route('admin_edit',$user->id)}}" enctype="application/x-www-form-urlencoded" method="post">--}}
{{--                                    @csrf--}}
{{--                                    <input type="hidden" name="id" value="{{$user->id}}">--}}
{{--                                    <button type="submit" class="btn btn-icon btn-info btn-sm" style="border-radius: 50% !important;"><i class="fa fa-edit" style="margin-left: 1px"></i></button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <button type="button" class="btn btn-icon btn-info btn-sm" data-toggle="modal"  data-name="{{$user->name}}" data-id="{{$user->id}}"  style="border-radius: 50% !important;" data-target="#edit" ><i class="fa fa-edit"></i></button>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-toggle="modal"  data-name="{{$user->name}}" data-id="{{$user->id}}"  style="border-radius: 50% !important;" data-target="#delete" ><i class="fa fa-trash"></i></button>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
                <table id="contact_table" class="table table-striped table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">message</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection
{{--<script src="{{url('/')}}/admin/assets/js/jquery.js"></script>--}}

{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        //Show data in the delete form--}}
{{--        $('#delete').on('show.bs.modal', function(event) {--}}
{{--            var button = $(event.relatedTarget)--}}
{{--            var id = button.data('id')--}}
{{--            var name = button.data('name')--}}
{{--            var modal = $(this)--}}
{{--            modal.find('.modal-body #id').val(id);--}}
{{--            modal.find('.modal-body #name').text('');--}}
{{--            modal.find('.modal-body #name').text(name);--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
@push('admin_js')
    <script type="text/javascript">
        var table1 = $('#contact_table').DataTable({
            processing:true,
            serverSide:true,
            ajax:"{{route('all.contact')}}",
            columns:[
                {data:'id',name:'id'},
                {data:'name',name:'name'},
                {data:'email',name:'email'},
                {data:'phone',name:'phone'},
                {data:'message',name:'message'},
                {data:'action',name:'action',orderable:false,searchacle:false},
            ]
        });
    </script>
{{--    <script type="text/javascript">--}}
{{--        $(document).ready(function () {--}}
{{--            var table1 = $('#contact_table').DataTable({--}}
{{--                processing: true,--}}
{{--                serverSide: true,--}}
{{--                ajax: "{{route('all.services')}}",--}}
{{--                columns: [--}}
{{--                    {data: 'id', name: 'id'},--}}
{{--                    {data:'icon',name:'icon'},--}}
{{--                    {data:'title',name:'title'},--}}
{{--                    {data:'content',name:'content'},--}}
{{--                    {data: 'action', name: 'action', orderable: false, searchacle: false},--}}
{{--                ]--}}
{{--            });--}}
{{--        });--}}


{{--    </script>--}}


    <!-- jQuery library -->

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

@endpush


