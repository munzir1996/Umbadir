@extends('admins.layouts.master')
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('admin')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('goals.index')}}">الهدف</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title">تعديل الهدف </h3>

<form action="{{ route('goals.update', $goal->id) }}" method="POST">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>العنوان</label>
        <input type="text" name="title" class="form-control" value="{{$goal->title}}" required>
    </div>

    <div class="form-group">
        <label>المحتوى</label>
        <textarea type="text" name="description" class="form-control" value="{{$goal->description}}" required></textarea>
    </div>

    <!-- IMAGE -->
    <label>صورة</label>
    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
        <div class="form-control" data-trigger="fileinput">
            <i class="glyphicon glyphicon-file fileinput-exists"></i>
            <span class="fileinput-filename"></span>
        </div>
        <span class="input-group-addon btn btn-default btn-file">
            <span class="fileinput-new">Select file</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" id="image" name="image">
        </span>
        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>

    <label>صورة قديمة</label>
    <div class="form-group">
        <img src="{{asset('images/'.$goal->image)}}" alt="" srcset="">
    </div>

    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>
</form>

@endsection
