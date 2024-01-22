{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <h1 class="text-5xl mb-10 text-center font-bold">Categories</h1>

    @foreach ($categories as $category)
        <div class="relative overflow-hidden rounded-lg bg-cover bg-no-repeat p-12 text-center mb-2"
            style="background-image: url('https://source.unsplash.com/1600x900?{{ $category->name }}'); height: 400px">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="flex h-full items-center justify-center">
                    <div class="text-white">
                        <h2 class="mb-4 text-4xl font-semibold">{{ $category->name }}</h2>

                        <!-- Wrap the button with an anchor tag -->
                        <a href="/categories/{{ $category->slug }}"
                            class="rounded border-2 border-neutral-50 px-7 pb-[8px] pt-[10px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10">
                            Explore now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
