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
        <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
            <div class="py-8 px-4 mx-auto max-w-screen-xl gap-3">
                <div class="flex">
                    <div class="sticky top-4 overflow-y-auto sidebar section-title bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 py-5 px-5 sm:hidden lg:block hidden" style="width: 300px; height: 700px;">
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
                            <div class="flex items-center mb-4 checkbox-item">
                                <input checked id="checked-checkbox" type="checkbox" value="Semua" class="tingkatan-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Semua Tingkatan</label>
                            </div>
                            <div class="flex items-center mb-4 checkbox-item">
                                <input id="dasar-checkbox" type="checkbox" value="Dasar" class="tingkatan-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="dasar-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dasar</label>
                            </div>
                            <div class="flex items-center mb-4 checkbox-item">
                                <input id="pemula-checkbox" type="checkbox" value="Pemula" class="tingkatan-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="pemula-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pemula</label>
                            </div>
                            <div class="flex items-center mb-4 checkbox-item">
                                <input id="menengah-checkbox" type="checkbox" value="Menengah" class="tingkatan-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="menengah-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menengah</label>
                            </div>
                            <div class="flex items-center mb-4 checkbox-item">
                                <input id="jago-checkbox" type="checkbox" value="Jago" class="tingkatan-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="jago-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jago</label>
                            </div>
                            <div class="flex items-center mb-4 checkbox-item">
                                <input id="profesional-checkbox" type="checkbox" value="Profesional" class="tingkatan-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="profesional-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Profesional</label>
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
                    <div class="cards">
                        <div id="natural-processing-btn" class="grid lg:grid-cols-3 gap-3 md:grid-cols-2 sm:grid-cols-1 natr">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 20px" data-tags="Semua Dasar">
                                <img class="rounded-t-lg" src="{{ asset('./images/thumbnail/thumbnail1.png') }}" alt="" />
                                <div class="p-5">
                                    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Pengenalan Dasar Natural Language Pr...</h5>
                                    <div class="mb-4 flex flex-wrap gap-4">
                                    <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                                        <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                                        </svg>
                                        30 Jam
                                    </p>
                                    <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                                            <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                                        </svg>
                                        4,5
                                    </p>
                                    <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                        <img src="{{ asset('./images/dasar.svg') }}" class="w-5 h-5" alt="" /> 
                                        Dasar
                                    </p>
                                    </div>
                                    <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                                    <p class="flex flex-wrap gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                                            <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                                        </svg>
                                        120 Modul
                                    </p>
                                    <p class="flex flex-wrap gap-2 text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                                            <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                        </svg>
                                        Pengguna Terdaftar
                                    </p>
                                    </div>
                                    <div class="flex items-end justify-between">
                                    <div class="grid harga">
                                        <div class="gap-2 flex flex-row mb-2">
                                        <p class="py-1 px-3 font-semibold text-white rounded-md bg-green-500">70%</p>
                                        <p class="self-center text-blue-500 text-small font-light line-through">Rp 500.000</p>
                                        </div>                    
                                        <p class="text-gray-900 dark:text-white text-2xl font-semibold">Rp 150.000</p>
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <a href="javascript:void(0)" class="text-md">Gabung Kelas</a>
                                        </button>
                                    </div>
                                    </div> 
                                </div>
                            </div>                          
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 20px" data-tags="Semua Dasar">
                                <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
                                <div class="p-5">
                                    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Bahasa Pemrograman Python</h5>
                                    <div class="mb-4 flex flex-wrap gap-4">
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                                                <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                                            </svg>
                                            30 Jam
                                        </p>
                                        <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                                                <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                                            </svg>
                                            4,5
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <img src="{{asset('./images/dasar.svg')}}" class="w-5 h-5" alt="" /> 
                                            Dasar
                                        </p>
                                    </div>
                                    <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                                        <p class="flex flex-wrap gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                                            </svg>
                                            120 Modul
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                            </svg>
                                            Pengguna Terdaftar
                                        </p>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <div class="grid harga">
                                        <div class="gap-2 flex flex-row mb-2">
                                            <p class="py-1 px-3 font-semibold text-white rounded-md bg-green-500">70%</p>
                                            <p class="self-center text-blue-500 text-small font-light line-through">Rp 500.000</p>
                                        </div>                    
                                        <p class="text-gray-900 dark:text-white text-2xl font-semibold">Rp 150.000</p>
                                        </div>
                                        <div class="flex justify-end">
                                            <button id="checkout-button" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <a href="/course/belajar-bahasa-pemrograman-python" id="button-text" class="text-md">Gabung Kelas</a>
                                            </button>
                                        </div>
                                        <div class="flex justify-end">
                                            <button id="continue-button" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 hidden">
                                                <a href="/course/belajar-bahasa-pemrograman-python/persiapan" class="text-md">Lanjut Belajar</a>
                                            </button>
                                        </div>
                                    </div>                                                  
                                </div>
                            </div>                    
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 20px" data-tags="Semua Pemula">
                                <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
                                <div class="p-5">
                                    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Menganalisis Sentimen Dasar</h5>
                                    <div class="mb-4 flex flex-wrap gap-4">
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                                                <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                                            </svg>
                                            30 Jam
                                        </p>
                                        <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                                                <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                                            </svg>
                                            4,5
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <img src="{{asset('./images/pemula.svg')}}" class="w-5 h-5" alt="" /> 
                                            Pemula
                                        </p>
                                    </div>
                                    <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                                        <p class="flex flex-wrap gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                                            </svg>
                                            120 Modul
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                            </svg>
                                            Pengguna Terdaftar
                                        </p>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <div class="grid harga">
                                        <div class="gap-2 flex flex-row mb-2">
                                            <p class="py-1 px-3 font-semibold text-white rounded-md bg-green-500">70%</p>
                                            <p class="self-center text-blue-500 text-small font-light line-through">Rp 500.000</p>
                                        </div>                    
                                        <p class="text-gray-900 dark:text-white text-2xl font-semibold">Rp 150.000</p>
                                        </div>
                                        <div class="flex justify-end">
                                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <a href="javascript:void(0)" class="text-md">Gabung Kelas</a>
                                        </button>
                                        </div>
                                    </div>                             
                                </div>
                            </div>                    
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 20px" data-tags="Semua Menengah">
                                <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
                                <div class="p-5">
    
                                    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Teknik Machine Learning untuk NLP</h5>
                                    <div class="mb-4 flex flex-wrap gap-4">
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                                                <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                                            </svg>
                                            30 Jam
                                        </p>
                                        <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                                                <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                                            </svg>
                                            4,5
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <img src="{{asset('./images/menengah.svg')}}" class="w-5 h-5" alt="" /> 
                                            Menengah
                                        </p>
                                    </div>
                                    <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                                        <p class="flex flex-wrap gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                                            </svg>
                                            120 Modul
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                            </svg>
                                            Pengguna Terdaftar
                                        </p>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <div class="grid harga">
                                        <div class="gap-2 flex flex-row mb-2">
                                            <p class="py-1 px-3 font-semibold text-white rounded-md bg-green-500">70%</p>
                                            <p class="self-center text-blue-500 text-small font-light line-through">Rp 500.000</p>
                                        </div>                    
                                        <p class="text-gray-900 dark:text-white text-2xl font-semibold">Rp 150.000</p>
                                        </div>
                                        <div class="flex justify-end">
                                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <a href="javascript:void(0)" class="text-md">Gabung Kelas</a>
                                        </button>
                                        </div>
                                    </div>                          
                                </div>
                            </div>                    
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 20px" data-tags="Semua Menengah">
                                <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
                                <div class="p-5">
                                    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Memahami Lebih Dalam Tentang Parsing</h5>
                                    <div class="mb-4 flex flex-wrap gap-4">
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                                                <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                                            </svg>
                                            30 Jam
                                        </p>
                                        <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                                                <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                                            </svg>
                                            4,5
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <img src="{{asset('./images/menengah.svg')}}" class="w-5 h-5" alt="" /> 
                                            Menengah
                                        </p>
                                    </div>
                                    <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                                        <p class="flex flex-wrap gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                                            </svg>
                                            120 Modul
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                            </svg>
                                            Pengguna Terdaftar
                                        </p>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <div class="grid harga">
                                        <div class="gap-2 flex flex-row mb-2">
                                            <p class="py-1 px-3 font-semibold text-white rounded-md bg-green-500">70%</p>
                                            <p class="self-center text-blue-500 text-small font-light line-through">Rp 500.000</p>
                                        </div>                    
                                        <p class="text-gray-900 dark:text-white text-2xl font-semibold">Rp 150.000</p>
                                        </div>
                                        <div class="flex justify-end">
                                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <a href="javascript:void(0)" class="text-md">Gabung Kelas</a>
                                        </button>
                                        </div>
                                    </div>                          
                                </div>
                            </div>                    
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 20px" data-tags="Semua Jago">
                                <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
                                <div class="p-5">
    
                                    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Pemodelan Bahasa Neural Networks</h5>
                                    <div class="mb-4 flex flex-wrap gap-4">
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                                                <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                                            </svg>
                                            30 Jam
                                        </p>
                                        <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                                                <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                                            </svg>
                                            4,5
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <img src="{{asset('./images/jago.svg')}}" class="w-5 h-5" alt="" /> 
                                            Jago
                                        </p>
                                    </div>
                                    <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                                        <p class="flex flex-wrap gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                                            </svg>
                                            120 Modul
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                            </svg>
                                            Pengguna Terdaftar
                                        </p>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <div class="grid harga">
                                        <div class="gap-2 flex flex-row mb-2">
                                            <p class="py-1 px-3 font-semibold text-white rounded-md bg-green-500">70%</p>
                                            <p class="self-center text-blue-500 text-small font-light line-through">Rp 500.000</p>
                                        </div>                    
                                        <p class="text-gray-900 dark:text-white text-2xl font-semibold">Rp 150.000</p>
                                        </div>
                                        <div class="flex justify-end">
                                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <a href="javascript:void(0)" class="text-md">Gabung Kelas</a>
                                        </button>
                                        </div>
                                    </div>                          
                                </div>
                            </div>                    
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 20px" data-tags="Semua Jago">
                                <img class="rounded-t-lg" src="{{ asset('./images/thumbnail/thumbnail1.png') }}" alt="" />
                                <div class="p-5">
                                    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Memahami Generasi Teks dan Penerjemah Mesin</h5>
                                    <div class="mb-4 flex flex-wrap gap-4">
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                                                <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                                            </svg>
                                            30 Jam
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                                                <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                                            </svg>
                                            4,5
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <img src="{{ asset('./images/jago.svg') }}" class="w-5 h-5" alt="" /> 
                                            Jago
                                        </p>
                                    </div>
                                    <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                                        <p class="flex flex-wrap gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                                            </svg>
                                            120 Modul
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                            </svg>
                                            Pengguna Terdaftar
                                        </p>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <div class="grid harga">
                                        <div class="gap-2 flex flex-row mb-2">
                                            <p class="py-1 px-3 font-semibold text-white rounded-md bg-green-500">70%</p>
                                            <p class="self-center text-blue-500 text-small font-light line-through">Rp 500.000</p>
                                        </div>                    
                                        <p class="text-gray-900 dark:text-white text-2xl font-semibold">Rp 150.000</p>
                                        </div>
                                        <div class="flex justify-end">
                                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <a href="javascript:void(0)" class="text-md">Gabung Kelas</a>
                                        </button>
                                        </div>
                                    </div>                                                                                                                            
                                </div>
                            </div>                                              
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 20px" data-tags="Semua Profesional">
                                <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
                                <div class="p-5">
                                    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Pengoptimalan model NLP dan Strategi Pen..</h5>
                                    <div class="mb-4 flex flex-wrap gap-4">
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                                                <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                                            </svg>
                                            30 Jam
                                        </p>
                                        <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                                                <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                                            </svg>
                                            4,5
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                                            <img src="{{asset('./images/profesional.svg')}}" class="w-5 h-5" alt="" /> 
                                            Profesional
                                        </p>
                                    </div>
                                    <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                                        <p class="flex flex-wrap gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                                            </svg>
                                            120 Modul
                                        </p>
                                        <p class="flex flex-wrap gap-2 text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                                                <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                            </svg>
                                            Pengguna Terdaftar
                                        </p>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <div class="grid harga">                
                                        <p class="text-gray-900 dark:text-white text-2xl font-semibold">Rp 400.000</p>
                                        </div>
                                        <div class="flex justify-end">
                                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <a href="javascript:void(0)" class="text-md">Gabung Kelas</a>
                                        </button>
                                        </div>
                                    </div>                          
                                </div>
                            </div>                    
                        </div>
                    </div>
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
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const checkoutButton = document.getElementById('checkout-button');
                const continueButton = document.getElementById('continue-button');

                // Periksa status pembayaran dari database
                axios.get('/order/status')
                    .then(response => {
                        console.log(response.data); // Tambahkan ini untuk memeriksa respons API
                        const paymentStatus = response.data.status; // Misalnya, 'success' atau 'pending'
                        if (paymentStatus === 'success') {
                            checkoutButton.classList.add('hidden');
                            continueButton.classList.remove('hidden');
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching payment status:', error);
                    });
            });
        </script>
        <script>
            document.getElementById('filterButton').addEventListener('click', function() {
                var background = document.getElementById('background');
                if (background.classList.contains('hidden')) {
                    background.classList.remove('hidden');
                } else {
                    background.classList.add('hidden');
                }
            });
            document.getElementById('filterButton').addEventListener('click', function() {
                var backgroundOpacity = document.getElementById('backgroundOpacity');
                if (backgroundOpacity.classList.contains('hidden')) {
                    backgroundOpacity.classList.remove('hidden');
                } else {
                    backgroundOpacity.classList.add('hidden');
                }
            });
            document.getElementById('closeIcon').addEventListener('click', function() {
                document.getElementById('background').classList.add('hidden');
                document.getElementById('backgroundOpacity').classList.add('hidden');
            });
        </script>        
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            const checkboxes = document.querySelectorAll('.tingkatan-checkbox');

            checkboxes.forEach((checkbox) => {
                checkbox.addEventListener('change', function () {
                    checkboxes.forEach((cb) => {
                        if (cb !== checkbox) {
                            cb.checked = false;
                        }
                    });

                    // Sesuaikan konten yang ditampilkan berdasarkan pilihan checkbox
                    filterCards();
                });
            });

            function filterCards() {
                const selectedCheckbox = document.querySelector('.tingkatan-checkbox:checked');
                const selectedValue = selectedCheckbox ? selectedCheckbox.value : 'Semua';

                const cards = document.querySelectorAll('.cards .max-w-sm');
                cards.forEach((card) => {
                    const tags = card.getAttribute('data-tags').split(' ');
                    if (tags.includes(selectedValue) || selectedValue === 'Semua') {
                        card.classList.remove('hidden');
                    } else {
                        card.classList.add('hidden');
                    }
                });
            }

            // Panggil fungsi filterCards saat halaman dimuat
            filterCards();
        });
        </script>
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