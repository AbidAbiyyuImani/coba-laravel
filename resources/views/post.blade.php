{{-- @dd($post) --}}
@extends('layouts.main')
@section('container')
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h4>By : {{ $post["author"] }}</h4>
        <p>{{ $post["body"] }}</p>
    </article>
    <a href="/blog" class="btn btn-primary">Back To Posts</a>
@endsection