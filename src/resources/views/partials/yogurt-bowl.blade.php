<!-- MODAL FRUIT YOGURT BOWL -->
<div class="modal fade"
     id="modalYogurtBowl"
     tabindex="-1"
     aria-labelledby="modalYogurtBowlLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="modalYogurtBowlLabel">
                    🥣 Fruit Yogurt Bowl
                </h4>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                </button>
            </div>

            <div class="modal-body">
            <div class="text-center mb-4">
                <img
                    src="{{ asset('assets/images/yogurt_bowl_1.png') }}"
                    alt="Fruit Yogurt Bowl"
                    style="width:260px; height:auto; max-width:260px; display:block; margin:auto; object-fit:contain; border-radius:12px;">
            </div>
                <div class="resep-bahan">
                    <h5>🥣 Bahan-bahan:</h5>

                    <ul>
                        <li>150–200 ml Greek Yogurt Plain</li>
                        <li>½ cup stroberi, potong-potong</li>
                        <li>1 buah pisang, iris tipis</li>
                        <li>½ cup blueberry</li>
                        <li>Buah lain sesuai selera seperti kiwi atau mangga</li>
                        <li>½ sdm granola</li>
                        <li>1 sdm madu (opsional)</li>
                        <li>1 sdm chia seeds (opsional)</li>
                        <li>Daun mint sebagai hiasan</li>
                    </ul>
                </div>

                <div class="resep-langkah">
                    <h5>📝 Langkah-langkah:</h5>
                    <ol>
                        <li>Siapkan mangkuk saji.</li>
                        <li>Tuang Greek yogurt ke dalam mangkuk.</li>
                        <li>Potong semua buah sesuai selera.</li>
                        <li>Susun potongan buah di atas yogurt.</li>
                        <li>Taburkan granola secara merata.</li>
                        <li>Tambahkan madu dan chia seeds apabila diinginkan.</li>
                        <li>Hiasi menggunakan daun mint.</li>
                        <li>Sajikan segera agar tetap segar.</li>
                    </ol>
                </div>

                <hr>

                @include('partials.tombol-beli', [
                    'produk' => 'yogurt-bowl',
                    'harga'  => 'Rp30.000',
                    'satuan' => '1 Bowl'
                ])

            </div>

        </div>
    </div>
</div>