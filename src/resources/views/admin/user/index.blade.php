@extends('admin.layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Data User
</h1>

<div class="bg-white rounded-2xl shadow overflow-hidden">

<table class="w-full">

<thead class="bg-pink-100">

<tr>

<th class="px-6 py-4 text-left">Nama</th>
<th>Email</th>
<th>Tanggal Bergabung</th>

</tr>

</thead>

<tbody>

<tr>

<td class="px-6 py-4">Fefe</td>
<td>fefe@gmail.com</td>
<td>12 Juli 2026</td>

</tr>

</tbody>

</table>

</div>

@endsection