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
    
        let animationsEnabled = true; // Variabel untuk mengaktifkan/mematikan animasi
    
        // Fungsi untuk menonaktifkan animasi
        function disableAnimations() {
            animationsEnabled = false;
            // Hapus semua ScrollTrigger instance
            ScrollTrigger.getAll().forEach(trigger => trigger.kill());
        }
    
        // Check for the save button click event
        document.getElementById('saveChangesButton').addEventListener('click', disableAnimations);
    
        // Animasi untuk elemen dengan kelas .max-w-sm
        if (animationsEnabled) {
            gsap.utils.toArray(".max-w-sm").forEach((item) => {
                gsap.from(item, {
                    opacity: 0,
                    y: 50,
                    duration: 1,
                    scrollTrigger: {
                        trigger: item,
                        start: "top 80%",
                        toggleActions: "play none none none",
                        once: true,
                        onEnter: () => {
                            gsap.to(item, { opacity: 1, y: 0, duration: 1 });
                        },
                    },
                });
            });
        }
    
        // Animasi untuk judul
        if (animationsEnabled) {
            gsap.from(".section-title", {
                opacity: 0,
                y: 50,
                duration: 1,
                scrollTrigger: {
                    trigger: ".section-title",
                    start: "top 80%",
                    toggleActions: "play none none none",
                    once: true,
                },
            });
        }
    
        // Animasi untuk paragraf
        if (animationsEnabled) {
            gsap.from(".section-content", {
                opacity: 0,
                y: 50,
                duration: 1,
                scrollTrigger: {
                    trigger: ".section-content",
                    start: "top 80%",
                    toggleActions: "play none none none",
                    once: true,
                },
            });
        }
    
        // Animasi untuk gambar
        if (animationsEnabled) {
            gsap.from(".section-image", {
                opacity: 0,
                y: 50,
                duration: 1,
                scrollTrigger: {
                    trigger: ".section-image",
                    start: "top 80%",
                    toggleActions: "play none none none",
                    once: true,
                },
            });
        }
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
        let selectedAvatar = '';
        document.getElementById('showAvatarPopup').addEventListener('click', function () {
            document.getElementById('avatarPopup').classList.remove('hidden');
            const avatarContainer = document.getElementById('avatarContainerAdditional');

            avatarContainer.innerHTML = '';

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
                const img = document.createElement('img');
                img.src = `images/listAvatar/${fileName}`;
                img.alt = 'Avatar';
                img.className = 'w-24 h-24 rounded-full cursor-pointer';

                const div = document.createElement('div');
                div.className = 'p-2';
                div.appendChild(img);

                img.addEventListener('click', function () {
                    document.querySelectorAll('#avatarContainerAdditional img').forEach(image => {
                        image.style.border = ''; 
                    });
                    img.style.border = '4px solid #1a56db'; 
                    selectedAvatar = fileName;
                });

                avatarContainer.appendChild(div);
            });
        });

        document.getElementById('closeAvatarPopup').addEventListener('click', function () {
            document.getElementById('avatarPopup').classList.add('hidden');
        });

        document.getElementById('applyAvatar').addEventListener('click', function () {
            console.log('Apply button clicked'); // Debugging
            if (selectedAvatar) {
                console.log('Selected Avatar:', selectedAvatar); // Debugging
                
                const formData = new FormData();
                formData.append('avatar', selectedAvatar);

                fetch('/update-avatar', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Response Data:', data); // Debugging
                    if (data.success) {
                        document.getElementById('avatarPopup').classList.add('hidden');
                        document.getElementById('profileImageAvatar').src = data.newAvatarUrl;
                        // Optionally, you can refresh the page or handle UI updates as needed
                    } else {
                        alert('Failed to update avatar: ' + (data.message || 'Unknown error'));
                    }
                })
                .catch(error => console.error('Error:', error));
            } else {
                alert('Please select an avatar');
            }
        });
    </script>    
    <script>
        document.getElementById('filterButton').addEventListener('click', function() {
            var background = document.getElementById('background');
            if (background.classList.contains('hidden')) {
                background.classList.remove('hidden');
            } else {
                background.classList.add('hidden');
            }
        });
        document.getElementById('filterButton').addEventListener('click', function() {
            var backgroundOpacity = document.getElementById('backgroundOpacity');
            if (backgroundOpacity.classList.contains('hidden')) {
                backgroundOpacity.classList.remove('hidden');
            } else {
                backgroundOpacity.classList.add('hidden');
            }
        });
        document.getElementById('closeIcon').addEventListener('click', function() {
            document.getElementById('background').classList.add('hidden');
            document.getElementById('backgroundOpacity').classList.add('hidden');
        });
    </script>  
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var inputField = document.getElementById('nama-lengkap');
            var user = @json(Auth::user());
            if (user && user.name) {
                inputField.placeholder = user.name;
            }
        });
    </script>    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const alert = document.getElementById('successAlert');
            
            if (alert) {
                // Tambahkan kelas untuk animasi muncul
                alert.classList.add('alert-enter-active');
                
                // Setelah 2 detik, tambahkan kelas untuk animasi hilang
                setTimeout(() => {
                    alert.classList.remove('alert-enter-active');
                    alert.classList.add('alert-exit');
                    alert.classList.add('alert-exit-active');
                    
                    // Hapus elemen setelah animasi selesai
                    setTimeout(() => {
                        alert.remove();
                    }, 500); // Durasi animasi keluar
                }, 2000); // 2 detik
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const provinsiSelect = document.getElementById('provinsi-select');
            const kotaSelect = document.getElementById('kota-select');
            const kodePosSelect = document.getElementById('kode-pos-select');
    
            // Event listener for province selection
            provinsiSelect.addEventListener('change', function() {
                const provinceId = this.value;
                if (provinceId) {
                    kotaSelect.disabled = false; // Enable kota dropdown
                    kodePosSelect.disabled = true; // Disable kode pos dropdown
                    fetch(`/cities?province_id=${provinceId}`)
                        .then(response => response.json())
                        .then(data => {
                            kotaSelect.innerHTML = '<option value="">Pilih Kota atau Kabupaten</option>'; // Reset kota dropdown
                            if (Array.isArray(data) && data.length > 0) {
                                data.forEach(city => {
                                    const option = document.createElement('option');
                                    option.value = city.city_id;
                                    option.textContent = `${city.city_name} (${city.type})`;
                                    kotaSelect.appendChild(option);
                                });
                            } else {
                                const option = document.createElement('option');
                                option.value = "";
                                option.textContent = "Tidak ada data kota";
                                kotaSelect.appendChild(option);
                            }
                        })
                        .catch(error => console.error('Error fetching cities:', error));
                } else {
                    kotaSelect.disabled = true; // Disable kota dropdown
                    kotaSelect.innerHTML = '<option value="">Pilih Kota atau Kabupaten</option>'; // Reset kota dropdown
                    kodePosSelect.disabled = true; // Disable kode pos dropdown
                    kodePosSelect.innerHTML = '<option value="">Pilih Kode Pos</option>'; // Reset kode pos dropdown
                }
            });
    
            // Event listener for city selection
            kotaSelect.addEventListener('change', function() {
                const cityId = this.value;
                if (cityId) {
                    kodePosSelect.disabled = false; // Enable kode pos dropdown
                    fetch(`/postal-codes?city_id=${cityId}`)
                        .then(response => response.json())
                        .then(data => {
                            kodePosSelect.innerHTML = '<option value="">Pilih Kode Pos</option>'; // Reset kode pos dropdown
                            if (data && data.rajaongkir && data.rajaongkir.results) {
                                const postalCode = data.rajaongkir.results.postal_code;
                                const option = document.createElement('option');
                                option.value = postalCode;
                                option.textContent = postalCode;
                                kodePosSelect.appendChild(option);
                            } else {
                                const option = document.createElement('option');
                                option.value = "";
                                option.textContent = "Tidak ada data kode pos";
                                kodePosSelect.appendChild(option);
                            }
                        })
                        .catch(error => console.error('Error fetching postal codes:', error));
                } else {
                    kodePosSelect.disabled = true; // Disable kode pos dropdown
                    kodePosSelect.innerHTML = '<option value="">Pilih Kode Pos</option>'; // Reset kode pos dropdown
                }
            });
        });
    </script>            
</body>
</html>