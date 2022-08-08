@extends('admin/layouts.master')

@section('title-content')
<li class="breadcrumb-item active" aria-current="page">Add User</li>
@endSection

@section('master-content')

    <h3>{{isset($category) ? 'Edit User' : 'Add User'}}</h3>

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
        action="{{isset($user) ? route('admin.user.update', $user->id) : route('admin.user.store')}}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @if (isset($user))
            @method('PUT')
        @endif
        <div class='form-group'>
            <label for="">Tên</label>
            <input type="text" name='name' class='form-control' value="{{isset($user) ? $user->name : old('name')}}">
        </div>
        <div class='form-group'>
            <label for="">Email</label>
            <input type="text" name='email' class='form-control' value="{{isset($user) ? $user->email : old('email')}}">
        </div>
        @if (!isset($user))
            <div class='form-group'>
                <label for="">Mật khẩu</label>
                <input type="password" name='password' class='form-control'>
            </div>
        @endif
        <div class='form-group'>
            <label for="">Ảnh đại diện</label>
            <input type="file" name='avatar' class='form-control'>
            @if (isset($user->avatar))
                <img src="{{asset($user->avatar)}}" alt="{{$user->name}}" width="100">
            @endif
        </div>
        <div class='form-group'>
            <label for="">Trạng thái</label><br>
            <input type="radio" name='status' id="active-check" value="1" {{isset($user) && $user->status === 1 ? 'checked' : ''}}> <label for="active-check">Active</label>
            <input type="radio" name='status' id="inactive-check" value="0"  {{isset($user) && $user->status === 0 ? 'checked' : ''}}> <label for="inactive-check">Inactive</label>
        </div>
        <div>
            <button class='btn btn-primary'>{{isset($user) ? 'Cập nhật' : 'Tạo mới'}}</button>
        </div>
    </form>
@endSection
