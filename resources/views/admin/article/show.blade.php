@extends('layouts.index')

@section('content')
    <h1> article : {{ $article->id }}</h1>

    <div class="row">
        <div class="col-8 my-5 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->titre }}</h5>
                    <p><b>commentaires:</b></p>
                    @forelse ($article->comments as $comment)
                        <span>{{ $comment->content }}</span> <br>
                    @empty
                        <span>pas de commentaires</span>
                    @endforelse
                </div>
                </div>
        </div>
    </div>
@endsection