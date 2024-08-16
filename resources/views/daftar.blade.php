<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SkillQuest ⸺ Solusi Belajar IT</title>
        <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.ico') }}" />
        <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" /> -->
    </head>
    <body class="bg-logdaf">
        <div class="flex h-screen place-items-center">
            <div class="bg-white rounded-lg flex flex-col justify-center daftarCard "> 
                <a href="/">
                    <button type="button" class="text-gray-900 w-32 flex items-center justify-center bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-md gap-2 px-5 py-2.5 me-2 mb-10 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 18px; height:18px;">
                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                        </svg>
                        Kembali
                    </button>    
                </a> 
                <div class="flex justify-left mb-6">
                    <img src="{{asset('images/logo.png')}}" alt="Tailwind UI Logo" class="h-16" />
                </div>
                <h2 class="text-3xl font-bold text-gray-900 text-left mb-2">Bergabung dan Kembangkan Potensi Anda</h2>
                <h2 class="text-1xl font-regular text-gray-400 text-left mb-10">Sudah punya akun ? <a href="/login" class="text-blue-700 text-1xl font-medium ">Masuk Sekarang</a></h2>
                <form method="POST" action="{{ route('daftar') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-900 font-medium mb-2">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="border border-gray-300 rounded-lg p-2 w-full" required />
                    </div>
                    <div class="mb-4">
                        <label for="email" 
                            class="block mb-2 text-sm font-medium 
                            @error('email') text-red-700 dark:text-red-500 
                            @elseif(session('success')) text-green-700 dark:text-green-500 
                            @else text-gray-900 dark:text-white @enderror">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            aria-describedby="email-helper-text" 
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white font-medium dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('email') bg-red-50 border-red-500 text-red-900 placeholder-red-700 dark:border-red-500 dark:placeholder-red-500 dark:text-red-500 focus:ring-red-500 focus:border-red-500 
                            @elseif(session('success')) bg-green-50 border-green-500 text-green-900 placeholder-green-700 dark:border-green-500 dark:placeholder-green-500 dark:text-white font-medium focus:ring-green-500 focus:border-green-500 
                            @enderror"
                            required
                        >
                        @error('email')
                            <p class="mt-2 text-sm font-medium text-red-600 dark:text-red-500"><span class="font-bold">Gagal!</span> {{ $message }}</p>
                        @enderror
                        @if (session('success'))
                            <p class="mt-2 text-sm font-medium text-green-600 dark:text-green-500"><span class="font-bold">Berhasil!</span> {{ session('success') }}</p>
                        @endif
                    </div>
                    
                    <div class="mb-4">
                        <label for="password" 
                            class="block mb-2 text-sm font-medium 
                            @error('password') text-red-700 dark:text-red-500 
                            @elseif(session('successPassword')) text-green-700 dark:text-green-500 
                            @else text-gray-900 dark:text-white @enderror">
                            Kata Sandi <span class="text-red-500">*</span>
                        </label>
                        <div class="flex">
                            <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-none rounded-s-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white font-medium dark:focus:ring-blue-500 dark:focus:border-blue-500 
                            @error('password') bg-red-50 border-red-500 text-red-900 placeholder-red-700 dark:border-red-500 dark:placeholder-red-500 dark:text-red-500 focus:ring-red-500 focus:border-red-500 
                            @elseif(session('successPassword')) bg-green-50 border-green-500 text-green-900 placeholder-green-700 dark:border-green-500 dark:placeholder-green-500 dark:text-white font-medium focus:ring-green-500 focus:border-green-500 
                            @enderror"
                            required 
                        />
                            <span id="toggle-password" class="inline-flex items-center px-4 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-lg cursor-pointer dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 h-4 text-gray-500 dark:text-gray-400">
                                    <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                </svg>
                            </span>
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm font-medium text-red-600 dark:text-red-500"><span class="font-bold">Gagal!</span> {{ $message }}</p>
                        @enderror
                        @if (session('successPassword'))
                            <p class="mt-2 text-sm font-medium text-green-600 dark:text-green-500"><span class="font-bold">Berhasil!</span> {{ session('successPassword') }}</p>
                        @endif
                    </div>
                    <div class="flex items-center mb-6 mt-6">
                        <div class="flex w-full">
                            <input id="default-checkbox" type="checkbox" value="" class="mt-1 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            <label for="default-checkbox" class="ml-2 text-sm font-regular text-gray-900 dark:text-gray-300" style="padding-right: 120px">Dengan mendaftar, Anda akan membuat akun di PintarPath dan menyetujui <a href="" class="text-blue-700 font-bold underline">Syarat Penggunaan</a> dan <a href   class="text-blue-700 font-bold underline">Kebijakan Privasi</a> PintarPath.</label>
                        </div>
                    </div>                    
                    <button type="submit" class="bg-blue-700 text-white font-medium hover:bg-blue-800 w-full py-3 rounded-lg">Daftar Sekarang</button>
                    <div class="relative flex items-center justify-center mt-14">
                        <hr class="w-full h-px bg-gray-300 border-0 dark:bg-gray-700">
                        <span class="absolute px-2 bg-white font-medium text-gray-600 dark:bg-gray-800 dark:text-gray-300">Atau</span>
                    </div>                
                    <div class="flex mt-7 mb-10">
                        <button type="button" class="text-gray-900 w-full flex items-center justify-center bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-md gap-2 px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262" id="google">
                                <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path>
                                <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path>
                                <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path>
                                <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path>
                            </svg>
                            Google
                        </button>                        
                        <button type="button" class="text-gray-900 w-full flex items-center justify-center bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-md gap-2 px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="github" class="w-6 h-6">
                                <path d="M12,2.2467A10.00042,10.00042,0,0,0,8.83752,21.73419c.5.08752.6875-.21247.6875-.475,0-.23749-.01251-1.025-.01251-1.86249C7,19.85919,6.35,18.78423,6.15,18.22173A3.636,3.636,0,0,0,5.125,16.8092c-.35-.1875-.85-.65-.01251-.66248A2.00117,2.00117,0,0,1,6.65,17.17169a2.13742,2.13742,0,0,0,2.91248.825A2.10376,2.10376,0,0,1,10.2,16.65923c-2.225-.25-4.55-1.11254-4.55-4.9375a3.89187,3.89187,0,0,1,1.025-2.6875,3.59373,3.59373,0,0,1,.1-2.65s.83747-.26251,2.75,1.025a9.42747,9.42747,0,0,1,5,0c1.91248-1.3,2.75-1.025,2.75-1.025a3.59323,3.59323,0,0,1,.1,2.65,3.869,3.869,0,0,1,1.025,2.6875c0,3.83747-2.33752,4.6875-4.5625,4.9375a2.36814,2.36814,0,0,1,.675,1.85c0,1.33752-.01251,2.41248-.01251,2.75,0,.26251.1875.575.6875.475A10.0053,10.0053,0,0,0,12,2.2467Z"></path>
                            </svg>
                            Github
                        </button>        
                    </div>
                </form>                             
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Menampilkan notifikasi berhasil
                if (document.getElementById('notif-berhasil')) {
                    document.getElementById('notif-berhasil').style.display = 'flex';
                    setTimeout(() => {
                        document.getElementById('notif-berhasil').style.display = 'none';
                    }, 3000);
                }
    
                // Menampilkan notifikasi gagal
                if (document.getElementById('notif-gagal')) {
                    document.getElementById('notif-gagal').style.display = 'flex';
                    setTimeout(() => {
                        document.getElementById('notif-gagal').style.display = 'none';
                    }, 3000);
                }
            });
        </script>
        <script>
            document
                .getElementById("toggle-password")
                .addEventListener("click", function () {
                    var passwordInput = document.getElementById("password");
                    var iconEye = document.getElementById("icon-eye");

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
        </script>
    </body>
</html>