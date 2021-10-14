@extends('layouts.main')

@section('title', $title)

@section('content')

<article class="mb-5">
  <h1>{{ $post->title }}</h1>

  <p>By. Wijdan Muhammad Ridwnulloh in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

  {!! $post->body !!}

</article>

<a href="/posts">Back to Posts</a>
@endsection