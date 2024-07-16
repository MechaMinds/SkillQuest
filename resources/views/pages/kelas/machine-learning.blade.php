<!DOCTYPE html>
<html lang="en">
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
                        <p class="section-title font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 20px">Belajar Dari Ahlinya</p>
                        <h1 class="section-title mb-4 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white">Kelas Machine Learning</h1>
                        <p class="section-title font-medium text-gray-500 lg:text-sm dark:text-gray-400 mb-2" style="font-size: 15px">Memahami teknologi AI yang mengubah dunia? Bergabunglah dengan kursus Machine Learning kami! Mulai dari konsep dasar hingga teknik lanjutan.</p>                                 
                    </div>
                </div>
            </div>
        </section>        
        <!-- Jumbotron 1 Selesai-->
        <!-- Jumbotron 2 Mulai-->
        <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')] sm:hidden lg:block hidden">
            <div class="px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
                <div class="sidebar section-title bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 py-5 px-5" style="width: 300px">
                    <div class="urutkan">
                        <div class="title dark:text-white text-grey-900 font-semibold text-1xl mb-5">Urutkan</div>
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Baru Rilis</label>
                        </div>  
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Paling Populer</label>
                        </div> 
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sedang Promo</label>
                        </div> 
                    </div>
                    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700"> 
                    <div class="tingkatan">
                        <div class="title dark:text-white text-grey-900 font-semibold text-1xl mb-5">Tingkatan</div>
                        <div class="flex items-center mb-4">
                            <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Semua Tingkatan</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dasar</label>
                        </div> 
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pemula</label>
                        </div> 
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menengah</label>
                        </div> 
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jago</label>
                        </div> 
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Profesional</label>
                        </div> 
                    </div>
                    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700"> 
                    <div class="harga">
                        <div class="title dark:text-white text-grey-900 font-semibold text-1xl mb-5">Harga</div>
                        <div class="flex items-center mb-4">
                            <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Semua Harga</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gratis</label>
                        </div> 
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Premium</label>
                        </div> 
                    </div>
                </div>
                <div class="content grid lg:grid-cols-3 gap-1 md:grid-cols-2 sm:grid-cols-1 mt-2    ">
                    
                </div>
            </div>
        </section>

        <!-- Jumbotron 2 Selesai-->
        <!-- Footer Mulai-->
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
        document.addEventListener("DOMContentLoaded", function () {
        const buttons = document.querySelectorAll(".btnRoad");
        const sections = document.querySelectorAll(".content-section > div");

        // Function to switch content
        function switchContent(target) {
            sections.forEach((section) => {
                section.classList.remove("active");
                section.classList.add("hidden");
            });

            const targetSection = document.getElementById(target);
            targetSection.classList.remove("hidden");
            setTimeout(() => {
                targetSection.classList.add("active");
            }, 10); // Timeout to allow transition to apply
        }

        // Set the "aboutContent" as the default active section
        switchContent("frontEnd");

        buttons.forEach((button) => {
            button.addEventListener("click", function () {
                const target = this.id.replace("Btn", "Content");
                switchContent(target);
            });
        });
    });
        </script>
        <script>
        document.getElementById('nlp-btn').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('natural-processing-btn').classList.remove('hidden');
                document.getElementById('computer-vision-content').classList.add('hidden');
                this.classList.add('text-blue-600', 'border-blue-600');
                document.getElementById('cv-btn').classList.remove('text-blue-600', 'border-blue-600');
            });

            document.getElementById('cv-btn').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('computer-vision-content').classList.remove('hidden');
                document.getElementById('natural-processing-btn').classList.add('hidden');
                this.classList.add('text-blue-600', 'border-blue-600');
                document.getElementById('nlp-btn').classList.remove('text-blue-600', 'border-blue-600');
            });
        </script>
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