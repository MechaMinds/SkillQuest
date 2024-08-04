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
            <aside id="sidebar" class="border-gray-200 dark:border-gray-600 bg-gray-100 dark:bg-gray-600 text-gray-900 dark:text-white acide">
                <div class="flex items-center justify-between py-5 px-4">
                    <h2 class="text-xl font-semibold">Daftar Modul</h2>
                    <svg id="asideButton" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-9 h-9 cursor-pointer px-2 py-2">
                        <path class="dark:fill-white" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                    </svg>
                </div>
                <div class="dark:bg-gray-700 bg-gray-200 py-4 px-4">
                    <span id="progressText" class="font-semibold text-lg">5% Progress</span>
                    <div class="bar mt-2">
                        <div class="w-full bg-gray-400 rounded-full h-1.5 dark:bg-gray-800">
                            <div id="progressBar" class="bg-blue-600 h-1.5 rounded-full" style="width: 5%"></div>
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
                            <span class="text-muted-foreground">1/3</span>
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
                            <span class="text-muted-foreground">0/6</span>
                        </button>
                        <ul id="dropdownMenu" class="mt-2 space-y-2 hidden" style="padding-left: 18px">
                            <li class="flex items-center text-foreground">
                                <span class="text-blue-500">⭘</span>
                                <span class="ml-2">Persetujuan Hak Cipta <span class="text-muted-foreground">(Gratis)</span></span>
                            </li>
                            <li class="flex items-center text-foreground">
                                <span class="text-blue-500">⭘</span>
                                <span class="ml-2">Pengenalan Kelas <span class="text-muted-foreground">(Gratis)</span></span>
                            </li>
                            <li class="flex items-center text-foreground">
                                <span class="text-blue-500">⭘</span>
                                <span class="ml-2">Mekanisme Belajar <span class="text-muted-foreground">(Gratis)</span></span>
                            </li>
                            <li class="flex items-center text-foreground">
                                <span class="text-blue-500">⭘</span>
                                <span class="ml-2">Forum Diskusi <span class="text-muted-foreground">(Gratis)</span></span>
                            </li>
                            <li class="flex items-center text-foreground">
                                <span class="text-blue-500">⭘</span>
                                <span class="ml-2">Mekanisme Belajar <span class="text-muted-foreground">(Gratis)</span></span>
                            </li>
                            <li class="flex items-center text-foreground">
                                <span class="text-blue-500">⭘</span>
                                <span class="ml-2">Forum Diskusi <span class="text-muted-foreground">(Gratis)</span></span>
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
        <div class="items-center justify-center hidden text-gray-500 dark:text-gray-400 me-auto md:flex gap-2" id="prevMateri" style="cursor:pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5" style="margin-top: 2px">
                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/>
            </svg>
            <p class="dark:text-white text-gray-900 font-semibold sm:hidden lg:block hidden">Sebelum</p>
        </div>
        <div class="flex items-center justify-center mx-auto">
            <button data-modal-target="chat-modal" data-modal-toggle="chat-modal" data-tooltip-target="tooltip-AI" type="button" class="p-2.5 group bg-gray-100 rounded-full hover:bg-gray-200 me-4 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:bg-gray-600 dark:hover:bg-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 640 512">
                    <path class="dark:fill-gray-300" fill="rgb(107, 114, 128)" d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2s0 0 0 0s0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.2-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9c0 0 0 0 0 0s0 0 0 0l-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z"/>
                </svg>
                <span class="sr-only">Silva AI</span>
            </button>
            <div id="tooltip-AI" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
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
        <div class="items-center justify-center ms-auto md:flex gap-2" id="nextMateri" style="cursor: pointer;">
            <p class="dark:text-white text-gray-900 font-semibold sm:hidden lg:block hidden">Selanjutnya</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5" style="margin-top: 2px">
                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/>
            </svg>
        </div>
    </div>
    <!-- Footer Selesai -->
    <!-- Footer Mobile -->
    <div class="fixed bottom-0 left-0 z-50 w-full h-20 bg-white dark:bg-black text-gray-900 dark:text-white border-t border-gray-200 dark:border-gray-600 lg:hidden">
        <div class="flex justify-between items-center h-full px-4 md:px-8">
            <div class="flex items-center text-gray-500 dark:text-gray-400 gap-2" id="prevMateri" style="cursor:pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5" style="margin-top: 2px">
                    <path class="dark:fill-white" fill="rgb(55 65 81)" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/>
                </svg>
                <p class="dark:text-white text-gray-900 font-semibold hidden sm:block">Sebelum</p>
            </div>
            <div class="flex items-center space-x-4">
                <button data-modal-target="pop-chat-mobile" data-modal-toggle="pop-chat-mobile" data-tooltip-target="tooltip-microphone" type="button" class="p-2.5 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:bg-gray-600 dark:hover:bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 640 512">
                        <path class="dark:fill-gray-300" fill="rgb(107, 114, 128)" d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2s0 0 0 0s0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.2-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9c0 0 0 0 0 0s0 0 0 0l-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z"/>
                    </svg>
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
            <div class="flex items-center text-gray-500 dark:text-gray-400 gap-2" id="nextMateri" style="cursor:pointer">
                <p class="dark:text-white text-gray-900 font-semibold hidden sm:block">Berikutnya</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5" style="margin-top: 2px">
                    <path class="dark:fill-white" fill="rgb(55 65 81)" d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/>
                </svg>
            </div>
        </div>
    </div>
    <!-- Footer Mobile Selesai  -->
    <!-- Card Chat Popup Mobile -->
    <div id="app">
        <x-PopUpChat/>
    </div>    
    <!-- Card Chat Popup Mobile Selesai -->
    <!-- Chat AI -->
    <div id="chat-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <div class="flex items-center">
                        <img src="{{asset('./images/bot_photoprofile.png')}}" alt="Profile" class="w-10 h-10 rounded-full">
                        <div class="title grid">
                            <h3 class="ms-4 text-lg font-semibold text-gray-900 dark:text-white">
                                Tanya Silva
                            </h3>
                            <div class="ms-4 status flex gap-1 items-center">
                                <div class="bg-green-500 w-2 h-2 rounded-full"></div>
                                <p class="text-sm font-light text-gray-900 dark:text-white">
                                    Aktif
                                </p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="chat-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div> 
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <div class="mb-4">
                        <!-- Chat messages -->
                        <div id="chat-box" class="flex flex-col space-y-4 h-64 overflow-y-auto">
                            <!-- Chat Sambutan -->
                            <div class="flex flex-col items-start">
                                <p class="text-gray-900 dark:text-white self-end mt-1 mb-2 font-semibold text-md">Silva</p>
                                <div class="bg-gray-50 dark:bg-gray-600 text-gray-900 dark:text-white px-3 py-3 max-w-xs chat-ai">
                                    <p>Halo Selamat Datang di Silvia</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <form id="chat-form" class="flex items-center space-x-2 relative">
                        <input type="text" name="chat" id="chat-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type your message here" required>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                                <path fill="#fff" d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376l0 103.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>  
    <!-- Chat AI Selesai -->  
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset('./js/main.js') }}"></script>
    <script src="{{ asset('./js/chat.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const materi = ["pengenalanKelas", "mekanismeBelajar", "forumDiskusi"];
            let currentIndex = 0;

            function getProgress() {
                let progress = localStorage.getItem("progress");
                return progress ? parseInt(progress) : 0; // Default to 0% if not set
            }

            function updateProgressDisplay() {
                const progress = getProgress();
                document.getElementById("progressText").innerText = `${progress}% Progress`;
                document.getElementById("progressBar").style.width = `${progress}%`;
            }

            function setProgress(progress) {
                localStorage.setItem("progress", progress);
            }

            function getVisitedMateri() {
                let visited = localStorage.getItem("visitedMateri");
                return visited ? JSON.parse(visited) : [];
            }

            function setVisitedMateri(visited) {
                localStorage.setItem("visitedMateri", JSON.stringify(visited));
            }

            function updateMateri() {
                materi.forEach((id, index) => {
                    document.getElementById(id).style.display = index === currentIndex ? "block" : "none";
                });

                let visitedMateri = getVisitedMateri();
                if (!visitedMateri.includes(currentIndex)) {
                    visitedMateri.push(currentIndex);
                    setVisitedMateri(visitedMateri);

                    let newProgress = getProgress() + 5;
                    setProgress(Math.min(newProgress, 100)); // Cap progress at 100%
                }

                updateProgressDisplay();
                updateStatusIcons();
            }

            function updateStatusIcons() {
                let visitedMateri = getVisitedMateri();
                materi.forEach((id, index) => {
                    const statusIcon = document.getElementById(`status${index + 1}`);
                    if (visitedMateri.includes(index)) {
                        statusIcon.innerHTML = `<path fill="#146ffe" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>`;
                    } else {
                        statusIcon.innerHTML = `<path fill="#146ffe" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/>`;
                    }
                });
            }

            function nextMateri() {
                if (currentIndex < materi.length - 1) {
                    currentIndex++;
                    updateMateri();
                }
            }

            function prevMateri() {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateMateri();
                }
            }

            // Attach event listeners to buttons
            document.getElementById("nextMateri").addEventListener("click", nextMateri);
            document.getElementById("prevMateri").addEventListener("click", prevMateri);

            updateMateri(); // Initial update
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const asideButton = document.getElementById('asideButton');
            const aside = document.querySelector('aside');
            const showSidebarButton = document.getElementById('showSidebarButton');
    
            // Fungsi untuk memeriksa mode layar
            function checkScreenMode() {
                if (window.innerWidth >= 1024) { // Sesuaikan dengan breakpoint untuk desktop
                    aside.classList.remove('hidden');
                    aside.classList.remove('slide-out');
                    aside.classList.add('slide-in');
                } else {
                    aside.classList.add('hidden');
                }
            }
    
            // Jalankan fungsi saat halaman dimuat
            checkScreenMode();
    
            // Jalankan fungsi saat ukuran layar berubah
            window.addEventListener('resize', checkScreenMode);
    
            // Event listener untuk tombol aside
            asideButton.addEventListener('click', function() {
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
    
            // Event listener untuk tombol showSidebarButton
            showSidebarButton.addEventListener('click', function() {
                if (aside.classList.contains('hidden') || aside.classList.contains('slide-out')) {
                    aside.classList.remove('hidden');
                    aside.classList.remove('slide-out');
                    aside.classList.add('slide-in');
                } else {
                    aside.classList.add('hidden');
                    aside.classList.remove('slide-in');
                    aside.classList.add('slide-out');
                }
            });
        });
    
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