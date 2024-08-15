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
        <div id="app">
          <x-profileSidebar/>
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
              <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                <div class="dataDiri sm:mt-6 mt-10 lg:mt-10 lg:grid lg:grid-cols-2 sm:flex gap-4">
                    <div class="namaLengkap">
                        <label for="nama-lengkap" 
                            class="block mb-2 text-sm font-medium 
                            @error('name') text-red-700 dark:text-red-500 
                            @elseif(session('success')) text-green-700 dark:text-green-500 
                            @else text-gray-900 dark:text-white @enderror">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            name="name" 
                            id="nama-lengkap" 
                            aria-describedby="helper-text-explanation" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white font-medium dark:focus:ring-blue-500 dark:focus:border-blue-500 
                            @error('name') bg-red-50 border-red-500 text-red-900 placeholder-red-700 dark:border-red-500 dark:placeholder-red-500 dark:text-red-500 focus:ring-red-500 focus:border-red-500 
                            @elseif(session('successName')) bg-green-50 border-green-500 text-green-900 placeholder-green-700 dark:border-green-500 dark:placeholder-green-500 dark:text-white font-medium focus:ring-green-500 focus:border-green-500 
                            @enderror"
                            placeholder="{{ Auth::user()->name }}" 
                            value="{{ old('name', Auth::user()->name) }}"
                        >
                        @error('name')
                            <p class="mt-2 text-sm font-medium text-red-600 dark:text-red-500"><span class="font-bold">Gagal !</span> {{ $message }}</p>
                        @enderror
                        @if (session('successName'))
                            <p class="mt-2 text-sm font-medium text-green-600 dark:text-green-500"><span class="font-bold">Berhasil ! </span> {{ session('successName') }}</p>
                        @endif
                    </div>
                    <div class="email lg:mt-0 mt-5 sm:mt-5">
                        <label for="helper-text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email <span class="text-red-500">*</span></label>
                        <input type="email" id="disabled-input" aria-label="disabled input" class="-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ Auth::user()->email }}" disabled>
                        <div class="information flex gap-2 mt-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                                <path fill="#1a56db" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                            </svg>
                            <p id="helper-text-explanation" class="text-sm text-gray-500 dark:text-gray-400">
                                Email Terverifikasi, Kamu bisa mengganti alamat email pada menu 
                                <a href="/pengaturan" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Pengaturan</a>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:mt-2 sm:mt-6 mt-2">
                  <label for="message" class="block mb-2 text-sm font-medium 
                      @error('description') text-red-700 dark:text-red-500 
                      @elseif(session('success')) text-green-700 dark:text-green-500 
                      @else text-gray-900 dark:text-white @enderror">
                      Tentang Saya
                  </label>
                  <textarea 
                      id="message" 
                      name="description" 
                      rows="4" 
                      class="block p-2.5 w-full text-sm 
                          @error('description') bg-red-50 border-red-500 text-red-900 placeholder-red-700 dark:border-red-500 dark:bg-red-800 dark:text-red-500 
                          @elseif(session('successDesc')) bg-green-50 border-green-500 text-green-900 placeholder-green-700 dark:border-green-500 dark:bg-gray-700 dark:text-white font-medium
                          @else bg-gray-50 border-gray-300 text-gray-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @enderror
                          rounded-lg border focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                      placeholder="Tulis Deskripsi Kamu Disini..."
                  >{{ old('description', Auth::user()->description) }}</textarea>
                  @error('description')
                      <p class="mt-2 text-sm font-medium text-red-600 dark:text-red-500"><span class="font-bold">Gagal !</span> {{ $message }}</p>
                  @enderror
                  @if (session('successDesc'))
                      <p class="mt-2 text-sm font-medium text-green-600 dark:text-green-500"><span class="font-bold">Berhasil ! </span> {{ session('successDesc') }}</p>
                  @endif
                </div>
                <button type="submit" class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 lg:mt-5 mt-5 sm:mt-5">Simpan Perubahan</button>
              </form>                  
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
          <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-6 cardPhoto" style="width:500px">
              <h2 class="text-lg font-medium dark:text-white text-gray-900">Pilih Karakter Avatar Kamu</h2>
              <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
              <img id="profileImageAvatar" src="{{ auth()->user()->profile_photo ? asset('images/photoProfileUser/' . auth()->user()->profile_photo) : asset('images/avatarDefault.png') }}" alt="Profile" class="w-24 h-24 rounded-full">
              <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
              <div class="lg:grid lg:grid-cols-4 sm:grid-cols-2 grid grid-cols-3 sm:grid gap-2" id="avatarContainerAdditional">
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
    <!-- Filter Mode Mobile -->
      <div id="app">
        <x-ProfileSidebarMobile/>
      </div> 
    <!-- Filter Mode Mobile Selesai -->
    <!-- Footer Mulai -->
    <div id="app" style="margin-top: 100px;">
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