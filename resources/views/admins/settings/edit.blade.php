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
            <a href="{{route('settings.index')}}">الأعدادات</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title">تعديل الأعدادات </h3>

<form action="{{ route('settings.update', $setting->id) }}" method="POST">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>رقم الهاتف</label>
        <input type="text" name="phone" class="form-control" value="{{$setting->phone}}" required>
    </div>
    <div class="form-group">
        <label>الأيميل</label>
        <input type="email" name="email" class="form-control" value="{{$setting->email}}" required>
    </div>
    <div class="form-group">
        <label>العنوان</label>
        <input type="text" name="address" class="form-control" value="{{$setting->address}}" required>
    </div>
    <div class="form-group">
        <label>الموقع</label>
        <input name="website" class="form-control" value="{{$setting->website}}" required>
    </div>
    <div class="form-group">
        <label>العداد</label>
        <input type="number" name="counter" class="form-control" value="{{$setting->counter}}" required>
    </div>
    
    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>

</form>

@endsection
