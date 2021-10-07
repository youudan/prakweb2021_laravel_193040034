@extends('layouts.main')

@section('title', $title)

@section('content')

<article class="mb-5">
  <h2>{{ $post['title'] }}</h2>
  <h5>By: {{ $post['author'] }}</h5>
  <p>
    {{ $post['body'] }}
  </p>
</article>

<a href="/blog">Back to Posts</a>
@endsection