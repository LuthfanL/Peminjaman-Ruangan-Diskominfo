<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Booking Kendaraan</title>
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon-96x96.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@5.11.3/main.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@5.11.3/main.min.css" rel="stylesheet">
    <!-- Tambahkan Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="assets/style.css"/>
    <style>
        .form-container {
            width: 100%;
            max-width: 1400px; 
            margin: auto; 
            padding: 24px;
            border: 1px solid #ccc;
            border-radius: 20px;
            box-shadow: 0 0 20px 10px rgba(0, 0, 0, 0.1);
            background-color: white; 
        }

        .form-inner {
            margin: 8px auto; 
            width: 100%; 
            padding: 24px;
            border-radius: 20px;
            outline: 2px solid #00C6BF;
            background-color: #fff;
        }
    
        form {
            width: 100%; 
        }
    
        label {
            font-size: 14px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
    
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 14px;
        }
    
        textarea {
            resize: vertical;
        }
    
        .fasilitas-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }
    
        .fasilitas-container label {
            display: inline-block;
            font-size: 13px;
            font-weight: normal;
        }

        #date-range-picker {
            margin-top: 10px;
        }

        #date-range-picker input[type="text"] {
            transition: all 0.2s ease-in-out;
        }
    
        .info {
            font-size: 12px;
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>

<body class="h-full bg-white">
    <!-- Navbar -->
    <div class="relative z-30">
        @include('components.navbargeneral')
    </div>

    <!-- Cover DIV -->
    <div id="default-carousel" class="relative w-full pt-24 m-0 shadow-xl" data-carousel="slide">
        <!-- Cover -->
        <div class="relative h-56 overflow-hidden md:h-96">
            <!-- Gambar dengan teks -->
            <div class="hidden" data-carousel-item>
                <img 
                    src="assets/bookingKendaraan.png" 
                    class="absolute w-full h-full object-cover" 
                    alt="Cover Image"
                />
                <!-- Teks di tengah gambar -->
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                    <h2 class="text-white text-4xl md:text-5xl font-bold drop-shadow-lg">
                        Kendaraan Kami
                    </h2>
                    <!-- Breadcrumb -->
                    <nav class="mt-4 flex justify-center" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                            <li class="inline-flex items-center">
                                <a href="/" class="inline-flex items-center text-sm font-medium text-white hover:font-bold group">
                                    <svg class="w-3 h-3 me-2.5 transition-transform duration-200 group-hover:scale-110" 
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="homeBookingKendaraan" class="inline-flex items-center text-sm font-medium text-white hover:font-bold">
                                    <svg class="rtl:rotate-180 w-3 h-3 text-white mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                    Booking Kendaraan
                                </a>
                            </li>
                            <li>
                                <a href="custDaftarKendaraan" class="inline-flex items-center text-sm font-medium text-white hover:font-bold">
                                    <svg class="rtl:rotate-180 w-3 h-3 text-white mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                    Daftar Kendaraan
                                </a>
                            </li>
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg class="rtl:rotate-180 w-3 h-3 text-white mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                    <span class="ms-1 text-sm font-medium text-white md:ms-2">Booking</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="px-24 pt-8 pb-8 flex justify-center items-center">
        <div class="relative w-full max-w-full max-h-full">
            <!-- Nama Kendaraan -->
            <div class="flex justify-center mb-4">
                <h2 class="font-bold text-3xl">{{ $kendaraan['nama'] }}</h2>
            </div>
            <!-- Isi -->
            <div class="p-4 md:p-5">
                <div class="rounded-3xl shadow-[0_0_13px_3px_rgba(0,0,0,0.2)] pl-12 pr-12 pt-6 pb-10 grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Kolom Kiri: Foto -->
                    <div class="space-y-4">
                        <!-- Foto Utama -->
                        <div>
                            <h2 class="font-semibold mb-3 text-lg">Foto Kendaraan</h2>
                            <img id="main-image-kendaraan" class="h-auto max-w-full rounded-lg" src="{{ $kendaraan->foto_urls[0] }}" alt="Foto Utama">
                        </div>
                        <!-- Foto di bawah -->
                        <div class="grid grid-cols-3 md:grid-cols-5 gap-2 md:gap-4">
                            @foreach ($kendaraan->foto_urls as $thumbnail)
                                <div>
                                    <img onclick="swapImageKendaraan(this)" class="h-auto max-w-full rounded-lg cursor-pointer" 
                                        src="{{ $thumbnail }}" alt="Thumbnail">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="space-y-4">
                        <!-- Deskripsi -->
                        <h2 class="font-semibold text-lg">Deskripsi</h2>
                        <div>
                            <p>
                                {{ $kendaraan['deskripsi'] }}
                            </p>
                        </div>
                        <!-- Informasi Detail -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="biaya" class="block text-m font-semibold">Biaya Sewa (Per Hari)</label>
                                <span id="biaya" class="mt-1 block w-full rounded-md bg-transparent text-gray-700 sm:text-sm">Rp. {{ number_format($kendaraan['biayaSewa'], 0, ',', '.') }}</span>
                            </div>
                            <div>
                                <label for="platNomor" class="block text-m font-semibold">Plat Nomor</label>
                                <span id="platNomor" class="mt-1 block w-full rounded-md bg-transparent text-gray-700 sm:text-sm">{{ $kendaraan['platNomor'] }}</span>
                            </div>
                            <div>
                                <label for="tahun" class="block text-m font-semibold">Tahun</label>
                                <span id="tahun" class="mt-1 block w-full rounded-md bg-transparent text-gray-700 sm:text-sm">{{ $kendaraan['tahunKeluar'] }}</span>
                            </div>
                            <div>
                                <label for="cc" class="block text-m font-semibold">CC</label>
                                <span id="cc" class="mt-1 block w-full rounded-md bg-transparent text-gray-700 sm:text-sm">{{ $kendaraan['cc'] }}</span>
                            </div>
                            <div>
                                <label for="kapasitas" class="block text-m font-semibold">Kapasitas</label>
                                <span id="kapasitas" class="mt-1 block w-full rounded-md bg-transparent text-gray-700 sm:text-sm">{{ $kendaraan['jumlahKursi'] }}</span>
                            </div>
                        </div>
                        <!-- Fasilitas -->
                        <h2 class="font-semibold text-lg">Fasilitas</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="tv" class="block text-sm font-medium text-gray-700">TV</label>
                                <input type="text" id="tv" class="mt-1 block w-full rounded-md bg-transparent border-gray-300 shadow-sm text-gray-700 focus:outline-none pointer-events-none sm:text-sm" value="{{ $kendaraan['tv'] }}" readonly>
                            </div>
                            <div>
                                <label for="sound" class="block text-sm font-medium text-gray-700">Sound</label>
                                <input type="text" id="sound" class="mt-1 block w-full rounded-md bg-transparent border-gray-300 shadow-sm text-gray-700 focus:outline-none pointer-events-none sm:text-sm" value="{{ $kendaraan['sound'] }}" readonly>
                            </div>
                            <div>
                                <label for="ac" class="block text-sm font-medium text-gray-700">AC</label>
                                <input type="text" id="ac" class="mt-1 block w-full rounded-md bg-transparent border-gray-300 shadow-sm text-gray-700 focus:outline-none pointer-events-none sm:text-sm" value="{{ $kendaraan['ac'] }}" readonly>
                            </div>
                        </div>
                        <div>
                            <button data-modal-target="modal-booking" data-modal-toggle="modal-booking" class="inline-flex justify-center w-full items-center px-4 py-3 text-m font-bold rounded-lg bg-gradient-to-l from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">
                                Booking
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Calendar -->
            <div class="relative w-full max-w-screen-4xl mx-auto mt-8">
                <div class="calendar ml-4 mr-4 p-6 flex justify-center rounded-3xl shadow-[0_0_13px_3px_rgba(0,0,0,0.2)]">
                    <div id="calendar"></div>
                </div>
            </div>
            <!-- Pembatas Bawah -->
            <div class="pb-12">

            </div>
        </div>
    </div>

    <!-- Modal Booking -->
    <div id="modal-booking" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900">
                        Form Booking Kendaraan
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form id="booking-form">
                        <label for="idKendaraan"></label>
                        <input 
                            type="hidden"  
                            id="idKendaraan" 
                            name="idKendaraan" 
                            value="{{ $kendaraan['platNomor'] }}" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg pl-10 p-2.5 w-full">

                        <label for="idAdmin"></label>
                        <input 
                            type="hidden" 
                            name="idAdmin" 
                            value="{{ $kendaraan->adminKendaraan->idAdmin }}">
                        
                        <!-- Input Nama Pemohon -->
                        <label for="nama-pemohon">Nama Pemohon</label>
                        <input type="text" id="nama-pemohon" name="nama-pemohon" required>

                        <!-- Input No. Whatapps -->
                        <label for="no-whatsapp">No. Whatapps</label>
                        <input type="text" id="no-whatsapp" name="no-whatsapp" required>

                        <!-- Input Tanggal -->
                        <label for="tanggal-event" class="block font-bold">Tanggal</label>
                        <div id="date-range-picker" class="flex items-center space-x-2">
                            <div class="relative flex items-center">
                                <input id="tglMulai" name="tglMulai" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg pl-10 p-2.5 w-full" placeholder="Tanggal Mulai" required>
                            </div>
                            <div class="relative flex items-center">
                                <input id="tglSelesai" name="tglSelesai" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg pl-10 p-2.5 w-full" placeholder="Tanggal Selesai" required>
                            </div>
                        </div>

                        <!-- Input Keperluan Acara -->
                        <label for="keperluan-acara">Keperluan Acara</label>
                        <textarea id="keperluan-acara" name="keperluan-acara" rows="3" class="rounded-lg border border-gray-300" required></textarea>
                        <p class="mb-4 text-xs text-gray-500">
                            * Masukkan nama/judul acara yang akan dilaksanakan.
                        </p>

                        <!-- Input Lokasi Acara -->
                        <label for="lokasiAcara">Lokasi Acara</label>
                        <textarea id="lokasiAcara" name="lokasiAcara" rows="3" class="rounded-lg border border-gray-300" required></textarea>
                        <p class="mb-4 text-xs text-gray-500">
                            * Masukkan keterangan lokasi acara akan dilakukan.
                        </p>

                        <!-- Input Titik Jemput -->
                        <label for="titikJemput">Titik Jemput</label>
                        <textarea id="titikJemput" name="titikJemput" rows="3" class="rounded-lg border border-gray-300" required></textarea>
                        <p class="mb-4 text-xs text-gray-500">
                            * Masukkan keterangan lokasi titik penjemputan.
                        </p>

                        <!-- Input Bukti Pembayaran -->
                        <label for="bukti-bayar" class="block mb-2 text-sm font-medium text-gray-900">Upload Bukti Pembayaran</label>
                        {{-- <input type="file" id="bukti-bayar" name="buktiBayar" accept="image/jpeg, image/png" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" required> --}}
                    
                        <!-- Informasi Tambahan -->
                        <p class="info mt-1">
                            * File maksimal 2 MB, format: JPEG atau PNG<br>
                            * Upload bukti pembayaran Anda. Harap diperhatikan bahwa jika Anda membatalkan booking setelah mengonfirmasi, pengembalian biaya akan dilakukan sebesar 90% dari total biaya yang telah dibayar.
                        </p>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b space-x-2">
                    <button    
                        data-modal-target="modal-konfirmasi" 
                        data-modal-toggle="modal-konfirmasi" 
                        class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-bold font-medium rounded-lg text-sm px-4 py-2 text-center opacity-50 cursor-not-allowed" disabled>
                        Konfirmasi Booking
                    </button>
                    <button 
                        data-modal-hide="modal-booking" 
                        type="button" 
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold font-medium rounded-lg text-sm px-4 py-2 text-center">
                        Kembali
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Booking Konfirmasi -->
    <div id="modal-konfirmasi" data-modal-backdrop="static" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-6xl max-h-full"> <!-- Mengubah max-w-xl menjadi max-w-3xl -->
            <div class="relative bg-white rounded-lg shadow">
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-16 h-16" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h1 class="mb-5 text-lg font-bold text-gray-900">Konfirmasi Booking Kendaraan</h1>
                    <p class="mb-5 text-m font-normal text-gray-500">Apakah Anda yakin ingin konfirmasi booking ini? Harap diperhatikan kembali bahwa jika Anda membatalkan booking setelah mengonfirmasi, pengembalian biaya akan dilakukan sebesar 90% dari total biaya yang telah dibayar.</p>

                    <form action="{{ route('bookingKendaraan.store') }}" method="POST">
                    @csrf    
                        <div class="p-4 md:p-5">
                            <!-- Menambahkan input tersembunyi untuk menyimpan data -->
                            <input type="hidden" name="idKendaraan" id="confirm-idKendaraan">
                            <input type="hidden" name="idAdmin" id="confirm-idAdmin">
                            <input type="hidden" name="tglMulai" id="confirm-tglMulai">
                            <input type="hidden" name="tglSelesai" id="confirm-tglSelesai">
                        </div>

                        <button type="submit" 
                            class="px-3 py-1 rounded-lg cursor-pointer font-bold font-medium bg-gradient-to-l from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">
                            Setuju, Konfirmasi Booking
                        </button>
                    </form>
                    <button data-modal-hide="modal-konfirmasi" type="button" class="px-3 py-1 rounded-lg cursor-pointer font-bold font-medium bg-gradient-to-l from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white  mt-4">Kembali</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Swap Image Script -->
    <script>
        function swapImageKendaraan(element) {
            const mainImage = document.getElementById('main-image-kendaraan');
            mainImage.src = element.src;
        }
    </script>

    <!-- Script Agar Button tidak dapat ditekan sebelum mengisi semua form booking -->
    <script>
        // Cek apakah semua field terisi
        document.getElementById('booking-form').addEventListener('input', function () {
            var allFilled = true;

            // Loop untuk mengecek apakah ada input kosong
            var inputs = this.querySelectorAll('input, textarea');
            inputs.forEach(function(input) {
                if (!input.value) {
                    allFilled = false;
                }
            });

            // Mengaktifkan atau menonaktifkan tombol Konfirmasi Booking
            var button = document.getElementById('konfirmasi-button');
            if (allFilled) {
                button.disabled = false;  // Mengaktifkan tombol jika semua field terisi
                button.classList.remove('opacity-50', 'cursor-not-allowed');  
            } else {
                button.disabled = true;  // Menonaktifkan tombol jika ada field yang kosong
                button.classList.add('opacity-50', 'cursor-not-allowed');  
            }
        });
    </script>

    <!-- FullCalendar JS -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar');
        const calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'id',
            initialView: 'dayGridMonth',
            buttonText: {
                today: 'Hari Ini'  
            },
            events: [
                { title: 'Rapat PP', start: '2025-01-20T10:00:00', end: '2025-01-21T12:00:00', color: '#ff2345'  },
                { title: 'Workshop', start: '2025-01-23T13:00:00', end: '2025-01-24T12:00:00', color: '#ff9f89' },
                { title: 'Reuni TK', start: '2025-01-27T09:00:00', end: '2025-01-27T11:00:00', color: '#f3fd56' }
            ],
            height: 'auto', 
            contentHeight: 'auto', 
            windowResize: true 
        });

        calendar.render();
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <!-- FullCalendar JS -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@5.11.3/main.min.js"></script>


    <!-- Tambahkan Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#tglMulai", {
            dateFormat: "Y-m-d",
            minDate: "today"
        });

        flatpickr("#tglSelesai", {
            dateFormat: "Y-m-d",
            minDate: "today"
        });
    </script>

    <!-- Script untuk menyembunyikan modal-booking ketika klik konfirmasi booking -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const konfirmasiButton = document.querySelector('[data-modal-target="modal-konfirmasi"]');
            const bookingModal = document.getElementById('modal-booking');
            const konfirmasiModal = document.getElementById('modal-konfirmasi');

            konfirmasiButton.addEventListener('click', function() {
                // Sembunyikan modal booking
                bookingModal.classList.add('hidden');
                
                // Tampilkan modal konfirmasi
                konfirmasiModal.classList.remove('hidden');
            });
        });
    </script>

    <!-- Script untuk menampilkan kembali modal-booking ketika klik kembali pada modal-konfirmasi -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const konfirmasiButton = document.querySelector('[data-modal-target="modal-konfirmasi"]');
            const kembaliButton = document.querySelector('[data-modal-hide="modal-konfirmasi"]');
            
            const bookingModal = document.getElementById('modal-booking');
            const konfirmasiModal = document.getElementById('modal-konfirmasi');
            const bookingForm = document.getElementById('booking-form');

            konfirmasiButton.addEventListener('click', function() {
                // Ambil data dari form booking
                const idKendaraan = bookingForm.querySelector('input[name="idKendaraan"]').value;
                const idAdmin = bookingForm.querySelector('input[name="idAdmin"]').value;
                const tglMulai = bookingForm.querySelector('input[name="tglMulai"]').value;
                const tglSelesai = bookingForm.querySelector('input[name="tglSelesai"]').value;

                // Masukkan data ke dalam modal konfirmasi
                document.getElementById('confirm-idKendaraan').value = idKendaraan;
                document.getElementById('confirm-idAdmin').value = idAdmin;
                document.getElementById('confirm-tglMulai').value = tglMulai;
                document.getElementById('confirm-tglSelesai').value = tglSelesai;

                // Sembunyikan modal booking dan tampilkan modal konfirmasi
                bookingModal.classList.add('hidden');
                konfirmasiModal.classList.remove('hidden');
            });

            kembaliButton.addEventListener('click', function() {
                // Sembunyikan modal konfirmasi dan tampilkan kembali modal booking
                konfirmasiModal.classList.add('hidden');
                bookingModal.classList.remove('hidden');
            });
        });
    </script>

    <!-- Script untuk memeriksa bahwa semua data harus terisi sebelum klik konfirmasi booking -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('booking-form');
            const konfirmasiButton = document.querySelector('[data-modal-target="modal-konfirmasi"]');

            function checkFormValidity() {
                let isValid = true;
                form.querySelectorAll('input[required], textarea[required]').forEach(input => {
                    if (!input.value.trim()) {
                        isValid = false;
                    }
                });

                // Aktifkan atau nonaktifkan tombol berdasarkan validasi
                konfirmasiButton.disabled = !isValid;
                konfirmasiButton.classList.toggle('opacity-50', !isValid);
                konfirmasiButton.classList.toggle('cursor-not-allowed', !isValid);
            }

            // Cek validitas form saat pengguna mengetik atau mengubah input
            form.querySelectorAll('input[required], textarea[required]').forEach(input => {
                input.addEventListener('input', checkFormValidity);
            });

            // Jalankan validasi saat halaman dimuat (misal: jika data sudah diisi sebelumnya)
            checkFormValidity();
        });
    </script>

    <!-- Script agar bisa mengirim data dari modal booking ke modal konfirmasi -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const konfirmasiButton = document.querySelector('[data-modal-target="modal-konfirmasi"]');
            const bookingForm = document.getElementById('booking-form');

            konfirmasiButton.addEventListener('click', function() {
                // Ambil data dari form booking
                const idKendaraan = bookingForm.querySelector('input[name="idKendaraan"]').value;
                const idAdmin = bookingForm.querySelector('input[name="idAdmin"]').value;
                const tglMulai = bookingForm.querySelector('input[name="tglMulai"]').value;
                const tglSelesai = bookingForm.querySelector('input[name="tglSelesai"]').value;

                // Masukkan data ke dalam input tersembunyi di modal konfirmasi
                document.getElementById('confirm-idKendaraan').value = idKendaraan;
                document.getElementById('confirm-idAdmin').value = idAdmin;
                document.getElementById('confirm-tglMulai').value = tglMulai;
                document.getElementById('confirm-tglSelesai').value = tglSelesai;

                // Menampilkan data di modal untuk konfirmasi (untuk tampilan saja)
                document.getElementById('display-idKendaraan').textContent = idKendaraan;
                document.getElementById('display-idAdmin').textContent = idAdmin;
                document.getElementById('display-tglMulai').textContent = tglMulai;
                document.getElementById('display-tglSelesai').textContent = tglSelesai;

                // Tampilkan modal konfirmasi
                const modalKonfirmasi = document.getElementById('modal-konfirmasi');
                modalKonfirmasi.classList.remove('hidden'); // tampilkan modal
            });
        });
    </script>

</body>

</html>