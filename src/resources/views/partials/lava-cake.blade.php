<!-- MODAL CHOCOLATE LAVA CAKE -->
<div class="modal fade"
     id="modalLavaCake"
     tabindex="-1"
     aria-labelledby="modalLavaCakeLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="modalLavaCakeLabel">
                    🍫 Chocolate Lava Cake
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
                    src="{{ asset('assets/images/lava_cake_1.png') }}"
                    alt="Chocolate Lava Cake"
                    style="width:260px; height:auto; max-width:260px; display:block; margin:auto; object-fit:contain; border-radius:12px;">
            </div>

                <div class="resep-bahan">
                    <h5>🥣 Bahan-bahan:</h5>

                    <ul>
                        <li>100 gr dark chocolate (coklat batang)</li>
                        <li>100 gr mentega tawar</li>
                        <li>2 butir telur</li>
                        <li>2 butir kuning telur</li>
                        <li>80 gr gula halus</li>
                        <li>40 gr tepung protein sedang</li>
                        <li>1 sdt vanilla extract</li>
                        <li>Sejumput garam</li>
                    </ul>
                </div>

                <div class="resep-langkah">
                    <h5>📝 Langkah-langkah:</h5>

                    <ol>
                        <li>Panaskan oven hingga suhu 200°C. Olesi cetakan dengan mentega lalu taburi sedikit tepung.</li>
                        <li>Lelehkan dark chocolate dan mentega menggunakan metode <em>double boiler</em>.</li>
                        <li>Kocok telur, kuning telur, dan gula halus hingga mengembang dan berwarna pucat.</li>
                        <li>Masukkan cokelat leleh ke dalam adonan telur lalu aduk hingga tercampur rata.</li>
                        <li>Ayak tepung protein sedang dan garam, kemudian masukkan ke dalam adonan sambil diaduk perlahan.</li>
                        <li>Tuang adonan ke dalam cetakan hingga sekitar 3/4 bagian.</li>
                        <li>Panggang selama 8–10 menit hingga bagian luar matang tetapi bagian tengah masih lumer.</li>
                        <li>Keluarkan dari oven, balik cetakan, lalu sajikan selagi hangat.</li>
                    </ol>
                </div>

                <hr>

                @include('partials.tombol-beli', [
                    'produk' => 'lava-cake',
                    'harga'  => 'Rp20.000',
                    'satuan' => '1 pcs'
                ])

            </div>

        </div>
    </div>

</div>