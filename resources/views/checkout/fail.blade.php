@extends('layouts.app')

@section('header')
  @include('layouts.header')
@endsection

@section('content')
  <!-- SECTION TOP -->
  <section class="section section-top-absolute patern gap-up-1-top">
  </section>
  <!-- SECTION ABSOLUTE -->
  <section class="section section-absolute">
    <div class="container text-center">
      <h3 class="mb-5">Something went wrong</h3>
      <div class="btn-wrap">
        <a href="{{ route('shop') }}" class="btn btn-primary btn-lg">Continue shopping</a>
      </div>
    </div>
  </section>

@endsection
