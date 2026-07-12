<!-- MODAL SUGAR FREE PUDDING -->
<div class="modal fade"
     id="modalPudding"
     tabindex="-1"
     aria-labelledby="modalPuddingLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="modalPuddingLabel">
                    🍮 Sugar Free Pudding
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
                    src="{{ asset('assets/images/pudding_vanilla.png') }}"
                    alt="Sugar Free Pudding"
                    style="width:260px; height:auto; max-width:260px; display:block; margin:auto; object-fit:contain; border-radius:12px;">
            </div>
                

                <div class="resep-bahan">
                    <h5>🥣 Bahan-bahan:</h5>

                    <ul>
                        <li>500 ml susu almond (atau susu rendah lemak)</li>
                        <li>3 sdm tepung maizena</li>
                        <li>2 sdm stevia atau pemanis alami</li>
                        <li>1 sdt ekstrak vanila</li>
                        <li>Sejumput garam</li>
                        <li>Buah segar untuk topping (stroberi, blueberry)</li>
                    </ul>
                </div>

                <div class="resep-langkah">
                    <h5>📝 Langkah-langkah:</h5>

                    <ol>
                        <li>Campurkan susu, tepung maizena, stevia, dan garam ke dalam panci.</li>
                        <li>Aduk hingga semua bahan tercampur rata tanpa gumpalan.</li>
                        <li>Masak dengan api sedang sambil terus diaduk hingga mengental.</li>
                        <li>Tambahkan ekstrak vanila lalu aduk kembali.</li>
                        <li>Matikan api dan tuang adonan ke dalam cetakan atau mangkuk kecil.</li>
                        <li>Dinginkan pada suhu ruang, kemudian simpan di dalam kulkas minimal 2 jam.</li>
                        <li>Sajikan dingin dengan topping buah segar.</li>
                    </ol>
                </div>

                <hr>

                @include('partials.tombol-beli', [
                    'produk' => 'pudding',
                    'harga'  => 'Rp25.000',
                    'satuan' => '1 Cup'
                ])

            </div>

        </div>
    </div>
</div>