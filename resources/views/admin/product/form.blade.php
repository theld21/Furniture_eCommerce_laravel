@extends('admin/layouts.master')

@section('title-content')
    <li class="breadcrumb-item active" aria-current="page">Add User</li>
@endSection

@section('master-content')
    <h3>{{isset($category) ? 'Edit Product' : 'Add Product'}}</h3>

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

    <form method="POST" action="{{isset($product) ? route('admin.product.update', $product->id) : route('admin.product.store')}}" enctype="multipart/form-data">
        @csrf
        @if (isset($product))
            @method('PUT')
        @endif
        
        <div class="mb-3">
            <label class="form-label" for="inputName">Name:</label>
            <input type="text" name="name" id="inputName" class="form-control @error('name') is-invalid @enderror"
            value="{{isset($product) ? $product->name : old('name')}}">

            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="inputPrice">Price:</label>
            <input type="number" min="0" name="price" id="inputPrice"
                class="form-control @error('price') is-invalid @enderror" value="{{isset($product) ? $product->price : old('price')}}">

            @error('price')
                <span class="text-danger">{{ $message }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" for="inputOldPrice">Old price:</label>
                <input type="number" min="0" name="old_price" id="inputOldPrice"
                    class="form-control @error('old_price') is-invalid @enderror" value="{{isset($product) ? $product->old_price : old('old_price')}}">

                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label" for="inputImg">Image:</label>
                    <input type="file" name="feature_image" id="inputImg"
                        class="form-control @error('feature_image') is-invalid @enderror" accept=".jpg,.png,.jpeg">
                        <img src="{{isset($product)? asset($product->feature_image) : ''}}" width="100px" alt="">

                    @error('feature_image')
                        <span class="text-danger">{{ $message }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="inputContent">Description:</label>
                        <textarea class="form-control" name='content' id="inputContent" rows="3">{{isset($product) ? $product->content : old('content')}}</textarea>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <select class="form-select" name='category_id' aria-label="Default select example">
                        <option {{isset($product) ? '' : 'selected'}} disabled>Select Category</option>
                        @foreach ($categories as $x)
                            <option value="{{$x->id}}" {{isset($product) && $x->id == $product->category_id ? 'selected' : ''}}>{{$x->name}}</option>
                        @endforeach
                    </select><br>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="activeRadio" value="1" {{isset($product) && $product->status === 1 ? 'checked' : ''}}>
                        <label class="form-check-label" for="activeRadio">
                            Hiện
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="inactiveRadio" value="0" {{isset($product) && $product->status === 0 ? 'checked' : ''}}>
                        <label class="form-check-label" for="inactiveRadio">
                            Ẩn
                        </label>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary btn-submit">Submit</button>
                    </div>
                </form>
            @endSection
