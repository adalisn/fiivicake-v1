@extends('layouts/main')
@section('content')
    | Cart
@endsection
@section('container')
<h1 class="text-uppercase text-center mb-3">Cart</h1>
<div class="row">
    <div class="col">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Jumlah Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @foreach($carts as $key => $c)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td class="text-uppercase">{{ $c->product->name }}</td>
                        <td>{{ $c->quantity }}</td>
                        <td>Rp. {{ number_format($c->product->price) }}</td>                       
                        <td>Rp. {{ number_format($c->total_price) }}</td>                       
                        <td align="center">
                            <form action="/cart/{{ $c->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash3"></i></button>
                            </form>     
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" align="right">Total Harga :</td>
                        <td><strong> Rp.   {{ number_format($transaction->total_price) }}</strong></td>
                        <td align="center">
                            <a class="btn btn-success" href="/confirmation/{{ $transaction->id }}">Konfrimasi Pembayaran</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> 
    </div>
</div>
@endsection