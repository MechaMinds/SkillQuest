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
        silvaChatForm.addEventListener("submit", (e) => {
            e.preventDefault();

            const userMessage = silvaChatInput.value.trim();
            if (userMessage !== "") {
                // Add user's message to chat
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

                // Determine response based on user message
                let responseMessage;
                if (
                    userMessage.toLowerCase() ===
                    "berikan saya penjelasan tentang sejarah bahasa python"
                ) {
                    responseMessage = `
                        Python adalah bahasa pemrograman tingkat tinggi yang terkenal karena sintaksnya yang jelas dan keterbacaan kode yang baik. Berikut adalah gambaran singkat tentang sejarah Python: <br><br>
                        1. Penciptaan dan Awal Mula (1980-an)<br>
                        1980-an: Python dikembangkan oleh Guido van Rossum, seorang programmer asal Belanda. Dia mulai mengerjakan Python pada akhir 1980-an sebagai proyek sampingan ketika dia bekerja di Centrum Wiskunde & Informatica (CWI) di Amsterdam. Tujuan awal van Rossum adalah untuk membuat bahasa pemrograman yang mudah digunakan dan didukung dengan sistem pengelolaan memori otomatis.<br><br>
                        2. Versi Pertama (1991)<br>
                        Pada Februari 1991, Guido van Rossum merilis versi pertama Python (versi 0.9.0) ke Usenet. Versi ini sudah memiliki beberapa fitur utama Python yang kita kenal hari ini, termasuk tipe data seperti string, list, dan dictionary, serta konsep-konsep seperti fungsi dan pengecualian (exceptions).<br><br>
                        3. Python 2.0 (2000)<br>
                        Python 2.0 dirilis pada Oktober 2000. Versi ini memperkenalkan fitur-fitur baru, termasuk pemrograman berbasis generator dan dukungan untuk Unicode. Namun, Python 2.0 juga terkenal karena memulai perdebatan tentang masa depan kompatibilitas Python.<br><br>
                        4. Python 3.0 (2008)<br>
                        Python 3.0, dirilis pada Desember 2008, adalah upaya untuk memperbaiki beberapa kekurangan di Python 2.x dan membersihkan sintaks serta struktur bahasa. Namun, Python 3 tidak kompatibel dengan Python 2, yang menyebabkan periode transisi yang panjang dan terkadang menantang bagi komunitas Python.<br><br>
                        5. Perkembangan Modern dan Popularitas<br>
                        Sejak peluncuran Python 3, bahasa ini terus berkembang dengan menambahkan fitur-fitur baru dan memperbaiki bug. Python menjadi sangat populer di berbagai bidang, termasuk pengembangan web, data science, kecerdasan buatan, pemrosesan teks, dan banyak lagi. Python juga dikenal karena komunitas penggunanya yang besar dan bersemangat, yang berkontribusi pada banyaknya perpustakaan dan kerangka kerja (framework) yang tersedia.<br><br>
                        Python telah menjadi salah satu bahasa pemrograman paling populer dan banyak digunakan di dunia saat ini. Sintaks yang sederhana dan kemudahan penggunaannya menjadikan Python bahasa yang ideal bagi pemula dan pengembang berpengalaman yang ingin membangun berbagai macam aplikasi.
                    `;
                } else if (
                    userMessage.toLowerCase() ===
                    "jelaskan tentang framework laravel"
                ) {
                    responseMessage = `
                        Laravel adalah salah satu framework PHP yang paling populer dan banyak digunakan untuk membangun aplikasi web. Berikut adalah beberapa poin penting tentang Laravel:<br><br>
                        1. Keunggulan dan Fitur Utama:<br>
                        Laravel menyediakan berbagai fitur seperti routing, middleware, session, validasi, dan lain-lain, yang membantu pengembang membangun aplikasi web dengan cepat dan efisien. Laravel juga terkenal karena sintaksnya yang elegan dan dapat diprediksi, yang membuat pengembangan aplikasi menjadi lebih mudah dan menyenangkan.<br><br>
                        2. Artisan CLI:<br>
                        Laravel memiliki command-line interface (CLI) yang disebut Artisan, yang memudahkan pengembang untuk melakukan berbagai tugas seperti migrasi database, pembuatan kontroler, dan lainnya secara otomatis melalui perintah terminal.<br><br>
                        3. ORM (Eloquent):<br>
                        Laravel menggunakan ORM (Object-Relational Mapping) yang disebut Eloquent. Eloquent memungkinkan pengembang untuk berinteraksi dengan database menggunakan model-model yang mewakili tabel di database. Hal ini membuat query database menjadi lebih intuitif dan mudah dipahami.<br><br>
                        4. Blade Templating Engine:<br>
                        Laravel menyediakan Blade, sebuah templating engine yang powerful, yang memungkinkan pengembang untuk membuat layout yang dinamis dengan menggunakan direktif yang simpel dan efisien.<br><br>
                        5. Sistem Middleware:<br>
                        Laravel menggunakan middleware untuk memfilter HTTP request yang masuk ke aplikasi. Ini membantu dalam memisahkan logika dari routing dan mempermudah dalam penerapan kebijakan keamanan seperti autentikasi.<br><br>
                        6. Pengelolaan Proyek yang Mudah:<br>
                        Laravel memiliki ekosistem yang luas, termasuk Laravel Forge dan Laravel Envoyer untuk deployment, serta layanan Laravel Nova untuk pembuatan dashboard admin. Laravel juga memiliki integrasi yang baik dengan berbagai layanan pihak ketiga seperti AWS, Google Cloud, dan lainnya.<br><br>
                        7. Dokumentasi dan Komunitas:<br>
                        Laravel dikenal dengan dokumentasinya yang sangat lengkap dan mudah dipahami, serta komunitas yang aktif yang selalu siap membantu. Hal ini membuat Laravel menjadi framework yang sangat direkomendasikan bagi pengembang PHP, baik pemula maupun yang sudah berpengalaman.<br><br>
                        Dengan fitur-fitur dan keunggulannya, Laravel menjadi pilihan utama bagi banyak pengembang dalam membangun aplikasi web modern yang scalable dan maintainable.
                    `;
                } else {
                    responseMessage =
                        "Maaf, saya belum memiliki jawaban yang sesuai dengan pertanyaan Anda. Silakan tanyakan sesuatu yang lain.";
                }

                // Add AI's response to chat
                const aiChatDiv = document.createElement("div");
                aiChatDiv.className = "flex flex-col items-start";
                aiChatDiv.id = silvaGenerateUniqueId();
                aiChatDiv.innerHTML = `
                    <div class="bg-gray-50 dark:bg-gray-600 text-gray-900 dark:text-white px-3 py-3 max-w-xs chat-ai">
                        <p>${responseMessage}</p>
                    </div>
                    <p class="text-gray-900 dark:text-white self-end mt-1">${new Date().toLocaleTimeString(
                        [],
                        { hour: "2-digit", minute: "2-digit" }
                    )}</p>
                `;
                silvaChatBox.appendChild(aiChatDiv);

                // Clear input
                silvaChatInput.value = "";
                // Scroll to the bottom
                silvaChatBox.scrollTop = silvaChatBox.scrollHeight;

                // Save chat history
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