{{-- @extends('layouts/main')
@section('container')
    <div class="row">
        <div class="col">
            <h1>{{ $product->name }}</h1>
            <h5>{{ $product->price }}</h5>
            <div style="max-height: 350px; overflow:hidden;">
                @if ($product->image)
                   <img src="{{ asset('storage/image-product/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top"> 
                @else
                    <img src="https://source.unsplash.com/500x500/?{{ $product->name }}" alt="{{ $product->name }}" class="card-img-top">
                @endif
            </div>
            <p>{!! $product->body !!}</p>
            @can('member')
                <form method="post" action="/cart">
                    @csrf
                    <input type="hidden" name="pid" value="{{ $product->id }}">
                    <input type="hidden" name="uid" value="{{ auth()->user()->id }}">
                    <select class="form-select" aria-label="Default select example" name="quantity">
                        <option value="25">25 items</option>
                        <option value="50">50 items</option>
                        <option value="75">75 items</option>
                        <option value="100">100 items</option>
                    </select>
                    <button type="submit" class="mt-2">Add to Cart</button>
                </form>
            
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                        {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif   
            @endcan
        </div>
    </div>
@endsection --}}