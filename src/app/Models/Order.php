<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'produk_slug',
        'nama_produk',
        'harga',
        'jumlah',
        'total',
        'nama_penerima',
        'nomor_whatsapp',
        'alamat',
        'metode_pembayaran',
        'status',
        'midtrans_order_id',
        'snap_token',
    ];

    /**
     * Relasi ke tabel users.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}