<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>  
    <script>
    document.getElementById("profilePhotoInput").addEventListener("change", function (event) {
        const files = event.target.files;

        if (files && files.length > 0) {
            const reader = new FileReader();

            reader.onload = function (e) {
                const cropperImage = document.getElementById("cropperImage");
                cropperImage.src = e.target.result;

                const cropperModal = document.getElementById("cropperModal");
                cropperModal.classList.remove("hidden");
                cropperModal.style.display = "flex";

                const cropper = new Cropper(cropperImage, {
                    aspectRatio: 1, // Aspect ratio 1:1 untuk lingkaran
                    viewMode: 1,
                    responsive: true,
                    autoCropArea: 1,
                    ready() {
                        // Mengatur dimensi cropper sesuai kebutuhan
                        cropper.setCropBoxData({
                            width: 300,
                            height: 300
                        });
                    },
                });

                document.getElementById("applyCrop").addEventListener("click", function () {
                    const canvas = cropper.getCroppedCanvas({
                        width: 300,
                        height: 300
                    });
                    canvas.style.borderRadius = "100%";

                    canvas.toBlob(function (blob) {
                        const formData = new FormData();
                        formData.append("profile_photo", blob, "profile_photo.png");

                        const updatePhotoUrl = "{{ route('profile.updatePhoto') }}"; // Pastikan ini benar
                        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

                        fetch(updatePhotoUrl, {
                            method: "POST",
                            body: formData,
                            headers: {
                                "X-CSRF-TOKEN": csrfToken
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                cropperModal.classList.add("hidden");
                                window.location.reload(); // Reload to show the new profile photo
                            } else {
                                alert("Error updating profile photo: " + data.message);
                            }
                        })
                        .catch(error => {
                            console.error("Error:", error);
                        });
                    });
                });

                document.getElementById("cancelCrop").addEventListener("click", function () {
                    cropperModal.classList.add("hidden");
                });
            };

            reader.readAsDataURL(files[0]);
        }
    });
    </script>
    <script>
        gsap.registerPlugin(ScrollTrigger);
        gsap.utils.toArray(".max-w-sm").forEach((item, index) => {
            gsap.from(item, {
                opacity: 0,
                y: 50,
                duration: 1,
                scrollTrigger: {
                trigger: item,
                start: "top 80%",
                toggleActions: "play none none none", // ubah toggleActions agar tidak ada reverse
                once: true, // animasi hanya terjadi sekali
                onEnter: () => {
                    gsap.to(item, { opacity: 1, y: 0, duration: 1 });
                },
                },
            });
            });
            gsap.registerPlugin(ScrollTrigger);
    
            // Animasi untuk judul
            gsap.from(".section-title", {
            opacity: 0,
            y: 50,
            duration: 1,
            scrollTrigger: {
                trigger: ".section-title",
                start: "top 80%",
                toggleActions: "play none none none",
                once: true, // animasi hanya terjadi sekali
            },
            });
    
            // Animasi untuk paragraf
            gsap.from(".section-content", {
            opacity: 0,
            y: 50,
            duration: 1,
            scrollTrigger: {
                trigger: ".section-content",
                start: "top 80%",
                toggleActions: "play none none none",
                once: true, // animasi hanya terjadi sekali
            },
            });
    
            // Animasi untuk gambar
            gsap.from(".section-image", {
            opacity: 0,
            y: 50,
            duration: 1,
            scrollTrigger: {
                trigger: ".section-image",
                start: "top 80%",
                toggleActions: "play none none none",
                once: true, // animasi hanya terjadi sekali
            },
            });
        </script>
        <script>
            document.getElementById('profilePhotoForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form from submitting normally
    
            const formData = new FormData(this);
            fetch("{{ route('profile.updatePhoto') }}", {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('profileImage').src = data.imageUrl + '?' + new Date().getTime(); // Add a timestamp to avoid cache issues
                    document.getElementById('profilePhotoInput').value = ''; // Clear the file input
                } else {
                    alert('Terjadi kesalahan: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
            });
    </script>
    <script>
        document.getElementById('showAvatarPopup').addEventListener('click', function () {
            // Tampilkan popup
            document.getElementById('avatarPopup').classList.remove('hidden');
            const avatarContainer = document.getElementById('avatarContainerAdditional');
    
            // Hapus gambar yang sudah ada di dalam kontainer
            avatarContainer.innerHTML = '';
    
            // Daftar nama file gambar (misalnya diambil dari API atau data lain)
            const avatarFileNames = [
                'avatarDefault(1).png',
                'avatarDefault(2).png',
                'avatarDefault(3).png',
                'avatarDefault(4).png',
                'avatarDefault(5).png',
                'avatarDefault(6).png',
                'avatarDefault(7).png',
                'avatarDefault(8).png'
            ];
    
            avatarFileNames.forEach(fileName => {
                // Membuat elemen gambar
                const img = document.createElement('img');
                img.src = `images/listAvatar/${fileName}`; // URL gambar
                img.alt = 'Avatar';
                img.className = 'w-24 h-24 rounded-full cursor-pointer'; // Tambahkan kelas sesuai kebutuhan
    
                // Membuat elemen pembungkus untuk gambar
                const div = document.createElement('div');
                div.className = 'p-2'; // Tambahkan kelas sesuai kebutuhan
                div.appendChild(img);
    
                // Menambahkan event listener untuk gambar
                img.addEventListener('click', function () {
                    // Hapus border merah dari semua gambar
                    document.querySelectorAll('#avatarContainerAdditional img').forEach(image => {
                        image.style.border = ''; // Menghapus border inline
                    });
    
                    // Tambahkan border merah ke gambar yang diklik
                    img.style.border = '4px solid #1a56db'; // Tambahkan border inline
                });
    
                // Menambahkan elemen gambar ke dalam container
                avatarContainer.appendChild(div);
            });
        });
    
        document.getElementById('closeAvatarPopup').addEventListener('click', function () {
            // Sembunyikan popup
            document.getElementById('avatarPopup').classList.add('hidden');
        });
    </script>
</body>
</html>