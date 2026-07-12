<!-- MODAL DUBAI CHEWY COOKIE -->
<div class="modal fade"
     id="modalDubaiCookie"
     tabindex="-1"
     aria-labelledby="modalDubaiCookieLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="modalDubaiCookieLabel">
                    🍪 Dubai Chewy Cookie
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
                    src="{{ asset('assets/images/dubai-chewy.png') }}"
                    alt="dubai-chewy-cookie"
                    style="width:260px; height:auto; max-width:260px; display:block; margin:auto; object-fit:contain; border-radius:12px;">
            </div>

                <div class="resep-bahan">
                    <h5>🥣 Bahan Isian Pistachio & Kataifi:</h5>

                    <ul>
                        <li>90 gr kataifi (atau filo pastry yang disuwir halus)</li>
                        <li>140 gr selai pistachio (pistachio spread)</li>
                        <li>35 gr unsalted butter</li>
                        <li>1 sdm tahini (opsional)</li>
                        <li>Sedikit garam</li>
                    </ul>
                </div>

                <div class="resep-bahan">
                    <h5>🍫 Bahan Kulit Marshmallow:</h5>
                    <ul>
                        <li>200 gr marshmallow putih</li>
                        <li>40 gr unsalted butter</li>
                        <li>35 gr cokelat bubuk premium</li>
                        <li>30 gr susu bubuk (opsional)</li>
                        <li>Sedikit minyak goreng untuk olesan tangan</li>
                        <li>Cokelat bubuk tambahan untuk taburan</li>
                    </ul>
                </div>

                <div class="resep-langkah">
                    <h5>📝 Langkah-langkah:</h5>
                    <ol>
                        <li><strong>Membuat Isian Pistachio:</strong> Panaskan butter di atas teflon, lalu sangrai kataifi dengan api kecil hingga berwarna kuning keemasan dan renyah.</li>
                        <li>Campurkan selai pistachio, tahini, dan sedikit garam ke dalam kataifi yang sudah matang. Aduk hingga rata.</li>
                        <li>Ambil sekitar 1 sendok teh adonan, bentuk bulat (±35 gram), lalu simpan di freezer hingga mengeras.</li>
                        <li><strong>Membuat Kulit Marshmallow:</strong> Lelehkan butter bersama marshmallow menggunakan api kecil.</li>
                        <li>Setelah marshmallow sekitar 80% meleleh, matikan api lalu masukkan cokelat bubuk dan susu bubuk yang telah diayak. Aduk hingga tercampur rata.</li>
                        <li>Diamkan adonan sekitar 10 menit hingga hangat. Olesi tangan dengan sedikit minyak agar adonan tidak lengket.</li>
                        <li><strong>Penyelesaian:</strong> Ambil sekitar 20 gram adonan marshmallow, pipihkan seperti kulit mochi.</li>
                        <li>Letakkan isian pistachio di tengah, lalu bungkus hingga rapat dan bulatkan.</li>
                        <li>Baluri seluruh permukaan dengan cokelat bubuk agar lebih cantik dan tidak lengket.</li>
                        <li>Simpan di dalam kulkas selama 30–60 menit sebelum disajikan agar teksturnya semakin nikmat.</li>

                    </ol>
                </div>

                <hr>

                <!-- HARGA + TOMBOL BELI -->
                <div class="text-center">
                    <h4 style="color:#ff5c8d;font-weight:bold;">
                        Rp30.000
                    </h4>
                    <small>1 Box (4 pcs)</small>
                    <br><br>
                    @include('partials.tombol-beli',[
                        'produk'=>'dubai-chewy-cookie',
                        'harga'=>'Rp25.000',
                        'satuan'=>'1 Box (4 pcs)'
                    ])
                </div>

            </div>
        </div>
    </div>
</div>