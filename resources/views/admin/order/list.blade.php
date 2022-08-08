@extends('admin/layouts.master')

@section('title-content')
<li class="breadcrumb-item active" aria-current="page">Orders</li>
@endSection

@section('master-content')

    <div class="card">
        <div class="card-body">
            <!-- title -->
            <div class="d-md-flex">
                <div class="row" style="width: 100%;">
                    <div class="col-md-6">
                        <h4 class="card-title">List Orders </h4>
                    </div>
                </div>
            </div>
            <!-- title -->
            <div class="table-responsive">
                <table class="table mb-0 table-hover align-middle text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">ID</th>
                            <th class="border-top-0">Customer</th>
                            <th class="border-top-0">Created Date</th>
                            <th class="border-top-0">Status</th>
                            <th class="border-top-0"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $x)
                        <tr>
                            <td>{{$x->id}}</td>
                            <td>{{$x->user->name}}</td>
                            <td>{{$x->created_at}}</td>
                            <td>{{$x->status}}</td>
                            <td>
                                <a href="{{ route('admin.order.edit', ['order'=>$x->id]) }}" class="btn btn-primary text-white float-end"><i class="mdi mdi-border-color"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <div class="p-10 text-center">{{$orders->links()}}</div>
        </div>
    </div>
    
@endSection
