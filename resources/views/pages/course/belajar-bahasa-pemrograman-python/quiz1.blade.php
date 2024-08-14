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
                <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-xl border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Soal Quiz</button>
                <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-xl hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">Contoh Output</button>
            </div>
            <div class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 p-6 rounded-xl flex-1 overflow-auto">
                <p class="text-black dark:text-white mb-4">Buatlah sebuah fungsi <code>hitung_kata</code> yang menerima sebuah string sebagai argumen dan mengembalikan jumlah kata dalam string tersebut. Asumsikan kata-kata dipisahkan oleh spasi.</p>
                <div class="dark:text-white text-gray-900 bg-gray-100 dark:bg-gray-700 p-4 rounded-xl overflow-x-auto">
                    <code>
                        Input: "Belajar Python sangat menyenangkan"<br>
                        Output: 4
                    </code>
                </div>
                <p class="text-black dark:text-white mt-4 font-medium">Hint: Pertama, perlu diingat bahwa string dapat dipisahkan menjadi daftar kata-kata dengan menggunakan metode split().</p>
                <div class="mt-6 flex gap-2">
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Python</span>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Algorithms</span>
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
            <div class=" flex-1 overflow-auto">
                <h2 class="text-1xl font-bold bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 dark:text-white p-3" style="border-radius: 12px 12px 0px 0px">Output</h2>
                <pre id="output" class="dark:text-white border border-gray-200 dark:border-gray-700 p-3 shadow text-gray-900 bg-gray-100 dark:bg-gray-700 h-28">Output kamu akan keluar disini...</pre>
            </div>    

            <div class="flex gap-2 flex-wrap">
                <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-xl text-sm px-4 py-2 whitespace-nowrap dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Skip Quiz
                </button>
                <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-xl text-sm px-4 py-2 whitespace-nowrap dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Reset
                </button>
                <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-xl text-sm px-4 py-2 whitespace-nowrap dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Forum Diskusi
                </button>
                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 sm:mr-5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293a1 1 0 0 1 0 1.414l-2 2a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L14 14.586V12a1 1 0 1 1 2 0v2.586l1.293-1.293a1 1 0 0 1 1.414 0zM6.707 4.707a1 1 0 0 1 0-1.414L8.414 2H7a1 1 0 0 1 0-2h2.586l1.293 1.293a1 1 0 1 1-1.414 1.414L10 3.414V6a1 1 0 1 1-2 0V3.414l-1.293 1.293a1 1 0 0 1-1.414 0zM10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-2a6 6 0 1 1 0-12 6 6 0 0 1 0 12z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM10 2a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0V3a1 1 0 0 1 1-1zm0 14a1 1 0 0 1-1-1v-2a1 1 0 1 1 2 0v2a1 1 0 0 1-1 1zM4.221 5.636a1 1 0 1 1 1.415-1.414l1.415 1.414a1 1 0 0 1-1.415 1.415L4.22 5.636zM14.95 16.364a1 1 0 0 1-1.414 0l-1.415-1.414a1 1 0 1 1 1.415-1.415l1.414 1.415a1 1 0 0 1 0 1.414zM18 10a1 1 0 0 1-1 1h-2a1 1 0 1 1 0-2h2a1 1 0 0 1 1 1zM2 10a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1zm12.95-5.364a1 1 0 1 1 1.414-1.415l1.415 1.415a1 1 0 1 1-1.415 1.414L14.95 4.636zM5.636 14.95a1 1 0 0 1-1.415 0l-1.414-1.414a1 1 0 0 1 1.414-1.415l1.415 1.415a1 1 0 0 1 0 1.414z"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <script>
        // CodeMirror setup
        var editor = CodeMirror(document.getElementById("codeEditor"), {
            value: "def hitung_kata(s):\n    # Tulis fungsi anda disini\n    pass",
            mode: "python",
            lineNumbers: true,
            theme: "eclipse",
        });

        // Run the code function
        function runCode() {
            let code = editor.getValue(); // Mendapatkan nilai dari CodeMirror
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
                let outputMessage = data.output;
                document.getElementById('output').textContent = outputMessage;
            })
            .catch(error => {
                console.error('Terjadi kesalahan:', error);
                document.getElementById('output').textContent = "Terjadi kesalahan saat menjalankan kode.";
            });
        }

        // Theme Toggle
        const themeToggleBtn = document.getElementById('theme-toggle');
        const darkThemeStylesheet = document.getElementById('dark-theme-stylesheet');
        const lightIcon = document.getElementById('theme-toggle-light-icon');
        const darkIcon = document.getElementById('theme-toggle-dark-icon');

        themeToggleBtn.addEventListener('click', () => {
            if (darkThemeStylesheet.disabled) {
                darkThemeStylesheet.disabled = false;
                lightIcon.classList.remove('hidden');
                darkIcon.classList.add('hidden');
            } else {
                darkThemeStylesheet.disabled = true;
                lightIcon.classList.add('hidden');
                darkIcon.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>
