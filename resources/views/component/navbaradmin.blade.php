<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Poppins', sans-serif;

    }
</style>

<div class="flex-grow">
    <nav class="pr-8 flex justify-between box-border bg-gray-200/30" >
        <!-- Foto Profil -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
        <div class="pl-4">
            <div x-data="{ open: false }" class=" flex justify-start items-center">
                <div class="relative border-b-4 border-transparent py-3">
                    <div class="flex justify-center items-center space-x-3">
                        <div class="text-right pr-8">
                            <h2 class="text-xl font-semibold text-gray-800">luthfan</h2>
                            <h2 class="text-lg text-gray-800">Admin Kelola Ruangan</h2>
                        </div>
                        <div @click="open = !open" class="cursor-pointer relative border-b-4 border-transparent py-3 " :class="{ 'border-yellow-400 transform transition duration-300 ': open }" >
                            <img src="https://via.placeholder.com/40" alt="Foto Profil" class="w-16 h-16 rounded-full">
                        </div>
                    </div>
                    <div x-show="open"  
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        @click.away="open = false"
                        class="absolute right-0 w-60 z-50 px-5 py-3 bg-white text-black border border-gray-300 rounded-lg shadow mt-5">
                        <ul class="space-y-3 text-gray-900">
                            <li class="font-medium">
                                <a href="profile"
                                    class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-yellow-400">
                                    <div class="mr-3">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                    </div>
                                    Profil
                                </a>
                            </li>
                            
                            {{-- @if($user->kp==1 || $user->dk==1)
                            <li class="font-medium">
                                <a href="/dashboardPembimbingAkademik"
                                    class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-yellow-400">
                                    <div class="mr-3">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns ="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    Switch Account
                                </a>
                            </li>
                            @endif --}}
                            

                            <hr class="border-gray-300">
                            <li class="font-medium">
                                <a href="/"
                                    class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                                    <div class="mr-3 text-red-600">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                    </div>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
