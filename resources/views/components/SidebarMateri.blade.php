<script>
    document.addEventListener("DOMContentLoaded", function () {
        const materi = ["pengenalanKelas", "mekanismeBelajar", "forumDiskusi"];
        let currentIndex = 0;

        function getProgress() {
            let progress = localStorage.getItem("progress");
            return progress ? parseInt(progress) : 5;
        }

        function updateProgressDisplay() {
            const progress = getProgress();
            document.getElementById(
                "progress-text"
            ).innerText = `${progress}% Progress`;
            document.getElementById("progress-bar").style.width = `${progress}%`;
        }

        function setProgress(progress) {
            localStorage.setItem("progress", progress);
        }

        function updateMateri() {
            materi.forEach((id, index) => {
                document.getElementById(id).style.display =
                    index === currentIndex ? "block" : "none";
            });
            setProgress((currentIndex + 1) * 5);
            updateProgressDisplay();
        }

        function nextMateri() {
            if (currentIndex < materi.length - 1) {
                currentIndex++;
                updateMateri();
            }
        }

        function prevMateri() {
            if (currentIndex > 0) {
                currentIndex--;
                updateMateri();
            }
        }

        document.getElementById("nextMateri").addEventListener("click", nextMateri);
        document.getElementById("prevMateri").addEventListener("click", prevMateri);  

        updateMateri(); // Initial update
    });
</script>