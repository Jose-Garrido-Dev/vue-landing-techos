<template>
  <div class="flex flex-col h-screen m-6 mt-14">
    <div v-if="loading" class="spinner-container">
      <!-- Aquí puedes usar cualquier spinner CSS o componente de spinner -->
      <div class="spinner"></div>
    </div>

    <div v-else>
    <!-- NAVBAR -->
    <!-- Aplicamos sticky top-0 y un transform para deslizar la barra hacia arriba/abajo -->
    <nav
      :class="[
        'bg-white border-gray-200 dark:bg-gray-900',
        'fixed top-0 left-0 w-full z-50',
        'transition-transform duration-300', // Suaviza el movimiento
        isNavVisible ? 'translate-y-0' : '-translate-y-full',
      ]"
    >
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- LOGO -->
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="@/assets/img/logop.png" class="h-20" alt="Flowbite Logo" />
          <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
            Techumbres Chile
          </span> -->
        </a>

        <!-- BOTÓN HAMBURGUESA -->
        <button
          @click="toggleMenu"
          type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-expanded="isOpen"
        >
          <!-- Icono hamburguesa (si isOpen es false) -->
          <template v-if="!isOpen">
            <span class="sr-only">Open main menu</span>
            <svg
              class="w-5 h-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 17 14"
              aria-hidden="true"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15"
              />
            </svg>
          </template>
          <!-- Icono "X" (si isOpen es true) -->
          <template v-else>
            <span class="sr-only">Close main menu</span>
            <svg
              class="w-5 h-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              aria-hidden="true"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </template>
        </button>

        <!-- MENÚ RESPONSIVE -->
        <div
          :class="[isOpen ? 'block' : 'hidden', 'w-full md:block md:w-auto']"
          id="navbar-default"
          ref="menuRef"
        >
          <ul
            class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
          >
            <li>
              <RouterLink
                :to="{ name: 'home' }"
                active-class="text-blue-700 font-bold"
                exact-active-class="block py-2 px-3 text-white bg-blue-700 rounded
                                   md:bg-transparent md:text-blue-700 md:p-0
                                   dark:text-white md:dark:text-blue-500 md:hover:text-blue-800 hover:bg-blue-800"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                aria-current="page"
                @click.native="scrollToTop"
              >
                Home
              </RouterLink>
            </li>
            <li>
              <RouterLink
                to="/features"
                active-class="text-blue-700 font-bold"
                exact-active-class="block py-2 px-3 text-white bg-blue-700 rounded
                                   md:bg-transparent md:text-blue-700 md:p-0
                                   dark:text-white md:dark:text-blue-500 md:hover:text-blue-800 hover:bg-blue-800"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              @click.native="scrollToTop"
                >
                Nuestros Servicios
              </RouterLink>
            </li>
            <li>
              <RouterLink
                :to="'/pricing'"
                active-class="text-blue-700 font-bold"
                exact-active-class="block py-2 px-3 text-white bg-blue-700 rounded
                                   md:bg-transparent md:text-blue-700 md:p-0
                                   dark:text-white md:dark:text-blue-500
                                   md:hover:text-blue-800 hover:bg-blue-800"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              @click.native="scrollToTop"
                >
                Galería
              </RouterLink>
            </li>
            <li>
              <RouterLink
                to="contact"
                active-class="text-blue-700 font-bold"
                exact-active-class="block py-2 px-3 text-white bg-blue-700 rounded
                                   md:bg-transparent md:text-blue-700 md:p-0
                                   dark:text-white md:dark:text-blue-500
                                   md:hover:text-blue-800 hover:bg-blue-800"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              @click.native="scrollToTop"
                >
                Contáctanos
              </RouterLink>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main -->
    <main class="flex-1">
      <router-view />
    </main>

      <whats-app />

    <!-- Footer -->
    <footer class="w-full bg-gray-900 mt-20">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!--Grid-->
        <div class="py-16 flex justify-between items-center flex-col gap-8 lg:flex-row">
            <a href="#" class="flex justify-center space-x-3 rtl:space-x-reverse">
              <img src="@/assets/img/logof.png" class="h-24" alt="Flowbite Logo" />
          </a>
          <ul
            class="text-lg text-center sm:flex items-cente justify-center gap-14 lg:gap-10 xl:gap-14 transition-all duration-500"
          >
            <RouterLink
              :to="{ name: 'home' }"
              active-class="text-blue-700 font-bold"
              exact-active-class="block py-2 px-3 text-white bg-blue-700 rounded
                                   md:bg-transparent md:text-blue-700 md:p-0
                                   dark:text-white md:dark:text-blue-500 md:hover:text-blue-800 hover:bg-blue-800"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:p-0 dark:text-white md:dark:hover:text-white-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              aria-current="page"
              @click.native="scrollToTop"
            >
              Home
            </RouterLink>
            <RouterLink
              to="/features"
              active-class="text-blue-700 font-bold"
              exact-active-class="block py-2 px-3 text-white bg-blue-700 rounded
                                   md:bg-transparent md:text-blue-700 md:p-0
                                   dark:text-white md:dark:text-blue-500 md:hover:text-blue-800 hover:bg-blue-800"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:p-0 dark:text-white md:dark:hover:text-white-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              aria-current="page"
              @click.native="scrollToTop"
            >
              Nuestros Servicios
            </RouterLink>
            <RouterLink
              :to="'/pricing'"
              active-class="text-blue-700 font-bold"
              exact-active-class="block py-2 px-3 text-white bg-blue-700 rounded
                                   md:bg-transparent md:text-blue-700 md:p-0
                                   dark:text-white md:dark:text-blue-500 md:hover:text-blue-800 hover:bg-blue-800"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:p-0 dark:text-white md:dark:hover:text-white-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              aria-current="page"
              @click.native="scrollToTop"
            >
              Galería
            </RouterLink>
            <RouterLink
              to="contact"
              active-class="text-blue-700 font-bold"
              exact-active-class="block py-2 px-3 text-white bg-blue-700 rounded
                                   md:bg-transparent md:text-blue-700 md:p-0
                                   dark:text-white md:dark:text-blue-500 md:hover:text-blue-800 hover:bg-blue-800"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:p-0 dark:text-white md:dark:hover:text-white-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              aria-current="page"
              @click.native="scrollToTop"
            >
              Contáctanos
            </RouterLink>
          </ul>
          <div class="flex space-x-4 sm:justify-center">

            <a
              href="javascript:;"
              class="w-9 h-9 rounded-full bg-gray-800 flex justify-center items-center hover:bg-indigo-600"
            >
                <svg
                  class="w-[1.25rem] h-[1.125rem] text-white"
                  viewBox="0 0 15 15"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M4.70975 7.93663C4.70975 6.65824 5.76102 5.62163 7.0582 5.62163C8.35537 5.62163 9.40721 6.65824 9.40721 7.93663C9.40721 9.21502 8.35537 10.2516 7.0582 10.2516C5.76102 10.2516 4.70975 9.21502 4.70975 7.93663ZM3.43991 7.93663C3.43991 9.90608 5.05982 11.5025 7.0582 11.5025C9.05658 11.5025 10.6765 9.90608 10.6765 7.93663C10.6765 5.96719 9.05658 4.37074 7.0582 4.37074C5.05982 4.37074 3.43991 5.96719 3.43991 7.93663ZM9.97414 4.22935C9.97408 4.39417 10.0236 4.55531 10.1165 4.69239C10.2093 4.82946 10.3413 4.93633 10.4958 4.99946C10.6503 5.06259 10.8203 5.07916 10.9844 5.04707C11.1484 5.01498 11.2991 4.93568 11.4174 4.81918C11.5357 4.70268 11.6163 4.55423 11.649 4.39259C11.6817 4.23095 11.665 4.06339 11.6011 3.91109C11.5371 3.7588 11.4288 3.6286 11.2898 3.53698C11.1508 3.44536 10.9873 3.39642 10.8201 3.39635H10.8197C10.5955 3.39646 10.3806 3.48424 10.222 3.64043C10.0635 3.79661 9.97434 4.00843 9.97414 4.22935ZM4.21142 13.5892C3.52442 13.5584 3.15101 13.4456 2.90286 13.3504C2.57387 13.2241 2.33914 13.0738 2.09235 12.8309C1.84555 12.588 1.69278 12.3569 1.56527 12.0327C1.46854 11.7882 1.3541 11.4201 1.32287 10.7431C1.28871 10.0111 1.28189 9.79119 1.28189 7.93669C1.28189 6.08219 1.28927 5.86291 1.32287 5.1303C1.35416 4.45324 1.46944 4.08585 1.56527 3.84069C1.69335 3.51647 1.84589 3.28513 2.09235 3.04191C2.3388 2.79869 2.57331 2.64813 2.90286 2.52247C3.1509 2.42713 3.52442 2.31435 4.21142 2.28358C4.95417 2.24991 5.17729 2.24319 7.0582 2.24319C8.9391 2.24319 9.16244 2.25047 9.90582 2.28358C10.5928 2.31441 10.9656 2.42802 11.2144 2.52247C11.5434 2.64813 11.7781 2.79902 12.0249 3.04191C12.2717 3.2848 12.4239 3.51647 12.552 3.84069C12.6487 4.08513 12.7631 4.45324 12.7944 5.1303C12.8285 5.86291 12.8354 6.08219 12.8354 7.93669C12.8354 9.79119 12.8285 10.0105 12.7944 10.7431C12.7631 11.4201 12.6481 11.7881 12.552 12.0327C12.4239 12.3569 12.2714 12.5882 12.0249 12.8309C11.7784 13.0736 11.5434 13.2241 11.2144 13.3504C10.9663 13.4457 10.5928 13.5585 9.90582 13.5892C9.16306 13.6229 8.93994 13.6296 7.0582 13.6296C5.17645 13.6296 4.95395 13.6229 4.21142 13.5892ZM4.15307 1.03424C3.40294 1.06791 2.89035 1.18513 2.4427 1.3568C1.9791 1.53408 1.58663 1.77191 1.19446 2.1578C0.802277 2.54369 0.56157 2.93108 0.381687 3.38797C0.207498 3.82941 0.0885535 4.3343 0.0543922 5.07358C0.0196672 5.81402 0.0117188 6.05074 0.0117188 7.93663C0.0117188 9.82252 0.0196672 10.0592 0.0543922 10.7997C0.0885535 11.539 0.207498 12.0439 0.381687 12.4853C0.56157 12.9419 0.802334 13.3297 1.19446 13.7155C1.58658 14.1012 1.9791 14.3387 2.4427 14.5165C2.89119 14.6881 3.40294 14.8054 4.15307 14.839C4.90479 14.8727 5.1446 14.8811 7.0582 14.8811C8.9718 14.8811 9.212 14.8732 9.96332 14.839C10.7135 14.8054 11.2258 14.6881 11.6737 14.5165C12.137 14.3387 12.5298 14.1014 12.9219 13.7155C13.3141 13.3296 13.5543 12.9419 13.7347 12.4853C13.9089 12.0439 14.0284 11.539 14.062 10.7997C14.0962 10.0587 14.1041 9.82252 14.1041 7.93663C14.1041 6.05074 14.0962 5.81402 14.062 5.07358C14.0278 4.33424 13.9089 3.82913 13.7347 3.38797C13.5543 2.93135 13.3135 2.5443 12.9219 2.1578C12.5304 1.7713 12.137 1.53408 11.6743 1.3568C11.2258 1.18513 10.7135 1.06735 9.96388 1.03424C9.21256 1.00058 8.97236 0.992188 7.05876 0.992188C5.14516 0.992188 4.90479 1.00002 4.15307 1.03424Z"
                    fill="currentColor"
                  />
                </svg>
            </a>
            <a
              href="javascript:;"
              class="w-9 h-9 rounded-full bg-gray-800 flex justify-center items-center hover:bg-indigo-600"
            >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              class="w-5 h-5 text-white"
              fill="white"
                >
                <path
                  d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.81v-9.294H9.692v-3.622h3.118V8.413c0-3.1 1.893-4.788 4.656-4.788 1.324 0 2.462.099 2.795.143v3.243h-1.917c-1.504 0-1.796.715-1.796 1.762v2.311h3.587l-.467 3.622h-3.12V24h6.11C23.407 24 24 23.407 24 22.676V1.325C24 .593 23.407 0 22.675 0z"
                />
            </svg>

            </a>
            <a
              href="javascript:;"
              class="w-9 h-9 rounded-full bg-gray-800 flex justify-center items-center hover:bg-indigo-600"
            >
              <svg
                class="w-[1.25rem] h-[0.875rem] text-white"
                viewBox="0 0 16 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M13.9346 1.13529C14.5684 1.30645 15.0665 1.80588 15.2349 2.43896C15.5413 3.58788 15.5413 5.98654 15.5413 5.98654C15.5413 5.98654 15.5413 8.3852 15.2349 9.53412C15.0642 10.1695 14.5661 10.669 13.9346 10.8378C12.7886 11.1449 8.19058 11.1449 8.19058 11.1449C8.19058 11.1449 3.59491 11.1449 2.44657 10.8378C1.81277 10.6666 1.31461 10.1672 1.14622 9.53412C0.839844 8.3852 0.839844 5.98654 0.839844 5.98654C0.839844 5.98654 0.839844 3.58788 1.14622 2.43896C1.31695 1.80353 1.81511 1.30411 2.44657 1.13529C3.59491 0.828125 8.19058 0.828125 8.19058 0.828125C8.19058 0.828125 12.7886 0.828125 13.9346 1.13529ZM10.541 5.98654L6.72178 8.19762V3.77545L10.541 5.98654Z"
                  fill="currentColor"
                />
              </svg>
            </a>
          </div>
        </div>
        <!--Grid-->
        <div class="py-7 border-t border-gray-700">
          <div class="flex items-center justify-center">
            <span class="text-gray-400"
              >©<a href="https://pagedone.io/">Techumbres Chile</a> 2024.</span
            >
          </div>
          <span class="text-gray-400 flex justify-center">
              Hecho por José Garrido
            </span>
        </div>
      </div>
    </footer>
  </div>
  </div>
