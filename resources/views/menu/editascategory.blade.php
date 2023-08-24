@extends('layouts/createedit')
@section('action')Edit Menu {{ $category->name }} @endsection
@section('formaction')/menu/{{ $product->slug }} @endsection

@section('method')
@method('put')
@endsection

@section('valuename'){{ old('name', $product->name) }} @endsection
@section('valueslug'){{ old('slug', $product->slug ) }} @endsection
@section('price')
<label for="price" class="form-label fw-bold">Price</label>
<input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price', $product->price) }}">
@error('price')
<div class="invalid-feedback mb-1">
  {{ $message }}
</div>
@enderror
@endsection

@section('category')
<input type="hidden" name="category_id" value="{{ $category->id }}">
@endsection

@section('showimagefirstornot')
@if ($product->image)
<img src="{{ asset('storage/image-product/' . $product->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">   
@else
<img class="img-preview img-fluid mb-3 col-sm-5">   
@endif
@endsection

@section('valuebody'){{ old('body', $product->body ) }} @endsection
@section('submit')Ubah @endsection




{{-- @extends('layouts/main')
@section('container')
<h1 class="text-uppercase text-center">Edit Menu</h1>
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-7">
      <form method="post" action="/menu/{{ $product->slug }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label fw-bold">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $product->name ) }}">
          @error('name')
          <div class="invalid-feedback mb-1">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label fw-bold">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $product->slug) }}">
          @error('slug')
          <div class="invalid-feedback mb-1">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="price" class="form-label fw-bold">Price</label>
          <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price', $product->price) }}">
          @error('price')
          <div class="invalid-feedback mb-1">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="category" class="form-label fw-bold">Category</label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $c)
            @if (old('category_id', $product->category_id) == $c->id)
            <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
            @else
            <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endif
            @endforeach
          </select>
        </div>
        
        <div class="mb-3">
          <label for="image" class="form-label fw-bold">Post Image</label>
          @if ($product->image)
          <img src="{{ asset('storage/image-product/' . $product->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">   
          @else
          <img class="img-preview img-fluid mb-3 col-sm-5">   
          @endif
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*" onchange="previewImage()">
          @error('image')
          <div class="invalid-feedback mb-1">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="body" class="form-label fw-bold">Body</label>
          @error('body')
          <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="body" type="hidden" name="body" value="{{ old('body', $product->body) }}">
          <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Update Menu</button>
      </form>
    </div>
  </div>
</div>

<script>
  const name = document.querySelector('#name');
  const slug = document.querySelector('#slug');
  
  name.addEventListener('change', function() {
    fetch('/menu/checkSlug?name=' + name.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });
  
  document.addEventListener('trix-file-accepter', function(e) {
    e.preventDefault();
  })
  
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
@endsection --}}