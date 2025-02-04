<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon-96x96.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

</head>

<body class="h-full bg-white">
    <!-- Navbar -->
    @include('components.navbargeneral')

    <div class="bg-gradient-to-b from-blue-400 to-cyan-400 h-full p-12 text-center flex flex-col items-center justify-center">
        @if(session('success'))
            <div class="bg-cyan-400 text-black p-4 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif
        <div class="bg-white border border-white/10 rounded-2xl shadow-[0_0_20px_10px_rgba(0,0,0,0.1)] p-10 w-full max-w-sm backdrop-blur-lg">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mb-10 text-center text-2xl font-bold leading-9 tracking-tight text-black">Login</h2>
            </div>

            <div class="mt-8">
                @if ($errors->any())
                <div class="bg-red-500 text-white p-2 rounded mb-6">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('masuk') }}" method="POST">
                    @csrf
                    <div class="my-6">
                        <div>
                            <input placeholder="Email" id="email" name="email" type="text" value="{{ old('email') }}" autocomplete="email" class="block w-full rounded-md bg-white-700 border border-gray-600 py-2 px-3 text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                        </div>
                    </div>
                    <div class="my-6">
                        <div class="flex items-center relative">
                            <input placeholder="Password" id="password" name="password" type="password" autocomplete="current-password" class="block w-full rounded-md bg-white-700 border border-gray-600 py-2 px-3 text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:outline-none pr-10">
                            <span id="togglePassword" class="absolute top-3 right-2 cursor-pointer" onclick="togglePasswordVisibility()" style="width: 25px; height: 20px">
                                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                    <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z" fill="gray" />
                                    <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829" fill="gray" />
                                    <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z" fill="gray" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <p class="mt-6 text-center text-sm text-gray-400">
                        Lupa Password anda?
                        <a href="lupaPassword" class="font-semibold leading-6 text-indigo-400 hover:text-indigo-300">Reset password</a>
                    </p>
                    <div class="my-6">
                        <button type="submit" class="bg-gradient-to-b from-blue-400 to-cyan-400  hover:from-blue-500 hover:to-cyan-500 focus:outline-none justify-center rounded-md py-3 px-10 text-sm font-semibold text-white focus:ring-2" >Login</button>
                    </div>
                </form>

                <p class="mt-6 text-center text-sm text-gray-400">
                    Tidak punya akun?
                    <a href="register" class="font-semibold leading-6 text-indigo-400 hover:text-indigo-300">Daftarkan sekarang</a>
                </p>
            </div>
        </div>
    </div>
</body>
<script>
    function togglePasswordVisibility() {
        // Ambil input password dan konfirmasi password
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        // Cek tipe input
        if (passwordField.type === 'password') {
            // Ubah tipe menjadi text untuk menampilkan password
            passwordField.type = 'text';
            // Ubah ikon mata menjadi "eye"
            eyeIcon.setAttribute('class', 'bi bi-eye');
        } else {
            // Ubah tipe menjadi password untuk menyembunyikan password
            passwordField.type = 'password';
            // Ubah ikon mata menjadi "eye-slash"
            eyeIcon.setAttribute('class', 'bi bi-eye-slash');
        }
    }
</script>
</html>