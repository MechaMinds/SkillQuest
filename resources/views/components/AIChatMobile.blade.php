<div id="pop-chat-mobile" class="fixed inset-0 bg-white dark:bg-gray-800 hidden items-end justify-end" style="z-index: 100;">
    <button type="button" class="absolute top-2 right-2 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="pop-chat-mobile">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Close modal</span>
    </button>
</div>

<script>
    document.getElementById('close-button').addEventListener('click', function() {
        document.getElementById('pop-chat-mobile').classList.add('hidden');
    });
</script>