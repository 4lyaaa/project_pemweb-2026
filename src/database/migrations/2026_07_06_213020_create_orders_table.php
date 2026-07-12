<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();

        // User yang melakukan pemesanan
        $table->foreignId('user_id')->constrained()->cascadeOnDelete();

        // Informasi produk
        $table->string('produk_slug');
        $table->string('nama_produk');
        $table->integer('harga');

        // Jumlah dan total
        $table->integer('jumlah')->default(1);
        $table->integer('total');

        // Data penerima
        $table->string('nama_penerima');
        $table->string('nomor_whatsapp');
        $table->text('alamat');

        // Pembayaran
        $table->string('metode_pembayaran');
        $table->string('status')->default('pending');

        // ID transaksi dari Midtrans (nanti dipakai)
        $table->string('midtrans_order_id')->nullable();

        $table->timestamps();
    });
}
};
