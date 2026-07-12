@extends('admin.layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">

Edit Resep

</h1>

<div class="bg-white rounded-2xl shadow p-8">

<form>

<div class="mb-5">

<label class="block mb-2 font-semibold">

Nama Resep

</label>

<input
type="text"
value="Lava Cake"
class="w-full border rounded-xl p-3">

</div>

<div class="mb-5">

<label class="block mb-2 font-semibold">

Rasa Dessert

</label>

<select class="w-full border rounded-xl p-3">

<option selected>Chocolate</option>

<option>Asam</option>

<option>Gurih</option>

<option>Segar</option>

<option>Creamy</option>

</select>

</div>

<div class="mb-5">

<label class="block mb-2 font-semibold">

Harga

</label>

<input
type="number"
value="25000"
class="w-full border rounded-xl p-3">

</div>

<div class="mb-5">

<label class="block mb-2 font-semibold">

Deskripsi

</label>

<textarea
rows="5"
class="w-full border rounded-xl p-3">Chocolate Lava Cake dengan tekstur lembut.</textarea>

</div>

<button
class="bg-yellow-500 text-white px-6 py-3 rounded-xl">

Update

</button>

</form>

</div>

@endsection