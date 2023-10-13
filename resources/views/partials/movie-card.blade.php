@if (@isset($movie))
    <div class="card text-center">
        <div class="card-header">
            {{ $movie->title }}
        </div>
        <div class="card-body">
            <a href="{{ route('movieDetail', $movie->id) }}" class="btn btn-primary">DETAIL MOVIE</a>
        </div>
    </div>
@endif
