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
                <p class="mt-4 text-lg font-medium text-white text-base uppercase underline underline-offset-8">
                    Nous fabriquons
                </p>
              <h1 class="text-white font-semibold text-7xl capitalize mt-5 mb-8"
                  data-aos="fade-down"
                  data-aos-delay="50"
                  data-aos-duration="1200"
                  data-aos-mirror="true"
                  data-aos-once="false"
              >
                Des Produits Agricoles <span class="text-green-700">&</span> <br> Bios
              </h1>
              
              <a
                href="#"
                class="bg-green-800 hover:bg-green-900 text-white font-semibold p-4 rounded inline-block mt-5 cursor-pointer"
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
            class="text-amber-300 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
    -->
    </div>
    <section class="pb-20 bg-white -mt-24">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="lg:pt-12 pt-12 w-full md:w-6/12 px-4 text-center">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
              <div class="px-4 py-5 flex-auto">
                <div
                  class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400"
                >
                  <i class="fas fa-splotch"></i>
                </div>
                <h4 class="text-2xl font-bold capitalize">localement</h4>
                <p class="mt-2 mb-4 text-gray-600 text-xl">
                  Green Technology travail main à main avec les acteurs du secteur agricole.
                </p>
                <a
                    href="#"
                    class="px-6 bg-amber-400 hover:bg-transparent text-white hover:text-amber-400 font-semibold border-2 border-transparent hover:border-amber-400 rounded inline-block cursor-pointer"
                >
                    <i class="fas fa-long-arrow-alt-right text-lg leading-lg"></i>
                </a>
              </div>
            </div>
          </div>
          <!--
          <div class="w-full md:w-4/12 px-4 text-center">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
              <div class="px-4 py-5 flex-auto">
                <div
                  class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400"
                >
                  <i class="fas fa-retweet"></i>
                </div>
                <h6 class="text-xl font-semibold">Free Revisions</h6>
                <p class="mt-2 mb-4 text-gray-600">
                  Keep you user engaged by providing meaningful information.
                  Remember that by this time, the user is curious.
                </p>
              </div>
            </div>
          </div>
          -->
          <div class="pt-12 w-full md:w-6/12 px-4 text-center">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
              <div class="px-4 py-5 flex-auto">
                <div
                  class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400"
                >
                  <i class="fas fa-fingerprint"></i>
                </div>
                <h4 class="text-2xl font-bold capitalize">à l'étranger</h4>
                <p class="mt-2 mb-4 text-gray-600 text-xl">
                  Nos produits sont principalement exportés vers la France et la Hollande.
                </p>
                <a
                    href="#"
                    class="px-6 bg-amber-400 hover:bg-transparent text-white hover:text-amber-400 font-semibold border-2 border-transparent hover:border-amber-400 rounded inline-block cursor-pointer"
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
              <h6 class="text-lg mb-2 font-semibold uppercase">L'usine Green Technology</h6>
            </div>

            <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
              Créée en 2007, GREEN TECHNOLOGY est une société agro-industrielle spécialisée dans l’élaboration et la commercialisation de supports de culture issus du mésocarpe de la noix de coco.
              L’exploitation de cette ressource naturelle, renouvelable, biodégradable, respectueuse de l’environnement, s’inscrit dans le cadre d’une politique de Développement Durable.
              GREEN TECHNOLOGY a mis au point une technique de production et propose une large gamme de produits parfaitement adaptés aux cultures hors sol.
            </p>
            <a href="#" class="font-bold text-gray-800 mt-8">
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
                  Utilisés dans la technique de culture en pots
                </p>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="pt-20 pb-48 bg-emerald-800">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center text-center mb-24">
          <div class="w-full lg:w-6/12 px-4">
            <h6 class="text-lg mb-2 font-semibold uppercase text-slate-100">Nos principaux produits</h6>
            <p class="font-light text-lg leading-relaxed m-4 text-slate-300">
              GREEN TECHNOLOGY est un producteur professionnel d’intrants utilisés dans l'horticulture
              et l'agriculture sous abris.
            </p>
          </div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="https://shtheme.org/demosd/agroly/wp-content/uploads/2020/12/gallery-3.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Ryan Tompson</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Web Developer
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="https://shtheme.org/demosd/agroly/wp-content/uploads/2020/12/gallery-3.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Romina Hadid</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Marketing Specialist
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="https://shtheme.org/demosd/agroly/wp-content/uploads/2020/12/gallery-3.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Alexa Smith</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  UI/UX Designer
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="https://shtheme.org/demosd/agroly/wp-content/uploads/2020/12/gallery-3.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Jenna Kardi</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Founder and CEO
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="relative py-20 bg-green-600">
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
            class="text-green fill-current"
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
                <i class="fas fa-rocket text-xl"></i>
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
                        ><i class="far fa-paper-plane"></i
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
    
    <section class="pt-20 pb-48">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center text-center mb-24">
          <div class="w-full lg:w-6/12 px-4">
            <h2 class="text-4xl font-semibold">Here are our heroes</h2>
            <p class="text-lg leading-relaxed m-4 text-gray-600">
              According to the National Oceanic and Atmospheric
              Administration, Ted, Scambos, NSIDClead scentist, puts the
              potentially record maximum.
            </p>
          </div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/team-1-800x800.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Ryan Tompson</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Web Developer
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/team-2-800x800.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Romina Hadid</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Marketing Specialist
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/team-3-800x800.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Alexa Smith</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  UI/UX Designer
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/team-4-470x470.png"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Jenna Kardi</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Founder and CEO
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pb-20 relative block bg-gray-900">
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
            class="text-gray-900 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
        <div class="flex flex-wrap text-center justify-center">
          <div class="w-full lg:w-6/12 px-4">
            <h2 class="text-4xl font-semibold text-white">Build something</h2>
            <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
              Put the potentially record low maximum sea ice extent tihs year
              down to low ice. According to the National Oceanic and
              Atmospheric Administration, Ted, Scambos.
            </p>
          </div>
        </div>
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
      </div>
    </section>
    <section class="relative block py-24 lg:pt-0 bg-gray-900">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
          <div class="w-full lg:w-6/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
            >
              <div class="flex-auto p-5 lg:p-10">
                <h4 class="text-2xl font-semibold">Laissez-nous un message</h4>
                <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                  Complete this form and we will get back to you in 24 hours.
                </p>
                <div class="relative w-full mb-3 mt-8">
                  <label
                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                    for="full-name"
                    >Full Name</label
                  ><input
                    type="text"
                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                    placeholder="Full Name"
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
                    placeholder="Type a message..."
                  ></textarea>
                </div>
                <div class="text-center mt-6">
                  <button
                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                    type="button"
                    style="transition: all 0.15s ease 0s;"
                  >
                    Send Message
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