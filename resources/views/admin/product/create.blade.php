@extends('admin/layouts.master')

@section('title-content')
    <li class="breadcrumb-item active" aria-current="page">Add User</li>
@endSection

@section('master-content')
    @if (Session::has('success'))
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

    <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="mb-3">
            <label class="form-label" for="inputName">Name:</label>
            <input type="text" name="name" id="inputName" class="form-control @error('name') is-invalid @enderror"
                value={{ old('name') }}>

            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="inputPrice">Price:</label>
            <input type="number" min="0" name="price" id="inputPrice"
                class="form-control @error('price') is-invalid @enderror" value={{ old('price') }}>

            @error('price')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" for="inputOldPrice">Old price:</label>
                <input type="number" min="0" name="old_price" id="inputOldPrice"
                    class="form-control @error('old_price') is-invalid @enderror" value={{ old('old_price') }}>

                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label" for="inputImg">Image:</label>
                    <input type="file" name="feature_image" id="inputImg"
                        class="form-control @error('feature_image') is-invalid @enderror" accept=".jpg,.png,.jpeg">

                    @error('feature_image')
                        <span class="text-danger">{{ $message }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="inputContent">Description:</label>
                        <textarea class="form-control" name='content' id="inputContent" rows="3"></textarea>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <select class="form-select" name='category_id' aria-label="Default select example">
                        <option selected>Select Category</option>
                        @foreach ($categories as $x)
                            <option value="{{$x->id}}">{{$x->name}}</option>
                        @endforeach
                    </select><br>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="activeRadio" value="1" checked>
                        <label class="form-check-label" for="activeRadio">
                            Hiện
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="inactiveRadio" value="0">
                        <label class="form-check-label" for="inactiveRadio">
                            Ẩn
                        </label>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary btn-submit">Submit</button>
                    </div>
                </form>
            @endSection