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
        <header class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white py-6 px-6 flex items-center justify-between">
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
                <button id="userButton" data-dropdown-toggle="userMenu" class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-white md:me-0 dark:text-gray-500" type="button">
                    <span class="sr-only">Open user menu</span>
                    <p class="mr-5 text-lg">Riovaldo Alifyan Fahmi Rahman</p>
                    <img class="w-8 h-8 rounded-full mr-2 object-cover" src="{{asset('./images/user/profile.jpg')}}" alt="user photo">
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
        <div class="flex flex-1">
            {{-- <aside class="w-16 bg-white dark:bg-gray-900 text-gray-900 dark:text-white flex flex-col items-center py-4 space-y-4">
                <button class="p-2 rounded-full bg-secondary text-secondary-foreground hover:bg-secondary/80">💬</button>
                <button class="p-2 rounded-full bg-secondary text-secondary-foreground hover:bg-secondary/80">📋</button>
                <button class="p-2 rounded-full bg-secondary text-secondary-foreground hover:bg-secondary/80">⚙️</button>
            </aside> --}}
            <main class="flex-1 p-8">
                <h1 class="text-3xl font-bold mb-4">Forum Diskusi</h1>
                <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-2">Ekspektasi</h2>
                <p class="mb-4">
                    Dengan banyaknya jumlah siswa Dicoding Academy, kami tidak mengharapkan siswa untuk membaca semua diskusi atau komentar pada forum diskusi. Sebaliknya, bacalah hal-hal yang menurut Anda
                    menarik dan dapat membantu Anda dalam menyelesaikan kelas. Lebih baik lagi, jika Anda dapat membantu siswa lainnya dengan memberikan jawaban di bidang yang Anda pahami. Berbagi dalam forum
                    diskusi ini dapat pula membantu meningkatkan retensi ilmu Anda.
                </p>
                <p class="mb-4">
                    Peraturan paling penting adalah bersikap sopan dan memperlakukan semua siswa lain dan instruktur, dengan hormat. Pelanggaran etika ini dapat berakibat pada dikeluarkannya Anda dari kelas.
                </p>
                <p>
                    Anda akan memiliki akses ke forum diskusi kelas selama Anda aktif terdaftar ke kelas ini. Saat masa belajar Anda sudah habis, maka forum diskusi tidak akan dapat diakses. Namun, jika Anda
                    sukses menyelesaikan kelas (lulus dan sampai mendapatkan sertifikat kompetensi dari Dicoding), maka Anda tetap dapat mengakses forum diskusi kelas ini walau masa belajar Anda untuk kelas ini
                    telah habis.
                </p>
                </section>
                <section>
                <h2 class="text-2xl font-semibold mb-2">Sebelum Mulai Bertanya</h2>
                <ol class="list-decimal pl-6">
                    <li class="mb-2">
                    Sebelum membuat diskusi baru, gunakan fitur pencarian untuk cek diskusi lama terlebih dahulu. Problem Anda mungkin pernah dibahas dan dijawab solusinya, dalam forum. Dengan begitu, Anda
                    pun tidak perlu menghabiskan waktu untuk bertanya dan untuk menunggu jawaban kembali.
                    </li>
                </ol>
                </section>
            </main>
        
            <aside class="w-80 bg-white dark:bg-gray-900 text-gray-900 dark:text-white p-4">
                <div class="flex items-center justify-between mb-4">
                <button class="p-2 rounded-full bg-primary text-primary-foreground hover:bg-primary/80">➡️</button>
                <h2 class="text-xl font-semibold">Daftar Modul</h2>
                </div>
                <div class="mb-4">
                <div class="h-2 bg-muted rounded-full overflow-hidden">
                    <div class="w-1/50 bg-primary h-full"></div>
                </div>
                <span class="text-muted-foreground">2% Selesai</span>
                </div>
                <ul class="space-y-2">
                <li>
                    <h3 class="text-lg font-semibold">Persiapan Belajar</h3>
                    <ul class="pl-4 space-y-1">
                    <li class="flex justify-between">
                        <span>Persetujuan Hak Cipta</span>
                        <span class="text-muted-foreground">(Gratis)</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Pengenalan Kelas</span>
                        <span class="text-muted-foreground">(Gratis)</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Mekanisme Belajar</span>
                        <span class="text-muted-foreground">(Gratis)</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Forum Diskusi</span>
                        <span class="text-muted-foreground">(Gratis)</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Glosarium</span>
                        <span class="text-muted-foreground">(Gratis)</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Daftar Referensi</span>
                        <span class="text-muted-foreground">(Gratis)</span>
                    </li>
                    </ul>
                </li>
                <li>
                    <h3 class="text-lg font-semibold">Pengenalan JavaScript</h3>
                    <span class="text-muted-foreground">0/5</span>
                </li>
                <li>
                    <h3 class="text-lg font-semibold">Fundamental JavaScript</h3>
                    <span class="text-muted-foreground">0/13</span>
                </li>
                <li>
                    <h3 class="text-lg font-semibold">Struktur Data</h3>
                    <span class="text-muted-foreground">0/15</span>
                </li>
                <li>
                    <h3 class="text-lg font-semibold">Function</h3>
                    <span class="text-muted-foreground">0/9</span>
                </li>
                <li>
                    <h3 class="text-lg font-semibold">Object-Oriented Programming (OOP)</h3>
                    <span class="text-muted-foreground">0/11</span>
                </li>
                <li>
                    <h3 class="text-lg font-semibold">Functional Programming</h3>
                    <span class="text-muted-foreground">0/7</span>
                </li>
                </ul>
            </aside>
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
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script> 
</body>
</html>