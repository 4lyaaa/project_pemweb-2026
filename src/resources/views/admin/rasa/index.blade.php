@extends('admin.layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-3xl font-bold">Filter Berdasarkan Rasa Dessert</h1>
        <p class="text-gray-500">Kelola kategori rasa dessert.</p>
    </div>

    <a href="#" class="bg-pink-500 text-white px-5 py-3 rounded-xl hover:bg-pink-600">
        + Tambah Rasa
    </a>

</div>

<div class="bg-white rounded-2xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-pink-100">

        <tr>

            <th class="px-6 py-4 text-left">No</th>
            <th class="text-left">Nama Rasa</th>
            <th class="text-left">Jumlah Resep</th>
            <th class="text-left">Aksi</th>

        </tr>

        </thead>

        <tbody>

        <tr class="border-b">

            <td class="px-6 py-4">1</td>
            <td>Chocolate</td>
            <td>4</td>

            <td>

                <button class="bg-yellow-400 text-white px-3 py-2 rounded-lg">
                    Edit
                </button>

                <button class="bg-red-500 text-white px-3 py-2 rounded-lg">
                    Hapus
                </button>

            </td>

        </tr>

        </tbody>

    </table>

</div>

@endsection