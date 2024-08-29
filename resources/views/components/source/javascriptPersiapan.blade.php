<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>  
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const materi = ["pengenalanKelas", "mekanismeBelajar", "forumDiskusi", "helloWorld", "quiz1"];
            let currentIndex = 0;

            // Mendapatkan data progress dari server
            function loadProgressFromServer() {
                fetch(`/get-progress/{{ Auth::id() }}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.status !== 'no data') {
                            setProgress(data.progress);
                            setVisitedMateri(data.visitedMateri);
                        }
                        updateMateri();
                        updateProgressDisplay();
                    })
                    .catch(error => {
                        console.error('Error loading progress:', error);
                    });
            }

            function getProgress() {
                return parseInt(document.getElementById("progressText").dataset.progress || 0);
            }

            function setProgress(progress) {
                document.getElementById("progressText").dataset.progress = progress;
            }

            function getVisitedMateri() {
                return JSON.parse(document.getElementById("progressText").dataset.visited || "[]");
            }

            function setVisitedMateri(visited) {
                document.getElementById("progressText").dataset.visited = JSON.stringify(visited);
            }

            function updateProgressDisplay() {
                const progress = getProgress();
                document.getElementById("progressText").innerText = `${progress}% Progress`;
                document.getElementById("progressBar").style.width = `${progress}%`;
            }

            function updateMateri() {
                materi.forEach((id, index) => {
                    document.getElementById(id).style.display = index === currentIndex ? "block" : "none";
                });

                let visitedMateri = getVisitedMateri();
                if (!visitedMateri.includes(currentIndex)) {
                    visitedMateri.push(currentIndex);
                    setVisitedMateri(visitedMateri);

                    let newProgress = getProgress() + 5;
                    setProgress(Math.min(newProgress, 100)); // Cap progress at 100%
                }

                updateProgressDisplay();
                updateStatusIcons();
            }

            function updateStatusIcons() {
                let visitedMateri = getVisitedMateri();
                materi.forEach((id, index) => {
                    const statusIcon = document.getElementById(`status${index + 1}`);
                    if (visitedMateri.includes(index)) {
                        statusIcon.innerHTML = `<path fill="#146ffe" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>`;
                    } else {
                        statusIcon.innerHTML = `<path fill="#146ffe" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/>`;
                    }
                });
            }

            function nextMateri() {
                if (currentIndex < materi.length - 1) {
                    currentIndex++;
                    updateMateri();
                    saveProgressToServer(); // Save progress setiap kali materi berubah
                }
            }

            function prevMateri() {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateMateri();
                    saveProgressToServer(); // Save progress setiap kali materi berubah
                }
            }

            function saveProgressToServer() {
                const progressData = {
                    progress: getProgress(),
                    visitedMateri: getVisitedMateri(),
                };

                fetch('/save-progress', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify({
                        user_id: '{{ Auth::id() }}',
                        progress_data: progressData,
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        console.log("Progress saved successfully");
                    } else {
                        console.error("Failed to save progress");
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }

            document.getElementById("nextMateri").addEventListener("click", nextMateri);
            document.getElementById("prevMateri").addEventListener("click", prevMateri);

            // Load progress from server when the page loads
            loadProgressFromServer();
        });
        document.addEventListener('DOMContentLoaded', function() {
            // Pilih semua link yang memiliki data-target-id
            document.querySelectorAll('a[data-target-id]').forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Mencegah navigasi default
                    const targetId = this.getAttribute('data-target-id');
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: 'smooth' // Efek scroll halus
                        });
                    }
                });
            });
        });          
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const materi = ["pengenalanKelas", "mekanismeBelajar", "forumDiskusi", "forumDiskusi", "helloWorld", "quiz1"];
            let currentIndex = 0;

            function getProgress() {
                let progress = localStorage.getItem("progress");
                return progress ? parseInt(progress) : 0; // Default to 0% if not set
            }

            function getTotalMateri(){
                let totalProgress = localStorage.getItem("totalProgress");
                return totalProgress ? parseInt(totalProgress) : 0; 
            }

            function updateTotalMateri(){
                const totalProg = getTotalMateri();
                document.getElementById('progressCount').innerText = `${totalProg}/3`;
            }

            function updateProgressDisplay() {
                const progress = getProgress();
                document.getElementById("progressText").innerText = `${progress}% Progress`;
                document.getElementById("progressBar").style.width = `${progress}%`;
            }

            function setProgress(progress) {
                localStorage.setItem("progress", progress);
            }

            function getVisitedMateri() {
                let visited = localStorage.getItem("visitedMateri");
                return visited ? JSON.parse(visited) : [];
            }

            function setVisitedMateri(visited) {
                localStorage.setItem("visitedMateri", JSON.stringify(visited));
            }

            function updateMateri() {
                materi.forEach((id, index) => {
                    document.getElementById(id).style.display = index === currentIndex ? "block" : "none";
                });

                let visitedMateri = getVisitedMateri();
                if (!visitedMateri.includes(currentIndex)) {
                    visitedMateri.push(currentIndex);
                    setVisitedMateri(visitedMateri);

                    let newProgress = getProgress() + 5;
                    setProgress(Math.min(newProgress, 100)); // Cap progress at 100%
                }

                updateTotalMateri();
                updateProgressDisplay();
                updateStatusIcons();
            }

            function updateStatusIcons() {
                let visitedMateri = getVisitedMateri();
                materi.forEach((id, index) => {
                    const statusIcon = document.getElementById(`status${index + 1}`);
                    if (visitedMateri.includes(index)) {
                        statusIcon.innerHTML = `<path fill="#146ffe" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>`;
                    } else {
                        statusIcon.innerHTML = `<path fill="#146ffe" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/>`;
                    }
                });
            }

            function nextMateriMobile() {
                if (currentIndex < materi.length - 1) {
                    currentIndex++;
                    updateMateri();
                }
            }

            function prevMateriMobile() {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateMateri();
                }
            }

            // Attach event listeners to buttons
            document.getElementById("nextMateriMobile").addEventListener("click", nextMateriMobile);
            document.getElementById("prevMateriMobile").addEventListener("click", prevMateriMobile);

            updateMateri(); // Initial update
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const asideButton = document.getElementById('asideButton');
            const aside = document.querySelector('aside');
            const showSidebarButton = document.getElementById('showSidebarButton');
    
            // Fungsi untuk memeriksa mode layar
            function checkScreenMode() {
                if (window.innerWidth >= 1024) { // Sesuaikan dengan breakpoint untuk desktop
                    aside.classList.remove('hidden');
                    aside.classList.remove('slide-out');
                    aside.classList.add('slide-in');
                } else {
                    aside.classList.add('hidden');
                }
            }
    
            // Jalankan fungsi saat halaman dimuat
            checkScreenMode();
    
            // Jalankan fungsi saat ukuran layar berubah
            window.addEventListener('resize', checkScreenMode);
    
            // Event listener untuk tombol aside
            asideButton.addEventListener('click', function() {
                if (aside.classList.contains('slide-in') || !aside.classList.contains('slide-out')) {
                    aside.classList.remove('slide-in');
                    aside.classList.add('slide-out');
                    setTimeout(function() {
                        aside.classList.add('hidden');
                    }, 300); // Sesuaikan dengan durasi animasi
                } else {
                    aside.classList.remove('hidden');
                    aside.classList.remove('slide-out');
                    aside.classList.add('slide-in');
                }
            });
    
            // Event listener untuk tombol showSidebarButton
            showSidebarButton.addEventListener('click', function() {
                if (aside.classList.contains('hidden') || aside.classList.contains('slide-out')) {
                    aside.classList.remove('hidden');
                    aside.classList.remove('slide-out');
                    aside.classList.add('slide-in');
                } else {
                    aside.classList.add('hidden');
                    aside.classList.remove('slide-in');
                    aside.classList.add('slide-out');
                }
            });
        });
    
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownmenuDefault = document.getElementById('dropdownmenuDefault');
            const dropdowniconDefault = document.getElementById('dropdowniconDefault');
    
            // Ensure the menu is visible
            dropdownmenuDefault.classList.remove('hidden');
    
            // Ensure the icon is rotated to indicate the menu is open
            dropdowniconDefault.classList.add('rotate-180');
        });
    
        document.getElementById('dropdownbuttonDefault').addEventListener('click', function() {
            const dropdownmenuDefault = document.getElementById('dropdownmenuDefault');
            const dropdowniconDefault = document.getElementById('dropdowniconDefault');
    
            // Toggle visibility of the dropdown menu
            dropdownmenuDefault.classList.toggle('hidden');
    
            // Rotate the icon
            dropdowniconDefault.classList.toggle('rotate-180');
        });
    
        document.getElementById('dropdownButton').addEventListener('click', function() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            const dropdownIcon = document.getElementById('dropdownIcon');
    
            // Toggle visibility of the dropdown menu
            dropdownMenu.classList.toggle('hidden');
    
            // Rotate the icon
            dropdownIcon.classList.toggle('rotate-180');
        });
    </script> 
</body>
</html>