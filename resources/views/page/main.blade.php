@extends('layout.main')

@section('meta')
  <title>{{ $page->title }}</title>
  <meta name="og:title" content="{{ $page->title }}">

  <meta name="description" content="{{ $page->description }}">
  <meta name="og:description" content="{{ $page->description }}">

@endsection
