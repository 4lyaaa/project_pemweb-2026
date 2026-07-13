@extends('admin.layouts.app')

@section('content')

<div class="grid grid-cols-4 gap-6">

    <div class="bg-white rounded-2xl shadow p-6">
        <p class="text-gray-500">Total Resep</p>
        <h1 class="text-5xl font-bold mt-3">
            {{ $totalResep }}
        </h1>
    </div>

    <div class="bg-white rounded-2xl shadow p-6">
        <p class="text-gray-500">Total User</p>
        <h1 class="text-5xl font-bold mt-3">
            {{ $totalUser }}
        </h1>
    </div>

    <div class="bg-white rounded-2xl shadow p-6">
        <p class="text-gray-500">Total Pesanan</p>
        <h1 class="text-5xl font-bold mt-3">
            {{ $totalPesanan }}
        </h1>
    </div>

    <div class="bg-white rounded-2xl shadow p-6">
        <p class="text-gray-500">Pendapatan</p>
        <h1 class="text-3xl font-bold mt-3">
            Rp{{ number_format($pendapatan,0,',','.') }}
        </h1>
    </div>

</div>

<div class="grid grid-cols-2 gap-6 mt-8">

    <!-- Pesanan Terbaru -->
    <div class="bg-white rounded-2xl shadow p-6">

        <h2 class="text-xl font-bold mb-4">
            Pesanan Terbaru
        </h2>

        <table class="w-full">

            <thead>

                <tr class="border-b">

                    <th class="py-3 text-left">
                        User
                    </th>

                    <th class="text-left">
                        Produk
                    </th>

                    <th class="text-left">
                        Status
                    </th>

                </tr>

            </thead>

            <tbody>

            @forelse($pesananTerbaru as $pesanan)

                <tr>

                    <td class="py-4">
                        {{ $pesanan->user->name }}
                    </td>

                    <td>
                        {{ $pesanan->nama_produk }}
                    </td>

                    <td>

                        @if($pesanan->status=='paid')

                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                                Paid
                            </span>

                        @elseif($pesanan->status=='pending')

                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
                                Pending
                            </span>

                        @else

                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">
                                {{ ucfirst($pesanan->status) }}
                            </span>

                        @endif

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="3" class="text-center py-5">

                        Tidak ada pesanan terbaru.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <!-- Resep Terbaru -->

    <div class="bg-white rounded-2xl shadow p-6">

        <h2 class="text-xl font-bold mb-4">

            Resep Terbaru

        </h2>

        <table class="w-full">

            <thead>

                <tr class="border-b">

                    <th class="py-3 text-left">
                        Nama
                    </th>

                    <th class="text-left">
                        Rasa
                    </th>

                    <th class="text-left">
                        Harga
                    </th>

                </tr>

            </thead>

            <tbody>

            @forelse($resepTerbaru as $resep)

                <tr>

                    <td class="py-4">
                        {{ $resep->nama }}
                    </td>

                    <td>
                        {{ $resep->rasa }}
                    </td>

                    <td>
                        Rp{{ number_format($resep->harga,0,',','.') }}
                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="3" class="text-center py-5">

                        Belum ada resep.

                    </td>

                </tr>

            @endforelse

            </tbody>
        </table>
    </div>
</div>
@endsection