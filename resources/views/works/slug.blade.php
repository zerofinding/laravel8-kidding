@extends('__layout')
@section('main')
<div class="bg-myYellow items-center py-5 my-5 md:px-0 px-4">
  <div class="container max-w-screen-md bg-white border-2 border-b-8 border-black rounded-xl mx-auto flex-col flex justify-between overflow-hidden">

@if($field->image !== null)
    <img src="{{ $field->image }}" alt="kikiding.space" title="kikiding.space" class="border-b-4 border-black" loading="lazy" />
@endif

    <div class="md:py-6 md:px-6 py-6 px-4">
      <h1 class="text-4xl font-bold">{{ $field->title }}</h1>
      <div class="flex-row flex flex-wrap mt-4 gap-2">
        @foreach(explode(',', $field->categories) as $cat) 
          <div class="bg-myOrange font-semibold text-white sm:text-md text-md px-3 py-1 rounded-xl border-2 border-b-4 border-black transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100">
            <p class="text-center" style="color:#180e07;">{{ $cat }}</p>
          </div>
        @endforeach
      </div>
      
      <p class="text-xl mt-4 leading-relaxed font-semibold">About the project</p>
      <div class="markdown-styles_markdown__3w_hn">{!! $field->content !!}</div>

      <p class="text-xl mt-4 leading-relaxed font-semibold">Technology used :</p>
      <div class="flex-row flex flex-wrap mt-2 gap-2">
        @foreach(explode(',', $field->technologyUsed) as $techno) 
          <div class="bg-white font-semibold text-black sm:text-md text-md px-3 py-1 rounded-xl border-2 border-b-4 border-black transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100">
            <p class="text-center" style="color:#180e07;">{{ $techno }}</p>
          </div>
        @endforeach
      </div>

      <p class="text-xl mt-4 leading-relaxed font-semibold">Links :</p>
      <div class="flex-row flex flex-wrap mt-2 gap-2">
        @foreach(explode(',', $field->deployment) as $deployment)

@php
$exps = explode('://', $deployment);
@endphp

          @if(count($exps) > 1)
          <a href="https://{{ $exps[1] }}" alt="{{ $field->title }} - {{ $exps[1] }}" title="{{ $field->title }} - {{ $exps[1] }}">
            <div class="bg-myBlue font-semibold text-white sm:text-md text-md px-3 py-1 rounded-xl border-2 border-b-4 border-black transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100">
              <p class="text-center" style="color:#fff;">{{ str_replace(': https', '', $exps[0]) }}</p>
            </div>
          </a>
          @endif

        @endforeach
      </div>

      <div class="flex flex-row justify-end">
        <a href="https://twitter.com/intent/tweet?url=https://kikiding.space/works/{{ $field->slug }}&amp;text={{ $field->title }}" target="_blank" rel="noopener" alt="kikiding.space - twitter" title="kikiding.space - twitter">
          @include('components.twitter')
        </a>
      </div>
    </div>

  </div>
</div>
@endsection