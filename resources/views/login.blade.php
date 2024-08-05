<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pintar Path ⸺ Solusi Belajar IT</title>
        <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.ico') }}" />
        <link rel="stylesheet" href="./Login - Tailwind UI_files/app-e1f9efeb.css" />
        <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" /> -->
    </head>
    <body>
        <div class="flex h-screen place-items-center">
            <div class="bg-white rounded-lg shadow-lg flex flex-col justify-center loginCard"> 
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
                <h2 class="text-3xl font-bold text-gray-900 text-left mb-2">Selamat Datang Kembali</h2>
                <h2 class="text-1xl font-regular text-gray-400 text-left mb-10">Belum punya akun ? <a href="/daftar" class="text-blue-700 text-1xl font-medium ">Daftar Sekarang</a></h2>
                <form>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-900 font-medium mb-2">Email</label>
                        <input type="email" id="email" class="border border-gray-300 rounded-lg p-2 w-full" required />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-900 font-medium mb-2">Kata Sandi</label>
                        <input type="password" id="password" class="border border-gray-300 rounded-lg p-2 w-full" required />
                    </div>
                    <div class="flex items-center mb-6 mt-6">
                        <div class="flex items-center w-full">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-2 text-sm font-regular text-gray-900 dark:text-gray-300">Ingat Saya</label>
                            <a href="#" class="ml-auto text-blue-700 font-medium">Lupa Kata Sandi ? </a>
                        </div>
                    </div>                    
                    <button type="submit" class="bg-blue-700 text-white font-medium hover:bg-blue-800 w-full py-3 rounded-lg">Masuk Sekarang</button>
                    <div class="relative flex items-center justify-center mt-14">
                        <hr class="w-full h-px bg-gray-300 border-0 dark:bg-gray-700">
                        <span class="absolute px-2 bg-white font-medium text-gray-600 dark:bg-gray-800 dark:text-gray-300">Atau</span>
                    </div>                
                    <div class="flex mt-7">
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
            <div class="hidden lg:block lg:w-1/2 bg-cover bg-center">
                <img src="{{asset('images/loginBackground.png')}}" alt="Tailwind UI Login Background" class="backgroundLogin" />
            </div>
        </div>
    </body>
</html>