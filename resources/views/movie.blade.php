@extends('layouts.main')

@section('title', 'Movies')

@section('content')
    <div class="grid">
        @foreach ($movies as $movie)
            <div>
                <h1>{{ $movie->title }}</h1>
                <h3>{{ $movie->original_title }}</h3>
                <p>{{ $movie->nationality }}</p>
                <p>{{ $movie->date }}</p>
                <p>{{ $movie->vote }}</p>
            </div>
        @endforeach
        @dump($movies[0])
    </div>
@endsection
