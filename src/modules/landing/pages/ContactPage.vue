<template>
  <!-- component -->
  <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
    <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#3f65b8] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Contáctanos</h2>
    <p class="mt-2 text-lg/8 text-gray-600">Envíanos un mensaje y en breve nos comunicaremos contigo.</p>
  </div>
  <form @submit.prevent="submitForm" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
      <div class="sm:col-span-2">
        <label for="first-name" class="block text-sm/6 font-semibold text-gray-900">Nombre Completo</label>
        <div class="mt-2.5">
          <input v-model="firstName" type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
        </div>
      </div>
      
      <div class="sm:col-span-2">
        <label for="address" class="block text-sm/6 font-semibold text-gray-900">Dirección</label>
        <div class="mt-2.5">
          <input v-model="address" type="text" name="address" id="address" autocomplete="organization" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
        <div class="mt-2.5">
          <input v-model="email" type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="phone-number" class="block text-sm/6 font-semibold text-gray-900">Teléfono de contacto</label>
        <div class="mt-2.5">
          <div class="flex rounded-md bg-white outline outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">

            <input v-model="phoneNumber" type="text" name="phone-number" id="phone-number" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" placeholder="+569 1234 5678">
          </div>
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="message" class="block text-sm/6 font-semibold text-gray-900">Mensaje</label>
        <div class="mt-2.5">
          <textarea v-model="message" name="message" id="message" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"></textarea>
        </div>
      </div>

    </div>
    <div class="mt-10">
      <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar</button>
    </div>
  </form>
</div>


</template>

<script>
import Swal from "sweetalert2";

export default {
  methods: {
    async submitForm() {
      const formData = new FormData();
      formData.append("first-name", this.firstName);
      formData.append("address", this.address);
      formData.append("email", this.email);
      formData.append("phone-number", this.phoneNumber);
      formData.append("message", this.message);

      try {
        const response = await fetch("https://techumbresbyb.cl/api/send_email.php", {
          method: "POST",
          body: formData,
        });

        const result = await response.json();
        if (result.success) {
          Swal.fire({
            icon: "success",
            title: "¡Mensaje enviado con éxito!",
            text: "Nos pondremos en contacto contigo pronto.",
          });
          this.resetForm();
        } else {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: result.message || "Hubo un problema al enviar el correo.",
          });
        }
      } catch (error) {
        console.error("Error en el envío:", error);
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Hubo un problema al enviar el correo.",
        });
      }
    },
    resetForm() {
      this.firstName = "";
      this.address = "";
      this.email = "";
      this.phoneNumber = "";
      this.message = "";
    },
  },
  data() {
    return {
      firstName: "",
      address: "",
      email: "",
      phoneNumber: "",
      message: "",
    };
  },
};
</script>
