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
                        <h2 class="text-2xl font-semibold dark:text-white text-gray-800">Data Pribadi</h2>
                        <hr class="h-px my-6 bg-gray-200 border-0 dark:bg-gray-700">
                        <div class="dark:bg-gray-700 bg-gray-100 dark:text-white text-gray-900 text-md p-5 rounded-lg font-medium mb-5">
                            Kami perlu data pribadi kamu untuk layanan yang lebih baik. Dengan mengisi formulir ini, kamu setuju data akan digunakan sesuai <a href="" class="text-blue-600 dark:text-blue-500 underline font-medium">kebijakan privasi</a> kami.
                        </div>
                        {{-- <form method="POST" action="{{ route('personalData.store') }}"> --}}
                            @csrf
                            <div class="dataDiri">
                                <div class="lg:grid lg:grid-cols-2 sm:flex gap-4">
                                    <div class="sm:mt-5 lg:mt-0 mt-5 tanggaLahir">
                                        <h1 class="mb-3 font-medium dark:text-white text-gray-900 text-lg">Tanggal Lahir <span class="text-red-500">*</span></h1>                    
                                        <div class="relative max-w-sm">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                                </svg>
                                            </div>
                                            <input id="datepicker-autohide" name="tanggal_lahir" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                        </div>  
                                    </div>
                                    <div class="sm:mt-5 lg:mt-0 mt-5 tempatLahir">
                                        <h1 class="mb-3 font-medium dark:text-white text-gray-900 text-lg">
                                            Tempat Lahir <span class="text-red-500">*</span>
                                        </h1>
                                        <div class="relative max-w-sm">
                                            <input 
                                                type="text" 
                                                name="tempat_lahir" 
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                
                                            >
                                        </div>
                                    </div>  
                                    <div class="sm:mt-5 lg:mt-0 mt-5 nomorWhatsapp">
                                        <h1 class="mb-3 font-medium dark:text-white text-gray-900 text-lg">Nomor Whatsapp <span class="text-red-500">*</span></h1>                    
                                        <div class="relative max-w-sm">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">
                                                    <?xml version="1.0" encoding="utf-8"?>
                                                    <svg width="800px" height="800px" class="h-4 w-4 me-2" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet"><path fill="#DC1F26" d="M32 5H4a4 4 0 0 0-4 4v9h36V9a4 4 0 0 0-4-4z"></path><path fill="#EEE" d="M36 27a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4v-9h36v9z"></path></svg>
                                                    +62
                                                </div>
                                                <label for="phone-input" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Phone number:</label>
                                                <div class="relative w-full">
                                                    <input type="text" name="nomor_whatsapp" id="phone-input" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-0 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="08xx-xxxx-xxxx" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:mt-5 lg:mt-0 mt-5 jenisKelamin">
                                        <h1 class="mb-3 font-medium dark:text-white text-gray-900 text-lg">Jenis Kelamin<span class="text-red-500">*</span></h1>                    
                                        <div class="relative max-w-sm">
                                            <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                                    <div class="flex items-center ps-3">
                                                        <input id="horizontal-list-radio-license" name="jenis_kelamin" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-Laki</label>
                                                    </div>
                                                </li>
                                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                                    <div class="flex items-center ps-3">
                                                        <input id="horizontal-list-radio-id" name="jenis_kelamin" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="horizontal-list-radio-id" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>  
                                    </div>
                                </div>   
                                <div class="lg:grid lg:grid-cols-3 sm:flex gap-4 mt-5">
                                    <!-- Provinsi Dropdown -->
                                    <div class="sm:mt-5 lg:mt-0 mt-5 provinsi relative">
                                        <h1 class="mb-3 font-medium dark:text-white text-gray-900 text-lg">Provinsi <span class="text-red-500">*</span></h1>
                                        <select id="provinsi-select" name="provinsi_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Pilih Provinsi</option>
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province['province_id'] }}">{{ $province['province'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Kota Dropdown -->
                                    <div class="sm:mt-5 lg:mt-0 mt-5 kotaKabupaten relative">
                                        <h1 class="mb-3 font-medium dark:text-white text-gray-900 text-lg">Kota atau Kabupaten <span class="text-red-500">*</span></h1>
                                        <div class="relative max-w-sm">
                                            <select 
                                                id="kota-select" 
                                                name="kota_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                disabled
                                            >
                                                <option value="">Pilih Kota atau Kabupaten</option>
                                                <!-- Options will be populated dynamically -->
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Kode Pos Dropdown -->
                                    <div class="sm:mt-5 lg:mt-0 mt-5 kodePos relative">
                                        <h1 class="mb-3 font-medium dark:text-white text-gray-900 text-lg">Kode Pos <span class="text-red-500">*</span></h1>
                                        <div class="relative max-w-sm">
                                            <select 
                                                id="kode-pos-select" 
                                                name="kode_pos"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                disabled
                                            >
                                                <option value="">Pilih Kode Pos</option>
                                                <!-- Options will be populated dynamically -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-5">
                                    <div class="sm:mt-5 lg:mt-0 mt-5 Alamat">
                                        <h1 class="mb-3 font-medium dark:text-white text-gray-900 text-lg">Alamat Tempat Tinggal <span class="text-red-500">*</span></h1>                    
                                        <div class="relative w-full">
                                            <input type="text" name="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="Ketik Alamat Tempat Tinggal" >
                                        </div>  
                                    </div> 
                                </div> 
                                <div class="lg:grid lg:grid-cols-2 sm:flex gap-4 mt-5">
                                    <div class="sm:mt-5 lg:mt-0 mt-5 pendidikanTerakhir">
                                        <h1 class="mb-3 font-medium dark:text-white text-gray-900 text-lg">Pendidikan Terakhir<span class="text-red-500">*</span></h1>                    
                                        <div class="relative max-w-sm">
                                            <input type="text" name="pendidikan_terakhir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="Ketik Pendidikan Terakhir" >
                                        </div>  
                                    </div>
                                    <div class="sm:mt-5 lg:mt-0 mt-5 pekerjaanSaatIni">
                                        <h1 class="mb-3 font-medium dark:text-white text-gray-900 text-lg">Pekerjaan Saat Ini<span class="text-red-500">*</span></h1>                    
                                        <div class="relative max-w-sm">
                                            <input type="text" name="pekerjaan_saat_ini" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="Ketik Pekerjaan Saat Ini" >
                                        </div>  
                                    </div>
                                </div> 
                                <button type="submit" class="mt-4 bg-blue-700 text-white px-5 py-3 text-1xl rounded-lg">Simpan Perubahan</button>    
                            </div>
                            @if (session('status') == 'success')
                                <script>
                                    alert('{{ session('message') }}');
                                </script>
                            @elseif (session('status') == 'error')
                                <script>
                                    alert('{{ session('message') }}');
                                </script>
                            @endif    
                        {{-- </form>                               --}}
                    </div>
                </div>
            </div>
        </section>  
        <!-- Profile Selesai-->
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