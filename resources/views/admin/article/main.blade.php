@extends('layouts.index')

@section('content')
    <h1>All article</h1>
    <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>

    <div class="row">
        @foreach ($articles as $article)
            <div class="col-6 my-5">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{ $article->titre }}</h5>
                      <p class="card-text">nbr comment : {{ count($article->comments) }}</p>
                      <a href="{{ route('article.show', $article->id) }}" class="btn btn-success">show</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
@endsection