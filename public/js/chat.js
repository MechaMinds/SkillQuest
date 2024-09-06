document.addEventListener("DOMContentLoaded", () => {
    const chatBox = document.getElementById("chat-box");
    const chatForm = document.getElementById("chat-form");
    const chatInput = document.getElementById("chat-input");
    const previousChatBtn = document.getElementById("previous-chat");
    const newChatBtn = document.getElementById("new-chat");
    const chatButton = document.getElementById("chat-button");
    const chatModal = document.getElementById("chat-modal");

    // Default chat message
    const defaultChatMessage = `
        <div class="flex flex-col items-start">
            <p class="text-gray-900 dark:text-white self-end mt-1 mb-2 font-semibold text-md">Silva</p>
            <div class="bg-gray-50 dark:bg-gray-600 text-gray-900 dark:text-white px-3 py-3 max-w-xs chat-ai">
                <p>Halo Selamat Datang di Silvia</p>
            </div>
        </div>
    `;
    chatBox.innerHTML = defaultChatMessage;

    // Load chat history from local storage
    const loadChatHistory = () => {
        const history = JSON.parse(localStorage.getItem("chatHistory")) || [];
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
        chatBox.innerHTML = defaultChatMessage + historyHTML; // Ensure default message is preserved
        chatBox.scrollTop = chatBox.scrollHeight; // Scroll to the bottom
    };

    // Save chat history to local storage
    const saveChatHistory = () => {
        const messages = Array.from(chatBox.children)
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
        localStorage.setItem("chatHistory", JSON.stringify(messages));
    };

    // Generate unique ID
    const generateUniqueId = () =>
        `chat_${Date.now()}_${Math.random().toString(36).substr(2, 9)}`;

    // Stream response words into a single bubble with delay
    const streamWords = (responseMessage, chatBox) => {
        const words = responseMessage.split(" ");
        let wordIndex = 0;
        const responseChatDiv = document.createElement("div");

        responseChatDiv.className = "flex flex-col items-start";
        responseChatDiv.id = generateUniqueId();
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

        setTimeout(streamNextWord, 3000); // Wait 3 seconds before starting
    };

    // Handle form submit
    chatForm.addEventListener("submit", (e) => {
        e.preventDefault();

        const userMessage = chatInput.value.trim();
        if (userMessage !== "") {
            // Add user's message to chat
            const userChatDiv = document.createElement("div");
            userChatDiv.className = "flex flex-col items-end";
            userChatDiv.id = generateUniqueId();
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
                    Python adalah bahasa pemrograman tingkat tinggi yang terkenal karena sintaksnya yang jelas dan keterbacaan kode yang baik. Berikut adalah gambaran singkat tentang sejarah Python: Penciptaan dan Awal Mula, Python Saat Ini, Pengaruh dan Populeritas.
                `;
            } else if (userMessage.toLowerCase() === "selamat siang silva") {
                responseMessage = `
                    Selamat siang! Bagaimana kabar Anda hari ini? Jika ada yang bisa saya bantu, silakan beri tahu saya. 
                `;
            } else if (userMessage.toLowerCase() === "terima kasih silva") {
                responseMessage = `
                    Sama-sama beri tahu lagi jika anda butuh bantuan.
                `;
            } else {
                responseMessage = "Pesan otomatis";
            }

            // Stream response with delay
            streamWords(responseMessage, chatBox);

            // Clear the input field
            chatInput.value = "";
            chatBox.scrollTop = chatBox.scrollHeight;

            // Save chat history
            saveChatHistory();
        }
    });

    // Handle "New Chat" button click
    newChatBtn.addEventListener("click", () => {
        localStorage.removeItem("chatHistory");
        chatBox.innerHTML = defaultChatMessage;
    });

    // Handle "Previous Chat" button click
    previousChatBtn.addEventListener("click", () => {
        loadChatHistory();
    });

    // Initial load of chat history
    loadChatHistory();

    // Manual modal control
    chatButton.addEventListener("click", () => {
        chatModal.classList.toggle("hidden"); // Membuka atau menutup modal
    });
});
