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
    <nav class="fixed top-0 w-full z-50 navbar bg-white border border-gray-200 rounded-full shadow dark:bg-gray-800 dark:border-gray-700">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo.png') }}" class="h-8" alt="Pintar Path Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-900 dark:text-white">Pintar Path</span>
        </a>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <button
            type="button"
            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
            id="user-menu-button"
            aria-expanded="false"
            data-dropdown-toggle="user-dropdown"
            data-dropdown-placement="bottom"
          >
          <img class="w-8 h-8 rounded-full" src="{{ asset('images/profile.jpg') }}" alt="user photo" />
          </button>
          <!-- Dropdown menu -->
          <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
            <div class="px-4 py-3">
              <span class="block text-sm text-gray-900 dark:text-white">Riovaldo Alfiyan</span>
              <span class="block text-sm text-gray-500 truncate dark:text-gray-400">rriovld@gmail.com</span>
            </div>
            <ul class="py-2" aria-labelledby="user-menu-button">
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar Selesai -->

    <!-- Breadcumb Mulai -->
    <section class="relative" style="margin-top: 100px">
      <div class="mx-auto max-w-screen-xl grid lg:grid-cols-2 gap-8 lg:gap-16" style="padding-top: 2rem; padding-bottom: 1rem; padding-left: 1rem">
        <nav class="flex" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
              <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                  />
                </svg>
                Home
              </a>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <a href="/kelas" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Kelas</a>
              </div>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <a href="/course/machine-learning" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Machine Learning</a>
              </div>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <a href="" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Python</a>
              </div>
            </li>
          </ol>
        </nav>
      </div>
    </section>
    <!-- Breadcumb Mulai -->

    <!-- Jumbotron 1 Mulai-->
    <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
      <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative" style="margin-top:50px">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white sm:text-md">Belajar Bahasa Pemrograman Python</h1>   
      </div>
    </section>
    <!-- Jumbotron 1 Selesai-->   
    <!-- Jumbotron 2 Mulai -->
      <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')] py-8 lg:py-16">
        <div class="px-4 mx-auto max-w-screen-xl text-left z-10 relative">
          <div class="flex flex-col lg:flex-row gap-6 p-6">
            <!-- Image and Description Section -->
            <div class="lg:w-1/2">
              <div class="aspect-w-20 aspect-h-12">
                <img width="2100px" height="2100px" style="border-radius:20px" src="{{asset('/images/thumbnail.jpg')}}" alt="Course Thumbnail">
              </div>
            </div>              
            <!-- Lessons Section -->
            <div class="lg:block hidden bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 w-full lg:w-1/2 h-full mt-16" style="border-radius: 20px; position: relative;">
              <!-- Mode Desktop -->
              <div class="p-6">
                  <h3 class="text-black dark:text-white text-lg font-semibold">15 Modul (120 mins)</h3>
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
              <button class="w-full mt-6 py-6 font-medium text-white bg-blue-700 rounded" style="border-radius: 0px 0px 20px 20px; font-size:25px">Gabung Sekarang</button>
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
                <button id="lessonsBtn" type="button" class="nav-button px-5 py-3 text-base font-medium text-center text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" style="border-radius:50px; flex-shrink: 0;">Materi</button>
                <button id="toolsBtn" type="button" class="nav-button px-5 py-3 text-base font-medium text-center text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" style="border-radius:50px; flex-shrink: 0;">Tools</button>
                <button id="testimonialsBtn" type="button" class="nav-button px-5 py-3 text-base font-medium text-center text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" style="border-radius:50px; flex-shrink: 0;">Testimoni</button>
              </div>                          
              <!-- Course Description -->
              <div id="content" class="content-section">
                <div id="aboutContent" class="active">
                  <h2 class="text-black dark:text-white text-xl font-bold mb-3 lg:marg-lg sm:marg-sm" style="font-size: 25px;">Develop Your Skills</h2>
                  <p class="mt-2 text-black dark:text-white">
                    Demi meningkatkan kemudahan pengguna dalam menggunakan aplikasi buatan kita sebagai designer, maka peran Interaction Design sangatlah dibutuhkan pada setiap design yang kita buat. Jika saat ini kamu sedang mencari tombol Download namun tidak ada reaksi apapun dari aplikasi tersebut, pasti kamu akan bingung dan harus ngapain kan? maka dari itu kita perlu membuat Interaction Design.
                  </p>
                  <p class="mt-6 text-black dark:text-white">
                    Pada kelas Framer: Basic of User Interaction Design kita akan belajar membuat design Getting Started sederhana yang dapat memberikan informasi kepada pengguna sebelum mereka memutuskan untuk mendaftar akun baru.
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
                <div id="lessonsContent" class="hidden">
                  <p class="text-white">INI MATERI</p>
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
                          <img src="{{asset('/images/python.png')}}" alt="Python logo" class="mb-4" width="85px" height="85px" />
                          <h2 class="text-lg text-black dark:text-white mb-2 font-bold">Python</h2>
                          <p class="text-black dark:text-white mb-4">Bahasa Pemrograman</p>
                          <button type="button" class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="border-radius: 12px">
                            <a href="https://www.javascript.org" target="_blank">Download Disini</a>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>                    
                </div>
                <div id="testimonialsContent" class="hidden">
                  <p class="text-white">INI TESTIMONI</p>
                </div>
              </div>
              <!-- Rundown -->
              <div class="mt-10">
                <h2 class="text-black dark:text-white text-xl font-bold mb-7 lg:marg-lg sm:marg-sm" style="font-size: 25px;">Rundown Materi Belajar Javascript Untuk Pemula</h2>
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
            </div> 	
          </div>
        </div>
      </section>
      <!-- Jumbotron 2 Selesai -->

    <!-- Footer Mulai -->
    <footer class="bg-white dark:bg-gray-900 mt-10">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
          <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
              <a href="https://flowbite.com/" class="flex items-center">
                <img src="{{asset('/images/logo.png')}}" class="h-8 me-3" alt="FlowBite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Pintar Path</span>
              </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                  <li class="mb-4">
                    <a href="" class="hover:underline">HTML</a>
                  </li>
                  <li>
                    <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                  </li>
                </ul>
              </div>
              <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                  <li class="mb-4">
                    <a href="https://github.com/themesberg/flowbite" class="hover:underline">Github</a>
                  </li>
                  <li>
                    <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                  </li>
                </ul>
              </div>
              <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                  <li class="mb-4">
                    <a href="#" class="hover:underline">Privacy Policy</a>
                  </li>
                  <li>
                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
          <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Pintar Path™</a>. All Rights Reserved. </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                  <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                  <path
                    d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"
                  />
                </svg>
                <span class="sr-only">Discord community</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                  <path
                    fill-rule="evenodd"
                    d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                    clip-rule="evenodd"
                  />
                </svg>
                <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                    clip-rule="evenodd"
                  />
                </svg>
                <span class="sr-only">GitHub account</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                    clip-rule="evenodd"
                  />
                </svg>
                <span class="sr-only">Dribbble account</span>
              </a>
            </div>
          </div>
        </div>
      </footer>
      <!-- Mode Mobile -->
      <div class="z-50 fixed bottom-0 left-0 w-full bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600 bottom-bar" style="height: 80px">
        <div class="flex items-center justify-between px-4 py-3 mt-2">
            <span class="text-lg font-bold text-black dark:text-white ml-4">Rp. 0</span>
            <button class="px-4 py-2 font-semibold text-md text-white bg-blue-700 rounded mr-4" style="border-radius:50px; flex-shrink: 0;">Gabung Sekarang</button>
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
      <!-- Footer Selesai -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script> 
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