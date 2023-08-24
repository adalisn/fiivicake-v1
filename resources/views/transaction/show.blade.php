@extends('layouts/main')
@section('content')
    | Detail
@endsection
@section('container')

<h1 class="text-uppercase text-center mb-3">Detail Transaksi</h1>
<div class="row">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($carts as $key => $c) --}}
                @foreach($carts as $c)
                <tr>
                    {{-- <th scope="row">{{ $carts->firstItem() + $key }}</th> --}}
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td class="text-capitalize">{{ $c->product->name }}</td>
                    <td>{{ $c->quantity }}</td>
                    <td>Rp. {{ number_format($c->product->price) }}</td>                       
                    <td>Rp. {{ number_format($c->total_price) }}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="4" align="right">Total Harga :</td>
                    <td><strong> Rp.   {{ number_format($transaction->total_price) }}</strong></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
{{-- <div class="col"></div> --}}

@endsection