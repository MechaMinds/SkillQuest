document.getElementById("chat-form").addEventListener("submit", function (e) {
    e.preventDefault();

    const chatInput = document.getElementById("chat-input");
    const chatBox = document.getElementById("chat-box");

    const userMessage = chatInput.value;
    if (userMessage.trim() !== "") {
        // Add user's message to chat
        const userChatDiv = document.createElement("div");
        userChatDiv.className = "flex flex-col items-end";
        userChatDiv.innerHTML = `
                <div class="bg-blue-600 text-white px-3 py-3 max-w-xs chat-you">
                    <p>${userMessage}</p>
                </div>
                <p class="text-gray-900 dark:text-white self-end mt-1">${new Date().toLocaleTimeString(
                    [],
                    { hour: "2-digit", minute: "2-digit" }
                )}</p>
            `;
        chatBox.appendChild(userChatDiv);

        // Determine response based on user message
        let responseMessage;
        if (
            userMessage.toLowerCase() ===
            "berikan saya penjelasan tentang sejarah bahasa python"
        ) {
            responseMessage = `
                Python adalah bahasa pemrograman tingkat tinggi yang terkenal karena sintaksnya yang jelas dan keterbacaan kode yang baik. Berikut adalah gambaran singkat tentang sejarah Python: <br><br>
                1. Penciptaan dan Awal Mula (1980-an)<br>
                1980-an: Python dikembangkan oleh Guido van Rossum, seorang programmer asal Belanda. Dia mulai mengerjakan Python pada akhir 1980-an sebagai proyek sampingan ketika dia bekerja di Centrum Wiskunde & Informatica (CWI) di Amsterdam. Tujuan awal van Rossum adalah untuk membuat bahasa pemrograman yang mudah digunakan dan didukung dengan sistem pengembangan yang dapat diandalkan.
                <br>
                1989: Van Rossum memulai pengembangan Python sebagai pengganti bahasa pemrograman ABC yang dikembangkan di CWI. Python dirancang untuk mengatasi beberapa kekurangan yang ditemukan pada ABC, terutama dalam hal fleksibilitas dan keterbacaan.
                <br><br>
                2. Python Saat Ini<br>
                2024: Python terus berkembang dengan rilis terbaru yang terus memperkenalkan fitur-fitur baru dan perbaikan. Python digunakan secara luas dalam berbagai aplikasi, termasuk pengembangan web, data science, kecerdasan buatan (AI), dan otomatisasi.<br>
                <br><br>
                Pengaruh dan Populeritas<br>
                Python telah menjadi salah satu bahasa pemrograman paling populer di dunia. Dikenal karena kemudahan penggunaan dan komunitas yang aktif, Python digunakan dalam berbagai aplikasi, termasuk pengembangan web (Django, Flask), analisis data (Pandas, NumPy), dan kecerdasan buatan (TensorFlow, PyTorch).
                <br>
                Dengan sejarah yang berkembang dan dukungan komunitas yang kuat, Python telah menjadi alat yang sangat berharga dalam dunia pemrograman dan teknologi.
                <br><br>
                Ada lagi yang ingin ditanyakan? Saya harap jawaban di atas sudah membantu Anda mengetahui sejarah python<br>
            `;
        } else if (userMessage.toLowerCase() === "selamat siang silva") {
            responseMessage = `
                Selamat siang! Bagaimana kabar Anda hari ini? Jika ada yang bisa saya bantu, silakan beri tahu saya. <br>
                <br>
                Ada pertanyaan atau permintaan lain? Saya di sini untuk membantu!
            `;
        } else if (userMessage.toLowerCase() === "terima kasih silva") {
            responseMessage = `
                Sama-sama beri tahu lagi jika anda butuh bantuan <br>
                <br>
                Ada pertanyaan atau permintaan lain? Saya di sini untuk membantu!
            `;
        } else {
            responseMessage = "Pesan otomatis";
        }

        // Fetch response from API
        setTimeout(() => {
            const responseChatDiv = document.createElement("div");
            responseChatDiv.className = "flex flex-col items-start";
            responseChatDiv.innerHTML = `
                <p class="text-gray-900 dark:text-white self-end mt-1 mb-2 font-semibold text-md">Silva</p>
                <div class="bg-gray-50 dark:bg-gray-600 text-gray-900 dark:text-white px-3 py-3 max-w-xs chat-ai">
                    <p>${responseMessage}</p>
                </div>
                <p class="text-gray-900 dark:text-white self-end mt-1">${new Date().toLocaleTimeString(
                    [],
                    { hour: "2-digit", minute: "2-digit" }
                )}</p>
            `;
            chatBox.appendChild(responseChatDiv);
            chatBox.scrollTop = chatBox.scrollHeight;
        }, 1000);

        // Clear the input field
        chatInput.value = "";
        chatBox.scrollTop = chatBox.scrollHeight;
    }
});
