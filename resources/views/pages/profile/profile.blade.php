<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintar Path ⸺ Solusi Belajar IT</title>
    <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.ico') }}" />
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
  </head>
  <body class="mt-3 bg-white dark:bg-gray-900">
    <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-10"></div>
    <!-- Navbar Mulai-->
    <div id="app">
      <x-navbar />
    </div>  
    <!-- Navbar Selesai -->
    <!-- Profile -->
    <section class="secPrim bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
      <div class="parnt mx-auto max-w-screen-xl gap-3 flex">
        <div class="sticky top-4 overflow-y-auto sidebar section-title py-5 px-5 sm:hidden lg:block hidden z-20" style="width: 400px">
          <div class="title dark:text-white text-grey-900 font-semibold text-3xl mb-8">Pengaturan</div>
          <div class="borderProfile1 items-center title gap-4 flex dark:text-white hover:text-gray-900 text-gray-900 font-medium text-xl border-gray-900 dark:border-white hover:bg-gray-200 dark:hover:bg-gray-500 dark:hover:text-white py-4 px-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-6 h-6">
              <path class="dark:fill-white" fill="rgb(55 65 81)"  d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/>
            </svg>
            <a href="/profile">Profile</a>
          </div> 
          <div class="borderProfile2 title flex items-center gap-4 dark:text-white hover:text-gray-900 text-gray-900 font-medium text-xl hover:bg-gray-200 dark:hover:bg-gray-500 dark:hover:text-white py-4 px-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-7 h-7">
              <path class="dark:fill-white" fill="rgb(55 65 81)" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c1.8 0 3.5-.2 5.3-.5c-76.3-55.1-99.8-141-103.1-200.2c-16.1-4.8-33.1-7.3-50.7-7.3l-91.4 0zm308.8-78.3l-120 48C358 277.4 352 286.2 352 296c0 63.3 25.9 168.8 134.8 214.2c5.9 2.5 12.6 2.5 18.5 0C614.1 464.8 640 359.3 640 296c0-9.8-6-18.6-15.1-22.3l-120-48c-5.7-2.3-12.1-2.3-17.8 0zM591.4 312c-3.9 50.7-27.2 116.7-95.4 149.7l0-187.8L591.4 312z"/>
            </svg>
            <a href="/data-pribadi">Data Pribadi</a>
          </div> 
          <div class="borderProfile2 title flex items-center gap-4 dark:text-white hover:text-gray-900 text-gray-900 font-medium text-xl hover:bg-gray-200 dark:hover:bg-gray-500 dark:hover:text-white py-4 px-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-6 h-6">
              <path class="dark:fill-white" fill="rgb(55 65 81)" d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5l0-377.4c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8L0 454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5l0-370.3c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11L304 456c0 11.4 11.7 19.3 22.4 15.5z"/>
            </svg>
            <a href="/course-saya">Course Saya</a>
          </div> 
          <div class="borderProfile2 title flex items-center gap-4 dark:text-white hover:text-gray-900 text-gray-900 font-medium text-xl hover:bg-gray-200 dark:hover:bg-gray-500 dark:hover:text-white py-4 px-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-6 h-6">
              <path class="dark:fill-white" fill="rgb(55 65 81)" d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
            </svg>  
            <a href="/riwayat-transaksi">Riwayat Transaksi</a>
          </div> 
          <div class="borderProfile2 title flex items-center gap-4 dark:text-white hover:text-gray-900 text-gray-900 font-medium text-xl hover:bg-gray-200 dark:hover:bg-gray-500 dark:hover:text-white py-4 px-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-6 h-6">
              <path class="dark:fill-white" fill="rgb(55 65 81)" d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304l91.4 0c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7l0 .9c0 9.2 2.7 18.5 7.9 26.3L29.7 512C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8l0 30.6c7.9 3.4 15.4 7.7 22.3 12.8l24.9-14.3c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-25 14.4c.4 4 .7 8.1 .7 12.3s-.2 8.2-.7 12.3l25 14.4c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-24.9-14.3c-6.9 5.1-14.3 9.4-22.3 12.8l0 30.6c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8l0-30.5c-8-3.4-15.6-7.7-22.5-12.9l-24.7 14.3c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l24.8-14.3c-.4-4.1-.7-8.2-.7-12.4s.2-8.3 .7-12.4L343.8 325c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l24.8 14.3c6.9-5.1 14.5-9.4 22.5-12.9l0-30.5zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z"/>
            </svg>  
            <a href="/pengaturan">Pengaturan</a>
          </div> 
          <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700"> 
          <div class="borderProfile2 title flex items-center gap-4 text-red-500 font-medium text-xl py-3 px-5 hover:bg-gray-200 dark:hover:bg-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6 rotate-180">
              <path fill="#f05252" d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/>
            </svg>
            <a href="/logout">Keluar</a>
          </div>
        </div>
        <!-- Card Section -->
        <div class="card-container z-20 section-title py-5 px-4" style="width:100%">
          <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden px-5 py-3">
              <div class="p-4">
                  <h2 class="text-2xl font-semibold dark:text-white text-gray-800">Profile Anda</h2>
                  <hr class="h-px my-6 bg-gray-200 border-0 dark:bg-gray-700">
                  <div class="photoProfile">
                    <h1 class="mb-3 font-medium dark:text-white text-gray-900 text-lg">Foto Profile </h1>
                    <div class="detail flex gap-3">
                      <img id="profileImageAvatar" src="{{ auth()->user()->profile_photo ? asset('images/photoProfileUser/' . auth()->user()->profile_photo) : asset('images/avatarDefault.png') }}" alt="Profile" class="w-24 h-24 rounded-full">
                      <form id="profilePhotoForm" action="{{ route('profile.updatePhoto') }}" method="POST" enctype="multipart/form-data" class="formProf">
                        @csrf
                        <div class="buttonAvProf">
                          <label for="profilePhotoInput" class="bg-blue-700 px-4 py-3 rounded-md text-white font-medium cursor-pointer custom-file-upload text-sm mb-2 md:mb-0 btnProfile text-center">Ganti Foto Profile</label>
                          <button id="showAvatarPopup" type="button" class="rounded-md cursor-pointer custom-file-upload text-sm text-gray-900 bg-white border border-gray-300 btnAvatar focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" style="padding: 11.5px 16px">Gunakan Avatar</button>
                      </div>
                        <input type="file" name="profile_photo" id="profilePhotoInput" class="hidden" required>
                        <p class="mt-2 dark:text-gray-100 text-gray-900 font-medium text-sm sm:hidden lg:block hidden" style="padding-right:450px">Kami menyarankan menggunakan foto yang memiliki rasio 1:1</p>
                      </form>
                    </div>   
                    <p class="mt-5 dark:text-gray-100 text-gray-900 font-medium text-sm sm:block lg:hidden block">Kami menyarankan menggunakan foto yang memiliki rasio 1:1</p>         
                  </div>
                  <div class="dataDiri sm:mt-5 lg:mt-10 lg:grid lg:grid-cols-2 sm:flex gap-4">
                    <div class="namaLengkap">
                      <label for="helper-text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap <span class="text-red-500">*</span></label>
                      <input type="text" id="helper-text" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white font-medium dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{Auth::user()->name}}">
                    </div>
                    <div class="email lg:mt-0 mt-5 sm:mt-5">
                      <label for="helper-text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email <span class="text-red-500">*</span></label>
                      <input type="email" id="disabled-input" aria-label="disabled input" class="-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->email}}" disabled>
                      <div class="information"> 
                        <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                          Email Terverifikasi, Kamu bisa mengganti alamat email pada menu 
                          <a href="/pengaturan" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Pengaturan</a>.
                        </p>
                      </div>  
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>  
    <!-- Profile Selesai-->
    <!-- Crop Photo Profile -->
    <form id="profilePhotoForm" action="{{ route('profile.updatePhoto') }}" method="POST" enctype="multipart/form-data" class="flex flex-col">
      @csrf
      <div id="cropperModal" class="fixed hidden inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
        <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-6 cardPhoto">
            <h2 class="text-lg font-medium dark:text-white text-gray-900">Sesuaikan Foto Profile</h2>
            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700"> 
            <div class="w-full h-64">
                <img id="cropperImage" src="{{asset('images/avatarDefault.png')}}" alt="Cropper Image" class="w-full h-full">
            </div>
            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700 grid grid-cols-4"> 
            <div class="mt-4 flex justify-end">
                <button id="cancelCrop" class="bg-gray-500 px-4 py-2 rounded-md text-white mr-2">Batal</button>
                <button id="applyCrop" class="bg-blue-700 px-4 py-2 rounded-md text-white">Terapkan</button>
            </div>
        </div>
      </div>
    </form>
    <!-- Crop Photo Profile Selesai -->
    <!-- Random Popup Avatar -->
    <form id="avatarPhotoForm" action="{{ route('profile.updateAvatar') }}" method="POST" enctype="multipart/form-data" class="flex flex-col">
      @csrf
      <div id="avatarPopup" class="fixed inset-0 hidden flex items-center justify-center z-50">
          <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-6 cardPhoto">
              <h2 class="text-lg font-medium dark:text-white text-gray-900">Pilih Karakter Avatar Kamu</h2>
              <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
              <img id="profileImageAvatar" src="{{ auth()->user()->profile_photo ? asset('images/photoProfileUser/' . auth()->user()->profile_photo) : asset('images/avatarDefault.png') }}" alt="Profile" class="w-24 h-24 rounded-full">
              <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
              <div class="grid grid-cols-4 gap-2" id="avatarContainerAdditional">
                  <!-- Avatar lainnya akan ditambahkan di sini oleh JavaScript -->
              </div>
              <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
              <div class="mt-4 flex justify-end">
                  <button id="closeAvatarPopup" class="bg-gray-500 px-4 py-2 rounded-md text-white mr-2">Batal</button>
                  <button id="applyAvatar" class="bg-blue-700 px-4 py-2 rounded-md text-white">Terapkan</button>
              </div>
          </div>
      </div>
  </form>
    <!-- Random Popup Avatar Selesai -->
    <!-- Footer Mulai -->
    <div id="app">
      <x-footer />
    </div>
    @component('components.source.javascript')
    @endcomponent
    <!-- Footer Selesai -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>   
  </body>
</html>