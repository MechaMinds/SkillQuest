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
            <p class="section-title font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 20px">Road Map</p>
            <h1 class="section-title mb-4 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white">Machine Learning</h1>
            <div class="mt-7">
                <li class="checklist-item section-title">
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
                    <span class="checklist-text dark:text-gray-300 text-gray-500 sm:text-sm">Memahami dasar-dasar bahasa pemrograman pyhton</span>
                </li>
                <li class="checklist-item section-title">
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
                    <span class="checklist-text dark:text-gray-300 text-gray-500 sm:text-sm">Menguasai library Tensorflow dan NumpPy</span>
                </li>
            </div>
            <button type="button" class="mt-7 section-title px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mulai Belajar</button>
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
        <div id="item1" class="section-title max-w-md flex flex-col justify-center">
          <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 20px">Benefit</p>
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-4xl dark:text-white">Mengapa Harus Kami ?</h1>
        </div>
        <div class="section-title grid lg:grid-cols-3 gap-5 md:grid-cols-4">
            <div class="flex items-center bg-card p-4 rounded-lg shadow-md w-1/3 bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
              <img src="{{asset('./images/portofoliokeren.png')}}" alt="portfolio-icon" class="w-12 h-12 mr-5" />
              <div>
                <h3 class="text-lg font-semibold text-card-foreground text-gray-900 dark:text-white">Portofolio Unggulan</h3>
                <p class="text-muted-foreground text-gray-900 dark:text-white">Menjadi kandidat yang memiliki value tinggi ketika melamar kerja</p>
              </div>
            </div>
          
            <div class="flex items-center bg-card p-4 w-1/3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <img src="{{asset('./images/karirkilat.png')}}" alt="shortcuts-icon" class="w-12 h-12 mr-5" />
              <div>
                <h3 class="text-lg font-semibold text-card-foreground text-gray-900 dark:text-white">Karir Kilat</h3>
                <p class="text-muted-foreground text-gray-900 dark:text-white">Ikuti panduan belajar terarah buatan oleh professional mentor</p>
              </div>
            </div>
          
            <div class="flex items-center bg-card p-4 w-1/3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <img src="{{asset('./images/aksesselamanya.png')}}" alt="access-icon" class="w-12 h-12 mr-5" />
              <div>
                <h3 class="text-lg font-semibold text-card-foreground text-gray-900 dark:text-white">Akses Selamanya</h3>
                <p class="text-muted-foreground text-gray-900 dark:text-white">Belajar jadi lebih produktif sesuai dengan fase masing-masing</p>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- Jumbotron 2 Selesai -->

    <!-- Road Map -->
    <section class="bg-white-50 dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid gap-3">
          <div id="item1" class="section-title max-w-md flex flex-col justify-center">
            <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 20px">Road Map</p>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-4xl dark:text-white">Syllabus Machine Learning</h1>
          </div>
            <div class="section-title text-sm font-medium text-left text-gray-500 dark:text-gray-400">
              <ul class="flex flex-wrap -mb-px">
                  <li class="mr-2">
                      <a href="#" id="nlp-btn" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">Natural Language Processing</a>
                  </li>
                  <li class="mr-2">
                      <a href="javascript:void(0)" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Computer Vision</a>
                  </li>
              </ul>
            </div>
          <!-- Natural Language Processing Section -->
          <div id="natural-processing-btn" class="grid lg:grid-cols-3 gap-1 md:grid-cols-2 sm:grid-cols-1 mt-2">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{ asset('./images/thumbnail/thumbnail1.png') }}" alt="" />
              <div class="p-5">
                <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 1 <span class="text-blue-500">#machinelearning</span></p>
                <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Pengenalan Dasar Natural Language Processing</h5>
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
                    <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                      <a href="#" class="text-md">Lanjut Belajar</a>
                    </button>
                  </div>
                </div> 
              </div>
            </div>                          
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
              <div class="p-5">
                <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 2 <span class="text-blue-500">#machinelearning</span></p>
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
                      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="/kelas/belajar-bahasa-pemrograman-python" class="text-md">Gabung Kelas</a>
                      </button>
                    </div>
                  </div>                                                  
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 3 <span class="text-blue-500">#machinelearning</span></p>
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
                      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="/kelas/belajar-bahasa-pemrograman-python" class="text-md">Gabung Kelas</a>
                      </button>
                    </div>
                  </div>                             
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 4 <span class="text-blue-500">#machinelearning</span></p>
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
                        <a href="/kelas/belajar-bahasa-pemrograman-python" class="text-md">Gabung Kelas</a>
                      </button>
                    </div>
                  </div>                          
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 5 <span class="text-blue-500">#machinelearning</span></p>
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
                        <a href="/kelas/belajar-bahasa-pemrograman-python" class="text-md">Gabung Kelas</a>
                      </button>
                    </div>
                  </div>                          
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 6 <span class="text-blue-500">#machinelearning</span></p>
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
                        <a href="/kelas/belajar-bahasa-pemrograman-python" class="text-md">Gabung Kelas</a>
                      </button>
                    </div>
                  </div>                          
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 7 <span class="text-blue-500">#machinelearning</span></p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Memahami Generasi Teks dan Penerjemah Mesin</h5>
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
                        <a href="/kelas/belajar-bahasa-pemrograman-python" class="text-md">Gabung Kelas</a>
                      </button>
                    </div>
                  </div>                          
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 8 <span class="text-blue-500">#machinelearning</span></p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Pengoptimalan model NLP dan Strategi Peningkatan Kinerja</h5>
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
                      <div class="gap-2 flex flex-row mb-2">
                        <p class="py-1 px-3 font-semibold text-white rounded-md bg-green-500">70%</p>
                        <p class="self-center text-blue-500 text-small font-light line-through">Rp 500.000</p>
                      </div>                    
                      <p class="text-gray-900 dark:text-white text-2xl font-semibold">Rp 150.000</p>
                    </div>
                    <div class="flex justify-end">
                      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="/kelas/belajar-bahasa-pemrograman-python" class="text-md">Gabung Kelas</a>
                      </button>
                    </div>
                  </div>                          
              </div>
            </div>                    
        </div>
      </section>
    <!-- Road Map Selesai -->
    <!-- Testimoni -->
    <section class="dark:bg-white bg-gray-900">
      <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid gap-3">
        <div class="dark:text-gray-900 text-white py-16 px-8 section-title">
          <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex flex-col justify-center">
              <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 20px">#pintarpath</p>
              <h1 class="text-4xl font-bold leading-none tracking-tight text-white md:text-5xl lg:text-5xl dark:text-gray-900">Bergabunglah untuk Berbagi Kisah Inspiratif Anda!</h1>
              <p class="mt-4 text-lg">Bersama-sama, kita dapat memotivasi orang lain dan merayakan perjalanan kesuksesan yang menginspirasi</p>
              <div class="mt-6 flex space-x-4">
                <button type="button" class="px-6 py-3.5 text-base font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Bergabung Sekarang</button>
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="cardContainer">
              <div class="max-w-sm p-6 bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 card" style="border-radius: 20px">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Update</h5>
                <p class="mb-5 text-1xl text-gray-700 dark:text-gray-400">Materi yang diberikan Pintar Path selalu yang terbaru</p>
                <div class="user flex items-center">  
                  <img class="w-10 h-10 rounded-full object-cover mr-2" src="{{asset('./images/inspirasi/inspirasi1.jpg')}}" alt="Profile Picture">
                  <div>
                    <p class="font-semibold text-gray-900 dark:text-white">Riovaldo</p>
                    <p class="text-sm text-gray-700 dark:text-gray-200">Front-End Web Developer</p>
                  </div>
                </div>                
              </div>
              <div class="max-w-sm p-6 bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 card" style="border-radius: 20px">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Update</h5>
                <p class="mb-5 text-1xl text-gray-700 dark:text-gray-400">Materi yang diberikan Pintar Path selalu yang terbaru</p>
                <div class="user flex items-center">
                  <img class="w-10 h-10 rounded-full object-cover mr-2" src="{{asset('./images/inspirasi/inspirasi1.jpg')}}" alt="Profile Picture">
                  <div>
                    <p class="font-semibold text-gray-900 dark:text-white">Riovaldo</p>
                    <p class="text-sm text-gray-700 dark:text-gray-200">Front-End Web Developer</p>
                  </div>
                </div>                
              </div>
              <div class="max-w-sm p-6 bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 card" style="border-radius: 20px">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Update</h5>
                <p class="mb-5 text-1xl text-gray-700 dark:text-gray-400">Materi yang diberikan Pintar Path selalu yang terbaru</p>
                <div class="user flex items-center">
                  <img class="w-10 h-10 rounded-full object-cover mr-2" src="{{asset('./images/inspirasi/inspirasi1.jpg')}}" alt="Profile Picture">
                  <div>
                    <p class="font-semibold text-gray-900 dark:text-white">Riovaldo</p>
                    <p class="text-sm text-gray-700 dark:text-gray-200">Front-End Web Developer</p>
                  </div>
                </div>                
              </div>
              <div class="max-w-sm p-6 bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 card" style="border-radius: 20px">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Update</h5>
                <p class="mb-5 text-1xl text-gray-700 dark:text-gray-400">Materi yang diberikan Pintar Path selalu yang terbaru</p>
                <div class="user flex items-center">
                  <img class="w-10 h-10 rounded-full object-cover mr-2" src="{{asset('./images/inspirasi/inspirasi1.jpg')}}" alt="Profile Picture">
                  <div>
                    <p class="font-semibold text-gray-900 dark:text-white">Riovaldo</p>
                    <p class="text-sm text-gray-700 dark:text-gray-200">Front-End Web Developer</p>
                  </div>
                </div>                
              </div>
              <div class="max-w-sm p-6 bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 card" style="border-radius: 20px">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Update</h5>
                <p class="mb-5 text-1xl text-gray-700 dark:text-gray-400">Materi yang diberikan Pintar Path selalu yang terbaru</p>
                <div class="user flex items-center">
                  <img class="w-10 h-10 rounded-full object-cover mr-2" src="{{asset('./images/inspirasi/inspirasi1.jpg')}}" alt="Profile Picture">
                  <div>
                    <p class="font-semibold text-gray-900 dark:text-white">Riovaldo</p>
                    <p class="text-sm text-gray-700 dark:text-gray-200">Front-End Web Developer</p>
                  </div>
                </div>                
              </div>
              <div class="max-w-sm p-6 bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 card" style="border-radius: 20px">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Update</h5>
                <p class="mb-5 text-1xl text-gray-700 dark:text-gray-400">Materi yang diberikan Pintar Path selalu yang terbaru</p>
                <div class="user flex items-center">
                  <img class="w-10 h-10 rounded-full object-cover mr-2" src="{{asset('./images/inspirasi/inspirasi1.jpg')}}" alt="Profile Picture">
                  <div>
                    <p class="font-semibold text-gray-900 dark:text-white">Riovaldo</p>
                    <p class="text-sm text-gray-700 dark:text-gray-200">Front-End Web Developer</p>
                  </div>
                </div>                
              </div>
              <div class="max-w-sm p-6 bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 card" style="border-radius: 20px">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Update</h5>
                <p class="mb-5 text-1xl text-gray-700 dark:text-gray-400">Materi yang diberikan Pintar Path selalu yang terbaru</p>
                <div class="user flex items-center">
                  <img class="w-10 h-10 rounded-full object-cover mr-2" src="{{asset('./images/inspirasi/inspirasi1.jpg')}}" alt="Profile Picture">
                  <div>
                    <p class="font-semibold text-gray-900 dark:text-white">Riovaldo</p>
                    <p class="text-sm text-gray-700 dark:text-gray-200">Front-End Web Developer</p>
                  </div>
                </div>                
              </div>
              <div class="max-w-sm p-6 bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 card" style="border-radius: 20px">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Update</h5>
                <p class="mb-5 text-1xl text-gray-700 dark:text-gray-400">Materi yang diberikan Pintar Path selalu yang terbaru</p>
                <div class="user flex items-center">
                  <img class="w-10 h-10 rounded-full object-cover mr-2" src="{{asset('./images/inspirasi/inspirasi1.jpg')}}" alt="Profile Picture">
                  <div>
                    <p class="font-semibold text-gray-900 dark:text-white">Riovaldo</p>
                    <p class="text-sm text-gray-700 dark:text-gray-200">Front-End Web Developer</p>
                  </div>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimoni Selesai -->
    <!-- Footer Mulai -->
    <div id="app">
      <x-footer />
    </div>
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