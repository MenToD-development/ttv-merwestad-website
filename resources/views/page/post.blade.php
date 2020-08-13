@extends('layout.main')

@section('meta')
  <title>Nieuwsbericht: {{ $post->title }}</title>
  <meta name="og:title" content="Nieuwsbericht: {{ $post->title }}">

  <meta name="description" content="{{ $post->excerpt(15) }}">
  <meta name="og:description" content="{{ $post->excerpt(15) }}">
@endsection

@section('content')
  <div class="bg-white w-full py-12 md:py-20 xl:py-24">
    <div class="container mx-auto px-4 xl:px-8">
      <div class="w-full mb-10 xl:mb-16">
        <div class="text-center mb-2">
          <span class="rounded py-1 px-2 md:py-2 md:px-4 bg-secondary-normal">
            <span class="text-xs md:text-sm font-bold font-sans text-primary-normal">
              Nieuwsbericht
            </span>
          </span>
        </div>
        <span class="max-w-2xl block mx-auto text-center font-serif text-3xl md:text-4xl text-black">
          {{ $post->title }}
        </span>
        <div class="flex max-w-2xl mx-auto px-6 justify-center items-center">
          <span class="inline-block mr-6">
            <i class="fa fa-user text-primary-normal text-sm mr-2"></i>
            <span class="text-sm text-gray-600">{{ $post->author->name }}</span>
          </span>
          <span class="inline-block">
            <i class="fa fa-calendar text-primary-normal text-sm mr-2"></i>
            <span class="text-sm text-gray-600">{{ $post->published_at->diffForHumans() }}</span>
          </span>
        </div>
        <div class="max-w-2xl prose mt-8 mx-auto">
          {!! $post->content !!}
        </div>
        <div class="flex justify-center mt-10">
          <a href="{{ url($overviewPage->path()) }}"
            title="{{ $overviewPage->title }}"
            class="bg-primary-normal hover:bg-primary-hover h-10 md:h-12 inline-flex items-center justify-center px-4 rounded">
            <i class="fas fa-arrow-circle-left text-white mr-3"></i>
            <span class="inline-block font-sans font-bold text-md md:text-lg text-white">
              Terug naar het nieuwsoverzicht
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection


