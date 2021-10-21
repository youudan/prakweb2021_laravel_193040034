@extends('layouts.main')

@section('title', $title)

@section('content')


<h1 class="mb-5">{{ $post->title }}</h1>

<p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

{!! $post->body !!}



<a href="/posts" class="d-block mt-3">Back to Posts</a>
@endsection