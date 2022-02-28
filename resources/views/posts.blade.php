@extends('layouts.main')

@section('container')
    <h1>BLOG</h1>
    @foreach ($posts as $post)
        <a href="blog/{{ $post["slug"] }}">{{ $post["title"] }}</a>
    @endforeach
@endsection