<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SkillQuest ⸺ Solusi Belajar IT</title>
        <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.ico') }}" />
        <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" /> -->
    </head>
<body>
    <div class="min-h-screen bg-background text-foreground flex flex-col">
        <header class="bg-white dark:bg-black text-gray-900 dark:text-white py-6 px-6 flex items-center justify-between border-b border-gray-200 dark:border-gray-600">
            <a href="/course/belajar-bahasa-pemrograman-python">
                <div class="title flex flex-row gap-2 items-center justify-center py-3 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4">
                        <path class="dark:fill-white" fill="rgb(55 65 81)" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                    </svg>
                    <p class="dark:text-white text-gray-900 font-semibold sm:hidden lg:block hidden">Belajar Bahasa Pemrograman Python </p>       
                </div>
            </a>
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
                    <p class="mr-5 text-lg sm:hidden lg:block hidden">{{ Auth::user()->name }}</p>
                    <img class="w-10 h-10 rounded-full mr-2 object-cover" src="{{ auth()->user()->profile_photo ? asset('images/photoProfileUser/' . auth()->user()->profile_photo) : asset('images/avatarDefault.png') }}" alt="user photo">
                    <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="userMenu" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    @php
                        $fullName = Auth::user()->name;
                        $nameParts = explode(' ', $fullName);

                        // Proses mengambil sebagian nama
                        $shortName = implode(' ', array_slice($nameParts, 0, 2));

                        // Tambahkan '...' jika nama memiliki lebih dari dua kata
                        if (count($nameParts) > 2) {
                            $shortName .= ' ' . substr($nameParts[2], 0, 1) . '...';
                        }
                    @endphp
                    <div class="font-medium ">{{ $shortName }}</div>
                    <div class="truncate">{{ Auth::user()->email }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        <li>
                            <a href="/profile" class="block font-medium px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile Saya</a>
                        </li>
                        <li>
                            <a href="#" class="block font-medium px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Course Saya</a>
                        </li>
                        <li>
                            <a href="#" class="block font-medium px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Transaksi</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <form method="GET" action="{{ route('logout') }}">
                            @csrf
                            <a type="submit" class="block font-medium px-4 py-2 text-sm text-red-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-red-500">
                                <button>
                                    Keluar
                                </button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <div class="flex flex-1 h-screen bg-white dark:bg-black text-gray-900 dark:text-white">
            <!-- Desktop Sidebar -->
            <aside id="sidebar" class="border-gray-200 dark:border-gray-600 bg-gray-100 dark:bg-gray-600 text-gray-900 dark:text-white acide">
                <div class="flex items-center justify-between py-5 px-4">
                    <h2 class="text-xl font-semibold">Daftar Modul</h2>
                    <svg id="asideButton" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-9 h-9 cursor-pointer px-2 py-2">
                        <path class="dark:fill-white" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                    </svg>      
                </div>
                <div class="dark:bg-gray-700 bg-gray-200 py-4 px-4">
                    <span id="progressText" class="font-semibold text-lg" data-progress="0" data-visited="[]">0% Progress</span>
                    <div class="bar mt-2">
                        <div class="w-full bg-gray-400 rounded-full h-1.5 dark:bg-gray-800">
                            <div id="progressBar" class="bg-blue-600 h-1.5 rounded-full" style="width: 0%"></div>
                        </div>
                    </div>                 
                </div>                
                <div class="space-y-4 py-4 px-4">
                    <div id="persiapanBelajar">
                        <button id="dropdownbuttonDefault" class="flex justify-between w-full text-left text-foreground">
                            <div class="title flex flex-row justify-center items-center gap-2">
                                <svg id="dropdowniconDefault" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3 transition-transform">
                                    <path class="dark:fill-white" fill="rgb(55 65 81)" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                                </svg>
                                <span class="text-lg font-semibold">Persiapan Belajar</span>
                            </div>
                            <span id="progressCount" class="text-muted-foreground">1/3</span>
                        </button>
                        <ul id="dropdownmenuDefault" class="mt-2 space-y-2 hidden" style="padding-left: 18px">
                            <li class="flex items-center text-foreground" id="item1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3" id="status1">
                                    <path fill="#146ffe" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/>
                                </svg>
                                <span class="ml-2">Pengenalan Kelas</span>
                            </li>
                            <li class="flex items-center text-foreground" id="item2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3" id="status2">
                                    <path fill="#146ffe" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/>
                                </svg>
                                <span class="ml-2">Mekanisme Belajar</span>
                            </li>
                            <li class="flex items-center text-foreground" id="item3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3" id="status3">
                                    <path fill="#146ffe" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/>
                                </svg>
                                <span class="ml-2">Forum Diskusi</span>
                            </li>
                            <hr class="my-8 bg-gray-200 border-0 dark:bg-gray-700 h-px"> 
                        </ul>
                    </div>
                    <div id="sesi1">
                        <button id="dropdownButton" class="flex justify-between w-full text-left text-foreground">
                            <div class="title flex flex-row justify-center items-center gap-2">
                                <svg id="dropdownIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3 transition-transform">
                                    <path class="dark:fill-white" fill="rgb(55 65 81)" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                                </svg>
                                <span class="text-lg font-semibold">Sesi 1</span>
                            </div>
                            <span class="text-muted-foreground">0/2</span>
                        </button>
                        <ul id="dropdownMenu" class="mt-2 space-y-2 hidden" style="padding-left: 18px">
                            <li class="flex items-center text-foreground" id="item4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3" id="status4">
                                    <path fill="#146ffe" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/>
                                </svg>
                                <span class="ml-2">Hello World Python</span>
                            </li>
                            <li class="flex items-center text-foreground" id="item5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3" id="status5">
                                    <path fill="#146ffe" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/>
                                </svg>
                                <span class="ml-2">Quiz 1</span>
                            </li>
                            <hr class="my-8 bg-gray-200 border-0 dark:bg-gray-700 h-px">
                        </ul>
                    </div>                    
                </div>
            </aside>
            <button id="showSidebarButton" class="fixed top-10 left-4 bg-gray-100 dark:bg-gray-700 p-4 sm:hidden lg:block" style="margin-top:55px; border-radius: 0px 50px 50px 0px">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-6 h-6">
                    <path class="dark:fill-white" fill="rgb(55 65 81)" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                </svg>
            </button>
            <!-- Desktop Sidebar Selesai -->
            <div class="contentSection flex-1 overflow-y-auto">
                <div id="pengenalanKelas" data-materi-id="1">
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
                <div id="mekanismeBelajar" data-materi-id="2" class="hidden">
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
                <div id="forumDiskusi" data-materi-id="3" class="hidden">
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
                <div id="helloWorld" data-materi-id="3" class="hidden">
                    <h1 class="text-4xl font-bold mb-6">Hello World Python</h1>
                    <section class="mb-8">
                        <p class="mb-4 text-2xl font-medium text-1xl">
                            Apa itu Python?
                        </p>
                        <p class="mb-4 text-1xl font-medium text-1xl">
                            Python adalah bahasa pemrograman yang populer. Bahasa ini diciptakan oleh Guido van Rossum dan dirilis pada tahun 1991, Python digunakan untuk:
                        </p>
                        <p class="mb-4 font-small text-1xl pl-5">
                            1. Pengembangan web (sisi server),<br>
                            2. Pengembangan perangkat lunak<br>
                            3. Matematika,<br>
                            4. Skrip sistem..<br>
                        </p>
                        <p class="mb-4 text-2xl font-medium text-1xl">
                            Apa yang bisa dilakukan Python?
                        </p>
                        <p class="mb-4 font-small text-1xl pl-5">
                            1. Pengembangan web (sisi server),<br>
                            2. Pengembangan perangkat lunak<br>
                            3. Matematika,<br>
                            4. Skrip sistem..<br>
                        </p>
                    </section>
                </div>
                <div id="quiz1" data-materi-id="3" class="hidden">
                    <h1 class="text-4xl font-bold mb-6">Quiz 1</h1>
                    <section class="mb-8">
                        <p class="mb-4 text-2xl font-medium text-1xl">
                            Peraturan Kuis
                        </p>
                        <p class="mb-4 text-1xl font-medium text-1xl">
                            Sebelum memulai kuis, harap perhatikan peraturan berikut:
                        </p>
                        <p class="mb-4 font-small text-1xl pl-5">
                            1. Bacalah setiap pertanyaan dengan cermat.<br>
                            2. Jawab setiap pertanyaan sesuai dengan pengetahuan Anda.<br>
                            3. Tidak ada batasan waktu untuk setiap pertanyaan, namun pastikan Anda menyelesaikan kuis dalam waktu yang ditentukan.<br>
                            4. Setelah menyelesaikan kuis, pastikan untuk mengklik tombol 'Kirim' untuk menyimpan jawaban Anda.<br>
                            5. Hasil kuis akan ditampilkan setelah Anda menyelesaikan seluruh kuis.<br>
                        </p>
                        <div class="mt-6">
                            <a href="/course/belajar-bahasa-pemrograman-python/quiz1" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
                                Mulai Kuis
                            </a>
                        </div>
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
        <div class="items-center justify-center hidden text-gray-500 dark:text-gray-400 me-auto md:flex gap-2" id="prevMateri" style="cursor:pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5" style="margin-top: 2px">
                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/>
            </svg>
            <p class="dark:text-white text-gray-900 font-semibold sm:hidden lg:block hidden">Sebelum</p>
        </div>
        <div class="flex items-center justify-center mx-auto space-x-4">
            <button data-modal-target="chat-modal" data-modal-toggle="chat-modal" data-tooltip-target="tooltip-AI" type="button">
                <img src="{{ asset('./images/bot_photoprofile.png') }}" alt="Profile" class="w-9 h-9 rounded-full">
                <span class="sr-only">Silva AI</span>
            </button>
            <div id="tooltip-AI" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Silva AI
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button data-tooltip-target="tooltip-camera" type="button" class="p-2.5 bg-gray-100 group rounded-full hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:bg-gray-600 dark:hover:bg-gray-800">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                </svg>
                <span class="sr-only">Report Materi</span>
            </button>
            <div id="tooltip-camera" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Report Materi
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button data-tooltip-target="tooltip-settings" type="button" class="p-2.5 bg-gray-100 group rounded-full hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:bg-gray-600 dark:hover:bg-gray-800">
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
        <div class="items-center justify-center ms-auto md:flex gap-2" id="nextMateri" style="cursor: pointer;">
            <p class="dark:text-white text-gray-900 font-semibold">Selanjutnya</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5" style="margin-top: 2px">
                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/>
            </svg>
        </div>
    </div>
    <!-- Footer Selesai -->
    <!-- Footer Mobile -->
    <div class="fixed bottom-0 left-0 z-50 w-full h-20 bg-white dark:bg-black text-gray-900 dark:text-white border-t border-gray-200 dark:border-gray-600 lg:hidden">
        <div class="flex justify-between items-center h-full px-4 md:px-8">
            <div class="flex items-center text-gray-500 dark:text-gray-400 gap-2" id="prevMateriMobile" style="cursor:pointer">
                <p class="dark:text-white text-gray-900 font-semibold hidden sm:block">Sebelum</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5" style="margin-top: 2px">
                    <path class="dark:fill-white" fill="rgb(55 65 81)" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/>
                </svg>
            </div>
            <div class="flex items-center space-x-4">
                <button data-modal-target="pop-chat-mobile" data-modal-toggle="pop-chat-mobile" data-tooltip-target="tooltip-microphone" type="button">
                    <img src="{{ asset('./images/bot_photoprofile.png') }}" alt="Profile" class="w-9 h-9 rounded-full">
                    <span class="sr-only">Silva AI</span>
                </button>
                <div id="tooltip-microphone" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Silva AI
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div id="nextMateri">
                    <button data-tooltip-target="tooltip-camera" type="button" class="p-2.5 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:bg-gray-600 dark:hover:bg-gray-800">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                            <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                        </svg>
                        <span class="sr-only">Report Materi</span>
                    </button>
                </div>
                <div id="tooltip-camera" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Report Materi
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button data-tooltip-target="tooltip-settings" type="button" class="p-2.5 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:bg-gray-600 dark:hover:bg-gray-800">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 7.75v-2.25"/>
                    </svg>
                    <span class="sr-only">Settings</span>
                </button>
                <div id="tooltip-settings" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Settings
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
            <div class="flex items-center text-gray-500 dark:text-gray-400 gap-2" id="nextMateriMobile" style="cursor:pointer">
                <p class="dark:text-white text-gray-900 font-semibold hidden sm:block">Selanjutnya</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5" style="margin-top: 2px">
                    <path class="dark:fill-white" fill="rgb(55 65 81)" d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/>
                </svg>
            </div>
        </div>
    </div>
    <!-- Footer Mobile Selesai  -->
    <!-- Chat AI Mobile -->
    <div id="app">
        <x-AIChatMobile/>
    </div>    
    <!-- Chat AI Mobile Selesai -->
    <!-- Chat AI Dekstop -->
    <div id="app">
        <x-AIChatDesktop/>
    </div>  
    <!-- Chat AI Dekstop Selesai -->  
    @component('components.source.javascriptPersiapan')
    @endcomponent
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset('./js/main.js') }}"></script>
    <script src="{{ asset('./js/chat.js')}}"></script>
    <script src="{{ asset('./js/chatMobile.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script>   
</body>
</html>