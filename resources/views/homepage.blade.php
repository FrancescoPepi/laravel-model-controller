@extends('layouts.app')

@section('page-name', 'homepage')

@section('contant-main')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col">
                    @include('partials.movie-card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
