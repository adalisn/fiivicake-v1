@extends('layouts/main')
@section('content')
    | Management
@endsection
@section('container')
<h1 class="text-uppercase text-center mb-3">Management transaksi</h1>
<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Member</th>
                    <th scope="col">Lihat Product</th>
                    <th scope="col">Bukti Pembayaran</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($carts as $key => $c) --}}
                @foreach($pending as $key => $t)
                <tr>
                    {{-- <th scope="row">{{ $carts->firstItem() + $key }}</th> --}}
                    <th scope="row">{{ $key + 1}}</th>
                    <td>{{ $t->tanggal }}</td>
                    <td class="text-capitalize">{{ $t->user->name }}</td>
                    <td><a href="/transaction/{{ $t->id }}" class="btn btn-primary">Lihat Produk</a></td>
                    <td><img src="{{ asset('storage/image-product/' . $t->proof_image) }}" name="image" alt="" style="max-height: 200px"></td>
                    <td>
                        <form action="transaction/checkout/{{ $t->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <button class="btn btn-primary">Terkonfirmasi Bayar</button>
                        </form>                   
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $c->links() }} --}}
        
    </div>
</div>
@endsection