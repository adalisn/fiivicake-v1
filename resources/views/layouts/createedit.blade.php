@extends('layouts/main')
@section('content')
    | Menu @yield('caction')
@endsection
@section('container')
  <h1 class="text-uppercase text-center">@yield('action')</h1>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-7">
        <form method="post" action="@yield('formaction')" class="mb-5" enctype="multipart/form-data">
          @yield('method')
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label fw-bold">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="@yield('valuename')">
            @error('name')
            <div class="invalid-feedback mb-1">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="slug" class="form-label fw-bold">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="@yield('valueslug')">
            @error('slug')
            <div class="invalid-feedback mb-1">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            @yield('price')
          </div>

          <div class="mb-3">
                @yield('category')
          </div>
          
          <div class="mb-3">
            <label for="image" class="form-label fw-bold">Post Image</label>
            @yield('showimagefirstornot')
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback mb-1">
              {{ $message }}
            </div>
            @enderror
          </div>
          
          {{-- <div class="mb-3">
            <label for="body" class="form-label fw-bold">Body</label>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="@yield('valuebody')">
            <trix-editor input="body"></trix-editor>
          </div> --}}
          <button type="submit" class="btn btn-primary">@yield('submit')</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    const name = document.querySelector('#name'); //sesuai id name
    const slug = document.querySelector('#slug'); //sesuai id slug
    
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
@endsection