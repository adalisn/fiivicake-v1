@extends('layouts/main')
@section('content')
    | Konfirmasi
@endsection
@section('container')
<h1 class="text-uppercase text-center mb-3">Konfirmasi Pembayaran</h1>
<div class="row">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($detail->carts as $key => $c)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td class="text-uppercase">{{ $c->product->name }}</td>
                    <td>{{ $c->quantity }}</td>
                    <td>Rp. {{ number_format($c->product->price) }}</td>
                    <td>Rp. {{ number_format($c->total_price) }}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="4" align="right">Total Harga :</td>
                    <td><strong> Rp. {{ number_format($detail->total_price) }}</strong></td>
                </tr>
            </tbody>
        </table>
        <div class="text-white p-5 text-center mt-2" style="background-color:brown;">
            <h1>Instruksi Pembayaran</h1>
            <p>Bayar dengan Transfer ke Rekening 6042115068 A.n Muhammad Ariiq Fiezayyan dan harap menunjukkan bukti Transfer</p>
            <form action="@yield('actionform')" method="post" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-center">
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                </div>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*" onchange="previewImage()">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        
        imgPreview.style.display = 'block';
        
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        
        oFReader.onload = function(OFREvent) {
            imgPreview.src = OFREvent.target.result;
        }
    }
</script>
@endsection