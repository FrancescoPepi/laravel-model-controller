@extends('layouts.app')

@section('page-name', 'homepage')

@section('contant-main')
    <div class="container">
        <div class="row">
            @forelse ($movies as $movie)
                <div class="col">
                    <div class="card">
                        {{ $movie->title }}
                    </div>
                </div>

            @empty
                <div class="col">
                    <div class="card">
                        NOT FOUND | #404
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
