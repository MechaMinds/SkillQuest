<div id="backgroundOpacity" class="fixed inset-0 hidden items-end justify-end" style="z-index:60; height: 100vh; background: rgb(0, 0, 0, 0.7);"></div>
    <div id="background" class="fixed inset-0 bg-white dark:bg-gray-800 hidden items-end justify-end" style="z-index:60; height: 400px; margin-top:400px; border-radius: 30px 30px 0px 0px">
        <div class="py-6 px-6 relative">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 mt-2 absolute right-6 top-6 close-icon" id="closeIcon">
                <path fill="#fff" d="M18.3 5.71a1 1 0 0 0-1.42 0L12 10.59 7.11 5.7a1 1 0 0 0-1.42 1.42L10.59 12l-4.9 4.88a1 1 0 1 0 1.42 1.42L12 13.41l4.88 4.9a1 1 0 0 0 1.42-1.42L13.41 12l4.9-4.88a1 1 0 0 0 0-1.41z"/>
            </svg>
            <h1 class="font-medium text-xl ml-10 mt-2 text-gray-900 dark:text-white">Penyesuaian</h1>
            <div class="daftarProfile grid grid-cols-2 gap-2" style="margin-top: 50px">
              <div class="profile w-full p-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow items-center text-center sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <a href="/profile" class="text-sm font-medium text-gray-500 dark:text-gray-400 text-center">Detail Profile</a>
              </div>
              <div class="profile w-full p-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow items-center text-center sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <a href="/profile" class="text-sm font-medium text-gray-500 dark:text-gray-400 text-center">Data Pribadi</a>
              </div>
              <div class="profile w-full p-4 max  -w-sm bg-white border border-gray-200 rounded-lg shadow items-center text-center sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <a href="/profile" class="text-sm font-medium text-gray-500 dark:text-gray-400 text-center">Course Saya</a>
              </div>
              <div class="profile w-full p-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow items-center text-center sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <a href="/riwayat-transaksi" class="text-sm font-medium text-gray-500 dark:text-gray-400 text-center">Riwayat Transaksi</a>
              </div>
              <div class="profile w-full p-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow items-center text-center sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <a href="/pengaturan" class="text-sm font-medium text-gray-500 dark:text-gray-400 text-center">Pengaturan Lanjut</a>
              </div>
            </div>
        </div>
    </div>
    <button class="items-center justify-center font-medium disabled:opacity-80 gap-2 h-12 min-w-[theme(spacing.36)] px-5 rounded-full disabled:bg-mono-200 disabled:text-mono-600 disabled:cursor-not-allowed bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 text-white fixed bottom-5 left-1/2 z-10 flex -translate-x-1/2 lg:hidden z-30" type="button" id="filterButton">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
          <path fill="#fff"  d="M40 48C26.7 48 16 58.7 16 72l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24L40 48zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L192 64zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zM16 232l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0z"/>
        </svg>
        Profile Menu
    </button>