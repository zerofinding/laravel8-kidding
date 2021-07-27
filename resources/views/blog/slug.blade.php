@extends('__layout')
@section('main')
<div class="bg-myYellow items-center py-5 my-5 md:px-0 px-4">
  <div class="container max-w-screen-md bg-white border-2 border-b-8 border-black rounded-xl mx-auto flex-col flex justify-between overflow-hidden">

@if($field->image !== null)
    <img src="{{ $field->image }}" alt="kikiding.space" title="kikiding.space" class="border-b-4 border-black" loading="lazy" />
@endif

    <div class="md:py-6 md:px-6 py-6 px-4">
      <h1 class="text-4xl font-bold">{{ $field->title }}</h1>
      <p class="text-lg font-semibold mt-2">{{ $field->category->name }} | {{ Carbon\Carbon::parse($field->date)->format('d M Y') }}</p>
      <div class="markdown-styles_markdown__3w_hn">{!! $field->content !!}</div>
      
      <div class="flex flex-row justify-end">
        <a href="https://twitter.com/intent/tweet?url=https://kikiding.space/blog/{{ $field->slug }}&amp;text={{ $field->title }}" target="_blank" rel="noopener" alt="kikiding.space - twitter" title="kikiding.space - twitter">
          @include('components.twitter')
        </a>
      </div>
    </div>

  </div>
</div>
@endsection