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
<body>
    <div class="min-h-screen bg-background text-foreground flex flex-col">
        <header class="bg-white dark:bg-black text-gray-900 dark:text-white py-6 px-6 flex items-center justify-between border-b border-gray-200 dark:border-gray-600">
            <div class="title flex flex-row gap-2 items-center justify-center py-3 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4">
                    <path class="dark:fill-white" fill="rgb(55 65 81)" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                </svg>
                <a href="/course/belajar-bahasa-pemrograman-python" class="dark:text-white text-gray-900 font-semibold sm:hidden lg:block hidden">Belajar Bahasa Pemrograman Python </a>       
            </div>
            <div class="flex items-center space-x-4">
                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 sm:mr-5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <button data-modal-target="search-modal" data-modal-toggle="search-modal" type="button" class="searching bg-gray-100 dark:bg-gray-700 py-4 px-4 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                        <path class="dark:fill-white" fill="rgb(55 65 81)" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                    </svg>
                </button>
                <button id="userButton" data-dropdown-toggle="userMenu" class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-white md:me-0 dark:text-gray-400" type="button">
                    <span class="sr-only">Open user menu</span>
                    <p class="mr-5 text-lg sm:hidden lg:block hidden">Riovaldo Alifyan Fahmi Rahman</p>
                    <img class="w-10 h-10 rounded-full mr-2 object-cover" src="{{asset('./images/user/profile.jpg')}}" alt="user photo">
                    <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="userMenu" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    <div class="font-medium ">Riovaldo Alfiyan</div>
                    <div class="truncate">rriovld@gmail.com</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    </ul>
                    <div class="py-2">
                    <a href="#" class="block px-4 py-2 text-sm text-red-500 font-semibold">Keluar</a>
                    </div>
                </div>
            </div>
        </header>
        <div class="flex flex-1 h-screen bg-white dark:bg-black text-gray-900 dark:text-white">
            <!-- Desktop Sidebar -->
            <div id="app">
                <x-SidebarMateri/>
            </div>
            <!-- Desktop Sidebar Selesai -->
            <!-- Mobile Sidebar -->
            <div id="app">
                <x-SidebarMateriMobile/>
            </div>
            <!-- Mobile Sidebar Selesai -->
            <div class="contentSection flex-1 overflow-y-auto">
                <div id="pengenalanKelas">
                    <h1 class="text-4xl font-bold mb-6">Pengenalan Kelas Belajar Bahasa Pemrograman Python</h1>
                    <section class="mb-8">
                        <p class="mb-4 font-small text-1xl">
                            Selamat datang di kursus belajar bahasa pemrograman Python! Kursus ini dirancang untuk memberikan pemahaman yang mendalam dan komprehensif tentang Python, salah satu bahasa pemrograman yang paling populer dan serbaguna di dunia saat ini. Apakah Anda seorang pemula yang baru memulai perjalanan pemrograman Anda atau seorang profesional yang ingin memperdalam pengetahuan Anda, kursus ini adalah tempat yang tepat untuk Anda.
                        </p>
                    </section>
                    <h1 class="text-2xl font-bold mb-6">Mengapa Belajar Python?</h1>
                    <section class="mb-8">
                        <p class="mb-4 font-small text-1xl">
                            Python dikenal karena sintaksnya yang sederhana dan mudah dipahami, yang membuatnya menjadi pilihan ideal bagi pemula. Namun, kekuatan dan fleksibilitasnya juga menjadikannya bahasa yang sangat dihargai di kalangan profesional. Berikut adalah beberapa alasan mengapa Anda harus belajar Python:
                        </p>
                        <p class="mb-4 font-small text-1xl pl-5">
                            1. Kemudahan dalam Pembelajaran: Python memiliki sintaks yang bersih dan mudah dipahami, mirip dengan bahasa Inggris. Ini memudahkan Anda untuk fokus pada logika pemrograman daripada terjebak dalam kerumitan bahasa.
                            <br><br>
                            2. Popularitas dan Dukungan Komunitas: Dengan komunitas yang besar dan aktif, Anda akan menemukan banyak sumber daya, tutorial, dan forum untuk membantu Anda dalam perjalanan belajar Anda.
                            <br><br>
                            3. Versatilitas: Python digunakan dalam berbagai bidang seperti pengembangan web, analisis data, kecerdasan buatan, pembelajaran mesin, automasi, dan banyak lagi.
                            <br><br>
                            4. Library dan Framework yang Kuat: Python dilengkapi dengan berbagai library dan framework yang mempercepat pengembangan aplikasi, seperti Django untuk pengembangan web, NumPy dan pandas untuk analisis data, dan TensorFlow untuk pembelajaran mesin.
                        </p>
                    </section>
                    <h1 class="text-2xl font-bold mb-6">Apa yang Akan Anda Pelajari?</h1>
                    <section class="mb-8">
                        <p class="mb-4 font-small text-1xl">
                            Dalam kursus ini, Anda akan mempelajari dasar-dasar Python hingga konsep-konsep yang lebih lanjut, termasuk:
                        </p>
                        <p class="mb-4 font-small text-1xl pl-5">
                            1. Pengantar Python dan Instalasi<br>
                            2. Struktur Dasar Python (Variabel, Tipe Data, Operator)<br>
                            3. Kontrol Alur (If, For, While, dll.)<br>
                            4. Fungsi dan Modul<br>
                            5. Pengolahan File<br>
                            6. Penggunaan Library dan Framework Populer<br>
                        </p>
                    </section>
                </div>
                <div id="mekanismeBelajar" class="hidden">
                    <h1 class="text-4xl font-bold mb-6">Mekanisme Belajar</h1>
                    <section class="mb-8">
                        <p class="mb-4 font-small text-1xl">
                            Kursus ini akan disampaikan melalui kombinasi video tutorial, bacaan, dan latihan praktis. Anda akan mendapatkan:
                        </p>
                        <p class="mb-4 font-small text-1xl pl-5">
                            1. Video Tutorial: Penjelasan mendetail dari setiap konsep dengan contoh-contoh nyata.<br>
                            2. Bacaan Tambahan: Artikel dan e-book untuk memperdalam pemahaman.<br>
                            3. Latihan Praktis: Soal-soal dan proyek kecil untuk menguji pemahaman Anda.<br>
                            4. Forum Diskusi: Tempat untuk bertanya dan berdiskusi dengan instruktur dan sesama peserta kursus.<br>
                        </p>
                    </section>
                </div>
                <div id="forumDiskusi" class="hidden">
                    <h1 class="text-4xl font-bold mb-6">Forum Diskusi</h1>
                    <section class="mb-8">
                        <p class="mb-4 font-small text-1xl">
                            Kursus ini akan disampaikan melalui kombinasi video tutorial, bacaan, dan latihan praktis. Anda akan mendapatkan:
                        </p>
                        <p class="mb-4 font-small text-1xl pl-5">
                            1. Video Tutorial: Penjelasan mendetail dari setiap konsep dengan contoh-contoh nyata.<br>
                            2. Bacaan Tambahan: Artikel dan e-book untuk memperdalam pemahaman.<br>
                            3. Latihan Praktis: Soal-soal dan proyek kecil untuk menguji pemahaman Anda.<br>
                            4. Forum Diskusi: Tempat untuk bertanya dan berdiskusi dengan instruktur dan sesama peserta kursus.<br>
                        </p>
                    </section>
                </div>
            </div>
        </div>           
    </div>
    <div id="search-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)]">
        <div class="relative p-4 w-full max-w-2xl">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700" style="height:500px">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Pencarian
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="search-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                </div>         
                <form class="mx-auto " >
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <input type="search" id="default-search" class="block w-full p-5 ps-10 text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white" placeholder="Cari kelas disini" required style="border:none;" />
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="margin-right: 10px">Search</button>
                </div>
                </form>          
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="fixed bottom-0 left-0 z-50 grid w-full h-20 grid-cols-1 px-8 bg-white dark:bg-black text-gray-900 dark:text-white border-t border-gray-200 md:grid-cols-3 dark:border-gray-600 sm:hidden lg:grid hidden">
        <div class="items-center justify-center hidden text-gray-500 dark:text-gray-400 me-auto md:flex gap-2" onclick="previousMateri()" style="cursor:pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-5">
                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM215 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L392 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-214.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L103 273c-9.4-9.4-9.4-24.6 0-33.9L215 127z"/>
            </svg>
            <p class="dark:text-white text-gray-900 font-semibold sm:hidden lg:block hidden">Sebelum</p>
        </div>
        <div class="flex items-center justify-center mx-auto">
            <button data-tooltip-target="tooltip-microphone" type="button" class="p-2.5 group bg-gray-100 rounded-full hover:bg-gray-200 me-4 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:bg-gray-600 dark:hover:bg-gray-800">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 19">
                    <path d="M15 5a1 1 0 0 0-1 1v3a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V6a1 1 0 0 0-2 0v3a6.006 6.006 0 0 0 6 6h1v2H5a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2H9v-2h1a6.006 6.006 0 0 0 6-6V6a1 1 0 0 0-1-1Z"/>
                    <path d="M9 0H7a3 3 0 0 0-3 3v5a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3Z"/>
                </svg>
                <span class="sr-only">Silva AI</span>
            </button>
            <div id="tooltip-microphone" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Silva AI
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button data-tooltip-target="tooltip-camera" type="button" class="p-2.5 bg-gray-100 group rounded-full hover:bg-gray-200 me-4 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:bg-gray-600 dark:hover:bg-gray-800">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                </svg>
                <span class="sr-only">Report Materi</span>
            </button>
            <div id="tooltip-camera" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Report Materi
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button data-tooltip-target="tooltip-settings" type="button" class="p-2.5 bg-gray-100 group rounded-full me-4 md:me-0 hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:bg-gray-600 dark:hover:bg-gray-800">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2"/>
                </svg>
                <span class="sr-only">Tour</span>
            </button>
            <div id="tooltip-settings" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Tour
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
        <div class="items-center justify-center ms-auto md:flex gap-2"  onclick="nextMateri()" style="cursor: pointer;"> 
            <p class="dark:text-white text-gray-900 font-semibold sm:hidden lg:block hidden">Selanjutnya</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM297 385c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l71-71L164 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l214.1 0-71-71c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L409 239c9.4 9.4 9.4 24.6 0 33.9L297 385z"/>
            </svg>
        </div>
    </div>
    <!-- Footer Selesai -->
    <!-- Footer Mobile -->
    <div class="fixed bottom-0 left-0 z-50 w-full h-20 bg-white dark:bg-black text-gray-900 dark:text-white border-t border-gray-200 dark:border-gray-600 lg:hidden">
        <div class="flex justify-between items-center h-full px-4 md:px-8">
            <div class="flex items-center text-gray-500 dark:text-gray-400 cursor-pointer gap-2" onclick="previousMateri()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                    <path class="dark:fill-white" fill="rgb(55 65 81)" d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM215 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L392 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-214.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L103 273c-9.4-9.4-9.4-24.6 0-33.9L215 127z"/>
                </svg>
                <p class="dark:text-white text-gray-900 font-semibold hidden sm:block">Sebelum</p>
            </div>
            <div class="flex items-center space-x-4">
                <button data-tooltip-target="tooltip-microphone" type="button" class="p-2.5 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:bg-gray-600 dark:hover:bg-gray-800">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 19">
                        <path d="M15 5a1 1 0 0 0-1 1v3a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V6a1 1 0 0 0-2 0v3a6.006 6.006 0 0 0 6 6h1v2H5a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2H9v-2h1a6.006 6.006 0 0 0 6-6V6a1 1 0 0 0-1-1Z"/>
                        <path d="M9 0H7a3 3 0 0 0-3 3v5a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3Z"/>
                    </svg>
                    <span class="sr-only">Silva AI</span>
                </button>
                <div id="tooltip-microphone" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Silva AI
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button data-tooltip-target="tooltip-camera" type="button" class="p-2.5 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:bg-gray-600 dark:hover:bg-gray-800">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                        <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                    </svg>
                    <span class="sr-only">Report Materi</span>
                </button>
                <div id="tooltip-camera" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Report Materi
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button data-tooltip-target="tooltip-settings" type="button" class="p-2.5 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:bg-gray-600 dark:hover:bg-gray-800">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2"/>
                    </svg>
                    <span class="sr-only">Tour</span>
                </button>
                <div id="tooltip-settings" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Tour
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
            <div class="flex items-center text-gray-500 dark:text-gray-400 cursor-pointer gap-2" onclick="nextMateri()">
                <p class="dark:text-white text-gray-900 font-semibold hidden sm:block">Selanjutnya</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                    <path class="dark:fill-white" fill="rgb(55 65 81)" d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM297 385c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l71-71L164 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l214.1 0-71-71c-9.4-9.4 9.4-24.6 0-33.9s24.6-9.4 33.9 0L409 239c9.4 9.4 9.4 24.6 0 33.9L297 385z"/>
                </svg>
            </div>
        </div>
    </div>    
    <!-- Footer Mobile Selesai  -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const materi = ["pengenalanKelas", "mekanismeBelajar", "forumDiskusi"];
            let currentIndex = 0;

            function updateMateri() {
                materi.forEach((id, index) => {
                    document.getElementById(id).style.display = index === currentIndex ? "block" : "none";
                });
            }

            function nextMateri() {
                if (currentIndex < materi.length - 1) {
                    currentIndex++;
                    updateMateri();
                } else {
                    alert("Ini adalah materi terakhir.");
                }
            }

            function previousMateri() {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateMateri();
                } else {
                    alert("Ini adalah materi pertama.");
                }
            }

            // Initial update
            updateMateri();

            // Expose functions to global scope
            window.nextMateri = nextMateri;
            window.previousMateri = previousMateri;
        });
    </script>
    <script>
        document.getElementById('cardButtonMobile').addEventListener('click', function() {
            var aside = document.querySelector('#daftarModuleMobile');
            if (aside.classList.contains('slide-in') || !aside.classList.contains('slide-out')) {
                aside.classList.remove('slide-in');
                aside.classList.add('slide-out');
                setTimeout(function() {
                    aside.classList.add('hidden');
                }, 300); // Sesuaikan dengan durasi animasi
            } else {
                aside.classList.remove('hidden');
                aside.classList.remove('slide-out');
                aside.classList.add('slide-in');
            }
        });
        document.getElementById('showSidebarButtonMobile').addEventListener('click', function() {
            var aside = document.querySelector('#daftarModuleMobile');
            aside.classList.remove('hidden');
            aside.classList.remove('slide-out');
            aside.classList.add('slide-in');
        });
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownmenuDefaultMobile = document.getElementById('dropdownmenuDefaultMobile');
            const dropdowniconDefaultMobile = document.getElementById('dropdowniconDefaultMobile');
            
            // Ensure the menu is visible
            dropdownmenuDefaultMobile.classList.remove('hidden');
            
            // Ensure the icon is rotated to indicate the menu is open
            dropdowniconDefaultMobile.classList.add('rotate-180');
        });
        document.getElementById('dropdownbuttonDefaultMobile').addEventListener('click', function() {
            const dropdownmenuDefaultMobile = document.getElementById('dropdownmenuDefaultMobile');
            const dropdowniconDefaultMobile = document.getElementById('dropdowniconDefaultMobile');
            
            // Toggle visibility of the dropdown menu
            dropdownmenuDefaultMobile.classList.toggle('hidden');
            
            // Rotate the icon
            dropdowniconDefaultMobile.classList.toggle('rotate-180');
        });
        document.getElementById('dropdownButtonMobile').addEventListener('click', function() {
            const dropdownMenuMobile = document.getElementById('dropdownMenuMobile');
            const dropdownIconMobile = document.getElementById('dropdownIconMobile');
            
            // Toggle visibility of the dropdown menu
            dropdownMenuMobile.classList.toggle('hidden');
            
            // Rotate the icon
            dropdownIconMobile.classList.toggle('rotate-180');
        });
    </script>
    <script>
        document.getElementById('asideButton').addEventListener('click', function() {
        var aside = document.querySelector('aside');
        if (aside.classList.contains('slide-in') || !aside.classList.contains('slide-out')) {
            aside.classList.remove('slide-in');
            aside.classList.add('slide-out');
            setTimeout(function() {
                aside.classList.add('hidden');
            }, 300); // Sesuaikan dengan durasi animasi
        } else {
            aside.classList.remove('hidden');
            aside.classList.remove('slide-out');
            aside.classList.add('slide-in');
        }
    });
    document.getElementById('showSidebarButton').addEventListener('click', function() {
        var aside = document.querySelector('aside');
        aside.classList.remove('hidden');
        aside.classList.remove('slide-out');
        aside.classList.add('slide-in');
    });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const dropdownmenuDefault = document.getElementById('dropdownmenuDefault');
        const dropdowniconDefault = document.getElementById('dropdowniconDefault');
        
        // Ensure the menu is visible
        dropdownmenuDefault.classList.remove('hidden');
        
        // Ensure the icon is rotated to indicate the menu is open
        dropdowniconDefault.classList.add('rotate-180');
    });
    document.getElementById('dropdownbuttonDefault').addEventListener('click', function() {
        const dropdownmenuDefault = document.getElementById('dropdownmenuDefault');
        const dropdowniconDefault = document.getElementById('dropdowniconDefault');
        
        // Toggle visibility of the dropdown menu
        dropdownmenuDefault.classList.toggle('hidden');
        
        // Rotate the icon
        dropdowniconDefault.classList.toggle('rotate-180');
    });
    document.getElementById('dropdownButton').addEventListener('click', function() {
        const dropdownMenu = document.getElementById('dropdownMenu');
        const dropdownIcon = document.getElementById('dropdownIcon');
        
        // Toggle visibility of the dropdown menu
        dropdownMenu.classList.toggle('hidden');
        
        // Rotate the icon
        dropdownIcon.classList.toggle('rotate-180');
    });
    </script>
</body>
</html>