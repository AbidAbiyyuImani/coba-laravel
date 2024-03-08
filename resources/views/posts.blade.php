@extends('layouts.main')
@section('container')
    @foreach ($posts as $post)
        <article class="mb-4">
            <h2>
                <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
            </h2>
            <h4>By : {{ $post["author"] }}</h4>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach
@endsection