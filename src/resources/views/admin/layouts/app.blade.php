<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetRecipe Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Poppins',sans-serif;
        }
    </style>
</head>

<body class="bg-pink-50">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-72 bg-pink-300 text-white flex flex-col">

        <div class="p-6 border-b border-pink-400 flex justify-center">

    <img
        src="{{ asset('assets/images/logo_sweetrecipe_1.png') }}"
        alt="SweetRecipe"
        class="w-48 h-auto"
    >

</div>    

        <nav class="flex-1 mt-6">

           <a href="{{ route('admin.dashboard') }}" class="block px-8 py-4 hover:bg-pink-300 transition">
                🏠 Dashboard
            </a>

            <a href="{{ route('resep.index') }}" class="block px-8 py-4 hover:bg-pink-300 transition">
                📖 Resep
            </a>

            <a href="{{ route('rasa.index') }}" class="block px-8 py-4 hover:bg-pink-300 transition">
                🍓 Filter Berdasarkan Rasa Dessert
            </a>

            <a href="{{ route('pesanan.index') }}" class="block px-8 py-4 hover:bg-pink-300 transition">
                📦 Pesanan
            </a>

            <a href="{{ route('user.index') }}" class="block px-8 py-4 hover:bg-pink-300 transition">
                👤 User
            </a>

        </nav>

        <div class="p-6">

            <button class="w-full bg-white text-pink-500 py-3 rounded-xl font-semibold">
                🚪 Logout
            </button>

        </div>

    </aside>

    <!-- Content -->
    <main class="flex-1">

        <div class="bg-white shadow px-10 py-6 flex justify-between">

            <div>

                <h2 class="text-3xl font-bold">
                    Dashboard
                </h2>

                <p class="text-gray-500">
                    Selamat datang kembali, Admin.
                </p>

            </div>

            <div class="flex items-center gap-3">

                <div class="w-12 h-12 rounded-full bg-pink-500 text-white flex items-center justify-center">
                    A
                </div>

                <div>

                    <p class="font-semibold">
                        Administrator
                    </p>

                    <p class="text-sm text-gray-500">
                        SweetRecipe
                    </p>

                </div>

            </div>

        </div>

        <div class="p-10">

            @yield('content')

        </div>

    </main>

</div>

</body>
</html>