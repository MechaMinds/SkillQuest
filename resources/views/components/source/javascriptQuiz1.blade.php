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
        const chatBox = document.getElementById('forum-box');
        const chatInput = document.getElementById('chat-input');
        const imageUpload = document.getElementById('image-upload');
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

        let lastSenderId = null;

        function addMessage(message) {
            const isMine = message.user_id === parseInt('{{ Auth::id() }}');
            const messageBubble = document.createElement('div');
            messageBubble.className = `flex flex-col items-${isMine ? 'end' : 'start'}`;

            let imageHtml = '';
            if (message.image) {
                const imageUrl = `${window.assetUrl}/${message.image}?${new Date().getTime()}`;
                imageHtml = `<img src="${imageUrl}" class="w-full h-auto mt-2 rounded-lg" onload="handleImageLoad(this)" onerror="handleImageError(this)" />`;
            }

            // Hanya tampilkan nama jika pengirim berbeda dari pengirim sebelumnya
            if (message.user_id !== lastSenderId) {
                const senderName = document.createElement('p');
                senderName.className = "text-gray-900 dark:text-white self-end font-semibold text-md";
                senderName.textContent = isMine ? 'You' : message.user_name || 'Unknown';
                messageBubble.appendChild(senderName);
                lastSenderId = message.user_id;  // Perbarui pengirim terakhir
            }

            const chatContent = document.createElement('div');
            chatContent.className = `${isMine ? 'chat-kamu' : 'chat-userLain'} font-medium px-3 py-3 max-w-xs rounded-lg`;
            chatContent.style.borderRadius = '15px'; // Border radius 15px semua sisi
            chatContent.innerHTML = `${message.message} ${imageHtml}`;
            
            messageBubble.appendChild(chatContent);
            chatBox.appendChild(messageBubble);
            chatBox.scrollTop = chatBox.scrollHeight; // Auto scroll to bottom
        }

        function initPusher(forumId) {
            if (pusher) {
                pusher.unsubscribe(`chat.${forumId}`);
            }

            pusher = new Pusher('2c001f4a66d634b6619e', {
                cluster: 'ap1',
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

            const formData = new FormData();
            formData.append('message', chatInput.value);
            formData.append('forum_id', forumId);

            if (imageUpload.files[0]) {
                formData.append('image', imageUpload.files[0]);
            }

            fetch('/messages', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'Message Sent!') {
                    // No need to add the message manually here as it's handled by Pusher
                    chatInput.value = '';
                    imageUpload.value = ''; // Clear image input
                } else {
                    console.error('Error sending message:', data);
                }
            })
            .catch(error => console.error('Error sending message:', error));
        });

        function handleImageLoad(imageElement) {
            imageElement.classList.add('loaded');
        }

        function handleImageError(imageElement) {
            imageElement.src = '/path/to/placeholder-image.jpg';
        }

        fetchMessages(forumId);
        initPusher(forumId);
    });
    window.assetUrl = "{{ asset('images/forumImages') }}";
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const imageUpload = document.getElementById('image-upload');
        const imagePreviewContainer = document.getElementById('image-preview-container');
        const imagePreview = document.getElementById('image-preview');
        const removePreviewButton = document.getElementById('remove-preview');
        const chatForm = document.getElementById('chat-forum');

        imageUpload.addEventListener('change', function () {
            if (this.files && this.files[0]) {
                const file = this.files[0];
                const reader = new FileReader();

                reader.onload = function (e) {
                    imagePreview.src = e.target.result;
                    imagePreviewContainer.classList.remove('hidden');
                };

                reader.readAsDataURL(file);
            } else {
                imagePreviewContainer.classList.add('hidden');
                imagePreview.src = '';
            }
        });

        removePreviewButton.addEventListener('click', function () {
            // Sembunyikan pratinjau gambar dan reset input file
            imagePreviewContainer.classList.add('hidden');
            imagePreview.src = '';
            imageUpload.value = '';  // Reset input file
        });

        chatForm.addEventListener('submit', function (e) {
            e.preventDefault();
            // Proses pengiriman form atau AJAX request bisa ditambahkan di sini

            // Sembunyikan pratinjau gambar dan reset input file setelah pesan dikirim
            imagePreviewContainer.classList.add('hidden');
            imagePreview.src = '';
            imageUpload.value = '';  // Reset input file
            chatForm.reset();  // Reset form input (jika diperlukan)
        });
    });
