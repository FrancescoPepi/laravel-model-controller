@extends('layouts.app')

@section('page-name', 'film')

@section('contant-main')
    <div class="container">
        <div class="row row-cols-5 g-3">
            @foreach ($movies as $movie)
                <div class="col">
                    @include('partials.movie-card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
