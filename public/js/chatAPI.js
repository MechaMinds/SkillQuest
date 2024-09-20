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

        // Fetch response from API
        fetch("API_URL", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ message: userMessage }),
        })
            .then((response) => response.json())
            .then((data) => {
                const responseMessage = data.response; // Assuming the response from API is in data.response

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
            })
            .catch((error) => {
                console.error("Error fetching response from API:", error);
            });

        // Clear the input field
        chatInput.value = "";
        chatBox.scrollTop = chatBox.scrollHeight;
    }
});
