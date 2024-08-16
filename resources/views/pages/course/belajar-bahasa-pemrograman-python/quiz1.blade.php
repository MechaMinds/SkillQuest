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
                <button id="quizButton" type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-xl hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 border-active">Soal Quiz</button>
                <button id="forumButton" type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-xl hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 border-active">Forum Diskusi</button>
                <button id="silvaButton" type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-xl hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 border-active">Tanya Silva</button>
            </div>
            <div id="content" class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 rounded-xl flex-1 overflow-auto">
                <div id="quizSection" class="p-6">
                    <p class="text-black dark:text-white mb-4">Buatlah sebuah fungsi bernama <span class="font-medium underline text-blue-600">karakter terbanyak</span> yang menerima sebuah string sebagai input. Fungsi ini harus mengembalikan karakter yang paling sering muncul dalam string tersebut. Jika ada lebih dari satu karakter dengan jumlah kemunculan yang sama, kembalikan karakter yang muncul lebih dahulu.</p>
                    <div class="dark:text-white text-gray-900 bg-gray-100 dark:bg-gray-700 p-4 rounded-xl overflow-x-auto">
                        <code>
                            teks = "belajar bahasa python"
                        </code>
                    </div>
                    <p class="text-black dark:text-white mt-4 font-medium">Hint: Gunakan struktur data seperti dictionary untuk menyimpan jumlah kemunculan setiap karakter dalam string.</p>
                    <div class="mt-6 flex gap-2">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Python</span>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Algorithms</span>
                    </div>
                </div>
                <div id="forumSection" class="hidden p-6">
                    <p>Ini adalah forum diskusi. Anda bisa berdiskusi di sini.</p>
                </div>
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
                            <div id="chat-box" class="flex flex-col space-y-4 overflow-y-auto flex-1">
                                <!-- Chat Sambutan -->
                                <div class="flex flex-col items-start">
                                    <p class="text-gray-900 dark:text-white self-end mt-1 mb-2 font-semibold text-md">Silva</p>
                                    <div class="bg-gray-50 dark:bg-gray-600 text-gray-900 dark:text-white px-3 py-3 max-w-xs chat-ai">
                                        <p>Halo Selamat Datang di Silvia</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Form input -->
                            <form id="chat-form" class="flex items-center space-x-2 mt-10">
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
        </div>
        <!-- Code Editor and Output Cards -->
        <div class="flex-1 flex flex-col gap-6">
            <!-- Code Editor Card -->
            <div class="flex-1 overflow-auto">
                <h2 class="text-1xl font-bold bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 dark:text-white p-3" style="border-radius: 12px 12px 0px 0px">Solution</h2>
                <!-- Code Editor -->
                <div id="codeEditor" class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 text-black dark:text-white w-full"></div>
                <button onclick="runCode()" class="mt-5 bg-blue-700 text-white font-medium px-4 py-2 rounded-lg hover:bg-blue-800">Jalankan Kode</button>
            </div>
            
            <!-- Output Card -->
            <div class="flex-1 overflow-auto">
                <h2 class="text-1xl font-bold bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 dark:text-white p-3" style="border-radius: 12px 12px 0px 0px">Output</h2>
                <pre id="output" class="font-medium dark:text-white border border-gray-200 dark:border-gray-700 p-3 shadow text-gray-900 bg-gray-100 dark:bg-gray-700 h-28">Output kamu akan keluar disini...</pre>
            </div>   

            <div class="flex gap-2 flex-wrap">
                <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-xl text-sm px-4 py-2 whitespace-nowrap dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Skip Quiz
                </button>
                <button id="resetButton" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-xl text-sm px-4 py-2 whitespace-nowrap dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
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
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{ asset('./js/chat.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil section terakhir yang disimpan di localStorage
            const lastSection = localStorage.getItem('activeSection') || 'quizSection';
            showSection(lastSection);

            // Fungsi untuk menampilkan section yang sesuai
            function showSection(sectionId) {
                // Sembunyikan semua section
                document.getElementById('quizSection').classList.add('hidden');
                document.getElementById('forumSection').classList.add('hidden');
                document.getElementById('silvaSection').classList.add('hidden');

                // Tampilkan section yang dipilih
                document.getElementById(sectionId).classList.remove('hidden');
            }

            // Tambahkan event listener ke tombol untuk menyimpan section yang dipilih di localStorage
            document.getElementById('quizButton').addEventListener('click', function() {
                localStorage.setItem('activeSection', 'quizSection');
                showSection('quizSection');
            });

            document.getElementById('forumButton').addEventListener('click', function() {
                localStorage.setItem('activeSection', 'forumSection');
                showSection('forumSection');
            });

            document.getElementById('silvaButton').addEventListener('click', function() {
                localStorage.setItem('activeSection', 'silvaSection');
                showSection('silvaSection');
            });
        });

        document.getElementById('resetButton').addEventListener('click', function() {
            // Me-refresh halaman
            window.location.reload();
        });
        // CodeMirror setup
        var editor = CodeMirror(document.getElementById("codeEditor"), {
            value: "def karakter_terbanyak(teks):\n    #Menghitung frekuensi setiap karakter dalam teks\n    frekuensi = {}\n    for char in teks:",
            mode: "python",
            lineNumbers: true,
            theme: "eclipse",
        });
        // Run the code function
        function runCode() {
            let code = editor.getValue();
            document.getElementById('output').textContent = "Memproses...";

            fetch('/run-code', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ code: code })
            })
            .then(response => response.json())
            .then(data => {
                let rawOutput = data.rawOutput;
                let outputMessage = data.outputMessage;

                // Menampilkan output program
                document.getElementById('output').textContent = "Hasil: " + rawOutput + "\n" + outputMessage;

                // Memberi warna merah jika jawaban salah, dan hijau jika benar
                document.getElementById('output').style.color = data.isCorrect ? "green" : "red";
            })
            .catch(error => {
                console.error('Terjadi kesalahan:', error);
                document.getElementById('output').textContent = "Terjadi kesalahan saat menjalankan kode.";
            });
        }
    </script>
</body>
</html>
