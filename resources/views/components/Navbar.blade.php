<nav class="fixed top-0 w-full z-50 navbar bg-white border border-gray-200 rounded-full shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('images/logo.png') }}" class="h-8" alt="Pintar Path Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-900 dark:text-white">Pintar Path</span>
      </a>
      <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
        <button data-modal-target="search-modal" data-modal-toggle="search-modal" type="button" class="searching bg-gray-700 py-4 px-4 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
            <path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
          </svg>
        </button>
        <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 sm:hidden lg:flex hidden">Login</a>
        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 sm:hidden lg:flex hidden">Daftar</a>
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