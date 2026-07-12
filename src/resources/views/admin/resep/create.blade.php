@extends('admin.layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Tambah Resep
</h1>

<div class="bg-white rounded-2xl shadow p-8">

    <form action="{{ route('resep.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        {{-- Nama Resep --}}
        <div class="mb-5">

            <label class="block mb-2 font-semibold">
                Nama Resep
            </label>

            <input
                type="text"
                name="nama"
                value="{{ old('nama') }}"
                class="w-full border rounded-xl p-3">

            @error('nama')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

        </div>

        {{-- Rasa Dessert --}}
        <div class="mb-5">

            <label class="block mb-2 font-semibold">
                Rasa Dessert
            </label>

            <select
                name="rasa"
                class="w-full border rounded-xl p-3">

                <option value="">-- Pilih Rasa --</option>
                <option value="Manis">Manis</option>
                <option value="Asam">Asam</option>
                <option value="Gurih">Gurih</option>
                <option value="Segar">Segar</option>
                <option value="Creamy">Creamy</option>

            </select>

            @error('rasa')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

        </div>

        {{-- Harga --}}
        <div class="mb-5">

            <label class="block mb-2 font-semibold">
                Harga
            </label>

            <input
                type="number"
                name="harga"
                value="{{ old('harga') }}"
                class="w-full border rounded-xl p-3">

            @error('harga')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

        </div>

        {{-- Upload Foto --}}
        <div class="mb-5">

            <label class="block mb-2 font-semibold">
                Upload Foto
            </label>

            <input
                type="file"
                name="foto"
                class="w-full">

            @error('foto')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

        </div>

        {{-- Deskripsi --}}
        <div class="mb-5">

    <label class="block mb-2 font-semibold">
        Deskripsi
    </label>

    <textarea
        name="deskripsi"
        rows="5"
        class="w-full border rounded-xl p-3">{{ old('deskripsi') }}</textarea>

    @error('deskripsi')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror

</div>

        {{-- Bahan-bahan --}}
<div class="mb-5">

    <label class="block mb-2 font-semibold">
        Bahan-bahan
    </label>

    <textarea
        name="bahan"
        rows="8"
        class="w-full border rounded-xl p-3"
        placeholder="Contoh:
- 250 gr Cream Cheese
- 100 gr Gula
- 2 Butir Telur
- 150 ml Whipping Cream">{{ old('bahan') }}</textarea>

    @error('bahan')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror

</div>

        {{-- Langkah-langkah --}}
    <div class="mb-5">

    <label class="block mb-2 font-semibold">
        Langkah-langkah
    </label>

    <textarea
        name="langkah"
        rows="8"
        class="w-full border rounded-xl p-3"
        placeholder="Contoh:
        1. Campurkan semua bahan.
        2. Aduk hingga rata.
        3. Panggang selama 40 menit.
        4. Dinginkan sebelum disajikan.">{{ old('langkah') }}</textarea>

    @error('langkah')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror

        </div>

        <button
            type="submit"
            class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-xl">

            Simpan

        </button>

    </form>

</div>

@endsection