@extends('admin/layouts.master')

@section('title-content')
<li class="breadcrumb-item active" aria-current="page">Products</li>
@endSection

@section('master-content')

    <div class="card">
        <div class="card-body">
            <!-- title -->
            <div class="d-md-flex">
                <div class="row" style="width: 100%;">
                    <div class="col-md-6">
                        @if (isset($searchContent))
                            <h4 class="card-title">Finding: {{$searchContent}} </h4>
                            <a href="{{ route('admin.product.list') }}" class="btn btn-secondary text-white">X</a>
                        @else
                            <h4 class="card-title">List Products </h4>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('admin.product.create') }}" class="btn btn-primary text-white float-end">+ New Products</a>
                    </div>
                </div>
            </div>
            <!-- title -->
            <div class="row">
                @foreach ($products as $x)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <a href="{{ route('admin.product.edit', ['product'=>$x->id]) }}"><img src="{{ $x->feature_image ? asset($x->feature_image) : ''}}" class="card-img-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('admin.product.edit', ['product'=>$x->id]) }}">{{$x->name}}</a></h5>
                                <p class="card-text" style="color:red; font-weight: bold;">{{number_format($x->price, 0, 'vn<sup>đ</sup>', '.')}} <sup>vn<sup>đ</sup></sup></p>
                                
                                <form action="{{ route('admin.product.changeStatus', ['product'=>$x->id]) }}" method="POST" class="d-flex">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-{{$x->status==1? 'success' : 'dark'}} text-light float-center m-r-10" type="submit">{{$x->status==1? 'Showing' : 'Hiding'}}</button>
                                    <div class="text-center"><a href="{{ route('admin.product.edit', ['product'=>$x->id]) }}" class="btn btn-primary"><i class="mdi mdi-lead-pencil"></i></a></div>
                                </form>

                                <form action="{{ route('admin.product.delete', ['product'=>$x->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-light float-center" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="p-10 text-center">{{$products->links()}}</div>
        </div>
    </div>
    
@endSection
