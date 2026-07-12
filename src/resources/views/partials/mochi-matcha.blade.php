<!-- MODAL MOCHI MATCHA -->
<div class="modal fade"
     id="modalMochiMatcha"
     tabindex="-1"
     aria-labelledby="modalMochiMatchaLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-scrollable">

        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title" id="modalMochiMatchaLabel">
                    🍡 Mochi Matcha
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
                    src="{{ asset('assets/images/mochi.png') }}"
                    alt="Mochi Matcha"
                    style="width:260px; height:auto; max-width:260px; display:block; margin:auto; object-fit:contain; border-radius:12px;">
            </div>
                

                <div class="resep-bahan">
                    <h5>🥣 Bahan-bahan:</h5>

                    <ul>
                        <li>150 gr tepung ketan</li>
                        <li>40 gr gula pasir</li>
                        <li>220 ml susu cair</li>
                        <li>20 gr mentega cair</li>
                        <li>1 sdt bubuk matcha premium</li>
                        <li>Tepung maizena sangrai secukupnya</li>
                    </ul>
                </div>

                <div class="resep-bahan">
                    <h5>🍡 Isian Matcha:</h5>

                    <ul>
                        <li>150 ml whipping cream</li>
                        <li>1 sdm bubuk matcha</li>
                        <li>2 sdm gula halus</li>
                        <li>50 gr white chocolate leleh</li>
                    </ul>
                </div>

                <div class="resep-langkah">
                    <h5>📝 Langkah-langkah:</h5>
                    <ol>
                        <li>Campurkan tepung ketan, gula, susu cair, mentega cair, dan bubuk matcha hingga rata.</li>
                        <li>Aduk sampai tidak ada adonan yang bergerindil.</li>
                        <li>Kukus adonan selama ±25 menit hingga matang.</li>
                        <li>Setelah matang, aduk kembali hingga adonan menjadi kalis dan elastis.</li>
                        <li>Diamkan hingga adonan dingin.</li>
                        <li>Kocok whipping cream bersama gula halus dan bubuk matcha hingga mengembang.</li>
                        <li>Tambahkan white chocolate yang sudah dilelehkan, lalu aduk rata.</li>
                        <li>Ambil sedikit adonan mochi, pipihkan.</li>
                        <li>Masukkan isian krim matcha ke tengah, lalu tutup dan bulatkan.</li>
                        <li>Simpan di dalam kulkas sekitar 30 menit sebelum disajikan.</li>
                    </ol>
                </div>
                <hr>
                @include('partials.tombol-beli', [
                    'produk' => 'mochi-matcha',
                    'harga'  => 'Rp15.000',
                    'satuan' => '1 Box (6 pcs)'
                ])
            </div>
        </div>
    </div>
</div>