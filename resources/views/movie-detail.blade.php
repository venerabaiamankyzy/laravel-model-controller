@extends('layouts.app')

@section('title', 'Movie list')
  

@section('content')
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          @include('partials._movie-card')
        </div>
      </div>
    </div>
  </section>
@endsection