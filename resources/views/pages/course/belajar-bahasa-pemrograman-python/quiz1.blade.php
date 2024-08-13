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
    <div class="flex flex-col lg:flex-row gap-6 px-5 py-5" >
        <!-- Soal Card -->
        <div class="flex-1 flex flex-col">
            <div class="soalNavbar flex mb-4">
                <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-xl border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Soal Quiz</button>
                <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-xl hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">Contoh Output</button>
            </div>
            <div class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 p-6 rounded-xl flex-1 overflow-auto">
                <p class="text-black dark:text-white mb-4">Calculate the number of items in a vector that appear at the same index in each vector, with the same value.</p>
                <div class="dark:text-white text-gray-900 bg-gray-100 dark:bg-gray-700 p-4 rounded-xl overflow-x-auto">
                    <code>
                        ([1, 2, 3, 4, 5], [1, 2, 2, 4, 3]) => 0.6
                        ([1, 2, 3], [1, 2, 3]) => 1.0
                    </code>
                </div>
                <p class="text-black dark:text-white mt-4">
                    Affinity value should be realized on a scale of 0.0 to 1.0, with 1.0 being absolutely identical. Two identical sets should always be evaluated as having an affinity of 1.0.
                </p>
                <p class="text-black dark:text-white mt-4 font-medium">Hint: The last example test case holds a significant clue to calculating the affinity correctly.</p>
                <div class="mt-6 flex gap-2">
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Data Structures</span>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/python/python.min.js"></script>
    <script>
        const editor = CodeMirror(document.getElementById('codeEditor'), {
            mode: 'python',
            lineNumbers: true,
            theme: 'eclipse', // Default theme for light mode
        });

        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        const themeStylesheet = document.getElementById('theme-stylesheet');
        const darkThemeStylesheet = document.getElementById('dark-theme-stylesheet');

        // Set initial theme based on local storage or system preference
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
            themeStylesheet.disabled = true;
            darkThemeStylesheet.disabled = false;
            editor.setOption('theme', 'yonce'); // Set the dark theme
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
            themeStylesheet.disabled = false;
            darkThemeStylesheet.disabled = true;
            editor.setOption('theme', 'eclipse'); // Set the light theme
        }

        const themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function () {
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                    themeStylesheet.disabled = true;
                    darkThemeStylesheet.disabled = false;
                    editor.setOption('theme', 'yonce'); // Set the dark theme
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                    themeStylesheet.disabled = false;
                    darkThemeStylesheet.disabled = true;
                    editor.setOption('theme', 'eclipse'); // Set the light theme
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                    themeStylesheet.disabled = false;
                    darkThemeStylesheet.disabled = true;
                    editor.setOption('theme', 'eclipse'); // Set the light theme
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                    themeStylesheet.disabled = true;
                    darkThemeStylesheet.disabled = false;
                    editor.setOption('theme', 'yonce'); // Set the dark theme
                }
            }
        });
        function runCode() {
            const code = editor.getValue();

            fetch('/execute-python', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ code: code }),
            })
            .then(response => response.json())
            .then(data => {
                const outputElement = document.getElementById('output');
                if (data.error) {
                    outputElement.innerText = `Error: ${data.error}`;
                } else {
                    outputElement.innerText = data.output;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('output').innerText = 'Error executing code';
            });
        }
    </script>
</body>
</html>
