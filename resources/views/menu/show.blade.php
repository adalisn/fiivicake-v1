@extends('layouts/main')
@section('container')

<h1 class="text-uppercase text-center mb-3">Konfirmasi Pembayaran</h1>
<div class="row">
    <table class="table">
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
            @foreach($detail->carts as $c)
            <tr>
                {{-- <th scope="row">{{ $carts->firstItem() + $key }}</th> --}}
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $c->product->name }}</td>
                <td>{{ $c->quantity }}</td>
                <td>Rp. {{ number_format($c->product->price) }}</td>                       
                <td>Rp. {{ number_format($c->total_price) }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4" align="right">Total Harga :</td>
                <td><strong> Rp.   {{ number_format($detail->total_price) }}</strong></td>
            </tr>
        </tbody>
    </table>
    <div class="text-white p-5 text-center mt-2" style="background-color:brown;">
        <h1>Instruksi Pembayaran</h1>
        <p>
            Bayar dengan Transfer ke Rekening 6042115068 A.n Muhammad Ariiq Fiezayyan dengan menunjukkan bukti Transfer
        </p>
        <form action="/confirmation" enctype="multipart/form-data">
            <div class="d-flex justify-content-center">
                <img class="img-preview img-fluid mb-3 col-sm-5">
            </div>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback mb-1">
                {{ $message }}
            </div>
            @enderror
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
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