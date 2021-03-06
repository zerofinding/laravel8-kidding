<div class="bg-myYellow items-center pt-0 pb-5">
  <div class="container max-w-screen-md mx-auto md:flex-row flex-col gap-4 flex justify-between md:px-0 px-4">
    
  @foreach ($blogs as $field)

    <div class="bg-white border-2 border-b-8 border-black p-5 rounded-xl flex-1 duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100">
      <a href="/blog/{{ $field->slug }}" alt="blog - {{ $field->title }}" title="blog - {{ $field->title }}">
        <h1 class="font-bold sm:text-2xl text-xl hover:underline" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{ $field->title }}</h1>
      </a>
      <p class="sm:text-lg text-md sm:mt-2 mt-1">{{ Carbon\Carbon::parse($field->date)->format('d M Y') }} | <a href="/category/{{ $field->category->slug }}" alt="category - {{ $field->title }}" title="category - {{ $field->title }}" style="color:blue;">{{ $field->category->name }}</a></p>
      <p class="sm:text-lg text-md sm:mt-2 mt-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">{{ $field->excerpt }}</p>
    </div>

  @endforeach

  </div>
</div>