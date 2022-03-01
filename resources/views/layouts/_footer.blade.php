<footer
class="relative bg-emerald-800 bg-cover pt-8 pb-6 text-white"
>
<div
  class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
  style="height: 80px;"
>
  <svg
    class="absolute bottom-0 overflow-hidden"
    xmlns="http://www.w3.org/2000/svg"
    preserveAspectRatio="none"
    version="1.1"
    viewBox="0 0 2560 100"
    x="0"
    y="0"
  >
    <polygon
      class="text-emerald-800 bg-green-900 fill-current"
      points="2560 0 2560 100 0 100"
    ></polygon>
  </svg>
</div>
<div class="container mx-auto px-4">
  <div class="flex flex-wrap">
    <div class="w-full lg:w-6/12 px-4">
      <h4 class="text-3xl font-semibold font-barlow underline decoration-wavy decoration-yellow-500 underline-offset-8 uppercase">
        Green Technology
      </h4>
    </div>
    <div class="w-full lg:w-6/12 px-4">
      <div class="flex flex-wrap items-top mb-6">
        <div class="w-full lg:w-4/12 px-4 ml-auto">
          <span
            class="block uppercase underline text-yellow-500 text-lg font-bold font-roboto mb-2"
            >liens utiles</span
          >
          <ul class="list-unstyled">
            <li>
              <a
                class="text-white hover:text-yellow-500 font-semibold block pb-2 text-sm uppercase"
                href="{{ route('about') }}"
                >à propos</a
              >
            </li>
            <li>
              <a
                class="text-white hover:text-yellow-500 font-semibold block pb-2 text-sm uppercase"
                href="{{ route('products') }}"
                >nos produits</a
              >
            </li>
            <li>
              <a
                class="text-white hover:text-yellow-500 font-semibold block pb-2 text-sm uppercase"
                href="{{ route('contact') }}"
                >contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <hr class="my-6 border-yellow-500" />
  <div
    class="flex flex-wrap items-center md:justify-between justify-center"
  >
    <div class="w-full md:w-4/12 px-4 mx-auto text-center">
      <div class="text-sm text-white font-semibold py-1">
        Copyright © 2017-2022 Green Technology by
        <a
          href="#"
          class="text-white"
        >
          <span class="text-yellow-500 hover:text-amber-400">ORDEM</span>
        </a>.
      </div>
    </div>
  </div>
</div>
</footer>