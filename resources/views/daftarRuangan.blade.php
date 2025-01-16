<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ruangan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMJTVF1a1wMA2gO/YHbx+fyfJhN/0Q5ntv7zYY" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>

</head>

<body class="bg-white">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('components.sidebarAdminRuangan')

        <!-- Content -->
        <div class="flex-grow">

            <!-- Navbar -->
            @include('components.navbaradmin')

            <!-- Main Content -->
            <div class="px-8 pt-8 pb-8 flex justify-center items-center">
                <div class="max-w-full w-full">
                    <!-- Judul Page -->
                    <div class="flex justify-center text-center pb-6">
                        <h1 class="font-bold text-2xl">Daftar Ruangan</h1>
                    </div>
                    <!-- Cari Ruangan -->
                    <form class=" w-full mx-auto">   
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Cari Ruangan</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Ruangan" required />
                            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2">Cari</button>
                        </div>
                    </form>

                    <!-- Table Data -->
                    <table id="default-table">
                        <thead>
                            <tr>
                                <th>
                                    <span class="flex items-center">
                                        No
                                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                        </svg>
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Nama Ruangan
                                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                        </svg>
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Deskripsi Ruangan
                                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                        </svg>
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Gedung
                                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                        </svg>
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Lantai
                                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                        </svg>
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Fasilitas
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Foto
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Tindakan
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- No -->
                                <td>1</td>
                                <!-- Nama Ruangan -->
                                <td>Ruang 1</td>
                                <!-- Deskripsi Ruangan -->
                                <td>Lorem ipsum tahu tempe enak sekali aaaaaaa aaaaa aaaaaa aaaaaaaa aaaaaaa aaaaa aaaaa aaaaaa</td>
                                <!-- Gedung -->
                                <td>Gedung Moch. Ichsan</td>
                                <!-- Lantai -->
                                <td class="text-center">8</td>
                                <!-- Fasilitas -->
                                <td class="text-center"> 
                                    <button data-modal-target="modal-fasilitas" data-modal-toggle="modal-fasilitas" type="button" class="block px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Detail</button>
                                </td>
                                <!-- Foto -->
                                <td class="text-center">
                                    <button data-modal-target="modal-foto" data-modal-toggle="modal-foto" type="button" class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Detail</button>
                                </td>
                                <!-- Tindakan -->
                                <td class="text-center">
                                    <div class="flex flex-col gap-2">
                                        <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Edit</button>
                                        <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ruang 2</td>
                                <td>Lorem ipsum tahu tempe enak sekali</td>
                                <td>Gedung Moch. Ichsan</td>
                                <td class="text-center">8</td>
                                <td class="text-center">
                                    <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Detail</button>
                                </td>
                                <td class="text-center">
                                    <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Detail</button>
                                </td>
                                <td class="text-center">
                                    <div class="flex flex-col gap-2">
                                        <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Edit</button>
                                        <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ruang 3</td>
                                <td>Lorem ipsum tahu tempe enak sekali</td>
                                <td>Gedung Moch. Ichsan</td>
                                <td class="text-center">8</td>
                                <td class="text-center">
                                    <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Detail</button>
                                </td>
                                <td class="text-center">
                                    <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Detail</button>
                                </td>
                                <td class="text-center">
                                    <div class="flex flex-col gap-2">
                                        <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Edit</button>
                                        <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ruang 4</td>
                                <td>Lorem ipsum tahu tempe enak sekali</td>
                                <td>Gedung Moch. Ichsan</td>
                                <td class="text-center">8</td>
                                <td class="text-center">
                                    <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Detail</button>
                                </td>
                                <td class="text-center">
                                    <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Detail</button>
                                </td>
                                <td class="text-center">
                                    <div class="flex flex-col gap-2">
                                        <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Edit</button>
                                        <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Ruang 5</td>
                                <td>Lorem ipsum tahu tempe enak sekali</td>
                                <td>Gedung Moch. Ichsan</td>
                                <td class="text-center">8</td>
                                <td class="text-center">
                                    <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Detail</button>
                                </td>
                                <td class="text-center">
                                    <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Detail</button>
                                </td>
                                <td class="text-center">
                                    <div class="flex flex-col gap-2">
                                        <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Edit</button>
                                        <button class="px-3 py-1 rounded-lg cursor-pointer font-medium bg-gradient-to-l from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br transition duration-200 ease-in-out text-white">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Fasilitas -->
    <div id="modal-fasilitas" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Fasilitas Ruangan
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="podium" class="block text-sm font-medium text-gray-700">Podium</label>
                            <input type="number" id="podium" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" value="2" readonly>
                        </div>
                        <div>
                            <label for="sound" class="block text-sm font-medium text-gray-700">Sound</label>
                            <input type="number" id="sound" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" value="8" readonly>
                        </div>
                        <div>
                            <label for="meja" class="block text-sm font-medium text-gray-700">Meja</label>
                            <input type="number" id="meja" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" value="50" readonly>
                        </div>
                        <div>
                            <label for="ac" class="block text-sm font-medium text-gray-700">AC</label>
                            <input type="number" id="ac" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" value="8" readonly>
                        </div>
                        <div>
                            <label for="kursi" class="block text-sm font-medium text-gray-700">Kursi</label>
                            <input type="number" id="kursi" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" value="100" readonly>
                        </div>
                        <div>
                            <label for="proyektor" class="block text-sm font-medium text-gray-700">Proyektor</label>
                            <input type="number" id="proyektor" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" value="6" readonly>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button data-modal-hide="modal-fasilitas" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Kembali</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Foto -->
    <div id="modal-foto" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900">
                        Fasilitas Ruangan
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid gap-4">
                        <div>
                            <img id="main-image" class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="">
                        </div>
                        <div class="grid grid-cols-3 md:grid-cols-5 gap-2 md:gap-4">
                            <div>
                                <img onclick="swapImage(this)" class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                            </div>
                            <div>
                                <img onclick="swapImage(this)" class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                            </div>
                            <div>
                                <img onclick="swapImage(this)" class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                            </div>
                            <div>
                                <img onclick="swapImage(this)" class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                            </div>
                            <div>
                                <img onclick="swapImage(this)" class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                            </div>
                        </div>
                    </div>                    
                </div>
                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button data-modal-hide="modal-foto" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Kembali</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

<!-- Table -->
<script>
    if (document.getElementById("default-table") && typeof simpleDatatables.DataTable !== 'undefined') {
        const dataTable = new simpleDatatables.DataTable("#default-table", {
            searchable: false,
            perPageSelect: false
        });
    }
</script>

<!-- Swap Image -->
<script>
    function swapImage(element) {
        const mainImage = document.getElementById('main-image');
        mainImage.src = element.src;
    }
</script>

</html>