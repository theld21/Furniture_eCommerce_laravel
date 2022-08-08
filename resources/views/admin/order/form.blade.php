@extends('admin/layouts.master')


@section('master-content')

    <h3>Order Details</h3>

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
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">ID Đơn hàng</th>
                <td>{{ $order->id }}</td>
            </tr>
            <tr>
                <th scope="row">Tên khách hàng</th>
                <td>{{ $order->user->name }}</td>
            </tr>
            <tr>
                <th scope="row">Số điện thoại</th>
                <td>{{ $order->phone }}</td>
            </tr>
            <tr>
                <th scope="row">Địa chỉ</th>
                <td>{{ $order->address }}</td>
            </tr>
            <tr>
                <th scope="row">Ghi chú</th>
                <td>{{ $order->note }}</td>
            </tr>
            <tr>
                <th scope="row">TỔNG TIỀN</th>
                <td>{{ $order->totalPrice }}</td>
            </tr>
        </tbody>
    </table>

    <h4>Danh sách sản phẩm</h4>

    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tên sp</th>
            <th scope="col">giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Thành tiền</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($order->products as $x)
            <tr>
                <td><a href="{{ route('client.product.detail', ['product'=>$x->id]) }}">{{ $x->name }}</a></td>
                <td>{{ $x->price }}</td>
                <td>{{ $x->quantity }}</td>
                <td>{{ $x->quantity * $x->price }}</td>
            </tr>
        @endforeach
            
    </tbody>
    </table>

    <form action="{{ isset($user) ? route('admin.user.update', $user->id) : route('admin.user.store') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @if (isset($user))
            @method('PUT')
        @endif
    </form>
@endSection
