{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <h1 class="text-5xl mb-10 text-center font-bold">Posts</h1>
    @foreach ($posts as $post)
        <article class="mb-10 border-b pb-4">
            <h2 class="font-bold text-2xl text-blue-600">
                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <p>Posted by: <a href="#" class="text-blue-500 underline">{{ $post->user->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}" class="text-blue-500">{{ $post->category->name }}</a></p>

            <p>{{ $post->excerpt }}</p>
            <a href="/blog/{{ $post->slug }}" class="text-blue-500 underline">Read more...</a>
        </article>
    @endforeach
@endsection
