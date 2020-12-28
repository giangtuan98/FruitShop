@extends('layouts.app')

@section('header')
  @include('layouts.header')
@endsection

@section('content')
  @include('components._shop', [
  'page' => 'Search',
  'products' => $products
  ])
@endsection
