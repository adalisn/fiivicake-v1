@extends('layouts/createedit')
@section('caction')
    Create
@endsection
@section('action')Tambah Menu @endsection
@section('formaction')/menu @endsection
@section('valuename'){{ old('name') }} @endsection
@section('valueslug'){{ old('slug') }} @endsection
@section('price') 
<label for="price" class="form-label fw-bold">Price</label>
<input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price') }} ">
@error('price')
<div class="invalid-feedback mb-1">
  {{ $message }}
</div>
@enderror
@endsection

{{-- Category --}}
@section('category')
<label for="category" class="form-label fw-bold">Category</label>
<select class="form-select" name="category_id">
@foreach ($categories as $c)
  @if (old('category_id') == $c->id)
  <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
  @else
  <option value="{{ $c->id }}">{{ $c->name }}</option>
  @endif
  @endforeach
</select>
@endsection

@section('showimagefirstornot')
<img class="img-preview img-fluid mb-3 col-sm-5">
@endsection

@section('valuebody'){{ old('body') }} @endsection
@section('submit')Tambah @endsection


