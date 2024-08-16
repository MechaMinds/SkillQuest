<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SkillQuest ⸺ Solusi Belajar IT</title>
        <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.ico') }}" />
        <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" /> -->
    </head>
    <body class="mt-3 bg-white dark:bg-gray-900">
        <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-[-1]"></div>
        <!-- Navbar Mulai-->
        <div id="app">
            <x-navbar />
        </div>
        <!-- Navbar Selesai -->
        <!-- Jumbotron 1 Mulai -->
        <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')] py-8 lg:py-16">
            <div class="px-4 mx-auto max-w-screen-xl text-left z-10 relative"> 
                <div class="mx-auto max-w-5xl" style="margin-top: 150px">
                    <a href="{{ route('reset.discount', ['id' => $productId]) }}">
                        <div style="width: 150px" class="title flex flex-row gap-2 items-center justify-center py-3 px-3 rounded-xl text-gray-900 focus:outline-none bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4">
                                <path class="dark:fill-white" fill="rgb(55 65 81)" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                            </svg>
                            <p class="dark:text-white text-gray-900 font-semibold">Kembali</p>
                        </div>
                    </a>
                    <div class="mt-6 sm:mt-8 sm:flex lg:grid lg:grid-cols-2 lg:gap-12">
                        <div class="w-full rounded-xl border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 lg:max-w-xl">
                            <div class="flex flex-col items-start gap-4 p-6">
                                <!-- Image -->
                                <img class="w-full h-auto object-cover rounded-lg" src="{{ asset('./images/thumbnail/thumbnail1.png') }}" alt="Course Thumbnail" />
                                <!-- Card Content -->
                                <div class="flex-1">
                                    @if(isset($product['name'], $product['price']))
                                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-2">{{ $product['name'] }}</h5>
                                        <div class="mb-4 flex flex-wrap gap-4">
                                            <p class="flex items-center gap-2 text-gray-900 dark:text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                                                    <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                                                </svg>
                                                30 Jam
                                            </p>
                                            <p class="flex items-center gap-2 text-gray-900 dark:text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                                                    <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                                                </svg>
                                                4,5
                                            </p>
                                            <p class="flex items-center gap-2 text-gray-900 dark:text-white">
                                                <img src="{{ asset('./images/dasar.svg') }}" class="w-5 h-5" alt="Dasar" />
                                                Dasar
                                            </p>
                                        </div>
                                        <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                                            <p class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                                                    <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                                                </svg>
                                                120 Modul
                                            </p>
                                            <p class="flex items-center gap-2 text-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                                                    <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                                </svg>
                                                Pengguna Terdaftar
                                            </p>
                                        </div>  
                                    @else
                                        <p class="text-red-500">Product data is incomplete.</p>
                                    @endif
                                </div>
                            </div>                            
                        </div>
                        <div class="mt-6 grow sm:mt-8 lg:mt-0">
                            <div class="space-y-4 rounded-xl border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800">
                                <form action="{{ route('apply.discount') }}" method="POST">
                                    @csrf
                                    <label for="discount_code" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Kode Diskon</label>
                                    <input type="text" id="discount_code" name="discount_code" aria-describedby="helper-text-explanation" placeholder="Masukkan kode diskon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <input type="hidden" name="product_id" value="{{ $productId }}">
                                    <button type="submit" class="mt-2 w-full px-4 py-3 font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Gunakan Kode Diskon</button>
                                </form>
                                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                                
                                <div class="space-y-2">
                                    <!-- Menampilkan produk berdasarkan data yang diterima -->
                                    @if(isset($product['name'], $product['price']))
                                        <dl class="flex items-center justify-between gap-4">
                                            <dt class="text-base font-normal text-gray-500 dark:text-gray-400">{{ $product['name'] }}</dt>
                                            <dd class="text-base font-medium text-gray-900 dark:text-white">Rp. {{ number_format($product['price'], 0, ',', '.') }}</dd>
                                        </dl>
                                        <!-- Menampilkan PPN -->
                                        <dl class="flex items-center justify-between gap-4">
                                            <dt class="text-base font-normal text-gray-500 dark:text-gray-400">PPN (11%)</dt>
                                            <dd class="text-base font-medium text-green-400">+ Rp. {{ number_format($vatAmount, 0, ',', '.') }}</dd>
                                        </dl>
                                        <!-- Menampilkan Kode Diskon jika ada -->
                                        @if(isset($discountAmount) && $discountAmount > 0)
                                            <dl class="flex items-center justify-between gap-4">
                                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Diskon</dt>
                                                <dd class="text-base font-medium text-red-500">- Rp. {{ number_format($discountAmount, 0, ',', '.') }}</dd>
                                            </dl>
                                        @endif
                                    @else
                                        <p class="text-red-500">Product data is incomplete.</p>
                                    @endif
                                </div>
                                <!-- Menampilkan harga total -->
                                <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                    <dt class="text-lg font-bold text-gray-900 dark:text-white">Total</dt>
                                    <dd class="text-xl font-bold text-gray-900 dark:text-white">Rp. {{ number_format($totalPrice ?? 0, 0, ',', '.') }}</dd>
                                </dl>
                                <button type="button" id="checkout-button" class="w-full px-4 py-3 font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700" style="margin-top: 30px">Bayar & Gabung Kelas</button>
                                <button type="button" id="success-link" class="hidden w-full px-4 py-3 font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700" style="margin-top: 30px">Bayar & Gabung Kelas</button>
                            </div>
                        </div>                                                                                                                                                                                              
                    </div>                    
                </div>
            </div>
        </section>
        <!-- Jumbotron 1 Selesai -->
        <!-- Footer Mulai -->
        <div id="app">
        <x-footer />
        </div>
        <div data-dial-init class="z-50 fixed start-6 group" style="bottom: 100px">
        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 sm:mr-5">
            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                fill-rule="evenodd"
                clip-rule="evenodd"
            ></path>
            </svg>
        </button>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.client_key') }}"></script>       
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const checkoutButton = document.getElementById('checkout-button');
                const successLink = document.getElementById('success-link');
        
                // Periksa status pembayaran dari database
                axios.get('/order/status') // Endpoint API untuk memeriksa status pembayaran
                    .then(response => {
                        const paymentStatus = response.data.status; // Misalnya, 'success' atau 'pending'
                        if (paymentStatus === 'success') {
                            checkoutButton.classList.add('hidden');
                            successLink.classList.remove('hidden');
                            window.location.href = '/course/belajar-bahasa-pemrograman-python/persiapan'; // Arahkan pengguna ke halaman yang diinginkan
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching payment status:', error);
                    });
        
                checkoutButton.addEventListener('click', function () {
                    axios.post('/order', {
                        product_id: 1
                    })
                    .then(response => {
                        const snapToken = response.data.snap_token;
                        window.snap.pay(snapToken, {
                            onSuccess: function(result) {
                                console.log(result);
                                // Simpan status pembayaran dan ubah tombol
                                axios.post('/order/update-status', {
                                    order_id: response.data.order_id,
                                    status: 'success'
                                })
                                .then(() => {
                                    checkoutButton.classList.add('hidden');
                                    successLink.classList.remove('hidden');
                                    window.location.href = '/course/belajar-bahasa-pemrograman-python/persiapan'; // Arahkan pengguna ke halaman yang diinginkan
                                })
                                .catch(error => {
                                    console.error('Error updating order status:', error);
                                });
                            },
                            onPending: function(result) { console.log(result); },
                            onError: function(result) { console.log(result); }
                        });
                    })
                    .catch(error => {
                        console.error('Error creating order:', error);
                    });
                });
            });
        </script>        
    </body>
</html>