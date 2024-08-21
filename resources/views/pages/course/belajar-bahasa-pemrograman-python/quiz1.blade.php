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
                <button id="forumButton" type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-xl hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 border-active whitespace-nowrap">
                    Forum Diskusi
                </button>
                <button id="silvaButton" type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-xl hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 border-active relative whitespace-nowrap">
                    Tanya Silva
                </button>
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
                <div class="flex flex-col flex-1 p-4 md:p-5 overflow-hidden" id="forumSection" data-forum-chat="8347215563">
                    <div class="flex flex-col" style="height: 570px">
                        <div id="chat-box" class="flex flex-col space-y-4 overflow-y-auto flex-1">
                            <!-- Chat Bubble -->
                            <!-- Chat messages will be appended here -->
                        </div>
                        <!-- Form input -->
                        <form id="chat-forum" class="flex items-center space-x-2 mt-10">
                            <input type="text" name="chat" id="chat-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type your message here" required>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                                    <path fill="#fff" d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376l0 103.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
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
                                <!-- Chat Bubble -->
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
    <div class="fixed flex items-center space-x-4 p- divide-x rtl:divide-x-revers rounded-lg shadow right-5 bottom-5" role="alert">
        <div class="relative text-sm font-normal">
            <img src="{{ asset('./images/bot_photoprofile.png') }}" alt="Profile" class="w-12 h-12 rounded-full" data-tooltip-target="tooltip-top">
        </div>
    </div>    
    @component('components.source.javascriptQuiz1')
    @endcomponent
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{ asset('./js/chat.js')}}"></script>
    <script>
        const messagesContainer = document.getElementById('messages');
    
        function addMessage(message, isMine = false) {
            const messageBubble = document.createElement('div');
            messageBubble.className = `p-3 rounded-lg ${isMine ? 'bg-blue-500 text-white self-end' : 'bg-gray-200 text-black self-start'}`;
            messageBubble.textContent = message;
            messagesContainer.appendChild(messageBubble);
        }
    
        // Example usage:
        addMessage('This is my message', true);  // true indicates it's our message
        addMessage('This is an opponent\'s message', false);
    </script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const chatBox = document.getElementById('chat-box');
            const chatInput = document.getElementById('chat-input');
            const chatForm = document.getElementById('chat-forum');
            const forumSection = document.getElementById('forumSection');
    
            const forumId = forumSection.getAttribute('data-forum-chat');
            let pusher = null;
            let channel = null;
    
            function fetchMessages(forumId) {
                fetch(`/messages/${forumId}`)
                    .then(response => response.json())
                    .then(messages => {
                        chatBox.innerHTML = '';
                        messages.forEach(message => {
                            addMessage(message);
                        });
                    })
                    .catch(error => console.error('Error fetching messages:', error));
            }
    
            function addMessage(message) {
                const isMine = message.user_id === parseInt('{{ Auth::id() }}');
                const messageBubble = document.createElement('div');
                messageBubble.className = `flex flex-col items-${isMine ? 'end' : 'start'}`;
                messageBubble.innerHTML = `
                    <p class="text-gray-900 dark:text-white self-end mt-1 mb-2 font-semibold text-md">${isMine ? 'You' : 'User'}</p>
                    <div class="${isMine ? 'chat-kamu' : 'chat-userLain'} text-white px-3 py-3 max-w-xs rounded-lg">
                        ${message.message}
                    </div>
                `;
                chatBox.appendChild(messageBubble);
                chatBox.scrollTop = chatBox.scrollHeight; // Auto scroll to bottom
            }
            function initPusher(forumId) {
                if (pusher) {
                    pusher.unsubscribe(`chat.${forumId}`);
                }
    
                pusher = new Pusher('your-pusher-key', {
                    cluster: 'your-cluster',
                    encrypted: true
                });
    
                channel = pusher.subscribe(`chat.${forumId}`);
                channel.bind('App\\Events\\MessageSent', function(data) {
                    addMessage(data.message);
                });
            }
    
            chatForm.addEventListener('submit', function(event) {
                event.preventDefault();
    
                if (!forumId) {
                    alert('Forum ID is not set.');
                    return;
                }
    
                fetch('/messages', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        message: chatInput.value,
                        forum_id: forumId
                    })
                })
                .then(response => response.json())
                .then(() => {
                    addMessage({
                        message: chatInput.value,
                        user_id: parseInt('{{ Auth::id() }}')
                    });
                    chatInput.value = '';
                })
                .catch(error => console.error('Error sending message:', error));
            });
    
            fetchMessages(forumId);
            initPusher(forumId);
        });
    </script>                             
</body>
</html>