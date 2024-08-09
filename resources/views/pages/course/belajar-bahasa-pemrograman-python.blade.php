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
    <!-- Jumbotron 1 Mulai -->
    <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')] py-8 lg:py-16">
      <div class="px-4 mx-auto max-w-screen-xl text-left z-10 relative"> 
        <div class="grid grid-row text-center items-center relative jumbs1">
          <h1 class="font-extrabold tracking-tight leading-none text-gray-900 dark:text-white justify-center text-center mb-10">Belajar Bahasa Pemrograman Python</h1>  
          <div class="information flex flex-row justify-center items-center lg:gap-8 sm:gap-4 gap-4 lg:mt-5 mt-5 sm:hidden lg:flex hidden">
            <div class="release flex flex-row justify-center items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"/>
              </svg>
              <h1 class="font-semibold lg:text-md sm:text-sm text-sm dark:text-white text-gray-900">Kelas dirilis sejak Juli 2024</h1>
            </div>
            <div class="release flex flex-row justify-center items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
              </svg>
              <h1 class="font-semibold lg:text-md sm:text-sm text-sm dark:text-white text-gray-900">39 Menit Belajar</h1>
            </div>
          </div>
          <div class="more-information flex flex-row justify-center items-center lg:mt-5 mt-10 sm:mt-2 sm:hidden lg:flex hidden" style="gap: 40px">
            <div class="release flex flex-col items-center text-center gap-2">
              <h1 class="font-semibold lg:text-md sm:text-sm text-lg dark:text-white text-gray-900">Pelajar Terdaftar</h1>
              <p class="font-semibold lg:text-md sm:text-sm text-lg dark:text-white text-gray-900">400</p>
            </div>
            <div class="release flex flex-col items-center text-center gap-2">
              <h1 class="font-semibold lg:text-md sm:text-sm text-lg dark:text-white text-gray-900">Level</h1>
              <img src="{{asset('./images/dasar.svg')}}" class="w-6 h-6" alt="">
            </div>
            <div class="release flex flex-col items-center text-center gap-2" style="margin-top:7px">
              <h1 class="font-semibold lg:text-md sm:text-sm text-lg dark:text-white text-gray-900">Sertifikat</h1>
              <div class="checklist-circle">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_981_529)">
                  <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                  <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_981_529">
                  <rect width="24" height="24" fill="white"/>
                  </clipPath>
                  </defs>
                </svg>                            
              </div>
            </div>           
          </div>        
        </div>
        <div class="flex flex-col lg:flex-row gap-6 p-6">
          <!-- Image and Description Section -->
          <div class="lg:w-1/2">
            <div class="aspect-w-20 aspect-h-12">
              <img width="2100px" height="2100px" style="border-radius:20px" src="{{asset('/images/thumbnail.jpg')}}" alt="Course Thumbnail">
            </div>
          </div>              
          <!-- Lessons Section -->
          <div id="product-list" class="lg:block hidden bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 w-full lg:w-1/2 h-full mt-16" style="border-radius: 20px; position: relative;">
            <!-- Mode Desktop -->
            <div id="product" class="p-6">
                <h3 class="text-black dark:text-white text-lg font-semibold">13 Modul (39 mins)</h3>
                <ul class="mt-4 space-y-2">
                    <li class="flex justify-between items-center bg-white dark:bg-gray-600 p-4 shadow" style="border-radius: 10px">
                        <span class="text-black dark:text-white">Intoduction to Python</span>
                        <span class="text-black dark:text-white">3 mins</span>
                    </li>
                    <li class="flex justify-between items-center bg-white dark:bg-gray-600 p-4 shadow" style="border-radius: 10px">
                        <span class="text-black dark:text-white">Belajar Data Variabel</span>
                        <span class="text-black dark:text-white">3 mins</span>
                    </li>
                    <li class="flex justify-between items-center bg-white dark:bg-gray-600 p-4 shadow" style="border-radius: 10px">
                        <span class="text-black dark:text-white">Belajar Operator Perbandingan</span>
                        <span class="text-black dark:text-white">3 mins</span>
                    </li>
                    <li class="flex justify-between items-center bg-white dark:bg-gray-600 p-4 shadow" style="border-radius: 10px">
                        <span class="text-black dark:text-white">Memahami Logical Operator</span>
                        <span class="text-black dark:text-white">3 mins</span>
                    </li>
                    <li class="flex justify-between items-center bg-white dark:bg-gray-600 p-4 shadow" style="border-radius: 10px">
                        <span class="text-black dark:text-white">15 modul lainnya</span>
                    </li>
                </ul>
            </div>
            <!-- Tombol Gabung Kelas -->
            <button id="checkout-button" type="submit" class="w-full mt-6 py-6 font-medium text-white bg-blue-700 rounded" style="border-radius: 0px 0px 20px 20px; font-size:22px">
              Gabung Kelas
            </button>

            <!-- Tombol Lanjut Kelas -->
            <button id="success-link" type="button" class="w-full mt-6 py-6 font-medium text-white bg-green-500 rounded hidden" style="border-radius: 0px 0px 20px 20px; font-size:22px">
              Lanjut Belajar
            </button>
          </div>          
        </div>
      </div>
      <!-- Course Details -->
      <div class="px-4 mx-auto max-w-screen-xl text-left z-10 relative">
        <div class="flex flex-col lg:flex-row gap-6 p-6">
          <div class="">
            <!-- Navigation Buttons -->
            <div class="button-container mb-10">
              <button id="aboutBtn" type="button" class="nav-button px-5 py-3 text-base font-medium text-center text-white bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="border-radius:50px; flex-shrink: 0;">Tentang Course</button>
              <button id="teachBtn" type="button" class="nav-button px-5 py-3 text-base font-medium text-center text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" style="border-radius:50px; flex-shrink: 0;">Metode Pembelajaran</button>
              <button id="toolsBtn" type="button" class="nav-button px-5 py-3 text-base font-medium text-center text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" style="border-radius:50px; flex-shrink: 0;">Tools</button>
            </div>                          
            <!-- Course Description -->
            <div id="content" class="content-section">
              <div id="aboutContent" class="active">
                <h2 class="text-black dark:text-white text-xl font-bold mb-3 lg:marg-lg sm:marg-sm" style="font-size: 25px;">Develop Your Skills</h2>
                <p class="mt-2 text-black dark:text-white">
                  Kami sangat senang menyambut Anda dalam perjalanan menarik untuk mempelajari salah satu bahasa pemrograman paling populer di dunia. Python dikenal karena kesederhanaan dan kekuatannya, menjadikannya pilihan yang tepat bagi pemula yang baru memulai petualangan mereka di dunia pemrograman.
                </p>
                <p class="mt-6 text-black dark:text-white">
                  Pada kursus ini, Anda akan dibimbing langkah demi langkah dalam memahami konsep dasar Python, dan kami yakin bahwa dengan dedikasi dan latihan, Anda akan mampu menguasai dasar-dasar pemrograman Python dengan baik.
                </p>
                <!-- Key Points -->
                <h2 class="text-black dark:text-white text-xl font-bold mb-7 lg:marg-lg mt-10" style="font-size: 25px;">Tujuan Course Ini</h2>
                <div class="grid grid-cols-2 gap-6">
                  <!-- Kiri -->
                  <div>
                    <li class="checklist-item">
                      <div class="checklist-circle">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_981_529)">
                          <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                          <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_981_529">
                          <rect width="24" height="24" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                            
                      </div>
                      <span class="checklist-text dark:text-gray-300 text-gray-500 sm:text-sm">Memahami Logical Operator</span>
                    </li>
                    <li class="checklist-item">
                      <div class="checklist-circle">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_981_529)">
                          <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                          <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_981_529">
                          <rect width="24" height="24" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                            
                      </div>
                      <span class="checklist-text dark:text-gray-300 text-gray-500 sm:text-sm">Memahami Operator Aritmatika</span>
                    </li>
                  </div>
                  <!-- Kanan -->
                  <div>
                    <li class="checklist-item">
                      <div class="checklist-circle">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_981_529)">
                          <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                          <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_981_529">
                          <rect width="24" height="24" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                            
                      </div>
                      <span class="checklist-text dark:text-gray-300 text-gray-500 sm:text-sm">Mempelajari Looping Data List</span>
                    </li>
                    <li class="checklist-item">
                      <div class="checklist-circle">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_981_529)">
                          <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                          <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_981_529">
                          <rect width="24" height="24" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                            
                      </div>
                      <span class="checklist-text dark:text-gray-300 text-gray-500 sm:text-sm">Mempelajari Operator Perbandingan</span>
                    </li>
                  </div>
                </div>
              </div>
              <div id="teachContent" class="hidden">
                <h2 class="text-black dark:text-white text-xl font-bold lg:marg-lg sm:marg-sm" style="font-size: 25px;">Metode Pembelajaran</h2>
                <p class="mt-2 text-black dark:text-white">
                  Kami sangat senang menyambut Anda dalam perjalanan menarik untuk mempelajari salah satu bahasa pemrograman paling populer di dunia. Dalam kursus ini, Anda akan diperkenalkan pada Python melalui pendekatan yang terstruktur dan interaktif. Kami percaya bahwa metode pembelajaran yang tepat akan membantu Anda menguasai konsep dasar dengan lebih mudah dan menyenangkan.
                </p>
                <!-- Key Points -->
                <h2 class="text-black dark:text-white text-xl font-bold mb-7 lg:marg-lg mt-5" style="font-size: 25px;">Online - Self Learning</h2>
                <div class="grid grid-cols-2 gap-6">
                  <!-- Kiri -->
                  <div>
                    <li class="checklist-item">
                      <div class="checklist-circle">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_981_529)">
                          <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                          <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_981_529">
                          <rect width="24" height="24" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                            
                      </div>
                      <span class="checklist-text dark:text-gray-300 text-gray-500 sm:text-sm">Total jam belajar : 39 menit </span>
                    </li>
                  </div>
                </div>
                <h2 class="text-black dark:text-white text-xl font-bold mb-7 lg:marg-lg mt-5" style="font-size: 25px;">Fasilitas Pembelajaran</h2>
                <div class="">
                  <!-- Kiri -->
                  <div>
                    <li class="checklist-item">
                      <div class="checklist-circle">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_981_529)">
                          <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                          <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_981_529">
                          <rect width="24" height="24" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                            
                      </div>
                      <span class="checklist-text dark:text-gray-300 text-gray-500 sm:text-sm">Modul bacaan elektronik : Materi akan berbentuk teks dan bacaan </span>
                    </li>
                    <li class="checklist-item">
                      <div class="checklist-circle">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_981_529)">
                          <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                          <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_981_529">
                          <rect width="24" height="24" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                            
                      </div>
                      <span class="checklist-text dark:text-gray-300 text-gray-500 sm:text-sm">Forum Diskusi : Setiap kelas akan ada forum sendiri untuk bertanya dan berdiskusi</span>
                    </li>
                    <li class="checklist-item">
                      <div class="checklist-circle">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_981_529)">
                          <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                          <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_981_529">
                          <rect width="24" height="24" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                            
                      </div>
                      <span class="checklist-text dark:text-gray-300 text-gray-500 sm:text-sm">Project Akhir : Ujian akhir kelas akan diberi mini project sebagai evaluasi pembelajaran</span>
                    </li>
                    <li class="checklist-item">
                      <div class="checklist-circle">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_981_529)">
                          <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                          <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_981_529">
                          <rect width="24" height="24" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                            
                      </div>
                      <span class="checklist-text dark:text-gray-300 text-gray-500 sm:text-sm">Sertifikat Kompetensi</span>
                    </li>
                  </div>
                </div>
              </div>
              <div id="toolsContent" class="hidden">
                <h2 class="text-black dark:text-white text-xl font-bold mb-3" style="font-size: 25px;">Tools yang dibutuhkan</h2>
                <p class="mt-2 text-black dark:text-white ">
                  Penting untuk memastikan bahwa semua tools yang diperlukan sudah terinstal pada device kalian sebelum memulai kelas. Persiapan ini sangat penting agar kalian dapat mengikuti materi dengan lancar tanpa gangguan teknis, Oleh karena itu, sebelum memulai kelas, pastikan semua tools yang akan digunakan sudah terpasang dan berfungsi dengan baik di perangkat kalian agar kalian tidak terhambat proses belajar.
                </p>
                <p class="mt-6 text-black dark:text-white">
                  Dengan begitu, kalian akan siap untuk mengikuti setiap sesi kelas dengan efektif dan tanpa hambatan teknis. Persiapan yang baik adalah kunci untuk pengalaman belajar yang sukses dan menyenangkan.
                </p>
                <!-- Card Tools -->
                <div class="mt-10">
                  <div class="w-25 overflow-hidden">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                      <div class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 p-6 flex flex-col items-start" style="border-radius: 15px">
                        <img src="{{asset('/images/chorme.png')}}" alt="Web Browser logo" class="mb-4" width="70px" height="70px" />
                        <h2 class="text-lg text-black dark:text-white mb-2 font-bold">Chorme Web Browser</h2>
                        <p class="text-black dark:text-white mb-4">Software Gratis</p>
                        <button type="button" class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="border-radius: 12px">
                          <a href="https://chromeenterprise.google/download/" target="_blank">Download Disini</a>
                        </button>
                      </div>
                      <div class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 p-6 flex flex-col items-start" style="border-radius: 15px">
                        <img src="{{asset('/images/front-end.png')}}" alt="Visual Studio Code logo" class="mb-4" width="70px" height="70px" />
                        <h2 class="text-lg text-black dark:text-white mb-2 font-bold">Visual Studio Code</h2>
                        <p class="text-black dark:text-white mb-4">Software Gratis</p>
                        <button type="button" class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="border-radius: 12px">
                          <a href="https://code.visualstudio.com" target="_blank">Download Disini</a>
                        </button>
                      </div>
                      <div class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 p-6 flex flex-col items-start" style="border-radius: 15px">
                        <img src="{{asset('/images/python.png')}}" alt="Python logo" class="mb-4" width="85 px" height="85 px" />
                        <h2 class="text-lg text-black dark:text-white mb-2 font-bold">Python</h2>
                        <p class="text-black dark:text-white mb-4">Bahasa Pemrograman</p>
                        <button type="button" class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="border-radius: 12px">
                          <a href="https://www.python.org" target="_blank">Download Disini</a>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>                    
              </div>
            </div>
            <!-- Mentor -->
            <h2 class="text-black dark:text-white text-xl font-bold lg:marg-lg sm:marg-sm mt-10 mb-7" style="font-size: 25px;">Mentor</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="w-full bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden"  style="border-radius: 20px">
                <div class="p-6">
                  <div class="mb-6">
                    <div class="flex items-center mb-2">
                      <h2 class="text-lg font-semibold text-black dark:text-white">Mentor</h2>
                      <span class="ml-2 text-black dark:text-white text-sm font-medium px-2.5 py-0.5 rounded dark:bg-gray-900 bg-white">2</span>
                    </div>
                    <p class="text-muted-foreground mb-4 text-black dark:text-white">Mentor hebat yang membangun kelas ini :</p>
                    <div class="space-y-4">
                      <div class="flex items-center space-x-4">
                        <img src="{{{asset('./images/mentor/mentor1.png')}}}" alt="Rizky Pratama" class="w-10 h-10 rounded-full object-cover" />
                        <div>
                          <p class="font-semibold text-black dark:text-white">Rizky Pratama</p>
                          <p class="text-sm text-muted-foreground text-black dark:text-white">Python Automation Specialist</p>
                        </div>
                      </div>
                      <div class="flex items-center space-x-4">
                        <img src="{{{asset('./images/mentor/mentor2.png')}}}" alt="Agus Kurniawan" class="w-10 h-10 rounded-full object-cover" />
                        <div>
                          <p class="font-semibold text-black dark:text-white">Agus Kurniawan</p>
                          <p class="text-sm text-muted-foreground text-black dark:text-white">Python Software Engineer</p>
                        </div>
                      </div>
                    </div>
                  </div>              
                  <div>
                    <div class="flex items-center mb-2">
                      <h2 class="text-lg font-semibold text-black dark:text-white">Reviewer</h2>
                      <span class="ml-2 text-black dark:text-white text-sm font-medium px-2.5 py-0.5 rounded dark:bg-gray-900 bg-white">3</span>
                    </div>
                    <p class="text-muted-foreground mb-4 text-black dark:text-white">Reviewer yang akan menilai hasil project akhir kamu :</p>
                    <div class="flex space-x-4">
                      <img src="{{{asset('./images/mentor/mentor1.png')}}}" alt="Reviewer 1" class="w-10 h-10 rounded-full object-cover" data-tooltip-target="Rizky Pratama" />
                      <img src="{{{asset('./images/mentor/mentor2.png')}}}" alt="Reviewer 2" class="w-10 h-10 rounded-full object-cover" data-tooltip-target="Agus Kurniawan"/>
                      <img src="{{{asset('./images/mentor/mentor3.png')}}}" alt="Reviewer 3" class="w-10 h-10 rounded-full object-cover" data-tooltip-target="Andi Wijaya"/>
                    </div>
                    <!-- Tooltips -->
                    <div id="Rizky Pratama" role="tooltip" class="duration-300 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                      Rizky Pratama
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <div id="Agus Kurniawan" role="tooltip" class="duration-300 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                      Agus Kurniawan
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <div id="Andi Wijaya" role="tooltip" class="duration-300 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                      Andi Wijaya
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <!-- Tooltips Selesai -->
                  </div>              
                </div>
              </div>
              <div class="w-full hidden bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden mt-10"  style="border-radius: 20px">
                <div class="p-6">
                  <div class="mb-6">
                    <div class="flex items-center mb-2">
                      <h2 class="text-lg font-semibold">Kontributor</h2>
                      <span class="ml-2 bg-zinc-200 text-zinc-800 text-sm font-medium px-2.5 py-0.5 rounded">3</span>
                    </div>
                    <p class="text-muted-foreground mb-4">Curriculum Developer yang membangun kelas ini:</p>
                    <div class="space-y-4">
                      <div class="flex items-center space-x-4">
                        <img src="https://placehold.co/40x40" alt="Raka Adi Nugroho" class="w-10 h-10 rounded-full" />
                        <div>
                          <p class="font-semibold">Raka Adi Nugroho</p>
                          <p class="text-sm text-muted-foreground">Lead Software Engineer - Mobile at Kitalulus.com</p>
                        </div>
                      </div>
                      <div class="flex items-center space-x-4">
                        <img src="https://placehold.co/40x40" alt="Dimas Maulana Dwi Saputra" class="w-10 h-10 rounded-full" />
                        <div>
                          <p class="font-semibold">Dimas Maulana Dwi Saputra</p>
                          <p class="text-sm text-muted-foreground">Curriculum Developer at Dicoding Indonesia</p>
                        </div>
                      </div>
                    </div>
                  </div>              
                  <div>
                    <div class="flex items-center mb-2">
                      <h2 class="text-lg font-semibold">Reviewer</h2>
                      <span class="ml-2 bg-zinc-200 text-zinc-800 text-sm font-medium px-2.5 py-0.5 rounded">3</span>
                    </div>
                    <p class="text-muted-foreground mb-4">Code Reviewer yang akan me-review tugas dan kode Anda:</p>
                    <div class="flex space-x-4">
                      <img src="https://placehold.co/40x40" alt="Reviewer 1" class="w-10 h-10 rounded-full" />
                      <img src="https://placehold.co/40x40" alt="Reviewer 2" class="w-10 h-10 rounded-full" />
                      <img src="https://placehold.co/40x40" alt="Reviewer 3" class="w-10 h-10 rounded-full" />
                    </div>
                  </div>              
                  <div class="mt-6">
                    <a href="#" class="text-primary hover:underline">Lihat semua kontributor dan reviewer</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Mentor Selesai -->
            <!-- Rundown -->
            <div id="lessonsSection" class="mt-10">
              <h2 class="text-black dark:text-white text-xl font-bold mb-7 lg:marg-lg sm:marg-sm" style="font-size: 25px;">Syllabus Belajar Bahasa Pemrograman Python</h2>
              <!-- Sesi 1-->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="w-full bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden" style="border-radius: 20px">
                  <div class="p-6">
                    <h2 class="text-black dark:text-white text-xl font-bold mb-8" style="font-size: 25px;">Sesi 1</h2>
                    <ul class="list-none list-inside text-base text-gray-900 dark:text-gray-300">
                      <li class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                          <div class="checklist-circle">
                            <div class="checklist-circle">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_981_529)">
                                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                                <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_981_529">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                              </svg>                            
                            </div>
                          </div>
                          <span class="semibold font-medium" style="font-size:17px">Introduction to Python</span>
                        </div>
                        <span class="text-gray-500 text-sm">3 mins</span>
                      </li>
                      <li class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                          <div class="checklist-circle">
                            <div class="checklist-circle">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_981_529)">
                                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                                <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_981_529">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                              </svg>                            
                            </div>
                          </div>
                          <span class="semibold font-medium" style="font-size:17px">Memahami Tipe Data Dasar</span>
                        </div>
                        <span class="text-gray-500 text-sm">3 mins</span>
                      </li>
                      <li class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                          <div class="checklist-circle">
                            <div class="checklist-circle">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_981_529)">
                                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                                <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_981_529">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                              </svg>                            
                            </div>
                          </div>
                          <span class="semibold font-medium" style="font-size:17px">Belajar Operator Perbandingan</span>
                        </div>
                        <span class="text-gray-500 text-sm">3 mins</span>
                      </li>
                      <li class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                          <div class="checklist-circle">
                            <div class="checklist-circle">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_981_529)">
                                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                                <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_981_529">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                              </svg>                            
                            </div>
                          </div>
                          <span class="semibold font-medium" style="font-size:17px">Memahami Logical Operator</span>
                        </div>
                        <span class="text-gray-500 text-sm">3 mins</span>
                      </li>
                      <li class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                          <div class="checklist-circle">
                            <div class="checklist-circle">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_981_529)">
                                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                                <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_981_529">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                              </svg>                            
                            </div>
                          </div>
                          <span class="semibold font-medium" style="font-size:17px">Belajar Data Variabel</span>
                        </div>
                        <span class="text-gray-500 text-sm">3 mins</span>
                      </li>
                      <!-- Add other items as needed -->
                    </ul>
                  </div>
                </div>

                <!-- Sesi 2-->
                <div class="w-full bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden" style="border-radius: 20px">
                  <div class="p-6">
                    <h2 class="text-black dark:text-white text-xl font-bold mb-8" style="font-size: 25px;">Sesi 2</h2>
                    <ul class="list-none list-inside text-base text-gray-900 dark:text-gray-300">
                      <li class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                          <div class="checklist-circle">
                            <div class="checklist-circle">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_981_529)">
                                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                                <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_981_529">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                              </svg>                            
                            </div>
                          </div>
                          <span class="semibold font-medium" style="font-size:17px">Belajar Operator Aritmatika</span>
                        </div>
                        <span class="text-gray-500 text-sm">3 mins</span>
                      </li>
                      <li class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                          <div class="checklist-circle">
                            <div class="checklist-circle">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_981_529)">
                                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                                <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_981_529">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                              </svg>                            
                            </div>
                          </div>
                          <span class="semibold font-medium" style="font-size:17px">Belajar Assignment Operator</span>
                        </div>
                        <span class="text-gray-500 text-sm">3 mins</span>
                      </li>
                      <li class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                          <div class="checklist-circle">
                            <div class="checklist-circle">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_981_529)">
                                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                                <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_981_529">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                              </svg>                            
                            </div>
                          </div>
                          <span class="semibold font-medium" style="font-size:17px">Belajar Panjang Item List</span>
                        </div>
                        <span class="text-gray-500 text-sm">3 mins</span>
                      </li>
                      <li class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                          <div class="checklist-circle">
                            <div class="checklist-circle">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_981_529)">
                                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                                <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_981_529">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                              </svg>                            
                            </div>
                          </div>
                          <span class="semibold font-medium" style="font-size:17px">Belajar Menambah Data</span>
                        </div>
                        <span class="text-gray-500 text-sm">3 mins</span>
                      </li>
                      <li class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                          <div class="checklist-circle">
                            <div class="checklist-circle">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_981_529)">
                                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                                <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_981_529">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                              </svg>                            
                            </div>
                          </div>
                          <span class="semibold font-medium" style="font-size:17px">Belajar Merge Data List</span>
                        </div>
                        <span class="text-gray-500 text-sm">3 mins</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Sesi 2 -->

                <!-- Sesi 3 -->
                <div class="w-full bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden"  style="border-radius: 20px">
                  <div class="p-6">
                    <h2 class="text-black dark:text-white text-xl font-bold mb-8" style="font-size: 25px;">Sesi 3</h2>
                    <ul class="list-none list-inside text-base text-gray-900 dark:text-gray-300">
                      <li class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                          <div class="checklist-circle">
                            <div class="checklist-circle">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_981_529)">
                                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                                <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_981_529">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                              </svg>                            
                            </div>
                          </div>
                          <span class="semibold font-medium" style="font-size:17px">Belajar Count dan Sort</span>
                        </div>
                        <span class="text-gray-500 text-sm">3 mins</span>
                      </li>
                      <li class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                          <div class="checklist-circle">
                            <div class="checklist-circle">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_981_529)">
                                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                                <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_981_529">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                              </svg>                            
                            </div>
                          </div>
                          <span class="semibold font-medium" style="font-size:17px">Belajar Variant Data</span>
                        </div>
                        <span class="text-gray-500 text-sm">3 mins</span>
                      </li>
                      <li class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                          <div class="checklist-circle">
                            <div class="checklist-circle">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_981_529)">
                                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                                <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_981_529">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                              </svg>                            
                            </div>
                          </div>
                          <span class="semibold font-medium" style="font-size:17px">Belajar Looping Data List</span>
                        </div>
                        <span class="text-gray-500 text-sm">3 mins</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Sesi 3 -->
              </div>
            </div>
            <!-- Testimoni -->
            <h2 class="text-black dark:text-white text-xl font-bold lg:marg-lg sm:marg-sm mb-7 text-center" style="font-size: 35px; margin-top:100px">Testimoni Pelajar</h2>
            <p class="text-center text-black dark:text-gray-100  text-md font-semibold">Ribuan siswa sudah bergabung dikelas Belajar Bahasa Pemrograman Python di <span class="text-blue-500">Pintar Path</span>, apa kata mereka ?</p>
            <div class="owl-carousel grid grid-cols-1 md:grid-cols-2 gap-6" style="margin-top: 50px">
              <div class="testimoni-1">
                <div class="w-full p-4 text-left bg-white border border-gray-200 shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700" style="border-radius: 20px">
                  <div class="informationUser flex flex-row gap-4">
                    <img src="{{{asset('./images/user/user1.png')}}}" alt="Reviewer 1" class="w-10 h-10 rounded-full object-cover flex-shrink-0" style="margin-top: 3px" />
                    <div class="nameAsalCourse">
                      <h5 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Muhammad Farhan Abdullah</h5>
                      <div class="mb-1 asalUniversitas flex flex-row space-x-2 items-center hidden lg:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                          <path class="dark:fill-white" fill="rgb(55 65 81)" d="M480 48c0-26.5-21.5-48-48-48H336c-26.5 0-48 21.5-48 48V96H224V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V96H112V24c0-13.3-10.7-24-24-24S64 10.7 64 24V96H48C21.5 96 0 117.5 0 144v96V464c0 26.5 21.5 48 48 48H304h32 96H592c26.5 0 48-21.5 48-48V240c0-26.5-21.5-48-48-48H480V48zm96 320v32c0 8.8-7.2 16-16 16H528c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16zM240 416H208c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16zM128 400c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32zM560 256c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H528c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h32zM256 176v32c0 8.8-7.2 16-16 16H208c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16zM112 160c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h32zM256 304c0 8.8-7.2 16-16 16H208c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32zM112 320H80c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16zm304-48v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16zM400 64c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V80c0-8.8 7.2-16 16-16h32zm16 112v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16z"/>
                        </svg>
                        <p class="text-gray-500 lg:text-sm sm:text-sm dark:text-gray-400">Politeknik Negeri Malang</p>
                      </div>
                      <div class="mb-5 courseTaken flex flex-row space-x-2 items-center hidden lg:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                          <path class="dark:fill-white" fill="rgb(55 65 81)" d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                        </svg>
                        <p class="text-gray-500 lg:text-sm sm:text-sm dark:text-gray-400">Belajar Bahasa Pemrograman Python</p>
                      </div>                      
                    </div>
                  </div>
                  <div class="items-left justify-left text-black dark:text-white mt-3">
                    <h1 class="mb-5 text-lg">Course ini sungguh mengubah cara saya memahami pemrograman. Sekarang saya bisa membuat aplikasi sederhana sendiri!</h1>
                    <div class="rating flex flex-row gap-1">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                        <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                        <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                        <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                        <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                        <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimoni-2">
                <div class="w-full p-4 text-left bg-white border border-gray-200 shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700" style="border-radius: 20px">
                  <div class="informationUser flex flex-row gap-4">
                    <img src="{{{asset('./images/user/user2.png')}}}" alt="Reviewer 1" class="w-10 h-10 rounded-full object-cover flex-shrink-0" style="margin-top: 3px" />
                    <div class="nameAsalCourse">
                      <h5 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Gilang Ramadhan Saputra</h5>
                      <div class="mb-1 asalUniversitas flex flex-row space-x-2 items-center hidden lg:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                          <path class="dark:fill-white" fill="rgb(55 65 81)" d="M480 48c0-26.5-21.5-48-48-48H336c-26.5 0-48 21.5-48 48V96H224V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V96H112V24c0-13.3-10.7-24-24-24S64 10.7 64 24V96H48C21.5 96 0 117.5 0 144v96V464c0 26.5 21.5 48 48 48H304h32 96H592c26.5 0 48-21.5 48-48V240c0-26.5-21.5-48-48-48H480V48zm96 320v32c0 8.8-7.2 16-16 16H528c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16zM240 416H208c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16zM128 400c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32zM560 256c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H528c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h32zM256 176v32c0 8.8-7.2 16-16 16H208c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16zM112 160c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h32zM256 304c0 8.8-7.2 16-16 16H208c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32zM112 320H80c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16zm304-48v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16zM400 64c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V80c0-8.8 7.2-16 16-16h32zm16 112v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16z"/>
                        </svg>
                        <p class="text-gray-500 lg:text-sm sm:text-sm dark:text-gray-400">Universitas Brawijaya</p>
                      </div>
                      <div class="mb-5 courseTaken flex flex-row space-x-2 items-center hidden lg:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                          <path class="dark:fill-white" fill="rgb(55 65 81)" d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                        </svg>
                        <p class="text-gray-500 lg:text-sm sm:text-sm dark:text-gray-400">Belajar Bahasa Pemrograman Python</p>
                      </div>                      
                    </div>
                  </div>
                  <div class="items-left justify-left text-black dark:text-white mt-3">
                    <h1 class="mb-5 text-lg">Saya sangat puas dengan kursus ini. Instrukturnya responsif dan materi sangat terstruktur. Sangat direkomendasikan untuk pemula!</h1>
                    <div class="rating flex flex-row gap-1">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                        <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                        <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                        <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                        <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                        <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Testimoni Selesai -->
            <div class="FAQ">
              <h2 class="text-black dark:text-white text-xl font-bold lg:marg-lg sm:marg-sm mb-7 text-center" style="font-size: 35px; margin-top:100px">Pertanyaan seputar tentang kelas ini</h2>
              <p class="text-center text-black dark:text-gray-100 mb-10 text-md font-semibold">Berikut adalah beberapa pertanyaan yang paling sering ditanyakan.</p>                
              <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white" class="grid items-center justify-center min-h-screen">
                <h2 id="accordion-color-heading-1" class="mt-3">
                  <button type="button" class="flex items-center justify-between p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3 faqw" data-accordion-target="#accordion-color-body-1" aria-expanded="false" aria-controls="accordion-color-body-1">
                    <span class="text-left">Apakah ada saran untuk meningkatkan kemampuan pemrograman Python?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                  <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 faqw">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Anda bisa mengikuti kursus lanjutan, membaca dokumentasi resmi Python, atau bergabung dengan komunitas pengembang untuk belajar dari pengalaman mereka.</p>
                  </div>
                </div>
                <h2 id="accordion-color-heading-2" class="mt-3">
                  <button type="button" class="flex items-center justify-between p-5 font-medium rtl:text-right text-gray-500 border border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3 faqw" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                    <span class="text-left">Apa yang akan saya pelajari dalam kursus ini?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                  <div class="p-5 border border-gray-200 dark:border-gray-700 faqw">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Anda akan mempelajari dasar-dasar Python seperti variabel, tipe data, struktur kontrol, fungsi, dan modul.
                    </p>
                  </div>
                </div>
                <h2 id="accordion-color-heading-3" class="mt-3">
                  <button type="button" class="flex items-center justify-between p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3 faqw" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                    <span class="text-left">Apa yang harus saya lakukan jika saya mengalami kesulitan dalam memahami konsep tertentu?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                  <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700 faqw">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Jangan ragu untuk bertanya kepada mentor, menggunakan AI Pintar Path atau bertanya pada forum diskusi</p>
                  </div>
                </div>
              </div>
            </div>
          </div> 	
        </div>
      </div>
    </section>
    <!-- Jumbotron 1 Selesai -->

    <!-- Footer Mulai -->
    <div id="app">
      <x-footer />
    </div>
    <!-- Mode Mobile -->
    <div class="z-50 fixed bottom-0 left-0 w-full bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600 bottom-bar" style="height: 80px">
      <div class="flex items-center justify-between px-4 py-3 mt-2">
          <span class="text-lg font-bold text-black dark:text-white ml-4">Rp. 150.000</span>
          <button id="checkout-button-mobile" class="px-4 py-2 font-semibold text-md text-white bg-blue-700 rounded mr-4" style="border-radius:50px; flex-shrink: 0;">
              Gabung Kelas
          </button>
          <button id="success-link-mobile" class="px-4 py-2 font-semibold text-md text-white bg-green-500 rounded mr-4 hidden" style="border-radius:50px; flex-shrink: 0;">
              Lanjut Belajar
          </button>
      </div>
    </div>
    <div data-dial-init class="z-50 fixed start-6 group" style="bottom: 100px">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.client_key') }}"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
          const checkoutButtonMobile = document.getElementById('checkout-button-mobile');
          const successLinkMobile = document.getElementById('success-link-mobile');

          // Periksa status pembayaran dari database
          axios.get('/order/status')
              .then(response => {
                  const paymentStatus = response.data.status; // Misalnya, 'success' atau 'pending'
                  if (paymentStatus === 'success') {
                      checkoutButtonMobile.classList.add('hidden');
                      successLinkMobile.classList.remove('hidden');
                  }
              })
              .catch(error => {
                  console.error('Error fetching payment status:', error);
              });
      });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const checkoutButtonMobile = document.getElementById('checkout-button-mobile');
        const successLinkMobile = document.getElementById('success-link-mobile');

        // Periksa status pembayaran dari database
        axios.get('/order/status') // Endpoint API untuk memeriksa status pembayaran
            .then(response => {
                const paymentStatus = response.data.status; // Misalnya, 'success' atau 'pending'
                if (paymentStatus === 'success') {
                    checkoutButtonMobile.classList.add('hidden');
                    successLinkMobile.classList.remove('hidden');
                    successLinkMobile.addEventListener('click', function () {
                        window.location.href = '/course/belajar-bahasa-pemrograman-python/persiapan'; // URL yang sesuai
                    });
                }
            })
            .catch(error => {
                console.error('Error fetching payment status:', error);
            });

        checkoutButtonMobile.addEventListener('click', function () {
            axios.post('/order', {
                product_id: 1
            })
            .then(response => {
                const snapToken = response.data.snap_token;
                window.snap.pay(snapToken, {
                    onSuccess: function(result) {
                        console.log(result);
                        // Simpan status pembayaran dan ubah tombol
                        axios.post('/order/update-status', {
                            order_id: response.data.order_id,
                            status: 'success'
                        })
                        .then(() => {
                            checkoutButtonMobile.classList.add('hidden');
                            successLinkMobile.classList.remove('hidden');
                            successLinkMobile.addEventListener('click', function () {
                                window.location.href = '/course/belajar-bahasa-pemrograman-python/persiapan'; // URL yang sesuai
                            });
                        })
                        .catch(error => {
                            console.error('Error updating order status:', error);
                        });
                    },
                    onPending: function(result) { console.log(result); },
                    onError: function(result) { console.log(result); }
                });
            })
            .catch(error => {
                console.error('Error creating order:', error);
            });
        });
    });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
      const buttons = document.querySelectorAll(".nav-button");
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
      switchContent("aboutContent");

      buttons.forEach((button) => {
          button.addEventListener("click", function () {
              const target = this.id.replace("Btn", "Content");
              switchContent(target);
          });
        });
      });
    </script> 
  </body>
</html>