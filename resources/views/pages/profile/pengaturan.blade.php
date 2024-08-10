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
    <!-- Pengaturan -->
    <section class="secPrim bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="parnt mx-auto max-w-screen-xl gap-3 flex">
            <div id="app">
            <x-profileSidebar/>
            </div>
            <!-- Card Section -->
            <div class="card-container z-20 section-title py-5 px-4" style="width:100%">
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden px-5 py-3">
                    <div class="p-4">
                        <h2 class="text-2xl font-semibold dark:text-white text-gray-800">Pengaturan</h2>
                        <hr class="h-px my-6 bg-gray-200 border-0 dark:bg-gray-700">
                        <h1 class="font-medium dark:text-white text-gray-900 text-lg">Ubah Email</h1>    
                        <form action="{{ route('pengaturan.update') }}" method="POST">
                            @csrf
                            <div class="dataDiri sm:mt-6 mt-7 lg:mt-7 lg:grid lg:grid-cols-2 sm:flex gap-4">
                                <div class="email">
                                    <label for="email" 
                                        class="block mb-2 text-sm font-medium 
                                        @error('email') text-red-700 dark:text-red-500 
                                        @elseif(session('successEmail')) text-green-700 dark:text-green-500 
                                        @else text-gray-900 dark:text-white @enderror">
                                        Email Baru <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="email" 
                                        name="email" 
                                        id="email" 
                                        aria-describedby="helper-text-explanation" 
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white font-medium dark:focus:ring-blue-500 dark:focus:border-blue-500 
                                        @error('email') bg-red-50 border-red-500 text-red-900 placeholder-red-700 dark:border-red-500 dark:placeholder-red-500 dark:text-red-500 focus:ring-red-500 focus:border-red-500 
                                        @elseif(session('successEmail')) bg-green-50 border-green-500 text-green-900 placeholder-green-700 dark:border-green-500 dark:placeholder-green-500 dark:text-white font-medium focus:ring-green-500 focus:border-green-500 
                                        @enderror"
                                        placeholder="{{ Auth::user()->email }}" 
                                        value="{{ old('email', Auth::user()->email) }}"
                                    >
                                    @error('email')
                                        <p class="mt-2 text-sm font-medium text-red-600 dark:text-red-500"><span class="font-bold">Gagal !</span> {{ $message }}</p>
                                    @enderror
                                    @if (session('successEmail'))
                                        <p class="mt-2 text-sm font-medium text-green-600 dark:text-green-500"><span class="font-bold">Berhasil ! </span> {{ session('successEmail') }}</p>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 lg:mt-5 mt-5 sm:mt-5">Ubah Email</button>
                        </form>    
                        <h1 class="font-medium mt-10 dark:text-white text-gray-900 text-lg">Ubah Kata Sandi</h1>    
                        <form action="{{ route('pengaturan.updatePassword') }}" method="POST">
                            @csrf
                            <div class="sm:mt-6 mt-7 lg:mt-7 lg:grid lg:grid-cols-2 sm:flex gap-4">
                                <div class="password">
                                    <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Kata Sandi Saat Ini <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="password" 
                                        name="current_password" 
                                        id="current_password" 
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white font-medium"
                                        required
                                    >
                                    @error('current_password')
                                        <p class="mt-2 text-sm font-medium text-red-600 dark:text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="new_password mt-4 lg:mt-0">
                                    <label for="new_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Kata Sandi Baru <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="password" 
                                        name="new_password" 
                                        id="new_password" 
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white font-medium"
                                        required
                                    >
                                    @error('new_password')
                                        <p class="mt-2 text-sm font-medium text-red-600 dark:text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>  
                                <div class="new_password_confirmation mt-4 lg:mt-0">
                                    <label for="new_password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Konfirmasi Kata Sandi Baru <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="password" 
                                        name="new_password_confirmation" 
                                        id="new_password_confirmation" 
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white font-medium"
                                        required
                                    >
                                </div>
                            </div>                        
                            <ul class="max-w-md space-y-1 mt-3 text-gray-500 list-inside dark:text-gray-400">
                                <li class="flex items-center">
                                    <svg class="w-3.5 h-3.5 me-2 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    At least 10 characters
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3.5 h-3.5 me-2 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    At least one lowercase character
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3.5 h-3.5 me-2 text-gray-500 dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    At least one special character, e.g., ! @ # ?
                                </li>
                            </ul>
                            <button type="submit" class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 lg:mt-5 mt-5 sm:mt-5">Kata Sandi</button>
                        </form>                                                        
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <!-- Pengaturan Selesai-->
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