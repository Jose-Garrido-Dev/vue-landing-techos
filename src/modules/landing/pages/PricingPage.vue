<template>
  <!-- Contenedor principal de la galería -->
  <section class="p-24 py-24 mx-auto max-w-7xl">
    <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
      <h1
        data-aos="fade-right"
        data-aos-once="true"
        class="my-4 text-5xl font-bold leading-tight text-blue-900"
      >
        <span class="text-yellow-500">Galeria</span> de imágenes
      </h1>
    </div>
  </section>

  <section class="w-full h-full select-none">
    <!-- Galería de imágenes -->
    <div class="max-w-6xl mx-auto">
      <!-- Reemplaza estas imágenes con las que tú necesites -->
      <ul class="grid grid-cols-2 gap-5 lg:grid-cols-5">
        <li v-for="(imgUrl, index) in images" :key="index">
          <img
            :src="imgUrl"
            @click="openImage(index)"
            class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
            alt="photo gallery image"
          />
        </li>
      </ul>
    </div>

    <!-- Modal con Teleport -->
    <teleport to="body">
      <div
        v-if="imageGalleryOpened"
        class="fixed inset-0 z-[99] flex items-center justify-center bg-black bg-opacity-50 select-none cursor-zoom-out"
        @click="closeImage"
      >
        <div class="relative flex items-center justify-center w-11/12 xl:w-4/5 h-11/12" @click.stop>
          <!-- Botón PREV -->
          <div
            class="absolute left-0 flex items-center justify-center text-white -translate-x-2 rounded-full cursor-pointer bg-white/10 w-14 h-14 hover:bg-white/20"
            @click="prevImage"
          >
            <svg
              class="w-6 h-6"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.75 19.5 8.25 12l7.5-7.5"
              />
            </svg>
          </div>

          <!-- Imagen principal (modal) -->
          <img
            v-if="imageGalleryOpened"
            :src="imageGalleryActiveUrl"
            class="object-contain object-center w-full h-full select-none cursor-zoom-out transition-transform duration-300"
            @click="closeImage"
            alt="Current image"
          />

          <!-- Botón NEXT -->
          <div
            class="absolute right-0 flex items-center justify-center text-white translate-x-2 rounded-full cursor-pointer bg-white/10 w-14 h-14 hover:bg-white/20"
            @click="nextImage"
          >
            <svg
              class="w-6 h-6"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8.25 4.5 15.75 12l-7.5 7.5"
              />
            </svg>
          </div>
        </div>
      </div>
    </teleport>
  </section>
</template>

<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue';

// Estado de la galería
const imageGalleryOpened = ref(false);
const imageGalleryActiveUrl = ref(null);
const imageGalleryImageIndex = ref(null);

// Ejemplo de imágenes (urls). Reemplaza con las tuyas.
const images = [
  'https://images.pexels.com/photos/2356059/pexels-photo-2356059.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
  'https://images.pexels.com/photos/3618162/pexels-photo-3618162.jpeg',
  'https://images.unsplash.com/photo-1689217634234-38efb49cb664?ixlib=rb-4.0.3&auto=format&fit=crop&w=1887&q=80',
  'https://images.unsplash.com/photo-1520350094754-f0fdcac35c1c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80',
  'https://cdn.devdojo.com/images/june2023/mountains-10.jpeg',
  'https://cdn.devdojo.com/images/june2023/mountains-06.jpeg',
  'https://images.pexels.com/photos/1891234/pexels-photo-1891234.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
  'https://images.unsplash.com/photo-1529655683826-aba9b3e77383?ixlib=rb-4.0.3&auto=format&fit=crop&w=1965&q=80',
  'https://images.pexels.com/photos/4256852/pexels-photo-4256852.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
  'https://images.unsplash.com/photo-1541795083-1b160cf4f3d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1887&q=80',
];

// Mostrar el modal con la imagen
function openImage(index) {
  imageGalleryImageIndex.value = index;
  imageGalleryActiveUrl.value = images[index];
  imageGalleryOpened.value = true;
}

// Cerrar el modal
function closeImage() {
  imageGalleryOpened.value = false;
  // Opcional: si quieres limpiar la url al cerrar:
  // setTimeout(() => {
  //   imageGalleryActiveUrl.value = null
  // }, 300)
}

// Ir a la siguiente imagen
function nextImage() {
  if (imageGalleryImageIndex.value === images.length - 1) {
    // Volver al inicio
    imageGalleryImageIndex.value = 0;
  } else {
    imageGalleryImageIndex.value++;
  }
  imageGalleryActiveUrl.value = images[imageGalleryImageIndex.value];
}

// Ir a la anterior imagen
function prevImage() {
  if (imageGalleryImageIndex.value === 0) {
    // Ir al final
    imageGalleryImageIndex.value = images.length - 1;
  } else {
    imageGalleryImageIndex.value--;
  }
  imageGalleryActiveUrl.value = images[imageGalleryImageIndex.value];
}

// Capturar teclas izquierda/derecha para next/prev
function handleKey(e) {
  if (!imageGalleryOpened.value) return;
  if (e.key === 'ArrowRight') {
    nextImage();
  } else if (e.key === 'ArrowLeft') {
    prevImage();
  } else if (e.key === 'Escape') {
    closeImage();
  }
}

// Añadir/eliminar listener global de teclado
onMounted(() => {
  window.addEventListener('keydown', handleKey);
});
onUnmounted(() => {
  window.removeEventListener('keydown', handleKey);
});
</script>

<style scoped>
/* Si necesitas animaciones personalizadas, agrégalas aquí */
</style>
