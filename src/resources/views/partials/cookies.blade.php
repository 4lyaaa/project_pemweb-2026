<!-- MODAL COOKIES BOMB -->
<div class="modal fade"
     id="modalCookiesBomb"
     tabindex="-1"
     aria-labelledby="modalCookiesBombLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="modalCookiesBombLabel">
                    🍪 Cookies Bomb
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
                    src="{{ asset('assets/images/cookies-bomb-1.png') }}"
                    alt="Cookies Bomb"
                    style="width:260px; height:auto; max-width:260px; display:block; margin:auto; object-fit:contain; border-radius:12px;">
            </div>

                <div class="resep-bahan">
                    <h5>🥣 Bahan-bahan:</h5>

                    <ul>
                        <li>105 gr Butter</li>
                        <li>70 gr Brown sugar</li>
                        <li>70 gr gula pasir (kastor sugar kalau bisa)</li>
                        <li>1/2 sdt vanilla extract</li>
                        <li>2 cubit garam</li>
                        <li>1 butir telur</li>
                        <li>1/2 sdt baking soda</li>
                        <li>210 gr tepung serba guna</li>
                    </ul>
                </div>

                <div class="resep-bahan">
                    <h5>🍫 Chocolate Filling:</h5>

                    <ul>
                        <li>125 gr dark chocolate</li>
                        <li>125 gr whipping cream</li>
                        <li>15 gr minyak sayur</li>
                        <li>Flaky sea salt untuk topping</li>
                    </ul>
                </div>

                <div class="resep-langkah">
                    <h5>📝 Langkah-langkah:</h5>

                    <ol>
                        <li><strong>Membuat Adonan Cookies:</strong> Lelehkan mentega hingga mencair, tunggu hingga benar-benar dingin.</li>
                        <li>Masukkan garam, vanila, brown sugar, dan castor sugar ke dalam mentega cair. Aduk rata, tambahkan telur.</li>
                        <li>Masukkan tepung dan baking soda. Aduk menggunakan spatula hingga tercampur rata.</li>
                        <li>Timbang adonan 75 gram kemudian simpan di kulkas selama 20–30 menit.</li>
                        <li><strong>Membuat Isian Cokelat:</strong> Panaskan dark chocolate dan whipping cream menggunakan metode <em>double boiler</em>.</li>
                        <li>Setelah meleleh, tambahkan minyak sayur agar teksturnya tetap lembut.</li>
                        <li><strong>Pembentukan:</strong> Bentuk adonan seperti mangkuk, isi dengan cokelat kemudian tutup rapat.</li>
                        <li>Panggang pada suhu 190°C selama 10 menit.</li>
                        <li>Sajikan hangat dengan taburan flaky sea salt.</li>
                    </ol>
                </div>

                <hr>

                @include('partials.tombol-beli', [
                    'produk' => 'cookies-bomb',
                    'harga'  => 'Rp20.000',
                    'satuan' => '1 pcs'
                ])

            </div>

        </div>
    </div>

</div>