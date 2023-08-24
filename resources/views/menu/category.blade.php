@extends('layouts/menu')

@section('ccategory')
    {{ $category->name }}
@endsection
@section('category')
    {{ $category->name }}
@endsection
@section('createmenu')
    /category/{{ $category->slug }}/create
@endsection

@section('editmenu')
    /category/{{ $category->slug }}/
@endsection