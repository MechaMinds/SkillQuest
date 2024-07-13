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
      <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{ asset('images/logo.png') }}" class="h-8" alt="Pintar Path Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-900 dark:text-white">Pintar Path</span>
        </a>
        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
          <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>
          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign up</a>
          <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
        </div>
        <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
          <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
            <li>
              <a href="#" class="block py-2 px-3 text-blue-600 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
            </li>
            <li>
              <button id="kelas-button" data-dropdown-toggle="kelas-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                Kelas 
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
              </button>
              <div id="kelas-dropdown" class="absolute z-10 flex hidden w-auto flex-cols-2 text-sm md:flex-cols-4 bg-white" style="border-radius: 20px">
                <div class="navBg text-center text-white justify-center" style="padding: 60px 40px 50px 40px; border-radius:20px 0px 0px 20px">
                  <p class="text-sm text-accent text-green-500 dark:text-green-400">90 Ribu Pelajar Mempercayai Kami</p>
                  <h2 class="text-2xl font-bold mt-2">Wujudkan Karir <br> Impian Anda</h2>
                  <p class="mt-2 text-white-200">Akses kelas gratis dan berbayar dengan <br> mentor ahli</p>
                  <button type="button" style="margin-top: 40px" class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-end">Semua Kelas</button>
                </div>
                <div class="p-6 text-gray-900 dark:text-white" style="margin-top:40px">
                  <ul aria-labelledby="kelas-button">
                    <li class="mb-7">
                      <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg">
                        UI/UX Design
                      </a>
                    </li>
                    <li class="mb-7">
                      <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg">
                        Web Developer
                      </a>
                    </li>
                    <li class="mb-7">
                      <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg">
                        Android Developer
                      </a>
                    </li>
                    <li class="mb-7">
                      <a href="kelas/machine-learning" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg">
                        Machine Learning
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="p-6 text-gray-900 dark:text-white" style="margin-top:40px">
                  <ul>
                    <li class="mb-7">
                      <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg">
                        Data Scientist
                      </a>
                    </li>
                    <li class="mb-7">
                      <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg">
                        iOS Developer
                      </a>
                    </li>
                    <li class="mb-7">
                      <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg">
                        DevOps Engineer
                      </a>
                    </li>
                    <li class="mb-7">
                      <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg">
                        Cloud Computing
                      </a>
                    </li>
                  </ul>
                </div>
              </div>                  
            </li>
            <li>
              <button id="roadMap-button" data-dropdown-toggle="roadMap-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                Road Map 
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
              </button>
              <div id="roadMap-dropdown" class="absolute z-10 flex hidden w-auto flex-cols-2 text-sm md:flex-cols-4 bg-white" style="border-radius: 20px">
                <div class="navBg text-center text-white justify-center" style="padding: 80px 50px 0px 50px; border-radius:20px 0px 0px 20px">
                  <p class="text-sm text-accent text-green-500 dark:text-green-400">90 Ribu Pelajar Mempercayai Kami</p>
                  <h2 class="text-2xl font-bold mt-2">Wujudkan Karir <br> Impian Anda</h2>
                  <p class="mt-2 text-white-200">Akses kelas gratis dan berbayar dengan <br> mentor ahli</p>
                  <button type="button" style="margin-top: 40px" class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-end">Semua Road Map</button>
                </div>
                <div class="text-gray-900 dark:text-white" style="padding: 25px 40px 30px 20px; margin-top:25px">
                  <ul aria-labelledby="roadMap-button">
                    <li class="mb-7">
                      <a href="#" class="flex flex-row items-center justify-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg text-center">
                        <img width="60px" height="60px" src="{{asset('./images/UIUX.svg')}}" alt="">
                        <div class="flex flex-col items-left">
                          <span class="text-black font-bold text-left ">UI/UX Designer</span>
                          <span class="text-sm text-black text-left">Rekomendasi dari beberapa mentor expert</span>
                        </div>
                      </a>
                    </li>                        
                    <li class="mb-7">
                      <a href="#" class="flex flex-row items-center justify-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg text-center">
                        <img width="60px" height="60px" src="{{asset('./images/Web-Developer.svg')}}" alt="">
                        <div class="flex flex-col items-left">
                          <span class="text-black font-bold text-left ">Web Developer</span>
                          <span class="text-sm text-black text-left">Rekomendasi dari beberapa mentor expert</span>
                        </div>
                      </a>
                    </li>                                      
                    <li class="mb-7">
                      <a href="#" class="flex flex-row items-center justify-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg text-center">
                        <img width="60px" height="60px" src="{{asset('./images/Mobile-Developer.svg')}}" alt="">
                        <div class="flex flex-col items-left">
                          <span class="text-black font-bold text-left">Mobile Developer</span>
                          <span class="text-sm text-black text-left">Rekomendasi dari beberapa mentor expert</span>
                        </div>
                      </a>
                    </li>                     
                    <li class="mb-7">
                      <a href="#" class="flex flex-row items-center justify-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg text-center">
                        <img width="60px" height="60px" src="{{asset('./images/Data-Scientist.svg')}}" alt="">
                        <div class="flex flex-col items-left">
                          <span class="text-black font-bold text-left ">Machine Learning Developer</span>
                          <span class="text-sm text-black text-left">Rekomendasi dari beberapa mentor expert</span>
                        </div>
                      </a>
                    </li>                    
                  </ul>
                </div>
              </div>                  
            </li>
            <li>
              <button id="komunitas-button" data-dropdown-toggle="komunitas-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                Komunitas 
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
              </button>
              <div id="komunitas-dropdown" class="absolute z-10 flex hidden w-auto flex-cols-2 text-sm md:flex-cols-4 bg-white" style="border-radius:10px">
                <div class="bg-white text-card-foreground p-4 w-64" style="height: 145px;border-radius: 10px" aria-labelledby="komunitas-button">
                  <div class="flex items-center space-x-3 mb-5 hover:text-blue-600 dark:hover:text-blue-500">
                    <div class="bg-gray-200 py-3 px-3 rounded-md">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 mt-1">
                        <path fill="#146ffe" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"/>
                      </svg>
                    </div>
                    <span class="text-black font-bold text-left text-lg">Forum</span>
                  </div>
                  <div class="flex items-center space-x-3 mb-4 hover:text-blue-600 dark:hover:text-blue-500">
                    <div class="bg-gray-200 py-3 px-3 rounded-md">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                        <path fill="#146ffe" d="M96 96c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H80c-44.2 0-80-35.8-80-80V128c0-17.7 14.3-32 32-32s32 14.3 32 32V400c0 8.8 7.2 16 16 16s16-7.2 16-16V96zm64 24v80c0 13.3 10.7 24 24 24H296c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24H184c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/>
                      </svg>
                    </div>
                    <span class="text-black font-bold text-left text-lg">Blog Berita</span>
                  </div>
                </div>
              </div>                  
            </li>
          </ul>
        </div>  
      </div>
    </nav>
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
        <div class="grid lg:grid-cols-3 gap-5 md:grid-cols-4">
          <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img src="{{ asset('images/UIUX.svg')}}" class="mb-5" width="120px" />
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">UI/UX Design </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a
              href="#"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Belajar Sekarang
              <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
              </svg>
            </a>
          </div>
          <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img src="{{ asset('images/Web-Developer.svg')}}" class="mb-5" width="120px" />
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Web Developer</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a
              href="roadmap/web-developer"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Belajar Sekarang
              <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
              </svg>
            </a>
          </div>
          <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img src="{{ asset('images/Data-Scientist.svg')}}" class="mb-5" width="120px" />
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Machine Learning</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a
              href="kelas/machine-learning"
              class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Belajar Sekarang
              <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
              </svg>
            </a>
          </div>
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
    <div data-dial-init class="fixed bottom-6 start-6 group">
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