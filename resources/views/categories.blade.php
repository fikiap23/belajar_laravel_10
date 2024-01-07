{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <h1 class="text-5xl mb-10 text-center font-bold">Categories</h1>
    @foreach ($categories as $category)
        <ul>
            <li>
                <h2 class="font-bold text-2xl text-blue-500 underline cursor-pointer">
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </h2>
            </li>
        </ul>
    @endforeach
@endsection
