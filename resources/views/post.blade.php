@extends('layouts.main')

@section('title', $title)

@section('content')

<article class="mb-5">
  <h1>{{ $post->title }}</h1>

  {!! $post->body !!}

</article>

<a href="/posts">Back to Posts</a>
@endsection