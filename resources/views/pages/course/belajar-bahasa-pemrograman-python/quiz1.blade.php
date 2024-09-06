<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SkillQuest ⸺ Solusi Belajar IT</title>
        <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.ico') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.css">
        <link id="theme-stylesheet" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/theme/eclipse.css">
        <link id="dark-theme-stylesheet" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/theme/yonce.css" disabled>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/python/python.min.js"></script>
    </head>
    <body class="bg-white dark:bg-gray-800">
        <div class="flex flex-col lg:flex-row gap-6 px-5 py-5">
            <!-- Soal Card -->
            <div class="flex-1 flex flex-col">
                <div class="soalNavbar flex mb-4">
                    <button id="quizButton" type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-xl hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 border-active whitespace-nowrap">
                        Soal Quiz
                    </button>
                    <button id="forumButtonMain" type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-xl hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 border-active whitespace-nowrap">
                        Forum Diskusi
                    </button>
                    <button id="silvaButtonMain" type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-xl hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 border-active relative whitespace-nowrap">
                        Tanya Silva
                    </button>
                    <div id="toast-bottom-right" class="fixed flex items-center w-full max-w-xs space-x-4 divide-x rtl:divide-x-reverse right-5 bottom-5 hidden z-50" role="alert">
                        <div id="toast-interactive" class="w-full max-w-xs p-4 rounded-lg bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500 text-gray-400" role="alert">
                            <div class="flex">
                                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-md">
                                    <img src="{{asset('images/bot_photoprofile.png')}}" alt="Profile" class="rounded-full">
                                </div>
                                <div class="ms-3 text-sm font-normal">
                                    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Notifikasi Terbaru</span>
                                    <div class="mb-2 text-sm font-normal">Sepertinya anda mengalami kendala, cobalah fitur dibawah ini. Semoga Membantu Ya!</div> 
                                    <div class="grid grid-cols-2 gap-2">
                                        <button id="silvaButtonToast" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm py-3 px-3 min-w-max dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tanya Silva</button>
                                        <button id="forumButtonToast" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm py-3 px-3 min-w-max dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Forum Diskusi</button>
                                    </div>                            
                                </div>                    
                                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white items-center justify-center flex-shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-interactive" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>          
                </div>
                <div id="content" class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 rounded-xl flex-1 overflow-auto">
                    <div id="quizSection" class="p-6">
                        <p class="text-black dark:text-white mb-4">Buatlah sebuah program Python yang menghasilkan output sebagai berikut:</p>
                        <div class="dark:text-white text-gray-900 bg-gray-100 dark:bg-gray-700 p-4 rounded-xl overflow-x-auto">
                            <p id="copyText">
                                Output = Aku Cinta SkillQuest
                            </p>
                        </div>
                        <p class="text-black dark:text-white mt-4 font-medium">Hint: Gunakan Print</p>
                        <div class="mt-6 flex gap-2">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Python</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Algorithms</span>
                        </div>
                        <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded" onclick="copyToClipboard()">Salin Soal</button>
                    </div>
                    <!-- Forum Chat -->
                    <div class="flex flex-col flex-1 p-4 md:p-5 overflow-hidden hidden" id="forumSection" data-forum-chat="8347215563">
                        <div class="flex flex-col" style="height: 570px">
                            <div id="forum-box" class="flex flex-col space-y-2 overflow-y-auto flex-1">
                                <!-- Chat Bubble -->
                                <!-- Chat messages will be appended here -->
                            </div>
                            <!-- Form input -->
                            <form id="chat-forum" class="space-y-2 mt-5 border-gray-200 border-t dark:border-gray-700">
                                <!-- Pratinjau Gambar -->
                                <div id="image-preview-container" class="relative mb-5 hidden mt-5">
                                    <img id="image-preview" src="" alt="Image preview" class="w-auto h-28 mb-2 rounded-lg" />
                                    <!-- Tombol Silang -->
                                    <button id="remove-preview" type="button" class="absolute top-0 right-0 mt-1 mr-1 text-white bg-red-500 hover:bg-red-700 rounded-full p-1 focus:outline-none">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>                            
                                <!-- Input Teks dan Tombol Kirim -->
                                <div class="relative w-full flex items-center space-x-2">
                                    <input type="text" name="chat" id="chat-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full pl-2.5 pr-10 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type your message here" required>
                                    <!-- Tombol Unggah Gambar -->
                                    <button type="button" class="text-gray-900 bg-gray-200 border border-gray-300 focus:outline-none hover:bg-gray-300 focus:ring-4 focus:ring-gray-100 font-medium rounded-md px-4 py-2.5 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                        <input type="file" id="image-upload" class="hidden" accept="image/*">
                                        <label for="image-upload" class="cursor-pointer">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path class="dark:fill-gray-400 fill-gray-500 hover:fill-gray-900 dark:hover:fill-white" d="M448 80c8.8 0 16 7.2 16 16l0 319.8-5-6.5-136-176c-4.5-5.9-11.6-9.3-19-9.3s-14.4 3.4-19 9.3L202 340.7l-30.5-42.7C167 291.7 159.8 288 152 288s-15 3.7-19.5 10.1l-80 112L48 416.3l0-.3L48 96c0-8.8 7.2-16 16-16l384 0zM64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zm80 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"/>
                                            </svg>
                                        </label>
                                    </button>
                                    <!-- Tombol Kirim -->
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                                            <path fill="#fff" d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376l0 103.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>                                                                                                
                        </div>
                    </div> 
                    <!-- Forum AI Chat -->                                                                              
                    <div id="silvaSection" class="hidden p-3">
                        <div class="flex flex-col" style="height: 570px">
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
                            </div>
                            <!-- Modal body -->
                            <div class="flex flex-col flex-1 p-4 md:p-5 overflow-hidden">
                                <div id="silva-chat-box" class="flex flex-col space-y-4 overflow-y-auto flex-1">
                                    <!-- Chat Bubble -->
                                    <div class="flex flex-col items-start">
                                        <p class="text-gray-900 dark:text-white self-end mt-1 mb-2 font-semibold text-md">Silva</p>
                                        <div class="bg-gray-50 dark:bg-gray-600 text-gray-900 dark:text-white px-3 py-3 max-w-xs chat-ai">
                                            <p>Halo Selamat Datang di Silvia</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Form input -->
                                <form id="silva-chat-form" class="flex items-center space-x-2 mt-10">
                                    <input type="text" name="chat" id="silva-chat-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type your message here" required>
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
            </div>
            <!-- Code Editor and Output Cards -->
            <div class="flex-1 flex flex-col gap-6">
                <!-- Code Editor Card -->
                <div class="flex-1 overflow-auto">
                    <h2 class="text-1xl font-bold bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 dark:text-white p-3" style="border-radius: 12px 12px 0px 0px">Solution</h2>
                    <!-- Code Editor -->
                    <div id="codeEditor" class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 text-black dark:text-white w-full"></div>
                    <button id="runButton" onclick="runCode()" class="mt-5 bg-blue-700 text-white font-medium px-4 py-2 rounded-lg hover:bg-blue-800">Jalankan Kode</button>
                    <button id="loadingButton" disabled type="button" class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center hidden">
                        <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-2 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                        </svg>
                        Memproses
                    </button>     
                </div>   
                
                <!-- Output Card -->
                <div class="flex-1 overflow-auto">
                    <h2 class="text-1xl font-bold bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 dark:text-white p-3" style="border-radius: 12px 12px 0px 0px">Output</h2>
                    <pre id="output" class="font-medium dark:text-white border border-gray-200 dark:border-gray-700 p-3 shadow text-gray-900 bg-gray-100 dark:bg-gray-700 h-28">Output kamu akan keluar disini...</pre>
                </div>   
                <div class="flex gap-2 flex-wrap">
                    <button id="lanjutButton" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 cursor-not-allowed focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 whitespace-nowrap dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" disabled>
                        Lanjut Belajar
                    </button>
                    <a href="/course/belajar-bahasa-pemrograman-python/persiapan">
                        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-4 py-2 whitespace-nowrap dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            Kembali
                        </button>
                    </a>
                    <button id="resetButton" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-4 py-2 whitespace-nowrap dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Reset
                    </button>
                    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 sm:mr-5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="app">
            <x-AIChatDesktop/>
        </div>          
        @component('components.source.javascriptQuiz1')
        @endcomponent
        @component('components.source.javascriptPersiapan')
        @endcomponent
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <script src="{{ asset('./js/main.js') }}"></script>
        {{-- <script src="{{ asset('./js/chat.js')}}"></script> --}}
        <script>
            function copyToClipboard() {
                const textToCopy = "buatlah sebuah program python yang menghasilkan output sebagai berikut: output = aku cinta skillquest hint: gunakan print";
                navigator.clipboard.writeText(textToCopy).then(() => {
                    alert('Teks berhasil disalin!');
                }).catch(err => {
                    console.error('Gagal menyalin teks: ', err);
                });
            }
        </script>
    </body>
</html>