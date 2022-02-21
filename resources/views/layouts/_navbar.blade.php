<nav
class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 bg-white"
>
<div
  class="container px-4 mx-auto flex flex-wrap items-center justify-between"
>
  <div
    class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
  >
    <a
      class="text-lg font-bold text-emerald-800 leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
      href="{{ route('home') }}"
      >Green Technology</a>
     <button
      class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
      type="button"
      onclick="toggleNavbar('example-collapse-navbar')"
     >
      <i class="text-white fas fa-bars"></i>
    </button>
  </div>
  <div
    class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
    id="example-collapse-navbar"
  >
    <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
      <li class="flex items-center">
        <a
          class="text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
          href="{{ route('about') }}"
        >
          à propos
        </a>
      </li>
      <li class="flex items-center">
        <a
          class="text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
          href="#"
        >
          nos produits
        </a>
      </li>
      <li class="flex items-center">
        <button
          class="bg-green-900 text-white active:bg-green-900 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
          type="button"
          style="transition: all 0.15s ease 0s;"
        >
          contact
        </button>
      </li>
    </ul>
  </div>
</div>
</nav>