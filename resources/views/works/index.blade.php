@extends('__layout')
@section('main')
<div class="bg-myYellow items-center py-5 mt-5">
  <div class="container max-w-screen-md mx-auto flex-row flex justify-between md:px-0 px-4">
    <div class="bg-myBlue font-bold text-white sm:text-lg text-md px-4 py-1 rounded-xl border-2 border-b-4 border-black transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100">
      <p class="text-center">All Works</p>
    </div>
  </div>
</div>

<div class="bg-myYellow items-center pt-0 pb-5">
  <div class="container max-w-screen-md mx-auto flex-col gap-5 flex justify-between md:px-0 px-4">
    @include('components.works')
  </div>
</div>
@endsection