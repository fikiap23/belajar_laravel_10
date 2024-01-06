{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <article class="mb-10">
        <h2 class="font-bold text-2xl">
            {{ $post->title }}
        </h2>

        {!! $post->body !!}
    </article>

    <a href="/blog">Back to blog</a>
@endsection
