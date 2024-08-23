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