<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SkillQuest ⸺ Solusi Belajar IT</title>
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
                                <!-- Existing password fields -->
                                <div class="password">
                                    <label for="current_password" 
                                        class="block mb-2 text-sm font-medium 
                                        @error('current_password') text-red-700 dark:text-red-500 
                                        @else text-gray-900 dark:text-white @enderror">
                                        Kata Sandi Saat Ini <span class="text-red-500">*</span>
                                    </label>
                                    <div class="flex">
                                        <input 
                                        type="password" 
                                        name="current_password" 
                                        id="current_password" 
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none rounded-s-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white font-medium dark:focus:ring-blue-500 dark:focus:border-blue-500 
                                        @error('current_password') bg-red-50 border-red-500 text-red-900 placeholder-red-700 dark:border-red-500 dark:placeholder-red-500 dark:text-red-500 focus:ring-red-500 focus:border-red-500 
                                        @enderror"
                                        required
                                        >
                                        <span id="toggle-password" class="toggle-password inline-flex items-center px-4 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-lg cursor-pointer dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                            <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 h-4 text-gray-500 dark:text-gray-400">
                                                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    @error('current_password')
                                        <p class="mt-2 text-sm font-medium text-red-600 dark:text-red-500"><span class="font-bold">Gagal !</span> {{ $message }}</p>
                                    @enderror
                                </div>
                            
                                <div class="password mt-4 lg:mt-0">
                                    <label for="new_password" 
                                        class="block mb-2 text-sm font-medium 
                                        @error('new_password') text-red-700 dark:text-red-500 
                                        @else text-gray-900 dark:text-white @enderror">
                                        Kata Sandi Baru <span class="text-red-500">*</span>
                                    </label>
                                    <div class="flex">
                                        <input 
                                        type="password" 
                                        name="new_password" 
                                        id="new_password" 
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none rounded-s-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white font-medium dark:focus:ring-blue-500 dark:focus:border-blue-500 
                                        @error('new_password') bg-red-50 border-red-500 text-red-900 placeholder-red-700 dark:border-red-500 dark:placeholder-red-500 dark:text-red-500 focus:ring-red-500 focus:border-red-500 
                                        @enderror"
                                        required
                                        >
                                        <span id="toggle-password" class="toggle-password inline-flex items-center px-4 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-lg cursor-pointer dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                            <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 h-4 text-gray-500 dark:text-gray-400">
                                                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    @error('new_password')
                                        <p class="mt-2 text-sm font-medium text-red-600 dark:text-red-500"><span class="font-bold">Gagal !</span> {{ $message }}</p>
                                    @enderror
                                </div>  
                                
                                <div class="password mt-4 lg:mt-0">
                                    <label for="new_password_confirmation" 
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('new_password_confirmation') text-red-700 dark:text-red-500 @enderror">
                                        Konfirmasi Kata Sandi Baru <span class="text-red-500">*</span>
                                    </label>
                                    <div class="flex">
                                        <input 
                                        type="password" 
                                        name="new_password_confirmation" 
                                        id="new_password_confirmation" 
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none rounded-s-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white font-medium dark:focus:ring-blue-500 dark:focus:border-blue-500 
                                        @error('new_password_confirmation') bg-red-50 border-red-500 text-red-900 placeholder-red-700 dark:border-red-500 dark:placeholder-red-500 dark:text-red-500 focus:ring-red-500 focus:border-red-500 
                                        @enderror"
                                        required
                                        >
                                        <span id="toggle-password" class="toggle-password inline-flex items-center px-4 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-lg cursor-pointer dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                            <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 h-4 text-gray-500 dark:text-gray-400">
                                                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    @error('new_password_confirmation')
                                        <p class="mt-2 text-sm font-medium text-red-600 dark:text-red-500"><span class="font-bold">Gagal !</span> Kata sandi konfirmasi tidak sama.</p>
                                    @enderror
                                </div>                                
                            </div>              
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
    <script>
        document.querySelectorAll('.toggle-password').forEach(item => {
            item.addEventListener('click', function () {
                // Mendapatkan elemen input dan ikon berdasarkan konteks item yang di klik
                var passwordInput = this.previousElementSibling;
                var iconEye = this.querySelector('svg');
    
                // Logika untuk mengubah tipe input dan ikon mata
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    iconEye.innerHTML =
                        '<path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/>';
                } else {
                    passwordInput.type = "password";
                    iconEye.innerHTML =
                        '<path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>';
                }
            });
        });
    </script>    
  </body>
</html>