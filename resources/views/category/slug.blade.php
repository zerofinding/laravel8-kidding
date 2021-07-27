@extends('__layout')
@section('main')
<div class="bg-myYellow items-center py-5 mt-5">
  <div class="container max-w-screen-md mx-auto flex-row flex justify-between md:px-0 px-4">
    <div class="bg-myBlue font-bold text-white sm:text-lg text-md px-4 py-1 rounded-xl border-2 border-b-4 border-black transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100">
      <p class="text-center">Category: {{ $category }}</p>
    </div>
  </div>
</div>

<div class="bg-myYellow items-center pt-0 pb-20">
  <div class="container max-w-screen-md mx-auto flex-col gap-5 flex justify-between md:px-0 px-4">

  @foreach ($blogs as $field)

    <div class="bg-white border-2 border-b-8 border-black p-5 rounded-xl flex-1 duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100">
      <a href="/blog/{{ $field->slug }}" alt="blog - {{ $field->title }}" title="blog - {{ $field->title }}">
        <h1 class="font-bold sm:text-2xl text-xl hover:underline">{{ $field->title }}</h1>
      </a>
      <p class="sm:text-lg text-md sm:mt-2 mt-1">{{ Carbon\Carbon::parse($field->date)->format('d M Y') }} | <a href="/category/{{ $field->category->slug }}" alt="category - {{ $field->title }}" title="category - {{ $field->title }}" style="color:blue;">{{ $field->category->name }}</a></p>
      <p class="sm:text-lg text-md sm:mt-2 mt-1">{{ $field->excerpt }}</p>
    </div>

  @endforeach
  </div>
</div>
@endsection