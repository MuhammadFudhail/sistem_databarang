<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https:cdn.tailwindcss.com"></script>
   
    <title>Login</title>
</head>
<body>
<div class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950">
    <div class="bg-white dark:bg-gray-900 shadow-2xl rounded-lg px-16 py-12 max-w-2xl w-full">
        <h1 class="text-4xl font-bold text-center mb-12 dark:text-gray-200">Silahkan Login</h1>
        <form action="/sesi/login" method="POST">
            @csrf
            <div class="mb-8">
                <label for="email" class="block text-xl font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="shadow-xl rounded-lg w-full px-5 py-4 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition-transform transform focus:scale-105" placeholder="Masukan Email Anda" required>
            </div>
            <div class="mb-8">
                <label for="password" class="block text-xl font-medium text-gray-700 dark:text-gray-300 mb-2">Kata Sandi</label>
                <input type="password" name="password" class="shadow-xl rounded-lg w-full px-5 py-4 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition-transform transform focus:scale-105" placeholder="Masukan sandi" required>
            </div>
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" class="h-6 w-6 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 focus:outline-none" checked>
                    <label for="remember" class="ml-3 block text-lg text-gray-700 dark:text-gray-300">Ingatakan saya</label>
                </div>
                <a href="/sesi/register" class="text-base text-indigo-500 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Buat Akun</a>
            </div>
            <button name="submit" type="submit" class="w-full flex justify-center py-4 px-5 border border-transparent rounded-lg shadow-xl text-xl font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-transform transform hover:scale-105">Login</button>
        </form>
    </div>
</div>
<script>
    document.getElementById('remember').addEventListener('change', function() {
        var passwordInput = document.getElementById('password');
        if (this.checked) {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: @json(session('success')),
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: @json(session('error')),
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>
</html>