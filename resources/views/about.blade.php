@extends('layouts.main')

@section('title', $title)

@section('content')
<h1>Halaman About</h1>
<h3>{{ $name }}</h3>
<h3>{{ $email }}</h3>
<img src="{{ asset('img/' . $image) }}" alt="{{ $name }}" width="200">
@endsection