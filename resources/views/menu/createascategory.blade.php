@extends('layouts/createedit')
@section('action')Tambah Menu {{ $category->name }}@endsection
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
<input type="hidden" name="category_id" value="{{ $category->id }}">
@endsection

@section('showimagefirstornot')
<img class="img-preview img-fluid mb-3 col-sm-5">
@endsection

@section('valuebody'){{ old('body') }} @endsection
@section('submit')Tambah @endsection


