@extends('layouts.master')

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
                        <h4 class="card-title">List Users </h4>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-primary text-white float-end">+ New User</a>
                    </div>
                </div>
            </div>
            <!-- title -->
            <div class="table-responsive">
                <table class="table mb-0 table-hover align-middle text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">Name</th>
                            <th class="border-top-0">ID</th>
                            <th class="border-top-0">Email</th>
                            <th class="border-top-0">Status</th>
                            <th class="border-top-0"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $x)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="p-2"><img src="{{ $x->avatar ? asset($x->avatar) : ''}}" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="">
                                        <h4 class="m-b-0 font-16">{{$x->name}}</h4>
                                    </div>
                                </div>
                            </td>
                            <td>{{$x->student_code}}</td>
                            <td>{{$x->email}}</td>
                            <td>
                                @if ($x->status == 1)
                                    <label class="badge bg-success">Active</label>
                                @else
                                    <label class="badge bg-danger">Inactive</label>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.user.edit', ['id'=>$x->id]) }}" class="btn btn-primary text-white float-end"><i class="mdi mdi-border-color"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <div class="p-10 text-center">{{$users->links()}}</div>
        </div>
    </div>
    
@endSection
