{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <h1 class="text-5xl mb-10 text-center font-bold">{{ $title }}</h1>
    @foreach ($posts as $post)
        <article class="mb-10">
            <h2 class="font-bold text-2xl">
                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>

            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
