<!-- MODAL PROTEIN PANCAKE -->
<div class="modal fade"
     id="modalProteinPancake"
     tabindex="-1"
     aria-labelledby="modalProteinPancakeLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="modalProteinPancakeLabel">
                    🥞 Protein Pancake
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
                    src="{{ asset('assets/images/protein_pancake_1.png') }}"
                    alt="Protein Pancake"
                    style="width:260px; height:auto; max-width:260px; display:block; margin:auto; object-fit:contain; border-radius:12px;">
            </div>
        

                <div class="resep-bahan">
                    <h5>🥣 Bahan-bahan:</h5>

                    <ul>
                        <li>1 buah pisang matang (haluskan)</li>
                        <li>2 butir telur</li>
                        <li>30 gr protein powder (vanilla/chocolate)</li>
                        <li>30 ml susu almond (atau susu biasa)</li>
                        <li>1/2 sdt baking powder</li>
                        <li>1/2 sdt ekstrak vanila</li>
                        <li>Sejumput garam</li>
                        <li>Topping: blueberry, stroberi, atau buah sesuai selera</li>
                        <li>Madu atau maple syrup (opsional)</li>
                    </ul>
                </div>

                <div class="resep-langkah">
                    <h5>📝 Langkah-langkah:</h5>

                    <ol>
                        <li>Haluskan pisang matang menggunakan garpu hingga lembut.</li>
                        <li>Dalam mangkuk, kocok telur lalu masukkan pisang yang sudah dihaluskan.</li>
                        <li>Tambahkan protein powder, baking powder, vanila, dan garam. Aduk rata.</li>
                        <li>Tuang susu sedikit demi sedikit sambil diaduk hingga adonan memiliki kekentalan yang pas (tidak terlalu encer).</li>
                        <li>Panaskan teflon anti lengket dengan api kecil.</li>
                        <li>Tuang adonan sesuai ukuran yang diinginkan.</li>
                        <li>Masak hingga muncul gelembung di permukaan, lalu balik pancake.</li>
                        <li>Masak sisi lainnya hingga berwarna kecokelatan.</li>
                        <li>Sajikan hangat dengan topping buah favorit.</li>
                        <li>Tambahkan madu atau maple syrup sesuai selera.</li>
                    </ol>
                </div>
                <hr>
                @include('partials.tombol-beli', [
                    'produk' => 'protein-pancake',
                    'harga'  => 'Rp25.000',
                    'satuan' => '1 Box (4 pcs)'
                ])
            </div>
        </div>
    </div>
</div>