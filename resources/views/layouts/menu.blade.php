@extends('layouts/main')
@section('content')
    | Menu @yield('ccategory')
@endsection
@section('container')

<div class="d-md-flex justify-content-center mb-4">
  <h3 class="text-uppercase text-center">semua menu @yield('category')</h3>
  @can('admin')
  <a href="@yield('createmenu')" class="btn btn-primary ms-md-2 mb-md-2 d-flex justify-content-center">Create Menu</a>
  @endcan
</div>
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  @can('member')
  ({{ App\Models\Cart::query()
    ->whereRelation('transaction', 'user_id', '=', Auth::user()->id)
    ->whereRelation('transaction', 'status', '=', 'unpaid')
    ->count();
  }})
  
  @endcan
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

{{-- Card --}}
<div class="row">
  @foreach ($products as $p)
  <div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100" style="border-color: brown;">
      <img src="{{ asset('storage/image-product/' . $p->image) }}" alt="{{ $p->name }}" class="card-img-top h-100" style="max-height: 250px; overflow:hidden; "> 
      <div class="card-header bg-transparent border-success d-flex">
        <h5 class="text-uppercase">{{ $p->name }}</h5>
        <p class="card-text ms-auto fw-bold">Rp.  {{ number_format($p->price) }}</p>
      </div>
      <div class="card-body">
        @can('member')
        @include('partials/formaddcart')
        {{-- kalau yang akses admin --}}
        @elsecan('admin')
        {{-- <a class="btn btn-info" href="/menu/{{ $p->slug }}">View</a>--}}
        <a class="btn btn-warning" href="@yield('editmenu'){{ $p->slug }}/edit">Edit</a>
        <form action="/menu/{{ $p->slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
        @else
        <p class="my-0 text-center fw-3">Login untuk Mendapatkan Akses Belanja</p>
        @endcan
      </div>
    </div>
  </div>      
  @endforeach
  <div class="d-flex justify-content-end">
    {{ $products->links() }}
  </div>
</div>
@endsection