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
          class="w-full h-full absolute opacity-80 bg-black"
        ></span>
      </div>
      <div class="container relative mx-auto">
        <div class="items-center flex flex-wrap">
          <div class="w-full">
            <div>
              <p class="mt-4 text-lg font-barlow text-white text-center uppercase underline underline-offset-8">
                nos produits
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--=== Banner end  ===-->

  
<!--=== Nos produits start  ===-->
<section class="body-font overflow-hidden w-full h-full bg-left-bottom bg-cover bg-emerald-900 text-white"
>
  <div class="container px-5 py-24 mx-auto">
         <div class="flex flex-wrap mb-10">
           <div class="w-full lg:w-5/12 px-4">
             <p class="font-semibold font-roboto text-base text-slate-50 my-10">
               Les supports de cultures Green Technology sont utilisés aussi bien dans l'agriculture que dans le jardinage.
             </p>
           </div>
         </div>
    <!-- COCOCHIPS-GT -->
    <div class="lg:w-full mx-auto flex flex-wrap">
      <img alt="cocochips" class="lg:w-4/12 w-full lg:h-auto h-full object-cover object-center rounded" src="https://images.pexels.com/photos/11322793/pexels-photo-11322793.png?auto=compress&cs=tinysrgb&h=750&w=750">
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
Le Substrat-GT est un produit utilisé dans la technique de culture en pots. Ce substrat à la fois aéré, drainant, stable et rétenteur d’eau favorise le développement racinaire des jeunes plants; sa structure homogène permet un remplissage facile des pots et assure une croissance uniforme des plantes dans les pépinières.

Le Substrat-GT est un matériau constitué essentiellement de matière organique, présentant une très bonne capacité de rétention en air (plus de 50% des pores sont constitués d’air) et pouvant  absorber jusqu’à 4 fois son poids en eau sans changer de structure facilitant ainsi une colonisation racinaire rapide (absence d’obstacle).

Le Substrat-GT est une matière première lavée, ce qui signifie exempte de sels néfastes aux cultures pour permettre un enracinement rapide et sain ; l’électro-conductivité est inférieure à 0,5 ms/cm.

GREEN TECHNOLOGY produit différents types de substrats pouvant s’adapter à des cultures et tailles de pots différentes.
        </p>       
      </div>
      <img alt="cocochips" class="lg:w-4/12 w-full lg:h-auto h-full object-cover object-center rounded" src="https://images.pexels.com/photos/11327252/pexels-photo-11327252.png?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
    </div>
    <!-- SUBSTRAT-GT end -->
  </div>
</section>
<!--=== Nos produits end  ===-->

<!--=== Les réalisations début ===-->

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
            les réalisations de nos clients
          </h1>
          <p>Masonry gallery de projet agricoles</p>
        </div>
      </div>


    </div>
  </div>
</section>

<!--=== Les réalisations fin ===-->
@endsection