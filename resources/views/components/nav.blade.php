<div class="md:hidden flex">
  <a href="/" id="aburger" alt="kikiding.space - menu" title="kikiding.space - menu">
    <div class="bg-white font-bold text-black sm:text-lg text-md px-4 py-2 rounded-xl border-2 border-b-4 border-black transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100">
      <p class="text-center"><i class="fas fa-bars fa-lg"></i></p>
    </div>
  </a>
</div>
<div class="menu-flex md:flex md:flex-row flex-col md:gap-2 gap-3">
  <a href="/" alt="kikiding.space - home" title="kikiding.space - home">
    <div class="{{ $title === 'home' ? 'bg-myBlue text-white' : 'bg-white text-black' }} w-full md:w-24 py-1 rounded-xl border-2 border-b-4 border-black transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100">
      <p class="font-bold md:text-lg text-md text-center">Home</p>
    </div>
  </a>
  <a href="/now" alt="kikiding.space - now" title="kikiding.space - now">
    <div class="{{ $title === 'now' ? 'bg-myBlue text-white' : 'bg-white text-black' }} w-full md:w-24 py-1 rounded-xl border-2 border-b-4 border-black transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100">
      <p class="font-bold md:text-lg text-md text-center">Now</p>
    </div>
  </a>
</div>
<div class="menu-flex md:flex md:flex-row flex-col md:gap-2 gap-3">
  <a href="/works" alt="kikiding.space - works" title="kikiding.space - works">
    <div class="{{ $title === 'works' || Request::segment(1) === 'works' ? 'bg-myBlue text-white' : 'bg-white text-black' }} w-full md:w-24 py-1 rounded-xl border-2 border-b-4 border-black transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100">
      <p class="font-bold md:text-lg text-md text-center">Works</p>
    </div>
  </a>
  <a href="/blog" alt="kikiding.space - blog" title="kikiding.space - blog">
    <div class="{{ $title === 'blog' || Request::segment(1) === 'category' || Request::segment(1) === 'blog' ? 'bg-myBlue text-white' : 'bg-white text-black' }} w-full md:w-24 py-1 rounded-xl border-2 border-b-4 border-black transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100">
      <p class="font-bold md:text-lg text-md text-center">Blog</p>
    </div>
  </a>
  <a href="mailto: codingki@gmail.com" target="_blank" rel="noopener" alt="kikiding.space - contact" title="kikiding.space - contact">
    <div class="bg-white text-black w-full md:w-24 py-1 rounded-xl border-2 border-b-4 border-black transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100">
      <p class="font-bold md:text-lg text-md text-center">Contact</p>
    </div>
  </a>
</div>
