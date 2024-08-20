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