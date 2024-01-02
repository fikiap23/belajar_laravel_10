@extends('layouts.main')

@section("container")
<h1 class="text-3xl font-bold">Ini halaman about</h1>
<h3 class="text-xl"> {{ $name }}</h3>
<p class="text-lg"> {{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200">
@endsection

