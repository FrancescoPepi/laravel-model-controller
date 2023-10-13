@extends('layouts.app')

@section('page-name', 'film')

@section('contant-main')
    <div class="container">
        <div class="row row-cols-5 g-3">
            <div class="col mx-auto">
                <div class="card text-center">
                    <div class="card-header">
                        {{ $movie->title }}
                    </div>
                    <div class="card-body">
                        <a href="{{ route('movie') }}" class="btn btn-primary">GO BACK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
