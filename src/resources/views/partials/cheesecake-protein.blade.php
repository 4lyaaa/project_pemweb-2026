<!-- MODAL CHEESECAKE PROTEIN -->
<div class="modal fade"
     id="modalCheesecake"
     tabindex="-1"
     aria-labelledby="modalCheesecakeLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="modalCheesecakeLabel">
                    🍰 Cheesecake Protein
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
                    src="{{ asset('assets/images/cheesecake_protein_1.png') }}"
                    alt="Cheesecake Protein"
                    style="width:260px; height:auto; max-width:260px; display:block; margin:auto; object-fit:contain; border-radius:12px;">
            </div>

                <div class="resep-bahan">
                    <h5>🥣 Bahan-bahan (Lapisan Bawah / Crust)</h5>

                    <ul>
                        <li>100 gr oatmeal (haluskan)</li>
                        <li>2 sdm protein powder vanilla</li>
                        <li>3 sdm minyak kelapa (cair)</li>
                        <li>1 sdm madu</li>
                    </ul>
                </div>

                <div class="resep-bahan">
                    <h5>🥣 Bahan-bahan (Lapisan Atas / Filling)</h5>

                    <ul>
                        <li>200 gr cream cheese (suhu ruang)</li>
                        <li>200 gr Greek yogurt</li>
                        <li>2 scoop protein powder vanilla</li>
                        <li>3 sdm madu atau stevia</li>
                        <li>1 sdt ekstrak vanila</li>
                        <li>2 butir telur</li>
                    </ul>
                </div>

                <div class="resep-langkah">
                    <h5>📝 Langkah-langkah</h5>

                    <ol>
                        <li>Panaskan oven pada suhu 160°C.</li>
                        <li>Campurkan seluruh bahan crust hingga rata, kemudian tekan ke dasar loyang.</li>
                        <li>Panggang crust selama ±10 menit, lalu dinginkan.</li>
                        <li>Kocok cream cheese hingga lembut, kemudian tambahkan Greek yogurt.</li>
                        <li>Masukkan protein powder, madu (atau stevia), dan ekstrak vanila, lalu aduk rata.</li>
                        <li>Tambahkan telur satu per satu sambil diaduk perlahan.</li>
                        <li>Tuang adonan filling ke atas crust dan ratakan permukaannya.</li>
                        <li>Panggang menggunakan metode <em>au bain-marie</em> selama 45–50 menit.</li>
                        <li>Matikan oven, biarkan pintu oven sedikit terbuka selama ±1 jam.</li>
                        <li>Dinginkan di dalam kulkas minimal 4 jam sebelum disajikan.</li>
                    </ol>
                </div>

                <hr>

                @include('partials.tombol-beli', [
                    'produk' => 'cheesecake-protein',
                    'harga'  => 'Rp20.000',
                    'satuan' => '1 Slice'
                ])

            </div>

        </div>
    </div>

</div>