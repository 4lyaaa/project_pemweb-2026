@extends('admin.layouts.app')

@section('content')

<div class="grid grid-cols-4 gap-6">

    <div class="bg-white rounded-2xl shadow p-6">
        <p class="text-gray-500">Total Resep</p>
        <h1 class="text-5xl font-bold mt-3">12</h1>
    </div>

    <div class="bg-white rounded-2xl shadow p-6">
        <p class="text-gray-500">Total User</p>
        <h1 class="text-5xl font-bold mt-3">35</h1>
    </div>

    <div class="bg-white rounded-2xl shadow p-6">
        <p class="text-gray-500">Total Pesanan</p>
        <h1 class="text-5xl font-bold mt-3">50</h1>
    </div>

    <div class="bg-white rounded-2xl shadow p-6">
        <p class="text-gray-500">Pendapatan</p>
        <h1 class="text-3xl font-bold mt-3">Rp1.250.000</h1>
    </div>

</div>

<div class="grid grid-cols-2 gap-6 mt-8">

    <div class="bg-white rounded-2xl shadow p-6">

        <h2 class="text-xl font-bold mb-4">
            Pesanan Terbaru
        </h2>

        <table class="w-full">

            <thead>

            <tr class="border-b">

                <th class="py-3 text-left">User</th>
                <th class="text-left">Produk</th>
                <th class="text-left">Status</th>

            </tr>

            </thead>

            <tbody>

            <tr>

                <td class="py-4">Fefe</td>
                <td>Protein Pancake</td>
                <td>
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                        Paid
                    </span>
                </td>

            </tr>

            </tbody>

        </table>

    </div>

    <div class="bg-white rounded-2xl shadow p-6">

        <h2 class="text-xl font-bold mb-4">
            Resep Terbaru
        </h2>

        <table class="w-full">

            <thead>

            <tr class="border-b">

                <th class="py-3 text-left">Nama</th>
                <th class="text-left">Rasa</th>
                <th class="text-left">Harga</th>

            </tr>

            </thead>

            <tbody>

            <tr>

                <td class="py-4">Lava Cake</td>
                <td>Chocolate</td>
                <td>Rp25.000</td>

            </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection