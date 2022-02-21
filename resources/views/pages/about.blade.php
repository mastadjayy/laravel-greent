@extends('layouts.base')

@section('content')
        <!-- ====== Banner Section Start -->
        <div
        class="
          relative
          z-10
          pt-[120px]
          md:pt-[130px]
          lg:pt-[160px]
          pb-[100px]
          bg-green-800
          overflow-hidden
        "
      >
        <div class="container">
          <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full px-4">
              <div class="text-center">
                <h1 class="font-semibold text-white text-2xl uppercase">à propos de <span class="text-green-100">Green Technology</span></h1>
              </div>
            </div>
          </div>
        </div>
        <div>
          <span class="absolute top-0 left-0 z-[-1]">
            <svg
              width="495"
              height="470"
              viewBox="0 0 495 470"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <circle
                cx="55"
                cy="442"
                r="138"
                stroke="red"
                stroke-opacity="0.04"
                stroke-width="50"
              />
              <circle
                cx="446"
                r="39"
                stroke="white"
                stroke-opacity="0.04"
                stroke-width="20"
              />
              <path
                d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z"
                stroke="white"
                stroke-opacity="0.08"
                stroke-width="12"
              />
            </svg>
          </span>
          <span class="absolute top-0 right-0 z-[-1]">
            <svg
              width="493"
              height="470"
              viewBox="0 0 493 470"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <circle
                cx="462"
                cy="5"
                r="138"
                stroke="white"
                stroke-opacity="0.04"
                stroke-width="50"
              />
              <circle
                cx="49"
                cy="470"
                r="39"
                stroke="white"
                stroke-opacity="0.04"
                stroke-width="20"
              />
              <path
                d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z"
                stroke="white"
                stroke-opacity="0.06"
                stroke-width="13"
              />
            </svg>
          </span>
        </div>
      </div>
      <!-- ====== Banner Section End -->

      <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="ecommerce" class="lg:w-6/12 w-full lg:h-auto h-full object-cover object-center rounded" src="https://themepure.net/template/agronix-prev/agronix/assets/img/bg/video-bg-3.jpg">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
              <h6 class="text-lg mb-2 text-gray-900 font-semibold uppercase">l'usine</h6>
              <!--
              <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">The Catcher in the Rye</h1>
              <div class="flex mb-4">
                <span class="flex items-center">
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <span class="text-gray-600 ml-3">4 Reviews</span>
                </span>
                <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                  <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                  </a>
                  <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                  </a>
                  <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>
                  </a>
                </span>
              </div>
              -->
              <p class="leading-relaxed">
                La société GREEN TECHNOLOGY a été créée en 2007 par M. Gian Vittorio Benini.

                GREEN TECHNOLOGY est une société agro-industrielle spécialisée dans l’élaboration et la commercialisation de supports de culture issus du mésocarpe de la noix de coco.
                
                L’exploitation de cette ressource naturelle, renouvelable, biodégradable, sans aucun impact négatif sur l’environnement, s’inscrit dans le cadre d’une politique de Développement Durable. 
                
                GREEN TECHNOLOGY a mis au point une technique de production et propose une large gamme de produits parfaitement adaptés aux cultures hors sol.
              </p>

                </div>
              </div>
             
            </div>
          </div>
        </div>
      </section>

      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <h6 class="text-lg mb-2 text-gray-900 text-center font-semibold uppercase">
            Qui utilise les produits Green Technology?
            <!--<br class="hidden sm:block">Selfies Wayfarers-->
          </h6>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
            
            <div class="p-4 md:w-1/2 flex">
              <div class="flex-grow pl-6">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-2 text-center capitalize">Sur le marché local</h2>
                <p class="leading-relaxed text-base">
                    En Côte d’Ivoire, GREEN TECHNOLOGY travaille de concert avec les acteurs nationaux des filières de la banane, du palmier, de l’hévéa et des fleurs à la mise en œuvre et au développement de nouvelles techniques culturales hors sol en irrigation hydroponique (système de goutte-à-goutte) ou sous aspersion.
                </p>
              </div>
            </div>
            <!--
            <div class="p-4 md:w-1/3 flex">
              <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                  <circle cx="6" cy="6" r="3"></circle>
                  <circle cx="6" cy="18" r="3"></circle>
                  <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
              </div>
              <div class="flex-grow pl-6">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">The Catalyzer</h2>
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard ugh iceland kickstarter tumblr live-edge tilde.</p>
                <a class="mt-3 text-green-500 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
            -->
            <div class="p-4 md:w-1/2 flex">
              <div class="flex-grow pl-6">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-2 text-center capitalize">à l'international</h2>
                <p class="leading-relaxed text-base">
                    GREEN TECHNOLOGY exporte ses produits à destination de l’Europe (principalement vers la France et la Hollande), ils sont utilisés :
                    <ul>
                        <li>- purs dans l’horticulture (fleurs), dans la culture fruitière (tomates, fraises, etc.), dans la culture légumière (concombres, poivrons, etc.) sous serre;</li>
                        <li>- ou, en mélange pour la composition de terreaux ou d’amendements pour tous types  de culture.</li>
                    </ul>

                </p>
              </div>
            </div>

          </div>
        </div>
      </section>
@endsection