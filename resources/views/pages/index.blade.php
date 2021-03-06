@extends('layouts.base')

@section('content')
<main>
    <div
      class="relative pt-16 pb-32 flex content-center items-center justify-center"
      style="min-height: 100vh;"
    >
      <div
        class="absolute top-0 w-full h-full bg-center bg-cover"
        style='background-image: url("https://wordpress.iqonic.design/product/wp/farmin/wp-content/uploads/2021/08/banner-1.png");'
      >
        <span
          id="blackOverlay"
          class="w-full h-full absolute opacity-50 bg-black"
        ></span>
      </div>
      <div class="container relative mx-auto">
        <div class="items-center flex flex-wrap">
          <div class="w-full lg:w-8/12">
            <div>
                <p class="mt-4 text-lg tracking-widest font-extrabold font-roboto text-white text-base uppercase underline underline-offset-8">
                    Nous fabriquons
                </p>
              <h1 class="text-white text-6xl lg:text-9xl font-semibold font-barlow uppercase mt-5 mb-8"
                  data-aos="fade-down"
                  data-aos-delay="50"
                  data-aos-duration="1200"
                  data-aos-mirror="true"
                  data-aos-once="false"
              >
                Des Produits Bios
              </h1>
              <h3 class="text-white text-4xl font-medium font-barlow">pour l'<span class="text-green-600">a</span>griculture & le <span class="text-green-600">j</span>ardinage</h3>
              <a
                href="{{ route('about') }}"
                class="bg-green-800 hover:bg-green-900 text-white text-base font-bold font-roboto uppercase p-4 rounded inline-block mt-5 cursor-pointer"
                data-aos="fade-up"
                data-aos-delay="50"
                data-aos-duration="1200"
                data-aos-mirror="true"
                data-aos-once="false"
              >
                En savoir plus
                <i class="fas fa-long-arrow-alt-right text-lg leading-lg"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    <!--
      <div
        class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
        style="height: 70px;"
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
            class="text-white fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
    -->
    </div>
    <section class="pb-20 bg-white -mt-24">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="lg:pt-12 pt-12 w-full md:w-4/12 px-4 text-center">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
              <div class="px-4 py-5 flex-auto">
                <h4 class="text-2xl font-bold uppercase font-barlow">localement</h4>
                <p class="mt-2 mb-4 text-gray-600 text-base font-bold font-roboto">
                  Green Technology travail main ?? main avec les acteurs du secteur agricole.
                </p>
                <a
                    href="{{ route('about') }}"
                    class="px-6 bg-green-900 text-white font-semibold rounded inline-block cursor-pointer"
                >
                    <i class="fas fa-long-arrow-alt-right text-lg leading-lg"></i>
                </a>
              </div>
            </div>
          </div>
          
          <div class="w-full md:w-4/12 px-4 text-center">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
              <div class="px-4 py-5 flex-auto">
                <h4 class="text-2xl font-bold uppercase font-barlow">Green Technology</h4>
                <p class="mt-2 mb-4 text-gray-600 text-base font-bold font-roboto">
                  est le choix des professionnels de l'agriculture et du paysagisme
                </p>
              </div>
            </div>
          </div>
          
          <div class="pt-12 w-full md:w-4/12 px-4 text-center">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
              <div class="px-4 py-5 flex-auto">
                <h4 class="text-2xl font-bold uppercase font-barlow">?? l'??tranger</h4>
                <p class="mt-2 mb-4 text-gray-600 text-base font-bold font-roboto">
                  Nos produits sont principalement export??s vers la France et la Hollande o?? ils sont utilis??s principalement dans l???horticulture.
                </p>
                <a
                    href="{{ route('about') }}"
                    class="px-6 bg-green-900 text-white font-semibold rounded inline-block cursor-pointer"
                >
                    <i class="fas fa-long-arrow-alt-right text-lg leading-lg"></i>
                </a>
              </div>
            </div>
          </div>
          
        </div>



        <div class="flex flex-wrap items-center mt-20">
          <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
            <div class="text-gray-800 inline-flex w-full mb-6">
              <h6 class="text-xl mb-2 font-bold uppercase font-barlow">L'usine Green Technology</h6>
            </div>

            <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
              Cr????e en 2007, GREEN TECHNOLOGY est une soci??t?? agro-industrielle sp??cialis??e dans l?????laboration et la commercialisation de supports de culture issus du m??socarpe de la noix de coco.
              L???exploitation de cette ressource naturelle, renouvelable, biod??gradable, respectueuse de l???environnement, s???inscrit dans le cadre d???une politique de D??veloppement Durable.
              GREEN TECHNOLOGY a mis au point une technique de production et propose une large gamme de produits parfaitement adapt??s aux cultures hors sol.
            </p>
            <a href="{{ route('about') }}" class="font-bold text-green-800 font-roboto mt-8 underline">
              En savoir plus sur l'usine..
            </a>
          </div>
          <div class="w-full md:w-6/12 px-4 mr-auto ml-auto">
            <div
              class="relative flex flex-col min-w-0 break-words bg-green-800 w-full mb-6 shadow-lg rounded-lg"
            >
              <img
                alt="..."
                src="https://shtheme.org/demosd/agroly/wp-content/uploads/2020/12/gallery-3.jpg"
                class="w-full align-middle rounded-t-lg"
              />
              <blockquote class="relative p-8 mb-4">
                <svg
                  preserveAspectRatio="none"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 583 95"
                  class="absolute left-0 w-full block"
                  style="height: 95px; top: -94px;"
                >
                  <polygon
                    points="-30,95 583,95 583,65"
                    class="text-green-800 fill-current"
                  ></polygon>
                </svg>
                <h4 class="text-xl font-bold text-white capitalize">
                  Les Supports De Cultures GT
                </h4>
                <p class="text-md font-light mt-2 text-white">
                  Utilis??s dans la technique de culture en pots
                </p>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="pt-20 pb-48 bg-emerald-800">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center text-center mb-10">
          <div class="w-full lg:w-6/12 px-4">
            <h6 class="text-lg mb-2 font-semibold uppercase text-slate-100">Nos principaux produits</h6>
            <p class="font-light text-lg leading-relaxed m-4 text-slate-300">
              GREEN TECHNOLOGY est un producteur professionnel d???intrants utilis??s dans l'horticulture
              et l'agriculture sous abris.
            </p>
          </div>
        </div>
        <section class="text-gray-600 body-font">
          <div class="container px-5 mx-auto">
            <div class="flex flex-wrap -mx-4 -mb-10 text-center">
              <div class="sm:w-6/12 mb-10 px-4">
                <div class="rounded-lg h-64 overflow-hidden">
                  <img alt="content" class="object-cover object-center h-full w-full" src="https://shtheme.org/demosd/agroly/wp-content/uploads/2020/12/gallery-3.jpg">
                </div>
                <h6 class="title-font text-xl font-medium text-white mt-6 mb-3 uppercase"><a href="#">Substrat-GT</a></h6>
                <p class="leading-relaxed text-slate-300">
                  Le Substrat-GT est un produit utilis?? dans la technique de culture en pots. Ce substrat  ?? la fois a??r??, drainant, stable et r??tenteur d???eau favorise le d??veloppement racinaire??des jeunes plants.
                </p>
              </div>
              <div class="sm:w-6/12 mb-10 px-4">
                <div class="rounded-lg h-64 overflow-hidden">
                  <img alt="content" class="object-cover object-center h-full w-full" src="https://shtheme.org/demosd/agroly/wp-content/uploads/2020/12/gallery-3.jpg">
                </div>
                <h6 class="title-font text-xl font-medium text-white mt-6 mb-3 uppercase"><a href="#">Cocochips-GT</a></h6>
                <p class="leading-relaxed text-slate-300">
                  Le Cocochips-GT est un produit utilis?? dans diff??rents types de culture. Ce produit  ?? la fois a??r??, drainant, stable et d??tenteur d???eau favorise un bon enracinement de la plante.
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>

    <!--
    <section class="relative py-20 bg-white">
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
            class="text-white fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4">
        <div class="items-center flex flex-wrap">
          <div class="w-full md:w-6/12 ml-auto mr-auto px-4">
            <img
              alt="..."
              class="max-w-full rounded-lg shadow-lg shadow-amber-500"
              src="https://show.moxcreative.com/vano/wp-content/uploads/sites/18/2021/11/smiling-handsome-farmer-holding-organic-carrots-in-field-at-farm.jpg"
            />
          </div>
          <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
            <div class="md:pr-12">
              <div
                class="text-amber-600 bg-amber-300 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full"
              >
                <i class="fa-duotone fa-user text-xl"></i>
              </div>
              <h3 class="text-3xl font-semibold">
                Organic farmers are outstanding in their fields.
              </h3>
              <p class="mt-4 text-lg leading-relaxed text-gray-600">
                The extension comes with three pre-built pages to help you get
                started faster. You can change the text and images and you're
                good to go.
              </p>
              <ul class="list-none mt-6">
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span
                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-amber-600 bg-amber-200 mr-3"
                        ><i class="fas fa-fingerprint"></i
                      ></span>
                    </div>
                    <div>
                      <h4 class="text-gray-600">
                        Carefully crafted components
                      </h4>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span
                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-amber-600 bg-amber-200 mr-3"
                        ><i class="fab fa-html5"></i
                      ></span>
                    </div>
                    <div>
                      <h4 class="text-gray-600">Amazing page examples</h4>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span
                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-amber-600 bg-amber-200 mr-3"
                        ><i class="fa-duotone fa-user"></i
                      ></span>
                    </div>
                    <div>
                      <h4 class="text-gray-600">Dynamic components</h4>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->

    <section class="pb-20 relative block bg-emerald-900">
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
            class="text-emerald-900 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
        <div class="flex flex-wrap text-center justify-center">
          <div class="w-full lg:w-6/12 px-4">
            <h6 class="text-lg mb-2 font-semibold uppercase text-slate-100">Contactez-nous</h6>
            <p class="text-lg leading-relaxed mt-4 text-slate-200">
              Via ce formulaire
            </p>
          </div>
        </div>
        <!--
        <div class="flex flex-wrap mt-12 justify-center">
          <div class="w-full lg:w-3/12 px-4 text-center">
            <div
              class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
            >
              <i class="fas fa-medal text-xl"></i>
            </div>
            <h6 class="text-xl mt-5 font-semibold text-white">
              Excelent Services
            </h6>
            <p class="mt-2 mb-4 text-gray-500">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
          </div>
          <div class="w-full lg:w-3/12 px-4 text-center">
            <div
              class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
            >
              <i class="fas fa-poll text-xl"></i>
            </div>
            <h5 class="text-xl mt-5 font-semibold text-white">
              Grow your market
            </h5>
            <p class="mt-2 mb-4 text-gray-500">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
          </div>
          <div class="w-full lg:w-3/12 px-4 text-center">
            <div
              class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
            >
              <i class="fas fa-lightbulb text-xl"></i>
            </div>
            <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>
            <p class="mt-2 mb-4 text-gray-500">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
          </div>
        </div>
        -->
      </div>
    </section>

    <section class="relative block py-24 lg:pt-0 bg-emerald-900">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
          <div class="w-full lg:w-6/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
            >
              <div class="flex-auto p-5 lg:p-10">
                <div class="relative w-full mb-3">
                  <label
                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                    for="nom"
                    >Nom</label
                  ><input
                    type="text"
                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                    placeholder="Nom"
                    style="transition: all 0.15s ease 0s;"
                  />
                </div>
                <div class="relative w-full mb-3">
                  <label
                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                    for="email"
                    >Email</label
                  ><input
                    type="email"
                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                    placeholder="Email"
                    style="transition: all 0.15s ease 0s;"
                  />
                </div>
                <div class="relative w-full mb-3">
                  <label
                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                    for="message"
                    >Message</label
                  ><textarea
                    rows="4"
                    cols="80"
                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                    placeholder="Votre message..."
                  ></textarea>
                </div>
                <div class="text-center mt-6">
                  <button
                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                    type="button"
                    style="transition: all 0.15s ease 0s;"
                  >
                    Envoyer
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection