<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Poppins',sans-serif;
        }
    </style>
</head>

<body class="bg-pink-50 flex items-center justify-center min-h-screen">

<div class="bg-white shadow-xl rounded-3xl p-10 w-[420px]">

    <div class="text-center mb-8">

        <h1 class="text-3xl font-bold text-pink-500">
            Admin Login
        </h1>

    </div>

    @if($errors->any())
        <div class="bg-red-100 text-red-600 p-3 rounded-lg mb-5">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('admin.login.submit') }}" method="POST">

        @csrf

        <label class="font-semibold">
            ID Admin
        </label>

        <input
            type="text"
            name="admin_id"
            class="w-full border rounded-xl px-4 py-3 mt-2 mb-6"
            placeholder="Masukkan ID Admin">

        <button
            class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold">

            Login

        </button>

    </form>

</div>

</body>
</html>