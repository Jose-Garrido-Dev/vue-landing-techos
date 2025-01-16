<script setup lang="ts">
import TestimonialsPage from '../common/components/TestimonialsPage.vue';

</script>

<template>
  <div class="bg-cream">
    <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row items-start w-full mt-14">
      <!--Left Col-->
      <div
        class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0"
      >
        <h1
          data-aos="fade-right"
          data-aos-once="true"
          class="my-4 text-5xl font-bold leading-tight text-darken"
        >
          <span class="text-yellow-500">Especialistas</span> en techos
        </h1>
        <p
          data-aos="fade-down"
          data-aos-once="true"
          data-aos-delay="300"
          class="hidden leading-normal text-2xl mb-8 lg:block font-bold text-white"
        >
          Profesionales en Construcción, Reparación, Mantención y Cambio de todo Tipo de Techos,
          Techumbres y Cubiertas en todo Chile.
        </p>
        <div
          data-aos="fade-up"
          data-aos-once="true"
          data-aos-delay="700"
          class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5"
        >
          <router-link
            to="/contact"
            class="lg:mx-0 bg-yellow-500 text-white text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out"
          >
            Contáctanos
          </router-link>
        </div>
      </div>
      <!--Right Col-->
      <div class="w-full lg:w-6/12 lg:-mt-10 relative" id="girl">
        <img
          data-aos="fade-up"
          data-aos-once="true"
          class="w-2/4 mx-auto 2xl:-mb-20"
          src="@/assets/img/header-principal.png"
        />
        <!-- calendar -->
        <div
          data-aos="fade-up"
          data-aos-delay="300"
          data-aos-once="true"
          class="absolute top-20 -left-6 sm:top-32 sm:left-10 md:top-40 md:left-16 lg:-left-0 lg:top-52 floating-4"
        >
          <img
            class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16"
            src="@/assets/img/header-animate-1.png"
          />
        </div>
        <!-- red -->
        <div
          data-aos="fade-up"
          data-aos-delay="400"
          data-aos-once="true"
          class="absolute top-20 right-10 sm:right-24 sm:top-28 md:top-36 md:right-32 lg:top-32 lg:right-16 floating"
        >
          <svg
            class="h-16 sm:h-24"
            viewBox="0 0 149 149"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g filter="url(#filter0_d)">
              <rect x="40" y="32" width="69" height="69" rx="14" fill="#F3627C" />
            </g>
            <rect x="51.35" y="44.075" width="47.3" height="44.85" rx="8" fill="white" />
            <path
              d="M74.5 54.425V78.575"
              stroke="#F25471"
              stroke-width="4"
              stroke-linecap="round"
            />
            <path
              d="M65.875 58.7375L65.875 78.575"
              stroke="#F25471"
              stroke-width="4"
              stroke-linecap="round"
            />
            <path
              d="M83.125 63.9125V78.575"
              stroke="#F25471"
              stroke-width="4"
              stroke-linecap="round"
            />
            <defs>
              <filter
                id="filter0_d"
                x="0"
                y="0"
                width="149"
                height="149"
                filterUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB"
              >
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feColorMatrix
                  in="SourceAlpha"
                  type="matrix"
                  values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                />
                <feOffset dy="8" />
                <feGaussianBlur stdDeviation="20" />
                <feColorMatrix
                  type="matrix"
                  values="0 0 0 0 0.825 0 0 0 0 0.300438 0 0 0 0 0.396718 0 0 0 0.26 0"
                />
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
              </filter>
            </defs>
          </svg>
        </div>
        <!-- ux class -->
        <div
          data-aos="fade-up"
          data-aos-delay="500"
          data-aos-once="true"
          class="absolute bottom-14 -left-4 sm:left-2 sm:bottom-20 lg:bottom-24 lg:-left-4 floating"
        >
          <img
            class="bg-white bg-opacity-80 rounded-lg h-20 sm:h-28"
            src="@/assets/img/header-animate-2.png"
            alt=""
          />
        </div>
        <!-- congrats -->
        <div
          data-aos="fade-up"
          data-aos-delay="600"
          data-aos-once="true"
          class="absolute bottom-20 md:bottom-48 lg:bottom-52 -right-6 lg:right-8 floating-4"
        >
          <img
            class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16"
            src="@/assets/img/header-animate-3.png"
            alt=""
          />
        </div>
      </div>
    </div>
    <div class="text-white -mt-14 sm:-mt-24 lg:-mt-36 z-40 relative">
      <svg
        class="xl:h-40 xl:w-full"
        data-name="Layer 1"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1200 120"
        preserveAspectRatio="none"
      >
        <path
          d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
          fill="currentColor"
        ></path>
      </svg>
      <div class="w-full h-20 -mt-px" style="background-color: white"></div>
    </div>
  </div>

  <!-- container -->
  <div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">
    <!-- All-In-One Cloud Software. -->
    <div data-aos="flip-up" class="max-w-xl mx-auto text-center mt-24">
      <h1 class="font-bold text-darken my-3 text-4xl">
        Quienes <span class="text-yellow-500">Sómos?</span>
      </h1>
      <p class="leading-relaxed text-gray-500">
        Techumbres Chile es una empresa especialista, que cuenta con una amplia experiencia en
        mantención, cambios y reparación de todo tipo de techumbres. La entidad que desde 2014 da
        soluciones confiables y duraderas a grandes empresas, instituciones estatales, condóminos y
        comunidades, además de clientes particulares.
      </p>
    </div>
    <!-- card -->
    <div class="grid md:grid-cols-3 gap-14 md:gap-5 mt-20">
      <div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl mb-6">
        <div
          style="background: #29b9e7"
          class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12"
        >
          <i class="fa-solid fa-wrench w-10 h-10 flex justify-center items-center text-white"></i>
        </div>
        <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Reparación y Mantención</h1>
        <p class="px-4 text-gray-500">
          Diagnosticamos y corregimos daños para prolongar la vida útil de tus techos.
        </p>
      </div>
      <div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl mb-6">
        <div
          style="background: #f48c06"
          class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12"
        >
          <i class="fa-solid fa-house-user w-6 h-6 text-white"></i>
        </div>
        <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Cambio de Tejas Antiguas</h1>
        <p class="px-4 text-gray-500">
          Sustituimos tejas dañadas o desgastadas, mejorando seguridad y estética.
        </p>
      </div>
      <div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl mb-6">
        <div
          style="background: #29b9e7"
          class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12"
        >
          <i class="fa-solid fa-house-flood-water w-6 h-6 text-white"></i>
        </div>
        <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Impermeabiliza Tu Techo</h1>
        <p class="px-4 text-gray-500">
          Prevenimos filtraciones y humedad, sellando por completo la superficie.
        </p>
      </div>
      <div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl">
        <div
          style="background: #29b9e7"
          class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12"
        >
          <i class="fa-solid fa-house-signal w-6 h-6 text-white"></i>
        </div>
        <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Aislación Térmica Plena</h1>
        <p class="px-4 text-gray-500">
          Instalamos sistemas que regulan temperatura y optimizan el confort interior.
        </p>
      </div>
      <div
        data-aos="fade-up"
        data-aos-delay="150"
        class="bg-white shadow-xl p-6 text-center rounded-xl"
      >
        <div
          style="background: #f48c06"
          class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12"
        >
          <i class="fa-solid fa-panorama w-6 h-6 text-white"></i>
        </div>
        <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Diseño y Obra para Techos</h1>
        <p class="px-4 text-gray-500">
          Creamos techumbres a medida, garantizando funcionalidad y resistencia.
        </p>
      </div>
      <div
        data-aos="fade-up"
        data-aos-delay="300"
        class="bg-white shadow-xl p-6 text-center rounded-xl"
      >
        <div
          style="background: #29b9e7"
          class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12"
        >
          <i class="fa-solid fa-scale-balanced w-6 h-6 text-white"></i>
        </div>
        <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken lg:h-14 pt-3">
          Asesoría y Cálculo Justo
        </h1>
        <p class="px-4 text-gray-500">
          Ofrecemos estudios técnicos y estimaciones precisas para cada proyecto.
        </p>
      </div>
    </div>

    <div class="sm:flex items-center sm:space-x-8 mt-36">
      <div data-aos="fade-right" class="sm:w-1/2 relative">
        <div
          class="bg-yellow-500 rounded-full absolute w-12 h-12 z-0 -left-4 -top-3 animate-pulse"
        ></div>
        <h1 class="font-semibold text-2xl relative z-50 text-darken lg:pr-10">
          Trabajando en
          <span class="text-yellow-500">altura</span>
        </h1>
        <p class="py-5 lg:pr-32">
          Descubre cómo nuestro equipo instala techumbres en alturas desafiantes, siguiendo
          rigurosos protocolos de seguridad y utilizando materiales de primera calidad. A lo largo
          del video, aprenderás consejos esenciales para elegir la estructura adecuada, reforzar la
          cubierta y optimizar la durabilidad de cada proyecto. ¡Acompáñanos y domina las técnicas
          más efectivas para construir y reparar techos con resultados profesionales!
        </p>
      </div>
      <div data-aos="fade-left" class="sm:w-1/2 relative mt-10 sm:mt-0">
        <div
          style="background: #23bdee"
          class="floating w-24 h-24 absolute rounded-lg z-0 -top-3 -left-3"
        ></div>
        <img class="rounded-xl z-40 relative" src="@/assets/img/section-video.png" alt="" />
        <a
          href="https://www.youtube.com/watch?v=r82ObkcH3v0 "
          class="bg-white w-14 h-14 rounded-full flex items-center justify-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out z-50"
        >
          <svg
            class="w-5 h-5 ml-1"
            viewBox="0 0 24 28"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M22.5751 12.8097C23.2212 13.1983 23.2212 14.135 22.5751 14.5236L1.51538 27.1891C0.848878 27.5899 5.91205e-07 27.1099 6.25202e-07 26.3321L1.73245e-06 1.00123C1.76645e-06 0.223477 0.848877 -0.256572 1.51538 0.14427L22.5751 12.8097Z"
              fill="#23BDEE"
            />
          </svg>
        </a>
        <div
          class="bg-yellow-500 w-40 h-40 floating absolute rounded-lg z-10 -bottom-3 -right-3"
        ></div>
      </div>
    </div>

    <div class="md:flex mt-40 md:space-x-10 items-start">
      <div data-aos="fade-down" class="md:w-7/12 relative">
        <div
          style="background: #33efa0"
          class="w-32 h-32 rounded-full absolute z-0 left-4 -top-12 animate-pulse"
        ></div>
        <div
          style="background: #33d9ef"
          class="w-5 h-5 rounded-full absolute z-0 left-36 -top-12 animate-ping"
        ></div>
        <img class="relative z-50 floating" src="@/assets/img/home-4.png" alt="" />
        <div
          style="background: #5b61eb"
          class="w-36 h-36 rounded-full absolute z-0 right-16 -bottom-1 animate-pulse"
        ></div>
        <div
          style="background: #f56666"
          class="w-5 h-5 rounded-full absolute z-0 right-52 bottom-1 animate-ping"
        ></div>
      </div>
      <div data-aos="fade-down" class="md:w-5/12 mt-20 md:mt-0 text-gray-500">
        <h1 class="text-2xl font-semibold text-darken lg:pr-40">
          <span class="text-yellow-500">Estamos comprometidos</span> para brindar el mejor servicio
          posible
        </h1>
        <div class="flex items-center space-x-5 my-5">
          <div
            class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center"
          >
            <svg class="w-4 h-4" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="11.8182" height="11.8182" rx="2" fill="#2F327D" />
              <rect y="14.1816" width="11.8182" height="11.8182" rx="2" fill="#2F327D" />
              <rect x="14.7727" width="11.8182" height="11.8182" rx="2" fill="#2F327D" />
              <rect
                x="14.7727"
                y="14.1816"
                width="11.8182"
                height="11.8182"
                rx="2"
                fill="#F48C06"
              />
            </svg>
          </div>
          <p>Cuidamos cada detalle para asegurar resultados de la más alta excelencia.</p>
        </div>
        <div class="flex items-center space-x-5 my-5">
          <div
            class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center"
          >
            <svg class="w-4 h-4" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="8" y="6" width="20" height="20" rx="2" fill="#2F327D" />
              <rect width="21.2245" height="21.2245" rx="2" fill="#F48C06" />
            </svg>
          </div>
          <p>
            Fomentamos la confianza mediante la transparencia y la responsabilidad en cada proyecto.
          </p>
        </div>
        <div class="flex items-center space-x-5 my-5">
          <div
            class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center"
          >
            <svg class="w-4 h-4" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M4.5 11.375C6.15469 11.375 7.5 9.91758 7.5 8.125C7.5 6.33242 6.15469 4.875 4.5 4.875C2.84531 4.875 1.5 6.33242 1.5 8.125C1.5 9.91758 2.84531 11.375 4.5 11.375ZM25.5 11.375C27.1547 11.375 28.5 9.91758 28.5 8.125C28.5 6.33242 27.1547 4.875 25.5 4.875C23.8453 4.875 22.5 6.33242 22.5 8.125C22.5 9.91758 23.8453 11.375 25.5 11.375ZM27 13H24C23.175 13 22.4297 13.3605 21.8859 13.9445C23.775 15.0668 25.1156 17.093 25.4062 19.5H28.5C29.3297 19.5 30 18.7738 30 17.875V16.25C30 14.4574 28.6547 13 27 13ZM15 13C17.9016 13 20.25 10.4559 20.25 7.3125C20.25 4.16914 17.9016 1.625 15 1.625C12.0984 1.625 9.75 4.16914 9.75 7.3125C9.75 10.4559 12.0984 13 15 13ZM18.6 14.625H18.2109C17.2359 15.1328 16.1531 15.4375 15 15.4375C13.8469 15.4375 12.7688 15.1328 11.7891 14.625H11.4C8.41875 14.625 6 17.2453 6 20.475V21.9375C6 23.2832 7.00781 24.375 8.25 24.375H21.75C22.9922 24.375 24 23.2832 24 21.9375V20.475C24 17.2453 21.5812 14.625 18.6 14.625ZM8.11406 13.9445C7.57031 13.3605 6.825 13 6 13H3C1.34531 13 0 14.4574 0 16.25V17.875C0 18.7738 0.670312 19.5 1.5 19.5H4.58906C4.88438 17.093 6.225 15.0668 8.11406 13.9445Z"
                fill="#2F327D"
              />
            </svg>
          </div>
          <p>
            Aplicamos nuevas tecnologías y soluciones creativas para optimizar nuestros servicios.
          </p>
        </div>
      </div>
    </div>

    <!-- Tools For Teachers And Learners -->
    <div class="flex flex-col md:flex-row items-center md:space-x-10 mt-16">
      <div data-aos="fade-right" class="md:w-1/2 lg:pl-14">
        <h1 class="text-darken font-semibold text-3xl lg:pr-56">
          <span class="text-yellow-500">Nuestro</span> Compromiso
        </h1>
        <p class="text-gray-500 my-4 lg:pr-32">
          Nos esforzamos por entregar soluciones a la medida de los requerimientos de cada uno de
          nuestros clientes. Nuestros principales servicios son: Construcción, Cambio, Mantención y
          Reparación de todo tipo de Cubiertas, además de Pintura Interior y Exterior.
        </p>
      </div>
      <img data-aos="fade-left" class="md:w-1/2" src="@/assets/img/our-compromisse.png" />
    </div>

    <!-- TESTIMONIAL -->

    <TestimonialsPage />


  </div>

  <!-- trusted by -->
  <div class="max-w-4xl mx-auto">
    <h1 class="text-center mb-3 text-gray-400 font-medium">
      Más de 100 clientes han confiado en nosotros
    </h1>
    <div class="grid grid-cols-3 lg:grid-cols-6 gap-4 justify-items-center">
      <img class="h-7" src="@/assets/img/company/google.svg" />
      <img class="h-7" src="@/assets/img/company/netflix.svg" />
      <img class="h-7" src="@/assets/img/company/airbnb.svg" />
      <img class="h-7 transform translate-y-2" src="@/assets/img/company/amazon.svg" />
      <img class="h-7" src="@/assets/img/company/facebook.svg" />
      <img class="h-7" src="@/assets/img/company/grab.svg" />
    </div>
  </div>
</template>

<style scoped>
/*primary color*/
.bg-cream {
  background-image: linear-gradient(90deg, #74ebd5 0%, #9face6 100%);
}

/*font*/
body {
  font-family: 'Poppins', sans-serif;
}

.bg-yellow-500 {
  background-color: #f48c06;
}
.text-yellow-500 {
  color: #f48c06;
}
.floating {
  animation-name: floating;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
}
@keyframes floating {
  0% {
    transform: translate(0, 0px);
  }
  50% {
    transform: translate(0, 8px);
  }
  100% {
    transform: translate(0, -0px);
  }
}
.floating-4 {
  animation-name: floating;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
}
@keyframes floating-4 {
  0% {
    transform: translate(0, 0px);
  }
  50% {
    transform: translate(0, 8px);
  }
  100% {
    transform: translate(0, -0px);
  }
}
.text-darken {
  color: #2f327d;
}
</style>


