@extends('layouts.app')

@section('title', 'Movie list')
  

@section('content')
  <section>
    <div class="container">
      <div class="row">
        @forelse ($movies as $movie)
          <div class="col-4">
            @include('partials._movie-card')
          </div>
        @empty
          <div class="col-12">
            <h2>Nessun libro nella lista</h2>
          </div>
        @endforelse
    </div>
  </div>
  </section>
@endsection