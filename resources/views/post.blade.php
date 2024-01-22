@extends('layouts.main')

@section('container')
    <div class="container mx-auto my-8">
        <div class="max-w-2xl mx-auto">
            <h2 class="font-bold text-2xl mb-3">
                {{ $post->title }}
            </h2>

            <p class="text-gray-600">
                Posted by:
                <a href="/author/{{ $post->author->username }}" class="text-blue-500 underline">
                    {{ $post->author->name }}
                </a>
                in
                <a href="/categories/{{ $post->category->slug }}" class="text-blue-500">
                    {{ $post->category->name }}
                </a>
            </p>

            <img class="rounded-t-lg" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" />

            <article class="mt-3">
                {!! $post->body !!}
            </article>



            <a href="/blog" class="text-blue-500 mt-4 inline-block">
                Back to blog
            </a>
        </div>
    </div>
@endsection