</script>             
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const quizButton = document.getElementById("quizButton");
        const forumButtonMain = document.getElementById("forumButtonMain");
        const silvaButtonMain = document.getElementById("silvaButtonMain");
        const silvaButtonToast = document.getElementById("silvaButtonToast");
        const forumButtonToast = document.getElementById("forumButtonToast");

        const quizSection = document.getElementById("quizSection");
        const forumSection = document.getElementById("forumSection");
        const silvaSection = document.getElementById("silvaSection");

        // Tambah event listener untuk tombol di Navbar
        quizButton.addEventListener("click", () => {
            quizSection.style.display = "block";
            forumSection.style.display = "none";
            silvaSection.style.display = "none";
        });

        forumButtonMain.addEventListener("click", () => {
            quizSection.style.display = "none";
            forumSection.style.display = "block";
            silvaSection.style.display = "none";
        });

        silvaButtonMain.addEventListener("click", () => {
            quizSection.style.display = "none";
            forumSection.style.display = "none";
            silvaSection.style.display = "block";
        });

        // Tambah event listener untuk tombol di Toast
        silvaButtonToast.addEventListener("click", () => {
            quizSection.style.display = "none";
            forumSection.style.display = "none";
            silvaSection.style.display = "block";
        });

        forumButtonToast.addEventListener("click", () => {
            quizSection.style.display = "none";
            forumSection.style.display = "block";
            silvaSection.style.display = "none";
        });
    });

    document.getElementById('resetButton').addEventListener('click', function() {
        // Me-refresh halaman
        window.location.reload();
    });
    // CodeMirror setup
    var editor = CodeMirror(document.getElementById("codeEditor"), {
        value: "#tulis program kamu disini",
        mode: "python",
        lineNumbers: true,
        theme: "eclipse",
    });
    // Run the code function
    function runCode() {
        // Ambil elemen tombol dan output
        const runButton = document.getElementById('runButton');
        const loadingButton = document.getElementById('loadingButton');
        const output = document.getElementById('output');
        const lanjutButton = document.getElementById('lanjutButton');
        
        // Tampilkan tombol loading dan sembunyikan tombol jalankan
        runButton.classList.add('hidden');
        loadingButton.classList.remove('hidden');

        let code = editor.getValue();
        output.textContent = "Memproses...";

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
            output.textContent =  rawOutput + "\n" + outputMessage;

            // Memberi warna merah jika jawaban salah, dan hijau jika benar
            output.style.color = data.isCorrect ? "white" : "red";

            // Mengatur status tombol "Lanjut Belajar"
            if (data.isCorrect) {
                lanjutButton.disabled = false;
                lanjutButton.classList.remove('cursor-not-allowed');
                lanjutButton.classList.add('cursor-pointer');
                lanjutButton.innerHTML = '<a href="/course/belajar-bahasa-pemrograman-python/persiapan" class="text-white">Lanjut Belajar</a>';
            } else {
                lanjutButton.disabled = true;
                lanjutButton.classList.add('cursor-not-allowed');
                lanjutButton.classList.remove('cursor-pointer');
                lanjutButton.innerHTML = 'Lanjut Belajar';
            }
        })
        .catch(error => {
            console.error('Terjadi kesalahan:', error);
            output.textContent = "Terjadi kesalahan saat menjalankan kode.";
        })
        .finally(() => {
            // Sembunyikan tombol loading dan tampilkan tombol jalankan
            loadingButton.classList.add('hidden');
            runButton.classList.remove('hidden');
        });
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const silvaChatBox = document.getElementById("silva-chat-box");
        const silvaChatForm = document.getElementById("silva-chat-form");
        const silvaChatInput = document.getElementById("silva-chat-input");
        const silvaPreviousChatBtn = document.getElementById("silva-previous-chat");
        const silvaNewChatBtn = document.getElementById("silva-new-chat");
        const silvaChatButton = document.getElementById("silva-chat-button");
        const silvaChatModal = document.getElementById("silva-chat-modal");

        // Default chat message
        const silvaDefaultChatMessage = `
            <div class="flex flex-col items-start">
                <p class="text-gray-900 dark:text-white self-end mt-1 mb-2 font-semibold text-md">Silva</p>
                <div class="bg-gray-50 dark:bg-gray-600 text-gray-900 dark:text-white px-3 py-3 max-w-xs chat-ai">
                    <p>Halo Selamat Datang di Silvia</p>
                </div>
            </div>
        `;
        silvaChatBox.innerHTML = silvaDefaultChatMessage;

        // Load chat history from local storage
        const silvaLoadChatHistory = () => {
            const history = JSON.parse(localStorage.getItem("silvaChatHistory")) || [];
            const historyHTML = history
                .map(
                    (message) => `
                    <div id="${message.id}" class="${
                        message.type === "user"
                            ? "flex flex-col items-end"
                            : "flex flex-col items-start"
                    }">
                        <p class="text-gray-900 dark:text-white self-end mt-1 mb-2 font-semibold text-md">${
                            message.sender
                        }</p>
                        <div class="bg-gray-50 dark:bg-gray-600 text-gray-900 dark:text-white px-3 py-3 max-w-xs chat-${
                            message.type
                        }">
                            <p>${message.text}</p>
                        </div>
                        <p class="text-gray-900 dark:text-white self-end mt-1">${
                            message.time
                        }</p>
                    </div>
                `
                )
                .join("");
            silvaChatBox.innerHTML = silvaDefaultChatMessage + historyHTML; // Ensure default message is preserved
            silvaChatBox.scrollTop = silvaChatBox.scrollHeight; // Scroll to the bottom
        };

        // Save chat history to local storage
        const silvaSaveChatHistory = () => {
            const messages = Array.from(silvaChatBox.children)
                .map((child) => {
                    if (!child.id) return null; // Skip default message
                    const sender =
                        child.querySelector("p.font-semibold").textContent;
                    const text = child.querySelector("div").textContent;
                    const type = child.classList.contains("items-end")
                        ? "user"
                        : "ai";
                    const time = child.querySelector("p:last-child").textContent;
                    return { id: child.id, sender, text, type, time };
                })
                .filter((message) => message !== null); // Remove null entries
            localStorage.setItem("silvaChatHistory", JSON.stringify(messages));
        };

        // Generate unique ID
        const silvaGenerateUniqueId = () =>
            `silva_chat_${Date.now()}_${Math.random().toString(36).substr(2, 9)}`;

        // Handle form submit
        const streamWords = (responseMessage, chatBox) => {
            const words = responseMessage.split(" ");
            let wordIndex = 0;
            const responseChatDiv = document.createElement("div");

            responseChatDiv.className = "flex flex-col items-start";
            responseChatDiv.id = silvaGenerateUniqueId();
            responseChatDiv.innerHTML = `
                <p class="text-gray-900 dark:text-white self-end mt-1 mb-2 font-semibold text-md">Silva</p>
                <div class="bg-gray-50 dark:bg-gray-600 text-gray-900 dark:text-white px-3 py-3 max-w-xs chat-ai">
                    <p class="chat-text"></p> <!-- ini untuk teks respons -->
                </div>
                <p class="text-gray-900 dark:text-white self-end mt-1">${new Date().toLocaleTimeString(
                    [],
                    { hour: "2-digit", minute: "2-digit" }
                )}</p>
            `;
            chatBox.appendChild(responseChatDiv);
            const chatParagraph = responseChatDiv.querySelector(".chat-text"); // Temukan elemen <p> yang akan diisi dengan teks

            const streamNextWord = () => {
                if (wordIndex < words.length) {
                    chatParagraph.textContent += `${words[wordIndex]} `; // Tambahkan kata ke elemen <p>
                    wordIndex++;
                    chatBox.scrollTop = chatBox.scrollHeight;
                    setTimeout(streamNextWord, 500); // Delay 0.5 detik antar kata
                }
            };

            setTimeout(streamNextWord, 3000); // Tunggu 3 detik sebelum mulai
        };

        // Handle form submit
        silvaChatForm.addEventListener("submit", (e) => {
            e.preventDefault();

            const userMessage = silvaChatInput.value.trim();
            if (userMessage !== "") {
                // Tambahkan pesan pengguna ke chat
                const userChatDiv = document.createElement("div");
                userChatDiv.className = "flex flex-col items-end";
                userChatDiv.id = silvaGenerateUniqueId();
                userChatDiv.innerHTML = `
                    <div class="bg-blue-600 text-white px-3 py-3 max-w-xs chat-you">
                        <p>${userMessage}</p>
                    </div>
                    <p class="text-gray-900 dark:text-white self-end mt-1">${new Date().toLocaleTimeString(
                        [],
                        { hour: "2-digit", minute: "2-digit" }
                    )}</p>
                `;
                silvaChatBox.appendChild(userChatDiv);

                // Tentukan respons berdasarkan pesan pengguna
                let responseMessage;
                if (userMessage.toLowerCase() === "berikan saya penjelasan tentang sejarah bahasa python") {
                    responseMessage = `
                        Python adalah bahasa pemrograman tingkat tinggi yang terkenal karena sintaksnya yang jelas dan keterbacaan kode yang baik. Berikut adalah gambaran singkat tentang sejarah Python: 
                        1. Penciptaan dan Awal Mula
                        2. Versi Pertama
                        3. Python 2.0
                        4. Python 3.0
                        5. Perkembangan Modern.
                    `;
                } else if (
                    userMessage.toLowerCase() ===
                    "buatlah sebuah program python yang menghasilkan output sebagai berikut: output = aku cinta skillquest hint: gunakan print"
                ) {
                    responseMessage = `
                        Berikut adalah contoh program Python yang menghasilkan output sesuai permintaan: aku cinta skillquest, kamu bisa menggunakan perintah berikut print(output) Penjelasan: - Variabel output berisi string "Aku Cinta SkillQuest" - Fungsi print(output) digunakan untuk menampilkan isi dari variabel output yang akan ditampilkan: Aku Cinta SkillQuest
                    `;
                } else {
                    responseMessage = "Maaf, saya belum memiliki jawaban yang sesuai dengan pertanyaan Anda. Silakan tanyakan sesuatu yang lain.";
                }

                // Streaming respons dengan penundaan
                streamWords(responseMessage, silvaChatBox);

                // Kosongkan input
                silvaChatInput.value = "";
                silvaChatBox.scrollTop = silvaChatBox.scrollHeight;

                // Simpan riwayat chat
                silvaSaveChatHistory();
            }
        });

        // Load chat history on page load
        silvaLoadChatHistory();

        // Handle new chat button
        silvaNewChatBtn.addEventListener("click", () => {
            localStorage.removeItem("silvaChatHistory");
            silvaChatBox.innerHTML = silvaDefaultChatMessage; // Reset to default message
        });

        // Handle previous chat button
        silvaPreviousChatBtn.addEventListener("click", () => {
            silvaLoadChatHistory();
        });

        // Handle chat button toggle
        silvaChatButton.addEventListener("click", () => {
            silvaChatModal.classList.toggle("hidden");
        });
    });
</script>
<script>
    // Initialize variables
    let typingTimer;
    const typingDelay = 10000; // 10 seconds delay
    const codeEditor = document.getElementById('codeEditor');
    const toast = document.getElementById('toast-bottom-right');
    const closeToastButton = toast.querySelector('[data-dismiss-target="#toast-interactive"]');

    // Function to show the toast notification
    function showToast() {
        toast.classList.remove('hidden');
        // Hide the toast after 10 seconds if not closed
        setTimeout(() => {
            toast.classList.add('hidden');
        }, 10000); // Adjust this timeout if you want the toast to stay visible longer
    }

    // Function to reset the timer
    function resetTypingTimer() {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(showToast, typingDelay);
    }

    // Event listener for user input
    codeEditor.addEventListener('input', resetTypingTimer);

    // Event listener for closing the toast
    closeToastButton.addEventListener('click', () => {
        clearTimeout(typingTimer); // Clear the timer when toast is closed
        toast.classList.add('hidden'); // Hide the toast immediately
        resetTypingTimer(); // Restart the timer to show the toast again after 10 seconds of inactivity
    });

    // Initialize the timer when the page loads
    resetTypingTimer();
</script>
