@extends('layouts/main')
@section('container')
<div class="text-center text-white p-5" style="background-color:brown">
    <h1 class="lh-1">Fivicake</h1>
    <h5 class="fw-normal">Tempat Membuat Kue beserta Cemilan dari Rumah</h5>
</div>


{{-- Kategori Produk --}}
<div class="row mt-3">
    <h3 class="text-uppercase text-center mb-3 mt-3">Kategori Produk</h3>
    @foreach ($category as $c)
    @if($c->products->count() != 0)
    <div class="col-md-4 mb-3">
        <a href="/category/{{ $c->slug }}">
            <div class="card h-100 w-100 bg-dark text-white text-uppercase">
                {{-- @if ($c->products[$c->products->count()-1]->image) --}}
                <img src="{{ asset('storage/image-product/' . $c->products[$c->products->count()-1]->image) }}" class="card-img" alt="{{ $c->name }}" style="max-height: 300px; overflow:hidden;">
                {{-- @else
                <img src="https://source.unsplash.com/500x600/?{{ $c->name }}" class="card-img" alt="{{ $c->name }}" style="max-height: 250px; overflow:hidden;">
                @endif --}}
                <div class="card-img-overlay d-flex justify-content-center align-items-center" style="background-color: rgba(0, 0, 0, 0.5)">
                    <h5 class="card-title fs-3">{{ $c->name }}</h5>
                </div>
            </div>
        </a>
    </div>      
    @endif
    
    @endforeach
</div>
@endsection