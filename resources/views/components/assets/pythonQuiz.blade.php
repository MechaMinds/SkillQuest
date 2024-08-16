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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/theme/dracula.min.css">
    </head>
    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/python/python.min.js"></script>  
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                var editor = CodeMirror(document.getElementById('codeEditor'), {
                    lineNumbers: true,
                    mode: 'python',
                    theme: 'dracula',
                    viewportMargin: Infinity
                });

                window.runCode = function() {
                    const code = editor.getValue();

                    fetch('/run-python-code', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({ code })
                    })
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('output').textContent = data.output;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        document.getElementById('output').textContent = 'An error occurred.';
                    });
                };
            });
        </script>  
        <script>
            function runPythonCode() {
                var code = document.getElementById('code').value;
                var output = document.getElementById('output');
    
                function outf(text) { 
                    output.innerText += text; 
                }
                function builtinRead(x) { 
                    if (Sk.builtinFiles === undefined || Sk.builtinFiles["files"][x] === undefined) {
                        throw "File not found: '" + x + "'";
                    }
                    return Sk.builtinFiles["files"][x];
                }
                
                Sk.pre = "output";
                Sk.configure({ 
                    output: outf, 
                    read: builtinRead 
                });
    
                output.innerText = ''; // Clear previous output
                Sk.misceval.asyncToPromise(function() {
                    return Sk.importMainWithBody("<stdin>", false, code, true);
                }).catch(function(err) {
                    output.innerText = err.toString();
                });
            }
        </script>                      
    </body>
</html>