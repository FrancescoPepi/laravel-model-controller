@extends('layouts.app')

@section('page-name', $title)

@section('contant-main')
    <div class="container">
        <div class="row">

            <div class="col">
                <div class="card jumbotron" width="400" height="300">
                    <img src="{{ Vite::asset('storage/images/jumbotron.jpg') }}" alt="jumbotron">
                    <h1 class="title">{{ $title }}</h1>
                </div>
            </div>

        </div>
    </div>
@endsection
