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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/python/python.min.js"></script>
</head>
<body>
    <div class="flex flex-col lg:flex-row gap-6 px-5 py-5">
        <!-- Soal Card -->
        <div class=" flex-1">
            <div class="soalNavbar flex mb-4">
                <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Soal Quiz</button>
                <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">Contoh Output</button>
            </div>
            <div class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 p-6 rounded-lg">
                <p class="text-black dark:text-white mb-4">Calculate the number of items in a vector that appear at the same index in each vector, with the same value.</p>
                <div class="bg-gray-100 text-gray-700 p-4 rounded-md overflow-x-auto">
                    <code>
                        ([1, 2, 3, 4, 5], [1, 2, 2, 4, 3]) => 0.6
                        ([1, 2, 3], [1, 2, 3]) => 1.0
                    </code>
                </div>
                <p class="text-black dark:text-white mt-4">
                    Affinity value should be realized on a scale of 0.0 to 1.0, with 1.0 being absolutely identical. Two identical sets should always be evaluated as having an affinity of 1.0.
                </p>
                <p class="text-black dark:text-white mt-4">Hint: The last example test case holds a significant clue to calculating the affinity correctly.</p>
                <div class="mt-6 flex gap-2">
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Data Structures</span>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Algorithms</span>
                </div>
            </div>
        </div>
        <!-- Code Editor and Output Cards -->
        <div class="flex flex-col gap-6 flex-1">
            <!-- Code Editor Card -->
            <div class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 p-6 rounded-lg">
                <h2 class="text-2xl text-black dark:text-white font-bold mb-4">Code Editor</h2>
                <div id="codeEditor" class="border text-black dark:text-white border-gray-300 rounded-md h-64"></div>
                <button onclick="runCode()" style="margin-top: 100px" class="mt-4 bg-blue-600 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-500">Run Code</button>
            </div>
            <!-- Output Card -->
            <div class="bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 p-6 rounded-lg">
                <h2 class="text-2xl font-bold mb-4 text-black dark:text-white">Output</h2>
                <pre id="output" class="bg-gray-100 text-gray-700 p-4 rounded-md overflow-x-auto"></pre>
            </div>
        </div>
    </div>
    

    <script>
        // Inisialisasi CodeMirror editor
        const editor = CodeMirror(document.getElementById('codeEditor'), {
            mode: 'python',
            lineNumbers: true,
            theme: 'default',
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
