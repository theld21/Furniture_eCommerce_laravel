@extends('admin/layouts.master')

@section('title-content')
<li class="breadcrumb-item active" aria-current="page">Users</li>
@endSection

@section('master-content')

    <div class="card">
        <div class="card-body">
            <!-- title -->
            <div class="d-md-flex">
                <div class="row" style="width: 100%;">
                    <div class="col-md-6">
                        <h4 class="card-title">List Categories </h4>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('admin.category.create') }}" class="btn btn-primary text-white float-end">+ New Category</a>
                    </div>
                </div>
            </div>
            <!-- title -->
            <div class="table-responsive">
                <table class="table mb-0 table-hover align-middle text-nowrap">
                    <style>th,td{color: black}</style>
                    <thead>
                        <tr>
                            <th scope="col" class="border-top-0">ID</th>
                            <th scope="col" class="border-top-0">Name</th>
                            <th scope="col" class="border-top-0"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $x)
                        <tr>
                            <td><b>{{$x->id}}</b></td>
                            <td>{{$x->name}}</td>
                            <td>
                                <a href="{{ route('admin.category.edit', ['category'=>$x->id]) }}" class="btn btn-primary text-white float-end"><i class="mdi mdi-border-color"></i></a>
                                <form action="{{ route('admin.category.delete', ['category'=>$x->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-light float-center" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <div class="p-10 text-center">{{$categories->links()}}</div>
        </div>
    </div>
    
@endSection
