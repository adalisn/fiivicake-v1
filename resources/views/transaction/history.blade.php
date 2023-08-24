@extends('layouts/main')
@section('content')
    | Riwayat
@endsection
@section('container')
<h1 class="text-uppercase text-center mb-3">Riwayat transaksi</h1>
<div class="row">
    <div class="col">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Status Bayar</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Konfirmasi</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @foreach($transactions as $t)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $t->tanggal }}</td>
                        <td class="text-capitalize">{{ $t->status }}</td>
                        <td>Rp. {{ number_format($t->total_price) }}</td>                       
                        <td><a href="/transaction/{{ $t->id }}" class="btn btn-primary">Transaksi detail</a></td>
                        <td>
                            @if ($t->status == 'pending')
                                <a href="/confirmation/{{ $t->id }}/edit" class="btn btn-success">Konfirmasi Kembali</a>
                            @elseif($t->status == 'unpaid')
                                Belum Konfirmasi
                            @else
                                Konfirmasi Diterima
                            @endif

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $transactions->links() }}
    </div>
</div>
@endsection