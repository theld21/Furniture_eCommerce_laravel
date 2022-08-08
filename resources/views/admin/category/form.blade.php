@extends('admin/layouts.master')

@section('title-content')
<li class="breadcrumb-item active" aria-current="page">Add User</li>
@endSection

@section('master-content')

    <h3>{{isset($category) ? 'Edit Category' : 'Add Category'}}</h3>

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
    @endif

    <!-- Way 1: Display All Error Messages -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form
        action="{{isset($category) ? route('admin.category.update', $category->id) : route('admin.category.store')}}"
        method="POST"
    >
        @csrf
        @if (isset($category))
            @method('PUT')
        @endif
        <div class='form-group'>
            <label for="">Category Name:</label>
            <input type="text" name='name' class='form-control' value="{{isset($category) ? $category->name : old('name')}}">
        </div>
        <div>
            <button class='btn btn-primary'>{{isset($category) ? 'Cập nhật' : 'Tạo mới'}}</button>
        </div>
    </form>
@endSection
