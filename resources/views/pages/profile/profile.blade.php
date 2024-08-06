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
    <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-10"></div>
    <!-- Navbar Mulai-->
    <div id="app">
      <x-navbar />
    </div>  
    <!-- Navbar Selesai -->
    <!-- Profile -->
    <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]" style="margin-top: 150px">
      <div class="py-8 px-4 mx-auto max-w-screen-xl gap-3">
          <div class="flex">
              <div class="sticky top-4 overflow-y-auto sidebar section-title py-5 px-5 sm:hidden lg:block hidden z-20" style="width: 300px; height: 700px;">
                  <div class="title dark:text-white text-grey-900 font-semibold text-4xl mb-10">Pengaturan</div>
                  <div class="profileSaya title dark:text-white hover:text-gray-900 text-gray-900 font-medium text-xl border-gray-900 dark:border-white hover:bg-gray-200 dark:hover:bg-gray-500 dark:hover:text-white py-4 px-5">
                      <a href="/profile">Profile</a>
                  </div> 
                  <div class="courseSaya title dark:text-white hover:text-gray-900 text-gray-900 font-medium text-xl border-gray-900 dark:border-white hover:bg-gray-200 dark:hover:bg-gray-500 dark:hover:text-white py-4 px-5">
                      <a href="/course-saya">Data Pribadi</a>
                  </div> 
                  <div class="courseSaya title dark:text-white hover:text-gray-900 text-gray-900 font-medium text-xl border-gray-900 dark:border-white hover:bg-gray-200 dark:hover:bg-gray-500 dark:hover:text-white py-4 px-5">
                      <a href="/course-saya">Course Saya</a>
                  </div> 
                  <div class="courseSaya title dark:text-white hover:text-gray-900 text-gray-900 font-medium text-xl border-gray-900 dark:border-white hover:bg-gray-200 dark:hover:bg-gray-500 dark:hover:text-white py-4 px-5">
                      <a href="/course-saya">Riwayat Transaksi</a>
                  </div> 
                  <div class="courseSaya title dark:text-white hover:text-gray-900 text-gray-900 font-medium text-xl border-gray-900 dark:border-white hover:bg-gray-200 dark:hover:bg-gray-500 dark:hover:text-white py-4 px-5">
                      <a href="/course-saya">Pengaturan</a>
                  </div> 
                  <div class="courseSaya title text-red-500 font-medium text-xl py-3 px-5 hover:bg-gray-200 dark:hover:bg-gray-500">
                      <a href="/course-saya">Keluar</a>
                  </div> 
              </div>
          </div>
      </div>
    </section>
    <!-- Profile Selesai-->

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