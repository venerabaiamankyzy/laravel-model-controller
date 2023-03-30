@if (@isset($movie))
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">{{ $movie->title }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
      <p class="card-text">{{ $movie->nationality }}</p>
      <p class="card-text">{{ $movie->date }}</p>
      <p class="card-text">{{ $movie->vote }}</p>
      
      <a href="{{ route('movie-detail', ['id' => $movie->id]) }}" class="card-link">More details</a>
      
    </div>
  </div>
@else 
  <div class="card h-100">
    <div class="card-body">
      <h5 class="card-title">Movie not found</h5>
    </div>
  </div>
@endif
