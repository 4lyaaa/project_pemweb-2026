<!-- MODAL SUGAR FREE PUDDING -->
<div class="modal fade" id="modalPudding" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">🍮 Sugar Free Pudding</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <img src="{{ asset('assets/images/pudding_vanilla.png') }}" class="modal-resep-img">
            
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
                  <li>Campurkan susu, tepung maizena, stevia, garam di dalam panci.</li>
                  <li>Aduk rata hingga tidak ada gumpalan.</li>
                  <li>Masak dengan api sedang sambil terus diaduk hingga mengental.</li>
                  <li>Setelah mengental, tambahkan ekstrak vanila, aduk sebentar.</li>
                  <li>Matikan api, tuang adonan ke dalam cetakan atau mangkuk kecil.</li>
                  <li>Dinginkan pada suhu ruang, lalu masukkan kulkas minimal 2 jam.</li>
                  <li>Sajikan dingin dengan topping buah segar.</li>
               </ol>
            </div>
            
            <div class="resep-tersimpan" id="simpanPuddingMsg">
               ✅ Resep Sugar Free Pudding telah disimpan!
            </div>
         </div>
         <div class="modal-footer">
            <button class="btn-simpan-resep" onclick="simpanResep('Sugar Free Pudding')">📖 Simpan Resep</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
         </div>
      </div>
   </div>
</div>