</template>

<script lang="ts">
import { ref, defineComponent, onMounted, onUnmounted, watch } from 'vue';


export default defineComponent({
  setup() {
    const isOpen = ref(false); // controla menú hamburguesa
    const menuRef = ref<HTMLElement | null>(null);

    // Para mostrar/ocultar la navbar al subir/bajar scroll
    const isNavVisible = ref(true);
    const lastScrollTop = ref(0);

    function toggleMenu() {
      isOpen.value = !isOpen.value;
      console.log('isOpen =>', isOpen.value);
    }

    // Cerrar menú si clic fuera
    function handleClickOutside(event: MouseEvent) {
      if (!isOpen.value) return;
      const menuEl = menuRef.value;
      if (menuEl && !menuEl.contains(event.target as Node)) {
        isOpen.value = false;
      }
    }

    // Detectar dirección scroll (arriba = mostrar / abajo = ocultar)
    function handleScroll() {
      const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
      if (currentScroll > lastScrollTop.value) {
        // Scrolleando hacia abajo => ocultar navbar
        isNavVisible.value = false;
      } else {
        // Scrolleando hacia arriba => mostrar navbar
        isNavVisible.value = true;
      }
      // Actualizamos el último scroll
      lastScrollTop.value = Math.max(currentScroll, 0);

      // Si el menú hamburguesa está abierto, ciérralo al hacer scroll
      if (isOpen.value) {
        isOpen.value = false;
      }
    }

        // Método para desplazarse al principio de la página
        function scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }


    // Observamos cuándo se abre/cierra el menú
    // watch(isOpen, (newVal) => {
    //   if (newVal) {
    //     document.addEventListener('click', handleClickOutside);
    //     // Cada vez que se abra, también podrías pausar el handleScroll si deseas
    //   } else {
    //     document.removeEventListener('click', handleClickOutside);
    //   }
    // });

    // Iniciamos el listener de scroll al montar
    onMounted(() => {
      window.addEventListener('scroll', handleScroll);
    });

    // Al desmontar, removemos el listener de scroll
    onUnmounted(() => {
      window.removeEventListener('scroll', handleScroll);
    });

    return {
      isOpen,
      toggleMenu,
      menuRef,
      isNavVisible,
      scrollToTop
    };
  },
  data() {
    return {
      loading: true,
    };
  },
  mounted() {
    // Simula una carga de contenido
    setTimeout(() => {
      this.loading = false;
    }, 2000); // Puedes ajustar el tiempo según tus necesidades
  },
});
</script>

<style scoped>
.spinner-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgba(255, 255, 255, 0.8); /* Fondo semitransparente */
  z-index: 9999; /* Asegúrate de que el spinner esté por encima de todo */
}

.spinner {
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

