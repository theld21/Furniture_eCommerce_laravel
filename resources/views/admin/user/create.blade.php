@extends('admin/layouts.master')

@section('title-content')
<li class="breadcrumb-item active" aria-current="page">Add User</li>
@endSection

@section('master-content')

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
    
    <form method="POST" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
    
        {{ csrf_field() }}
    
        <div class="mb-3">
            <label class="form-label" for="inputName">Name:</label>
            <input 
                type="text" 
                name="name" 
                id="inputName"
                class="form-control @error('name') is-invalid @enderror"
                value={{old('name')}}>

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
                value={{old('email')}}>

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
                value={{old('student_code')}}>

            @error('student_code')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-3">
            <label class="form-label" for="inputPassword">Password:</label>
            <input 
                type="password" 
                name="password" 
                id="inputPassword"
                class="form-control @error('password') is-invalid @enderror"
                value={{old('password')}}>

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
        </div>
    
        <div class="mb-3">
            <button class="btn btn-primary btn-submit">Submit</button>
        </div>
    </form>
@endSection
