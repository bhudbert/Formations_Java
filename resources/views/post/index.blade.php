@extends('layouts.base')

@section('content')
    <h3> Blog</h3>

    @foreach ($posts as $post)
        <p>Le titre du poste {{ $post->id }} est {{ $post->title }}</p>
    @endforeach

@endsection
