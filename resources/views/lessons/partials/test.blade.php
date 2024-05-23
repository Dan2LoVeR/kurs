<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tailwind CSS Scroll top to botton</title>

    <!-- Tailwind CSS -->
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />

    <!-- Alpine JS -->
    <script
      defer
      src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
  </head>

  <body class="bg-gray-100">
    <div
      x-data=""
      class="flex items-center justify-center h-screen bg-gray-200"
    >
      <main
        class="
          max-w-5xl
          p-10
          mx-auto
          mb-20
          leading-loose
          bg-white
          rounded-sm
          shadow-sm
          mt-36
          md:p-20
        "
      >
        <p class="mb-10 text-sm leading-relaxed text-justify">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis
          lobortis facilisis. Donec pharetra sodales felis. Curabitur convallis
          tortor erat, in imperdiet mi feugiat et. Nunc efficitur rhoncus nulla,
          non congue libero gravida et. Vivamus venenatis turpis consectetur
          auctor porta. Quisque venenatis feugiat elit, nec sollicitudin massa
          bibendum sit amet. Integer eget elit viverra, pellentesque neque et,
          sollicitudin velit.
        </p>

        <button
          class="
            p-6
            text-xl
            font-bold
            text-white
            uppercase
            transition
            duration-300
            bg-gray-900
            rounded-sm
            focus:outline-none
            hover:bg-gray-700
          "
          @click="window.scrollTo({ top: document.documentElement.clientHeight, behavior: 'smooth' })"
        >
          Scroll Bottom
        </button>
      </main>
    </div>

    <div class="flex flex-col items-center justify-center h-screen mb-screen">
      <div class="max-w-5xl p-8 bg-white shadow-md"
      
      x-data="{ currentScrollPosition: window.pageYOffset }"
      x-show="(currentScrollPosition != 0) ? true : false"
      x-transition:enter="transition ease-out duration-1000"
      x-transition:enter-start="opacity-0 transform -translate-y-48"
      x-transition:enter-end="opacity-100 transform translate-y-0"
      x-transition:leave="transition ease-in-out duration-500"
      x-transition:leave-start="opacity-100 transform translate-0 rotate-0"
      x-transition:leave-end="opacity-0 transform translate-y-4 opacity-0"
      >
        <p class="mb-10 text-sm leading-relaxed text-justify"
        @scroll.window="currentScrollPosition = window.pageYOffset">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis
          lobortis facilisis. Donec pharetra sodales felis. Curabitur convallis
          tortor erat, in imperdiet mi feugiat et. Nunc efficitur rhoncus nulla,
          non congue libero gravida et. Vivamus venenatis turpis consectetur
          auctor porta. Quisque venenatis feugiat elit, nec sollicitudin massa
          bibendum sit amet. Integer eget elit viverra, pellentesque neque et,
          sollicitudin velit.
        </p>
      </div>
    </div>
    <div class="h-screen w-screen bg-black"></div>
    <div
      class="fixed bottom-3 right-3 "
      x-data="{ currentScrollPosition: window.pageYOffset }"
      x-show="(currentScrollPosition != 0) ? true : false"
      x-transition:enter="transition ease-out duration-1000"
      x-transition:enter-start="opacity-0 transform -translate-y-48"
      x-transition:enter-end="opacity-100 transform translate-y-0"
      x-transition:leave="transition ease-in-out duration-500"
      x-transition:leave-start="opacity-100 transform translate-0 rotate-0"
      x-transition:leave-end="opacity-0 transform translate-y-4 rotate-180 opacity-0"
    >
      <button
        class="
          z-30
          p-3
          text-white
          transition
          duration-300
          ease-in-out
          bg-blue-600
          rounded-sm
          focus:outline-none
        "
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        @scroll.window="currentScrollPosition = window.pageYOffset"
      >
        Top
      </button>
    </div>
  </body>
</html>