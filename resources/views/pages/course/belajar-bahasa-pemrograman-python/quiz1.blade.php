<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintar Path ⸺ Solusi Belajar IT</title>
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
            </div>
            <div id="content" class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 p-6 rounded-xl flex-1 overflow-auto">
                <div id="quizSection">
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
                <div id="forumSection" class="hidden">
                    <p>Ini adalah forum diskusi. Anda bisa berdiskusi di sini.</p>
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
    <script>
        document.getElementById("quizButton").addEventListener("click", function () {
            document.getElementById("quizSection").classList.remove("hidden");
            document.getElementById("forumSection").classList.add("hidden");
            document.getElementById("quizButton").classList.add("border-active");
            document.getElementById("forumButton").classList.remove("border-active");
        });

        document.getElementById("forumButton").addEventListener("click", function () {
            document.getElementById("quizSection").classList.add("hidden");
            document.getElementById("forumSection").classList.remove("hidden");
            document.getElementById("forumButton").classList.add("border-active");
            document.getElementById("quizButton").classList.remove("border-active");
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
