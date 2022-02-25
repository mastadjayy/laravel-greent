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

<!--=== Nos produits start  ===-->
<section class="body-font overflow-hidden w-full h-full bg-left-bottom bg-cover bg-emerald-900 text-white"
>
  <div class="container px-5 py-24 mx-auto">
         <div class="flex flex-wrap mb-10">
           <div class="w-full lg:w-8/12 px-4">
             <h1 class="text-4xl font-barlow uppercase">
               Nos produits
             </h1>
             <p class="font-semibold font-roboto text-base text-slate-50 my-10">
               Les supports de cultures Green Technology sont utilisés aussi bien dans l'agriculture que dans le jardinage.
             </p>
             <p class="font-semibold font-roboto text-base text-white">
               
             </p>
           </div>
           <div class="w-full lg:w-4/12 px-4">
            2 images supperposées de jardinage et d'agriculture.
           </div>
         </div>
    <!-- COCOCHIPS-GT -->
    <div class="lg:w-full mx-auto flex flex-wrap">
      <img alt="cocochips" class="lg:w-4/12 w-full lg:h-auto h-full object-cover object-center rounded" src="https://themepure.net/template/agronix-prev/agronix/assets/img/bg/video-bg-3.jpg">
      <div class="lg:w-8/12 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h1 class="text-4xl font-roboto uppercase">
          COCOCHIPS-GT
        </h1>
        <p class="font-semibold font-roboto text-base text-slate-50 my-10">
          C'est un produit utilisé dans différents types de culture. Ce produit à la fois aéré, drainant, stable et détenteur d’eau favorise un bon enracinement de la plante.
          
          Le Cocochips-GT a des utilisations très variées. Il peut être utilisé pur, dans la technique de production en pots ou pour le paillage, ou en mélange comme intrant dans l’élaboration de substrats.
          
          Le Cocochips-GT est un matériau constitué essentiellement de matière organique, présentant une très bonne capacité de rétention en air (plus de 50% des pores sont constitués d’air) et pouvant absorber jusqu’à 4 fois son poids en eau sans changer de structure facilitant ainsi une colonisation racinaire rapide (absence d’obstacle); il donne d’excellents résultats.
          
          L’électro-conductivité est inférieure à 0,5 ms/cm.
          
          GREEN TECHNOLOGY élabore des Cocochips de différentes granulométries (Fin, Peti, Moyen) pouvant s’adapter à des cultures et à des tailles de contenants différentes.
        </p>       
      </div>
    </div>
    <!-- COCOCHIPS-GT end -->
    <!-- SUBSTRAT-GT -->
    <div class="lg:w-full mx-auto flex flex-wrap">
      <div class="lg:w-8/12 w-full lg:pr-10 lg:py-6 mt-6 lg:mt-0">
        <h1 class="text-4xl font-roboto uppercase">
          SUBSTRAT-GT
        </h1>
        <p class="font-semibold font-roboto text-base text-slate-50 my-10">
Le Substrat-GT est un produit utilisé dans la technique de culture en pots. Ce substrat  à la fois aéré, drainant, stable et rétenteur d’eau favorise le développement racinaire des jeunes plants; sa structure homogène permet un remplissage facile des pots et assure une croissance uniforme des plantes dans les pépinières.

Le Substrat-GT est un matériau constitué essentiellement de matière organique, présentant une très bonne capacité de rétention en air (plus de 50% des pores sont constitués d’air) et pouvant  absorber jusqu’à 4 fois son poids en eau sans changer de structure facilitant ainsi une colonisation racinaire rapide (absence d’obstacle).

Le Substrat-GT est une matière première lavée, ce qui signifie exempte de sels néfastes aux cultures pour permettre un enracinement rapide et sain ; l’électro-conductivité est inférieure à 0,5 ms/cm.

GREEN TECHNOLOGY produit différents types de substrats pouvant s’adapter à des cultures et tailles de pots différentes.
        </p>       
      </div>
      <img alt="cocochips" class="lg:w-4/12 w-full lg:h-auto h-full object-cover object-center rounded" src="https://themepure.net/template/agronix-prev/agronix/assets/img/bg/video-bg-3.jpg">
    </div>
    <!-- SUBSTRAT-GT end -->
  </div>
