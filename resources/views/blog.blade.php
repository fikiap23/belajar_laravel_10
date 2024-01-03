{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-10">
            <h2 class="font-bold text-2xl">
                <a href="/blog/{{ $post['slug'] }}">{{ $post['title'] }}</a>
            </h2>
            <h5 class="font-bold">By: {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
