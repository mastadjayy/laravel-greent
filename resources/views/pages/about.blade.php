@extends('layouts.base')

@section('content')
<!--=== Banner start  ===-->
<main>
  <div class="relative pt-16 pb-32 flex content-center items-center justify-center"
       style="min-height: 50vh;"
  >
    <div
      class="absolute top-0 w-full h-full bg-center bg-cover"
      style='background-image: url("https://images.pexels.com/photos/11263300/pexels-photo-11263300.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=1280&w=1920");'
    >
      <span
        id="blackOverlay"
        class="w-full h-full absolute opacity-50 bg-black"
      ></span>
    </div>
    <div class="container relative mx-auto">
      <div class="items-center flex flex-wrap">
        <div class="w-full">
          <div>
            <p class="mt-4 text-lg font-barlow text-white text-center uppercase underline underline-offset-8">
              à propos de green technology
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!--=== Banner end  ===-->

<!--=== About start  ===-->
<section class="body-font overflow-hidden w-full h-full bg-left-bottom bg-cover bg-no-repeat"
       style='background-image: url("http://layerdrops.com/agrioxwp/wp-content/uploads/2021/11/about-3-bg-1-1.png");'
>
  <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap justify-center text-center mb-10">
            <div class="w-full lg:w-6/12 px-4">
              <h1 class="text-4xl font-barlow uppercase text-green-900">
                Nous fournissons des produits bios de haute qualité
              </h1>
              <p class="font-semibold font-roboto text-base text-green-700 my-10">
                GREEN TECHNOLOGY est un producteur professionnel d’intrants utilisés dans l'horticulture
                et l'agriculture sous abris.
              </p>
              <p class="font-semibold font-roboto text-base text-slate-900">
                GREEN TECHNOLOGY existe depuis 2007. <br>
                Nous sommes une société agro-industrielle spécialisée dans l’élaboration et la commercialisation de supports de culture issus du mésocarpe de la noix de coco.
                L’exploitation de cette ressource naturelle, renouvelable et respectueuse de l’environnement, s’inscrit dans le cadre d’une politique de Développement Durable.
                GREEN TECHNOLOGY a mis au point une technique de production et propose une large gamme de produits parfaitement adaptés aux cultures hors sol.
              </p>
            </div>
            <div></div>
          </div>             
  </div>
</section>
<!--=== About end  ===-->

