@extends('admin.layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-3xl font-bold">Kelola Resep</h1>
        <p class="text-gray-500">
            Tambah, edit, dan hapus resep dessert.
        </p>
    </div>

    <a href="{{ route('resep.create') }}"
       class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-3 rounded-xl shadow">
        + Tambah Resep
    </a>

</div>

@if(session('success'))
    <div class="bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-5">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-2xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-pink-100">

            <tr>

                <th class="px-6 py-4 text-left">Foto</th>
                <th class="text-left">Nama Resep</th>
                <th class="text-left">Rasa</th>
                <th class="text-left">Harga</th>
                <th class="text-left">Aksi</th>

            </tr>

        </thead>

        <tbody>

            @forelse($recipes as $recipe)

            <tr class="border-b">

                <td class="px-6 py-4">

                    @if($recipe->foto)
                        <img src="{{ asset('storage/' . $recipe->foto) }}"
                             class="w-20 h-20 object-cover rounded-lg">
                    @else
                        -
                    @endif

                </td>

                <td>{{ $recipe->nama }}</td>

                <td>{{ $recipe->rasa }}</td>

                <td>Rp {{ number_format($recipe->harga,0,',','.') }}</td>

                <td>

                    <a href="{{ route('resep.edit', $recipe->id) }}"
                       class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-2 rounded-lg">

                        Edit

                    </a>

                    <form action="{{ route('resep.destroy', $recipe->id) }}"
                          method="POST"
                          class="inline">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Yakin ingin menghapus resep ini?')"
                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg ml-2">

                            Hapus

                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="5" class="text-center py-8 text-gray-500">
                    Belum ada resep.
                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection