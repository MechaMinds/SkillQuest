<div id="chat-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full">
    <div class="relative p-4 w-full" style="width: 800px; height: 750px; margin-bottom:50px">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 h-full flex flex-col">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <div class="flex items-center">
                    <img src="{{ asset('./images/bot_photoprofile.png') }}" alt="Profile" class="w-10 h-10 rounded-full">
                    <div class="title grid">
                        <h3 class="ms-4 text-lg font-semibold text-gray-900 dark:text-white">
                            Tanya Silva
                        </h3>
                        <div class="ms-4 status flex gap-1 items-center">
                            <div class="bg-green-500 w-2 h-2 rounded-full"></div>
                            <p class="text-sm font-light text-gray-900 dark:text-white">
                                Aktif
                            </p>
                        </div>
                    </div>
                </div>  
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="chat-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="flex flex-col flex-1 p-4 md:p-5 overflow-hidden">
                <div id="chat-box" class="flex flex-col space-y-4 overflow-y-auto flex-1">
                    <!-- Chat Sambutan -->
                    <div class="flex flex-col items-start">
                        <p class="text-gray-900 dark:text-white self-end mt-1 mb-2 font-semibold text-md">Silva</p>
                        <div class="bg-gray-50 dark:bg-gray-600 text-gray-900 dark:text-white px-3 py-3 max-w-xs chat-ai">
                            <p>Halo Selamat Datang di Silva</p>
                        </div>
                    </div>
                </div>
                <!-- Form input -->
                <form id="chat-form" class="flex items-center space-x-2 mt-10">
                    <button class="text-white bg-gray-100 dark:bg-gray-500 dark:hover:bg-gray-600 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center dark:focus:ring-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  class="w-5 h-5">
                            <path fill="#6b7280" class="dark:fill-white" d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152L0 424c0 48.6 39.4 88 88 88l272 0c48.6 0 88-39.4 88-88l0-112c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 112c0 22.1-17.9 40-40 40L88 464c-22.1 0-40-17.9-40-40l0-272c0-22.1 17.9-40 40-40l112 0c13.3 0 24-10.7 24-24s-10.7-24-24-24L88 64z"/>
                        </svg>
                    </button>
                    <input type="text" name="chat" id="chat-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type your message here" required>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                            <path fill="#fff" d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376l0 103.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>