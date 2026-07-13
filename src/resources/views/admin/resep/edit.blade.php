@extends('admin.layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Edit Resep
</h1>

<div class="bg-white rounded-2xl shadow p-8">

    <form action="{{ route('resep.update', $recipe->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        {{-- Nama Resep --}}
        <div class="mb-5">

            <label class="block mb-2 font-semibold">
                Nama Resep
            </label>

            <input
                type="text"
                name="nama"
                value="{{ old('nama', $recipe->nama) }}"
                class="w-full border rounded-xl p-3">

        </div>

        {{-- Rasa --}}
        <div class="mb-5">

            <label class="block mb-2 font-semibold">
                Rasa Dessert
            </label>

            <select
                name="rasa"
                class="w-full border rounded-xl p-3">

                <option value="Manis" {{ $recipe->rasa=='Manis'?'selected':'' }}>Manis</option>
                <option value="Asam" {{ $recipe->rasa=='Asam'?'selected':'' }}>Asam</option>
                <option value="Gurih" {{ $recipe->rasa=='Gurih'?'selected':'' }}>Gurih</option>
                <option value="Segar" {{ $recipe->rasa=='Segar'?'selected':'' }}>Segar</option>
                <option value="Creamy" {{ $recipe->rasa=='Creamy'?'selected':'' }}>Creamy</option>

            </select>

        </div>

        {{-- Harga --}}
        <div class="mb-5">

            <label class="block mb-2 font-semibold">
                Harga
            </label>

            <input
                type="number"
                name="harga"
                value="{{ old('harga', $recipe->harga) }}"
                class="w-full border rounded-xl p-3">

        </div>

        {{-- Foto --}}
        <div class="mb-5">

            <label class="block mb-2 font-semibold">
                Foto
            </label>

            @if($recipe->foto)

                <img
                    src="{{ asset('storage/'.$recipe->foto) }}"
                    class="w-40 rounded-lg mb-4">

            @endif

            <input
                type="file"
                name="foto"
                class="w-full">

        </div>

        {{-- Deskripsi --}}
        <div class="mb-5">

            <label class="block mb-2 font-semibold">
                Deskripsi
            </label>

            <textarea
                name="deskripsi"
                rows="5"
                class="w-full border rounded-xl p-3">{{ old('deskripsi', $recipe->deskripsi) }}</textarea>

        </div>

        {{-- Bahan --}}
        <div class="mb-5">

            <label class="block mb-2 font-semibold">
                Bahan
            </label>

            <textarea
                name="bahan"
                rows="8"
                class="w-full border rounded-xl p-3">{{ old('bahan', $recipe->bahan) }}</textarea>

        </div>

        {{-- Langkah --}}
        <div class="mb-5">

            <label class="block mb-2 font-semibold">
                Langkah
            </label>

            <textarea
                name="langkah"
                rows="8"
                class="w-full border rounded-xl p-3">{{ old('langkah', $recipe->langkah) }}</textarea>

        </div>

        <button
            type="submit"
            class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-xl">

            Update Resep

        </button>

    </form>

</div>

@endsection