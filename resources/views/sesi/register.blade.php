<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https:cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>
<body>
<!-- component -->
<div class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950">
    <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-12 py-10 max-w-2xl w-full">
        <h1 class="text-3xl font-bold text-center mb-10 dark:text-gray-200">Buat Akun Anda</h1>
        <form action="/sesi/c" method="POST">
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-lg font-medium text-gray-700 dark:text-gray-300 mb-3">Nama</label>
                <input type="text" value="{{ Session::get('name') }}" name="name" class="shadow-sm rounded-md w-full px-4 py-3 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="nama anda" required>
            </div>
            <div class="mb-6">
                <label for="email" class="block text-lg font-medium text-gray-700 dark:text-gray-300 mb-3">alamat Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="shadow-sm rounded-md w-full px-4 py-3 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="email anda" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-lg font-medium text-gray-700 dark:text-gray-300 mb-3">Kata Sandi</label>
                <input type="password" name="password" class="shadow-sm rounded-md w-full px-4 py-3 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="masukkan kata sandi" required>
            </div>
            <button name="submit" type="submit" class="w-full flex justify-center py-3 px-6 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Register</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>
</html>