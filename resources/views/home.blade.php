<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintar Path ⸺ Solusi Belajar IT</title>
    <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.ico') }}" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" /> -->
  </head>
  <body class="mt-3 bg-white dark:bg-gray-900">
    <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-[-1]"></div>
    <!-- Navbar Mulai-->
    <div id="app">
      <x-navbar />
    </div>  
    <!-- Navbar Selesai -->

    <!-- Jumbotron 1 Mulai-->
    <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]" style="margin-top: 65px">
      <div class="px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
        <div class="flex flex-col justify-center">
          <div style="margin-top: 100px">
            <h1 class="section-title mb-4 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white">Raih Masa Depan bersama <span class="text-blue-600 dark:text-blue-500">Pintar Path</span></h1>
            <p class="section-content font-normal text-gray-500 lg:text-xl dark:text-gray-400 md:text-4xl">
              Kami berfokus pada teknologi, inovasi, dan pembelajaran dapat membuka nilai jangka panjang dan mendorong pertumbuhan ekonomi melalui kursus IT online.
            </p>
            <div class="section-title flex flex-col items-left lg:items-start gap-6 lg:flex-row mt-8">
              <button type="button" class="flex items-center justify-center font-medium disabled:opacity-80 gap-2 text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 px-3 py-3 mt-1" style="width: 150px; font-size:18px; border-radius:10px;">
                <a href="/roadmap">
                  Road Map
                </a>
              </button>              
              <div class="hidden lg:block border-r dark:border-white border-gray-900  " style="height:65px;"></div>
              <div class="grid text-center lg:text-left">
                <div class="flex flex-col items-left lg:items-start">
                  <div class="flex justify-left lg:justify-start">
                    <ul class="testi">
                      <li class="testimoni border dark:border-white border-gray-900"></li>
                      <li class="testimoni border dark:border-white border-gray-900"></li>
                      <li class="testimoni border dark:border-white border-gray-900"></li>
                      <li class="testimoni border dark:border-white border-gray-900"></li>
                    </ul>
                  </div>
                </div>
                <p class="font-medium text-gray-900 dark:text-white text-left">Bergabunglah dengan<span class="font-extrabold dark:text-white text-gray-900"> 90 Ribu+</span> Pelajar di Pintar Path</p>
              </div>
            </div>                
          </div>
        </div>
        <div class="lg:mt-100 sm:mt-50">
          <img src="{{ asset('images/thumbnail.jpg')}}" alt="" class="section-image mx-auto w-full lg:max-w-xl rounded-lg" />
        </div>
      </div>
    </section>
    <!-- Jumbotron 1 Selesai-->

    <!-- Jumbotron 2 Mulai -->
    <section class="bg-white-50 dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
      <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid gap-8 lg:gap-8">
        <div id="item1" class="max-w-sm flex flex-col justify-center">
          <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Kategori</p>
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-4xl dark:text-white">Kategori Kelas</h1>
        </div>
        <div id="app">
          <x-kelas/>
        </div>
      </div>
    </section>
    <!-- Jumbotron 2 Selesai -->

    <!-- Marquee Mulai -->
    <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
      <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Rekomendasi Kelas.</p>
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-4xl dark:text-white">
          Temukan Banyak Kelas Profesional <br />di <span class="text-blue-600 dark:text-blue-500">Pintar Path</span>
        </h1>
        <div class="d-flex justify-content-start align-items-center space-y-4 mt-8">
          <a
            href="#"
            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900"
            style="border-radius: 10px"
          >
            Gabung Kelas
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
          </a>
          <a
            href="#"
            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-70"
            style="border-radius: 10px"
            id="roadmapButton"
          >
            <span class="loading-text">Road Map</span>
            <div class="loading-text-extended">
              <svg aria-hidden="true" role="status" class="inline w-4 h-4 mb-1 text-gray-200 animate-spin dark:text-gray-600 loader" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                  fill="currentColor"
                />
                <path
                  d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                  fill="#1C64F2"
                />
              </svg>
              <span class="">Loading...</span>
            </div>
          </a>
        </div>
      </div>
      <div class="wrapper">
        <div class="itemLeft item1">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/javascript.png') }}" alt="Laravel logo" width="65" height="65" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Javascript</h3>
              <p class="text-sm text-[--muted-foreground]">Front-End</p>
            </div>
          </div>
        </div>
        <div class="itemLeft item2">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/nextjs.png') }}" alt="Laravel logo" width="65" height="65" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Next Js</h3>
              <p class="text-sm text-[--muted-foreground]">Front-End</p>
            </div>
          </div>
        </div>
        <div class="itemLeft item3">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/react.png') }}" alt="Laravel logo" width="75" height="75" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">React Js</h3>
              <p class="text-sm text-[--muted-foreground]">Front-End</p>
            </div>
          </div>
        </div>
        <div class="itemLeft item4">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/tensorflow.png') }}" alt="Laravel logo" width="60" height="60" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Tensorflow</h3>
              <p class="text-sm text-[--muted-foreground]">Back-End</p>
            </div>
          </div>
        </div>
        <div class="itemLeft item5">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/typescript.png') }}" alt="Laravel logo" width="65" height="65" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Typescript</h3>
              <p class="text-sm text-[--muted-foreground]">Front-End</p>
            </div>
          </div>
        </div>
        <div class="itemLeft item6">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/laravel.png') }}" alt="Laravel logo" width="70" height="70" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Laravel</h3>
              <p class="text-sm text-[--muted-foreground]">Back-End</p>
            </div>
          </div>
        </div>
        <div class="itemLeft item7">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/angular.png') }}" alt="Laravel logo" width="70" height="70" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Angular</h3>
              <p class="text-sm text-[--muted-foreground]">Front-End</p>
            </div>
          </div>
        </div>
        <div class="itemLeft item8">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/python.png') }}" alt="Laravel logo" width="75" height="75" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Python</h3>
              <p class="text-sm text-[--muted-foreground]">Data Science</p>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="itemRight item1">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/javascript.png') }}" alt="Laravel logo" width="65" height="65" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Javascript</h3>
              <p class="text-sm text-[--muted-foreground]">Front-End</p>
            </div>
          </div>
        </div>
        <div class="itemRight item2">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/nextjs.png') }}" alt="Laravel logo" width="65" height="65" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Next Js</h3>
              <p class="text-sm text-[--muted-foreground]">Front-End</p>
            </div>
          </div>
        </div>
        <div class="itemRight item3">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/react.png') }}" alt="Laravel logo" width="75" height="75" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">React Js</h3>
              <p class="text-sm text-[--muted-foreground]">Front-End</p>
            </div>
          </div>
        </div>
        <div class="itemRight item4">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/tensorflow.png') }}" alt="Laravel logo" width="60" height="60" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Tensorflow</h3>
              <p class="text-sm text-[--muted-foreground]">Back-End</p>
            </div>
          </div>
        </div>
        <div class="itemRight item5">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/typescript.png') }}" alt="Laravel logo" width="65" height="65" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Typescript</h3>
              <p class="text-sm text-[--muted-foreground]">Front-End</p>
            </div>
          </div>
        </div>
        <div class="itemRight item6">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/laravel.png') }}" alt="Laravel logo" width="70" height="70" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Laravel</h3>
              <p class="text-sm text-[--muted-foreground]">Back-End</p>
            </div>
          </div>
        </div>
        <div class="itemRight item7">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/angular.png') }}" alt="Laravel logo" width="70" height="70" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Angular</h3>
              <p class="text-sm text-[--muted-foreground]">Front-End</p>
            </div>
          </div>
        </div>
        <div class="itemRight item8">
          <div class="bg-[--card] p-4 flex items-center space-x-4">
            <img src="{{ asset('/images/python.png') }}" alt="Laravel logo" width="75" height="75" />
            <div>
              <h3 class="text-lg font-semibold text-[--card-foreground]">Python</h3>
              <p class="text-sm text-[--muted-foreground]">Data Science</p>
            </div>
          </div>
        </div>
      </div>
    <!-- Marquee Selesai -->

    <!-- FAQ Section Start -->
    <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
      <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">FAQ</p>
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-4xl dark:text-white">
          Pertanyaan Yang Sering <br />
          Ditanyakan
        </h1>
        <div class="max-w-screen-md mx-auto p-4 text-left">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="p-6 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700" style="border-radius: 15px">
              <div class="flex justify-between items-center cursor-pointer" onclick="toggleAnswer(0)">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Apa itu UX Writing?</h2>
                <span id="icon-0" class="text-gray-900 dark:text-white font-black text-2xl">+</span>
              </div>
              <p id="answer-0" class="hidden-answer text-gray-900 dark:text-white">UX Writing adalah proses pembuatan teks yang membantu pengguna berinteraksi dengan produk atau layanan digital dengan mudah dan efisien.</p>
            </div>
            <div class="p-6 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700" style="border-radius: 15px">
              <div class="flex justify-between items-center cursor-pointer" onclick="toggleAnswer(1)">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Mengapa UX Writing penting?</h2>
                <span id="icon-1" class="text-gray-900 dark:text-white font-black text-2xl">+</span>
              </div>
              <p id="answer-1" class="hidden-answer text-gray-900 dark:text-white">
                UX Writing penting karena teks yang baik dapat meningkatkan pengalaman pengguna, membantu mereka mencapai tujuan mereka, dan mengurangi kebingungan atau frustrasi.
              </p>
            </div>
            <div class="p-6 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700" style="border-radius: 15px">
              <div class="flex justify-between items-center cursor-pointer" onclick="toggleAnswer(2)">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Bagaimana cara memulai karir di UX Writing?</h2>
                <span id="icon-2" class="text-gray-900 dark:text-white font-black text-2xl">+</span>
              </div>
              <p id="answer-2" class="hidden-answer text-gray-900 dark:text-white">
                Untuk memulai karir di UX Writing, Anda perlu memahami prinsip dasar UX, memiliki keterampilan menulis yang baik, dan mempelajari cara membuat teks yang efektif untuk berbagai konteks pengguna.
              </p>
            </div>
            <div class="p-6 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700" style="border-radius: 15px">
              <div class="flex justify-between items-center cursor-pointer" onclick="toggleAnswer(3)">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Apakah ada sumber daya belajar UX Writing yang disarankan?</h2>
                <span id="icon-3" class="text-gray-900 dark:text-white font-black text-2xl">+</span>
              </div>
              <p id="answer-3" class="hidden-answer text-gray-900 dark:text-white">
                Ya, ada banyak sumber daya online seperti buku, kursus, dan artikel yang bisa membantu Anda belajar UX Writing. Beberapa buku yang direkomendasikan termasuk "Microcopy: The Complete Guide" dan "Writing for Designers".
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQ Selesai -->

    <!-- Footer Mulai -->
    <div id="app">
      <x-footer />
    </div>
    <!-- Footer Selesai -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script>
    <script>
      gsap.registerPlugin(ScrollTrigger);

      gsap.utils.toArray(".max-w-sm").forEach((item, index) => {
        gsap.from(item, {
          opacity: 0,
          y: 50,
          duration: 1,
          scrollTrigger: {
            trigger: item,
            start: "top 80%",
            toggleActions: "play none none none", // ubah toggleActions agar tidak ada reverse
            once: true, // animasi hanya terjadi sekali
            onEnter: () => {
              gsap.to(item, { opacity: 1, y: 0, duration: 1 });
            },
          },
        });
      });
      gsap.registerPlugin(ScrollTrigger);

      // Animasi untuk judul
      gsap.from(".section-title", {
        opacity: 0,
        y: 50,
        duration: 1,
        scrollTrigger: {
          trigger: ".section-title",
          start: "top 80%",
          toggleActions: "play none none none",
          once: true, // animasi hanya terjadi sekali
        },
      });

      // Animasi untuk paragraf
      gsap.from(".section-content", {
        opacity: 0,
        y: 50,
        duration: 1,
        scrollTrigger: {
          trigger: ".section-content",
          start: "top 80%",
          toggleActions: "play none none none",
          once: true, // animasi hanya terjadi sekali
        },
      });

      // Animasi untuk gambar
      gsap.from(".section-image", {
        opacity: 0,
        y: 50,
        duration: 1,
        scrollTrigger: {
          trigger: ".section-image",
          start: "top 80%",
          toggleActions: "play none none none",
          once: true, // animasi hanya terjadi sekali
        },
      });
    </script>
  </body>
</html>