</section>
<!--=== Nos produits end  ===-->


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
          Nous avons des cleints de diverses origines
        </p>
      </div>

    <div></div>
  </div> 

  <div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-center min-h-screen">
        <div class="max-w-md w-full px-3">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="bg-cover bg-top h-40" style="background-image: url(https://images.unsplash.com/photo-1518296736038-a6ab5e1488fc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80)">
                </div>
                <div class="flex pt-2 p-5">
                    <div class="bg-cover bg-center w-32 h-32 -mt-16 rounded-full border-4 border-white" style="background-image: url(https://images.unsplash.com/photo-1520366914631-d250fd86eed2?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80)">
                    </div>
                    <div class="ml-3">
                        <div class="font-bold text-2xl">Cait Genevieve</div>
                        <div class="flex items-start">
                            <span>
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path class="fill-current text-gray-500" d="M4.34 14.66a8 8 0 1 1 11.32 0L11.4 18.9a2 2 0 0 1-2.82 0l-4.25-4.24zm1.42-1.42L10 17.5l4.24-4.25a6 6 0 1 0-8.48 0zM10 12a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" /></svg>
                            </span>
                            <span class="text-gray-700 ml-2">New York, NY</span>
                        </div>
                    </div>
                </div>
                <div class="flex px-5 mt-2 mb-6 -mx-2">
                    <button class="leading-relaxed rounded-full mx-2 font-bold py-1 w-1/2 bg-blue-500 hover:bg-blue-600 text-white">Follow</button>
                    <button class="leading-relaxed rounded-full mx-2 font-bold py-1 w-1/2 text-gray-900 bg-white border-2 border-gray-400 hover:border-gray-500">Message</button>
                </div>
                <div class="border-t-2 border-gray-200 p-5">
                    <div class="flex items-start">
                        <span>
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path class="fill-current text-gray-500" d="M10 11a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM3 19a1 1 0 0 1-2 0c0-3.84 2.8-7 6.33-7h5.34c3.52 0 6.33 3.16 6.33 7a1 1 0 0 1-2 0c0-2.79-1.97-5-4.33-5H7.33C4.97 14 3 16.21 3 19z" /></svg>
                        </span>
                        <div class="relative">
                            <span class="font-bold text-gray-900 ml-2">12</span>
                            <span class="inline text-gray-700">Followers you know</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-3">
                        <div class="flex flex-row-reverse justify-end">
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white" style="background-image: url(https://images.unsplash.com/photo-1458071103673-6a6e4c4a3413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=80)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1470406852800-b97e5d92e2aa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1473700216830-7e08d47f858e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1543610892-0b1f7e6d8ac1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1502323777036-f29e3972d82f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=60)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1530424426433-967ce567454d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=100&q=60)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1525879000488-bff3b1c387cf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=60)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1521132293557-5b908a59d1e1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=60)">
                            </div>
                        </div>
                        <div class="w-10 h-10 rounded-full border-2 border-gray-400 text-sm font-bold text-gray-700 flex justify-center items-center">+3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  //////////////
  <div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-center min-h-screen">
        <div class="max-w-md w-full px-3">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="bg-cover bg-top h-40" style="background-image: url(https://images.unsplash.com/photo-1518296736038-a6ab5e1488fc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80)">
                </div>
                <div class="flex pt-2 p-5">
                    <div class="bg-cover bg-center w-32 h-32 -mt-16 rounded-full border-4 border-white" style="background-image: url(https://images.unsplash.com/photo-1520366914631-d250fd86eed2?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80)">
                    </div>
                    <div class="ml-3">
                        <div class="font-bold text-2xl">Cait Genevieve</div>
                        <div class="flex items-start">
                            <span>
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path class="fill-current text-gray-500" d="M4.34 14.66a8 8 0 1 1 11.32 0L11.4 18.9a2 2 0 0 1-2.82 0l-4.25-4.24zm1.42-1.42L10 17.5l4.24-4.25a6 6 0 1 0-8.48 0zM10 12a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" /></svg>
                            </span>
                            <span class="text-gray-700 ml-2">New York, NY</span>
                        </div>
                    </div>
                </div>
                <div class="flex px-5 mt-2 mb-6 -mx-2">
                    <button class="leading-relaxed rounded-full mx-2 font-bold py-1 w-1/2 bg-blue-500 hover:bg-blue-600 text-white">Follow</button>
                    <button class="leading-relaxed rounded-full mx-2 font-bold py-1 w-1/2 text-gray-900 bg-white border-2 border-gray-400 hover:border-gray-500">Message</button>
                </div>
                <div class="border-t-2 border-gray-200 p-5">
                    <div class="flex items-start">
                        <span>
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path class="fill-current text-gray-500" d="M10 11a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM3 19a1 1 0 0 1-2 0c0-3.84 2.8-7 6.33-7h5.34c3.52 0 6.33 3.16 6.33 7a1 1 0 0 1-2 0c0-2.79-1.97-5-4.33-5H7.33C4.97 14 3 16.21 3 19z" /></svg>
                        </span>
                        <div class="relative">
                            <span class="font-bold text-gray-900 ml-2">12</span>
                            <span class="inline text-gray-700">Followers you know</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-3">
                        <div class="flex flex-row-reverse justify-end">
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white" style="background-image: url(https://images.unsplash.com/photo-1458071103673-6a6e4c4a3413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=80)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1470406852800-b97e5d92e2aa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1473700216830-7e08d47f858e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1543610892-0b1f7e6d8ac1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1502323777036-f29e3972d82f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=60)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1530424426433-967ce567454d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=100&q=60)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1525879000488-bff3b1c387cf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=60)">
                            </div>
                            <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1521132293557-5b908a59d1e1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=60)">
                            </div>
                        </div>
                        <div class="w-10 h-10 rounded-full border-2 border-gray-400 text-sm font-bold text-gray-700 flex justify-center items-center">+3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  ////////////////
  <a
  href="#"
  class="bg-green-800 hover:bg-green-900 text-white text-base font-bold font-roboto uppercase p-4 rounded inline-block mt-5 cursor-pointer"
  data-aos="fade-up"
  data-aos-delay="50"
  data-aos-duration="1200"
  data-aos-mirror="true"
  data-aos-once="false"
>
  Voir les projets réalisé
  <i class="fas fa-long-arrow-alt-right text-lg leading-lg"></i>
</a>
 </div>
</section>
<!-- Nos clients end -->


<div class="max-w-7xl mx-auto">
  <div class="flex items-center justify-center min-h-screen">
      <div class="max-w-md w-full px-3">
          <div class="bg-white shadow-xl rounded-lg overflow-hidden">
              <div class="bg-cover bg-top h-40" style="background-image: url(https://images.unsplash.com/photo-1518296736038-a6ab5e1488fc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80)">
              </div>
              <div class="flex pt-2 p-5">
                  <div class="bg-cover bg-center w-32 h-32 -mt-16 rounded-full border-4 border-white" style="background-image: url(https://images.unsplash.com/photo-1520366914631-d250fd86eed2?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80)">
                  </div>
                  <div class="ml-3">
                      <div class="font-bold text-2xl">Cait Genevieve</div>
                      <div class="flex items-start">
                          <span>
                              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                  <path class="fill-current text-gray-500" d="M4.34 14.66a8 8 0 1 1 11.32 0L11.4 18.9a2 2 0 0 1-2.82 0l-4.25-4.24zm1.42-1.42L10 17.5l4.24-4.25a6 6 0 1 0-8.48 0zM10 12a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" /></svg>
                          </span>
                          <span class="text-gray-700 ml-2">New York, NY</span>
                      </div>
                  </div>
              </div>
              <div class="flex px-5 mt-2 mb-6 -mx-2">
                  <button class="leading-relaxed rounded-full mx-2 font-bold py-1 w-1/2 bg-blue-500 hover:bg-blue-600 text-white">Follow</button>
                  <button class="leading-relaxed rounded-full mx-2 font-bold py-1 w-1/2 text-gray-900 bg-white border-2 border-gray-400 hover:border-gray-500">Message</button>
              </div>
              <div class="border-t-2 border-gray-200 p-5">
                  <div class="flex items-start">
                      <span>
                          <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path class="fill-current text-gray-500" d="M10 11a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM3 19a1 1 0 0 1-2 0c0-3.84 2.8-7 6.33-7h5.34c3.52 0 6.33 3.16 6.33 7a1 1 0 0 1-2 0c0-2.79-1.97-5-4.33-5H7.33C4.97 14 3 16.21 3 19z" /></svg>
                      </span>
                      <div class="relative">
                          <span class="font-bold text-gray-900 ml-2">12</span>
                          <span class="inline text-gray-700">Followers you know</span>
                      </div>
                  </div>
                  <div class="flex justify-between items-center mt-3">
                      <div class="flex flex-row-reverse justify-end">
                          <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white" style="background-image: url(https://images.unsplash.com/photo-1458071103673-6a6e4c4a3413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
                          </div>
                          <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=80)">
                          </div>
                          <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1470406852800-b97e5d92e2aa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
                          </div>
                          <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1473700216830-7e08d47f858e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
                          </div>
                          <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1543610892-0b1f7e6d8ac1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80)">
                          </div>
                          <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1502323777036-f29e3972d82f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=60)">
                          </div>
                          <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1530424426433-967ce567454d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=100&q=60)">
                          </div>
                          <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1525879000488-bff3b1c387cf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=60)">
                          </div>
                          <div class="bg-cover bg-center w-12 h-12 rounded-full border-4 border-white -mr-3" style="background-image: url(https://images.unsplash.com/photo-1521132293557-5b908a59d1e1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=300&q=60)">
                          </div>
                      </div>
                      <div class="w-10 h-10 rounded-full border-2 border-gray-400 text-sm font-bold text-gray-700 flex justify-center items-center">+3</div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>






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

<!--
Image Overlapping

<div class="relative">

  <img class="absolute top-0 left-0" src="https://picsum.photos/536/354" alt="Workplace" width="600" />

  <img class="cursor-pointer absolute top-0 left-0 mt-32 ml-40 hover:shadow-outline" src="https://picsum.photos/535/354" width="600" />

</div>
-->
@endsection