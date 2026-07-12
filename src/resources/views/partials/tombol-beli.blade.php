<div class="text-center mt-4">

    <div class="produk-info">

        <h4 class="harga-produk">
            {{ $harga }}
        </h4>

        @isset($satuan)
            <div class="satuan-produk">
                {{ $satuan }}
            </div>
        @endisset

        <div class="stok-produk">
            <i class="fas fa-check-circle"></i>
            Produk tersedia
        </div>

    </div>

    <a href="{{ route('checkout', ['slug' => $produk]) }}"
       class="btn btn-beli-sekarang mt-3">

        <i class="fas fa-shopping-cart me-2"></i>

        Beli Sekarang

    </a>

</div>