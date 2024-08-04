var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

// Change the icons inside the button based on previous settings
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcon.classList.remove("hidden");
} else {
    themeToggleDarkIcon.classList.remove("hidden");
}

var themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    // Toggle icons inside button
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    // If set via local storage previously
    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("roadmapButton");
    const loader = button.querySelector(".loader");
    const loadingText = button.querySelector(".loading-text");
    const loadingTextExtended = button.querySelector(".loading-text-extended");

    button.addEventListener("click", function (event) {
        event.preventDefault();

        loadingText.style.display = "none";
        loader.style.display = "inline-block";
        loadingTextExtended.style.display = "block"; // Show "Loading..." text

        setTimeout(() => {
            window.location.href = "/roadmap";
        }, 5000);
    });
});

if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}

document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".itemLeft");

    items.forEach((item) => {
        item.addEventListener("mouseenter", () => {
            items.forEach((el) => (el.style.animationPlayState = "paused"));
        });

        item.addEventListener("mouseleave", () => {
            items.forEach((el) => (el.style.animationPlayState = "running"));
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".itemRight");

    items.forEach((item) => {
        item.addEventListener("mouseenter", () => {
            items.forEach((el) => (el.style.animationPlayState = "paused"));
        });

        item.addEventListener("mouseleave", () => {
            items.forEach((el) => (el.style.animationPlayState = "running"));
        });
    });
});

let currentOpenIndex = null;

function toggleAnswer(index) {
    const answer = document.getElementById(`answer-${index}`);
    const icon = document.getElementById(`icon-${index}`);
    if (answer.classList.contains("show-answer")) {
        answer.classList.remove("show-answer");
        answer.classList.add("hidden-answer");
        icon.textContent = "+";
    } else {
        answer.classList.remove("hidden-answer");
        answer.classList.add("show-answer");
        icon.textContent = "−";
    }
}

var navbar = document.querySelector(".navbar");
var lastScrollTop = 0;
var delta = 5; // Besarnya jarak scroll sebelum menentukan arah scroll

window.addEventListener("scroll", function () {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (Math.abs(lastScrollTop - scrollTop) <= delta) return; // Tidak ada scroll yang signifikan

    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-100px"; // Scroll ke bawah, sembunyikan navbar
    } else {
        navbar.style.top = "0"; // Scroll ke atas atau di posisi paling atas, tampilkan navbar
    }

    lastScrollTop = scrollTop;
});

document.addEventListener("DOMContentLoaded", function () {
    fetch("../components/Navbar.html")
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("navbar-container").innerHTML = data;
        })
        .catch((error) => console.error("Error loading navbar:", error));
});

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".nav-button");
    const sections = document.querySelectorAll(".content-section > div");

    // Function to switch content
    function switchContent(target) {
        sections.forEach((section) => {
            section.classList.remove("active");
            section.classList.add("hidden");
        });

        const targetSection = document.getElementById(target);
        targetSection.classList.remove("hidden");
        setTimeout(() => {
            targetSection.classList.add("active");
        }, 10); // Timeout to allow transition to apply
    }

    // Set the "aboutContent" as the default active section
    switchContent("aboutContent");

    buttons.forEach((button) => {
        button.addEventListener("click", function () {
            const target = this.id.replace("Btn", "Content");
            switchContent(target);
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById("buttonContainer");

    container.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        container.scrollLeft += evt.deltaY;
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card");
    const maxVisible = 2; // Jumlah maksimal kartu yang ditampilkan pada satu waktu
    let currentIndex = 0; // Indeks awal untuk tampilan

    showCards();

    function showCards() {
        // Sembunyikan semua kartu
        cards.forEach((card) => {
            card.style.display = "none";
        });

        // Tampilkan kartu-kartu yang sesuai
        for (let i = currentIndex; i < currentIndex + maxVisible; i++) {
            if (cards[i]) {
                cards[i].style.display = "block";
            }
        }
    }

    // Contoh: Berpindah ke kartu-kartu berikutnya setiap klik
    const nextButton = document.getElementById("nextButton");
    nextButton.addEventListener("click", function () {
        currentIndex += maxVisible;
        if (currentIndex >= cards.length) {
            currentIndex = 0;
        }
        showCards();
    });
});

document.getElementById("lessonsBtn").addEventListener("click", function () {
    document.getElementById("lessonsSection").scrollIntoView({
        behavior: "smooth",
    });
});

let isDragging = false;
let startPosition = 0;
let currentIndex = 0;
const testimonials = document.querySelectorAll(".testimonial-card");
const container = document.querySelector(".slider-container");

container.addEventListener("mousedown", startDrag);
container.addEventListener("touchstart", startDrag);

container.addEventListener("mouseup", endDrag);
container.addEventListener("touchend", endDrag);

container.addEventListener("mousemove", drag);
container.addEventListener("touchmove", drag);

function startDrag(event) {
    isDragging = true;
    startPosition = getPositionX(event);
}

function endDrag() {
    isDragging = false;
}

function drag(event) {
    if (!isDragging) return;

    const currentPosition = getPositionX(event);
    const diff = currentPosition - startPosition;

    // Sensitivity threshold for swipe
    if (Math.abs(diff) < 50) return;

    if (diff > 0) {
        currentIndex = currentIndex === 0 ? 0 : currentIndex - 1;
    } else {
        currentIndex =
            currentIndex === testimonials.length - 1
                ? testimonials.length - 1
                : currentIndex + 1;
    }

    const slideWidth = testimonials[0].offsetWidth + 20; // Adjust with your card width and margin/padding
    const offset = -currentIndex * slideWidth;
    container.style.transform = `translateX(${offset}px)`;

    isDragging = false;
}

function getPositionX(event) {
    return event.type.includes("mouse")
        ? event.pageX
        : event.touches[0].clientX;
}

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

    document.getElementById("nextButton").addEventListener("click", nextMateri);
    document.getElementById("prevButton").addEventListener("click", prevMateri);

    updateMateri(); // Initial update
});

document.addEventListener("DOMContentLoaded", function () {
    const texts = document.querySelectorAll(".text-container p");
    let currentIndex = 0;

    function updateTexts() {
        texts.forEach((text, index) => {
            text.style.display = index === currentIndex ? "block" : "none";
        });
    }

    document.getElementById("nextBtn").addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % texts.length;
        updateTexts();
    });

    document.getElementById("prevBtn").addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + texts.length) % texts.length;
        updateTexts();
    });

    updateTexts(); // Initial update
});
