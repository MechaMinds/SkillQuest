    <button id="showSidebarButtonMobile" class="fixed top-10 left-4 bg-gray-100 dark:bg-gray-700 p-4 sm:fixed lg:hidden" style="margin-top:55px; border-radius: 0px 50px 50px 0px">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-6 h-6">
            <path class="dark:fill-white" fill="rgb(55 65 81)" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
        </svg>
    </button>
        <div id="daftarModuleMobile" class="fixed inset-0 dark:border-gray-600 bg-gray-100 dark:bg-gray-600 text-gray-900 dark:text-white overflow-y-auto hidden ">
            <div class="flex items-center justify-between py-5 px-4">
                <h2 class="text-xl font-semibold">Daftar Modul</h2>
                <svg id="cardButtonMobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-9 h-9 cursor-pointer px-2 py-2">
                    <path class="dark:fill-white" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                </svg>
            </div>
            <div class="dark:bg-gray-700 bg-gray-200 py-4 px-4">
                <span class="font-semibold text-lg">2% Progress</span>
                <div class="bar mt-2">
                    <div class="w-full bg-gray-400 rounded-full h-1.5 dark:bg-gray-800">
                        <div class="bg-blue-600 h-1.5 rounded-full" style="width: 2%"></div>
                    </div>
                </div>
            </div>
            <div class="space-y-4 py-4 px-4">
                <div id="persiapanBelajar">
                    <button id="dropdownbuttonDefaultMobile" class="flex justify-between w-full text-left text-foreground">
                        <div class="title flex flex-row justify-center items-center gap-2">
                            <svg id="dropdowniconDefaultMobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3 transition-transform">
                                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                            </svg>
                            <span class="text-lg font-semibold">Persiapan Belajar</span>
                        </div>
                        <span class="text-muted-foreground">0/3</span>
                    </button>
                    <ul id="dropdownmenuDefaultMobile" class="mt-2 space-y-2 hidden" style="padding-left: 18px">
                        <li class="flex items-center text-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3" id="sudah">
                                <path fill="#146ffe" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                            </svg>
                            <span class="ml-2">Pengenalan Kelas</span>
                        </li>
                        <li class="flex items-center text-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3" id="belum">
                                <path fill="#146ffe" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/>
                            </svg>
                            <span class="ml-2">Mekanisme Belajar</span>
                        </li>
                        <li class="flex items-center text-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3" id="belum">
                                <path fill="#146ffe" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/>
                            </svg>
                            <span class="ml-2">Forum Diskusi</span>
                        </li>
                        <hr class="my-8 bg-gray-200 border-0 dark:bg-gray-700 h-px"> 
                    </ul>
                </div>
                <div id="persiapanBelajar">
                    <button id="dropdownButtonMobile" class="flex justify-between w-full text-left text-foreground">
                        <div class="title flex flex-row justify-center items-center gap-2">
                            <svg id="dropdownIconMobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3 transition-transform">
                                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                            </svg>
                            <span class="text-lg font-semibold">Persiapan Belajar</span>
                        </div>
                        <span class="text-muted-foreground">0/6</span>
                    </button>
                    <ul id="dropdownMenuMobile" class="mt-2 space-y-2 hidden" style="padding-left: 18px">
                        <li class="flex items-center text-foreground">
                            <span class="text-blue-500">⭘</span>
                            <span class="ml-2">Persetujuan Hak Cipta <span class="text-muted-foreground">(Gratis)</span></span>
                        </li>
                        <li class="flex items-center text-foreground">
                            <span class="text-blue-500">⭘</span>
                            <span class="ml-2">Pengenalan Kelas <span class="text-muted-foreground">(Gratis)</span></span>
                        </li>
                        <li class="flex items-center text-foreground">
                            <span class="text-blue-500">⭘</span>
                            <span class="ml-2">Mekanisme Belajar <span class="text-muted-foreground">(Gratis)</span></span>
                        </li>
                        <li class="flex items-center text-foreground">
                            <span class="text-blue-500">⭘</span>
                            <span class="ml-2">Forum Diskusi <span class="text-muted-foreground">(Gratis)</span></span>
                        </li>
                        <li class="flex items-center text-foreground">
                            <span class="text-blue-500">⭘</span>
                            <span class="ml-2">Mekanisme Belajar <span class="text-muted-foreground">(Gratis)</span></span>
                        </li>
                        <li class="flex items-center text-foreground">
                            <span class="text-blue-500">⭘</span>
                            <span class="ml-2">Forum Diskusi <span class="text-muted-foreground">(Gratis)</span></span>
                        </li>
                        <hr class="my-8 bg-gray-200 border-0 dark:bg-gray-700 h-px">
                    </ul>
                </div>                    
            </div>
        </div>