{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-10">
            <h2 class="font-bold text-2xl">
                <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>
            </h2>

            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
