@extends('admin/layouts.master')

@section('title-content')
<li class="breadcrumb-item active" aria-current="page">Add User</li>
@endSection

@section('master-content')

    <form action="{{ route('admin.user.delete', ['user'=>$user->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger text-light float-end" type="submit">Delete User</button>
    </form>

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
    
    <form method="POST" action="{{ route('admin.user.update', ['id'=>$user->id]) }}"  enctype="multipart/form-data">
    @method('PUT')
        {{ csrf_field() }}
    
        <div class="mb-3">
            <label class="form-label" for="inputName">Name:</label>
            <input 
                type="text" 
                name="name" 
                id="inputName"
                class="form-control @error('name') is-invalid @enderror"
                value="{{$user->name}}">

            <!-- Way 2: Display Error Message -->
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-3">
            <label class="form-label" for="inputEmail">Email:</label>
            <input 
                type="text" 
                name="email" 
                id="inputEmail"
                class="form-control @error('email') is-invalid @enderror"
                value="{{$user->email}}">

            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @endif
        </div>
    
        <div class="mb-3">
            <label class="form-label" for="inputStudentCode">Student code:</label>
            <input 
                type="text" 
                name="student_code" 
                id="inputStudentCode"
                class="form-control @error('student_code') is-invalid @enderror"
                value="{{$user->student_code}}">

            <!-- Way 2: Display Error Message -->
            @error('student_code')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-3">
            <label class="form-label" for="inputPassword">New Password:</label>
            <input 
                type="password" 
                name="password" 
                id="inputPassword"
                class="form-control @error('password') is-invalid @enderror">

            <!-- Way 3: Display Error Message -->
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
    
        <div class="mb-3">
            <label class="form-label" for="inputAvatar">Avatar:</label>
            <input 
                type="file" 
                name="avatar" 
                id="inputAvatar"
                class="form-control @error('avatar') is-invalid @enderror"
                accept=".jpg,.png,.jpeg">

            @error('avatar')
                <span class="text-danger">{{ $message }}</span>
            @endif
            <img src="{{asset($user->avatar)}}" width="100px" alt="">
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="activeRadio" value="1" {{ $user->status ? 'checked' : '' }}>
            <label class="form-check-label" for="activeRadio">
                Active
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="inactiveRadio" value="0" {{ $user->status ? '' : 'checked' }}>
            <label class="form-check-label" for="inactiveRadio">
                Inactive
            </label>
        </div>
    
        <div class="mb-3">
            <button class="btn btn-primary btn-submit">Submit</button>
        </div>
    </form>
@endSection