<!--=== Notre procédé start ===-->
<section>
  <div class="relative pt-16 pb-32 flex content-center items-center justify-center"
       style="min-height: 100vh;"
  >
    <div
      class="absolute top-0 w-full h-full bg-center bg-cover bg-fixed"
      style='background-image: url("https://images.pexels.com/photos/5608057/pexels-photo-5608057.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=1280&w=1920");'
    >
      <span
        id="greenOverlay"
        class="w-full h-full absolute opacity-80 bg-emerald-900"
      ></span>
    </div>
    <div class="container relative px-5 py-24 mx-auto">
      
      <div class="flex flex-wrap mb-10">
        <div class="w-full lg:w-full px-4">
          <h1 class="text-4xl text-white mb-4 font-barlow uppercase">
            Nos étapes de production
          </h1>
          <div>
            <div class="container px-5 mx-auto flex flex-wrap">
              <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm"></div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">

                  <div class="flex-grow sm:pl-6 mt-6 sm:mt-0 text-white">
                    <h2 class="font-barlow mb-1 text-xl">Sélection de la matière première</h2>
                    <p class="leading-relaxed font-roboto">
                      La matière première provient de différentes plantations, il est très important d'apporter une attention particulière au degré de salinité, à la présence de mauvaises herbes,d’impuretés, etc.
                    </p>
                  </div>
                </div>
              </div>
              <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm"></div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
 
                  <div class="flex-grow sm:pl-6 mt-6 sm:mt-0 text-white">
                    <h2 class="font-barlow mb-1 text-xl">Traitement de la matière première</h2>
                    <p class="leading-relaxed font-roboto">
                      La bourre de coco est une matière organique, il faut s’assurer de sa stabilité et de sa bonne décomposition. Pour cette raison, il faut stocker la matière première pendant 6 mois au minimum.
                    </p>
                  </div>
                </div>
              </div>
              <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm"></div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
 
                  <div class="flex-grow sm:pl-6 mt-6 text-white sm:mt-0">
                    <h2 class="font-barlow mb-1 text-xl">Granulométrie</h2>
                    <p class="leading-relaxed font-roboto">
                      Chacun de nos produits peut être proposé sous différentes structures. A cet effet, nous disposons d’un « parc » important de cribles pour être en mesure de répondre au mieux aux exigences du marché.
                    </p>
                  </div>
                </div>
              </div>
              <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm"></div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
 
                  <div class="flex-grow sm:pl-6 mt-6 sm:mt-0 text-white">
                    <h2 class="font-barlow mb-1 text-xl">Lavage des produits finis</h2>
                    <p class="leading-relaxed font-roboto">
                      Pour rendre la matière neutre, il faut éliminer,par lavage, les composants naturels tels que le chlore, le potassium et le sodium présents dans la bourre de coco.
                    </p>
                  </div>
                </div>
              </div>

              <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm"></div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">

                  <div class="flex-grow sm:pl-6 mt-6 sm:mt-0 text-white">
                    <h2 class="font-barlow mb-1 text-xl">Conditionnement</h2>
                    <p class="leading-relaxed font-roboto">
                      Si le produit est exporté, il faut au préalable le sécher et le compresser sous-forme de blocs ; les blocs peuvent être filmés avant palettisation.
                    </p>
                  </div>
                </div>
              </div>

              <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm"></div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                  <div class="flex-grow sm:pl-6 mt-6 sm:mt-0 text-white">
                    <h2 class="font-barlow mb-1 text-xl">Contrôle des produits finis</h2>
                    <p class="leading-relaxed font-roboto">
                      Les produits finis sont contrôlés avant expédition. A cet effet, nous disposons de notre  propre laboratoire d’analyse. Des échantillonnages sont prélevés sur chaque lot expédiéet conservés.
                    </p>
                  </div>
                </div>
              </div>

              <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm"></div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                  <div class="flex-grow sm:pl-6 mt-6 sm:mt-0 text-white">
                    <h2 class="font-barlow mb-1 text-xl">Logistique</h2>
                    <p class="leading-relaxed font-roboto">
                      Nous pouvons nous charger de toutes les formalités de logistique pour une livraison rapide.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


    </div>
  </div>
</section>
<!--=== Notre procédé end ===-->

<!-- Nos clients -->
<section class="body-font overflow-hidden w-full h-full bg-left-bottom bg-cover bg-no-repeat">
 <div class="container px-5 py-24 mx-auto">
  <div class="flex flex-wrap justify-center text-center mb-10">
      <div class="w-full lg:w-6/12 px-4">
        <h1 class="text-4xl font-barlow uppercase text-green-900">
          Nos clients
        </h1>
        <p class="font-semibold font-roboto text-base text-green-700 my-10">
          Nous avons des clients de diverses origines
          <br>
          <span class="text-gray-900 text-sm font-bold">
            <a href="{{ route('gallerie') }}" class="hover:text-green-700">
              cliquer ici pour voir leurs projets
            </a>
          </span>
        </p>
      </div>
  </div> 

  <div class="flex flex-wrap justify-center">

    <div class="w-full mb-10">
      <div class="flex items-center justify-center">
          <div class="max-w-md w-full px-3">
              <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                  <div class="bg-cover bg-top h-40" style="background-image: url(https://images.pexels.com/photos/6231871/pexels-photo-6231871.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=1280&w=1920)">
                  </div>
                  <div class="flex justify-center text-center p-5">
                      <div class="ml-3">
                          <div class="font-bold font-roboto text-2xl uppercase">à l'étranger</div>
                          <span class="text-gray-600 text-base">Nos produits s'exportent principalement vers la <i class="uppercase font-bold">France</i> et la <i class="uppercase font-bold">Hollande</i></span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  
    <div class="w-full">
      <div class="flex items-center justify-center">
          <div class="max-w-md w-full px-3">
              <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                  <div class="bg-cover bg-bottom h-40" style="background-image: url(https://images.pexels.com/photos/11322794/pexels-photo-11322794.png?auto=compress&cs=tinysrgb&dpr=2&h=1280&w=1280)">
                  </div>
                  <div class="flex justify-center text-center p-5">
                      <div class="ml-3">
                          <div class="font-bold font-roboto text-2xl uppercase">en côte d'ivoire</div>
                          <span class="text-gray-600 text-base">
                            Nous travaillons étroitement avec les agriculteurs locaux
                          </span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

  </div>
  

 </div>
</section>
<!-- Nos clients end -->


@endsection