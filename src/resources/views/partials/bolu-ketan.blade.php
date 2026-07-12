<!-- MODAL BOLU KETAN HITAM -->
<div class="modal fade"
     id="modalBoluKetan"
     tabindex="-1"
     aria-labelledby="modalBoluKetanLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="modalBoluKetanLabel">
                    🍰 Bolu Ketan Hitam
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
                    src="{{ asset('assets/images/bolu-ketan.png') }}"
                    alt="Bolu Ketan Hitam"
                    style="width:260px; height:auto; max-width:260px; display:block; margin:auto; object-fit:contain; border-radius:12px;">
            </div>
    

                <div class="resep-bahan">
                    <h5>🥣 Bahan-bahan:</h5>

                    <ul>
                        <li>4 butir telur</li>
                        <li>150 gram gula pasir</li>
                        <li>1 sdt SP (atau TBM/Ovalet)</li>
                        <li>1/4 sdt vanili bubuk</li>
                        <li>130 gram tepung ketan hitam</li>
                        <li>2 sdm tepung terigu (opsional, untuk tekstur lebih padat)</li>
                        <li>1 sdt baking powder</li>
                        <li>1/4 sdt garam</li>
                        <li>100 ml minyak sayur (atau margarin yang dilelehkan)</li>
                        <li>65 ml santan instan</li>
                    </ul>
                </div>

                <div class="resep-langkah">
                    <h5>📝 Langkah-langkah:</h5>

                    <ol>
                        <li><strong>Persiapan:</strong> Siapkan loyang berdiameter 20 cm, olesi dengan margarin lalu taburi sedikit tepung agar tidak lengket. Panaskan kukusan terlebih dahulu.</li>

                        <li><strong>Mixer Adonan:</strong> Campurkan telur, gula pasir, SP, dan vanili bubuk. Kocok menggunakan mixer kecepatan tinggi hingga adonan mengembang, berwarna putih pucat, dan kental berjejak (sekitar 7–10 menit).</li>

                        <li><strong>Masukkan Bahan Kering:</strong> Turunkan kecepatan mixer ke tingkat paling rendah, lalu masukkan tepung ketan hitam, baking powder, dan garam yang sudah diayak. Aduk hingga tercampur rata.</li>

                        <li><strong>Masukkan Bahan Cair:</strong> Tuangkan santan dan minyak sayur secara bergantian ke dalam adonan. Aduk balik menggunakan spatula hingga rata dan tidak ada endapan minyak di dasar adonan.</li>

                        <li><strong>Kukus:</strong> Tuang adonan ke dalam loyang, hentakkan beberapa kali untuk mengeluarkan gelembung udara. Kukus selama ±30 menit dengan api sedang.</li>

                        <li><strong>Tes Kematangan & Sajikan:</strong> Tusuk bolu menggunakan lidi. Jika tidak ada adonan yang menempel, berarti bolu telah matang. Angkat, dinginkan, lalu potong sesuai selera dan sajikan.</li>
                    </ol>
                </div>
                <hr>
                @include('partials.tombol-beli', [
                    'produk' => 'bolu-ketan',
                    'harga'  => 'Rp25.000',
                    'satuan' => '1 Box (±500 gram)'
                ])
            </div>
        </div>
    </div>
</div>