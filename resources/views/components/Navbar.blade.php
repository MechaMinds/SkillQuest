<nav class="fixed top-0 w-full z-50 navbar bg-white border border-gray-200 rounded-full shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('images/logo.png') }}" class="h-8" alt="Pintar Path Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-900 dark:text-white">Pintar Path</span>
      </a>
      <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
        <button data-modal-target="search-modal" data-modal-toggle="search-modal" type="button" class="searching bg-gray-100 dark:bg-gray-700 py-4 px-4 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
            <path class="dark:fill-white" fill="rgb(55 65 81)" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
          </svg>
        </button>
        <!-- Jika pengguna belum login -->
        @guest
          <a href="/login" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 sm:hidden lg:flex hidden">Login</a>
          <a href="/daftar" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 sm:hidden lg:flex hidden">Daftar</a>
        @endguest
        <!-- Jika pengguna sudah login -->
        @auth        
        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-11 h-11 rounded-full cursor-pointer sm:hidden lg:block hidden" src="{{ auth()->user()->profile_photo ? asset('images/photoProfileUser/' . auth()->user()->profile_photo) : asset('images/avatarDefault.png') }}"  alt="User dropdown">
          <!-- Dropdown menu -->
          <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
              <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                @php
                  $fullName = Auth::user()->name;
                  $nameParts = explode(' ', $fullName);

                  // Proses mengambil sebagian nama
                  $shortName = implode(' ', array_slice($nameParts, 0, 2));

                  // Tambahkan '...' jika nama memiliki lebih dari dua kata
                  if (count($nameParts) > 2) {
                      $shortName .= ' ' . substr($nameParts[2], 0, 1) . '...';
                  }
                @endphp

                <div>{{ $shortName }}</div>
                <div class="font-medium truncate">{{ Auth::user()->email }}</div>
              </div>
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                <li>
                  <a href="/profile" class="block font-medium px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile Saya</a>
                </li>
                <li>
                  <a href="#" class="block font-medium px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Course Saya</a>
                </li>
                <li>
                  <a href="#" class="block font-medium px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Transaksi</a>
                </li>
              </ul>
              <div class="py-1">
                <form method="GET" action="{{ route('logout') }}">
                    @csrf
                    <a type="submit" class="block font-medium px-4 py-2 text-sm text-red-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-red-500">
                        <button>
                          Keluar
                        </button>
                    </a>
                </form>
              </div>
          </div>
        @endauth
        <button data-collapse-toggle="mobile-bar" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-bar" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
        <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
          <li>
            <a href="/" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
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
                <button type="button" style="margin-top: 40px" class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-end">
                  <a href="/kelas">
                    Semua Kelas
                  </a>
                </button>
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
                    <a href="/kelas/machine-learning" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg">
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
                <button type="button" style="margin-top: 40px" class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-end">
                  <a href="/roadmap">Semua Road Map</a>
                </button>
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
                    <a href="/roadmap/machine-learning" class="flex flex-row items-center justify-center text-black dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 text-lg text-center">
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
  <div id="search-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)]">
    <div class="relative p-4 w-full max-w-2xl">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700" style="height:500px">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
              Pencarian
          </h3>
          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="search-modal">
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
              <span class="sr-only">Close modal</span>
          </button>
        </div>         
        <form class="mx-auto " >
          <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
          <div class="relative">
            <input type="search" id="default-search" class="block w-full p-5 ps-10 text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white" placeholder="Cari kelas disini" required style="border:none;" />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="margin-right: 10px">Search</button>
          </div>
        </form>          
      </div>
    </div>
  </div>
  <!-- Mobile Navbar -->
  <div id="mobile-bar" class="fixed inset-0 bg-white dark:bg-gray-800 hidden items-end justify-end" style="z-index: 100;">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto px-6 py-6">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('images/logo.png') }}" class="h-8" alt="Pintar Path Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-900 dark:text-white">Pintar Path</span>
      </a>
      <button id="close-button" class="ml-auto flex items-center justify-center h-8 w-8 text-gray-900 dark:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
    <div class="px-3 py-4 overflow-y-auto rounded">
			<ul class="space-y-2">
				<li>
					<a href="#"
						class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
              <path fill="currentColor" d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
            </svg>
						<span class="ml-3 font-semibold">Beranda</span>
					</a>
				</li>
				<li>
					<button type="button" class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="kelas-mobile" data-collapse-toggle="kelas-mobile">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
              <path fill="currentColor" d="M160 64c0-35.3 28.7-64 64-64L576 0c35.3 0 64 28.7 64 64l0 288c0 35.3-28.7 64-64 64l-239.2 0c-11.8-25.5-29.9-47.5-52.4-64l99.6 0 0-32c0-17.7 14.3-32 32-32l64 0c17.7 0 32 14.3 32 32l0 32 64 0 0-288L224 64l0 49.1C205.2 102.2 183.3 96 160 96l0-32zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352l53.3 0C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7L26.7 512C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z"/>
            </svg>
            <span class="flex-1 ml-3 text-left whitespace-no-wrap font-semibold" sidebar-toggle-item>Kelas</span>
            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
					<ul id="kelas-mobile" class="hidden py-2 space-y-2">
            <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700"> 
						<li>
							<a href="#"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">UI/UX Design</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Web Developer</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Android Developer</a>
						</li>
						<li>
							<a href="/kelas/machine-learning"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Machine Learning</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Data Scientist</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">iOS Developer</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">DevOps Engineer</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Cloud Computing</a>
						</li>
					</ul>
				</li>
				<li>
					<button type="button" class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="roadmap-mobile" data-collapse-toggle="roadmap-mobile">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
              <path fill="currentColor" d="M384 476.1L192 421.2l0-385.3L384 90.8l0 385.3zm32-1.2l0-386.5L543.1 37.5c15.8-6.3 32.9 5.3 32.9 22.3l0 334.8c0 9.8-6 18.6-15.1 22.3L416 474.8zM15.1 95.1L160 37.2l0 386.5L32.9 474.5C17.1 480.8 0 469.2 0 452.2L0 117.4c0-9.8 6-18.6 15.1-22.3z"/>
            </svg>
            <span class="flex-1 ml-3 text-left whitespace-nowra font-semibold" sidebar-toggle-item>Road Map</span>
            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
					<ul id="roadmap-mobile" class="hidden py-2 space-y-2">
            <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700"> 
						<li>
							<a href="#"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">UI/UX Design</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Web Developer</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Android Developer</a>
						</li>
						<li>
							<a href="/roadmap/machine-learning"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Machine Learning</a>
						</li>
					</ul>
				</li>
				<li>
					<button type="button" class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="komunitas-mobile" data-collapse-toggle="komunitas-mobile">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
              <path fill="currentColor" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192l42.7 0c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0L21.3 320C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7l42.7 0C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3l-213.3 0zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352l117.3 0C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7l-330.7 0c-14.7 0-26.7-11.9-26.7-26.7z"/>
            </svg>
            <span class="flex-1 ml-3 text-left whitespace-nowrap font-semibold" sidebar-toggle-item>Komunitas</span>
            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
					<ul id="komunitas-mobile" class="hidden py-2 space-y-2">
            <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700"> 
						<li>
							<a href="#"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Forum</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center w-full px-4 py-4 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Blog Berita</a>
						</li>
					</ul>
				</li>
      </ul>
  </div>
  
  <!-- Mobile Navbar Selesai -->

  <script>
    document.getElementById('close-button').addEventListener('click', function() {
      document.getElementById('mobile-bar').classList.add('hidden');
    });
  </script>