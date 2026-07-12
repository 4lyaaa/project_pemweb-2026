@extends('admin.layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Kelola Pesanan
</h1>

<div class="bg-white rounded-2xl shadow overflow-hidden">

<table class="w-full">

<thead class="bg-pink-100">

<tr>

<th class="px-6 py-4 text-left">ID</th>
<th>Nama User</th>
<th>Produk</th>
<th>Total</th>
<th>Status</th>

</tr>

</thead>

<tbody>

<tr>

<td class="px-6 py-4">#001</td>
<td>Fefe</td>
<td>Lava Cake</td>
<td>Rp25.000</td>

<td>

<span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">

Paid

</span>

</td>

</tr>

</tbody>

</table>

</div>

@endsection