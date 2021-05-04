@extends('layouts.index')

@section('content')
    <h1>All membre</h1>
    @dump($membres)
    @foreach ($membres as $item)
        <p>{{ $item->nom }}</p>
        <p>genre : {{ $item->genre->type }}</p>
        <hr>
    @endforeach
@endsection