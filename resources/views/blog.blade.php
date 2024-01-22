{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <h1 class="text-3xl mb-10 text-center font-bold">{{ $title }} </h1>

    @if ($posts->count())
        <div
            class="max-w-7xl mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg object-cover h-96 w-full"
                    src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="" />
            </a>
            <div class="p-5 text-center">
                <a href="/blog/{{ $posts[0]->slug }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $posts[0]->title }}
                    </h5>
                </a>
                <small class="text-gray-500 dark:text-gray-400 ">Posted by: <a
                        href="/author/{{ $posts[0]->author->username }}"
                        class="text-blue-500 underline">{{ $posts[0]->author->name }}</a>
                    in <a href="/categories/{{ $posts[0]->category->slug }}"
                        class="text-blue-500">{{ $posts[0]->category->name }}</a> |
                    {{ $posts[0]->created_at->diffForHumans() }}
                </small>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $posts[0]->excerpt }}</p>
                <a href="/blog/{{ $posts[0]->slug }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    @else
        <p class="text-center text-lg">No post found.</p>
    @endif




    <div class="flex justify-center my-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts->skip(1) as $post)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                    <div class="absolute px-3 py-2 text-xs font-medium text-white bg-gray-700 rounded">
                        <a
                            href="/categories/{{ $post->category->slug }}"class="text-white">{{ $post->category->name }}</a>

                    </div>
                    <a href="#">
                        <img class="rounded-t-lg" src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <a href="/blog/{{ $post->slug }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $post->title }}</h5>
                        </a>
                        <small class="text-gray-500 dark:text-gray-400 ">Posted by: <a
                                href="/author/{{ $post->author->username }}"
                                class="text-blue-500 underline">{{ $post->author->name }}
                            </a>

                            {{ $post->created_at->diffForHumans() }}
                        </small>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->excerpt }}</p>
                        <a href="/blog/{{ $post->slug }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
