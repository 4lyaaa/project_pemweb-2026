<!-- MODAL CHOCOLATE LAVA CAKE -->
<div class="modal fade" id="modalLavaCake" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">🍫 Chocolate Lava Cake</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <img src="{{ asset('assets/images/lava_cake_1.png') }}" class="modal-resep-img">
            
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
                  <li>Panaskan oven suhu 200°C. Olesi cetakan dengan mentega dan taburi tepung.</li>
                  <li>Lelehkan dark chocolate dan mentega dengan metode stim (double boiler).</li>
                  <li>Kocok telur, kuning telur, dan gula halus hingga mengembang dan pucat.</li>
                  <li>Masukkan cokelat leleh ke dalam adonan telur, aduk rata.</li>
                  <li>Ayak tepung protein sedang dan garam, lalu masukkan ke adonan. Aduk perlahan.</li>
                  <li>Tuang adonan ke cetakan hingga 3/4 penuh.</li>
                  <li>Panggang selama 8-10 menit (bagian luar matang, dalam masih cair).</li>
                  <li>Keluarkan dari oven, balik cetakan, sajikan hangat.</li>
               </ol>
            </div>
            
            <div class="resep-tersimpan" id="simpanLavaMsg">
               ✅ Resep Chocolate Lava Cake telah disimpan!
            </div>
         </div>
         <div class="modal-footer">
            <button class="btn-simpan-resep" onclick="simpanResep('Chocolate Lava Cake')">📖 Simpan Resep</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
         </div>
      </div>
   </div>
</div>