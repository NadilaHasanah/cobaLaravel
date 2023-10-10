@extends('layouts.main')

@section('container')
<h1 class="mb-5">Halaman Blog Posts</h1>

@foreach ($posts as $post)
    <article class="mb-5 border-bottom">
        <h2>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>
        <p>By. Nadila Andini in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>

        a
    </article>
    @endforeach

@endsection