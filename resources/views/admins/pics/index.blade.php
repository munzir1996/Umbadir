@extends('admins.layouts.master')
@section('title', 'الصور')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('vendor/plugins/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}">
@endsection
<!-- END CSS -->

@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('admin')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('pics.index')}}">صور</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title"> صور </h3>

<!-- BEGIN DATATABLE -->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span class="caption-subject font-green bold uppercase">جدول الصور</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button data-toggle="modal" class="btn sbold green" href="#add_pic"> أضافة صورة
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN TABLE -->
        <div class="">
            <table id="pics-table" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>الأسم</th>
                        <th>العمليات</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($pics as $pic)
                    <tr>
                        <td>{{$pic->id}}</td>
                        <td>{{$pic->name}}</td>
                        <td>
                            <form action="{{route('pics.destroy', $pic->id)}}" method="POST">
                                @csrf {{ method_field('DELETE') }}
                                <a href="{{route('pics.edit', $pic->id)}}"
                                    class="btn dark btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-edit"> تعديل </i>
                                </a>
                                <button type="submit" class="btn red btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-edit">حذف</i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END TABLE -->
    </div>
</div>
<!-- END DATATABLE -->

<!-- BEGIN ADD_pic MODEL -->
<div class="modal fade in" id="add_pic">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">أضافة صورة</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('pics.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>الأسم</label>
                        <input type="text" name="name" class="form-control" placeholder="الأسم" required>

                        <label>صورة</label>
                        <input id="image" type="file" name="image" multiple>

                    </div>
                    <div class="margin-top-10">
                        <button type="submit" class="btn btn-outline sbold green">أضافة</button>
                        <button type="button" class="btn btn-outline sbold red" data-dismiss="modal">أغلاق</button>
                    </div>
                </form>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- BEGIN ADD_pic MODEL -->


@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{ asset('vendor/adminjs/datatable.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>
    //Datatable
    $(document).ready(function () {
        $('#pics-table').DataTable();
    });

</script>
@endsection
<!-- END SCRIPTS -->





