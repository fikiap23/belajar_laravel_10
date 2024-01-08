{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <article class="mb-10">
        <h2 class="font-bold text-2xl">
            {{ $post->title }}
        </h2>

        <p>Posted by: <a href="/author/{{ $post->author->username }}"
                class="text-blue-500 underline">{{ $post->author->name }}</a> in <a
                href="/categories/{{ $post->category->slug }}" class="text-blue-500">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>

    <a href="/blog">Back to blog</a>
@endsection
