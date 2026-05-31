<!-- MODAL PROTEIN PANCAKE -->
<div class="modal fade" id="modalProteinPancake" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">🥞 Protein Pancake</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <img src="{{ asset('assets/images/protein_pancake_1.png') }}" class="modal-resep-img">
            
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
                  <li>Masak hingga muncul gelembung di permukaan, lalu balik.</li>
                  <li>Masak sisi lainnya hingga kecokelatan.</li>
                  <li>Sajikan hangat dengan topping blueberry, pisang, atau buah favorit Anda.</li>
                  <li>Tambahkan madu atau maple syrup jika suka manis.</li>
               </ol>
            </div>
            
            <div class="resep-tersimpan" id="simpanProteinMsg">
               ✅ Resep Protein Pancake telah disimpan!
            </div>
         </div>
         <div class="modal-footer">
            <button class="btn-simpan-resep" onclick="simpanResep('Protein Pancake')">📖 Simpan Resep</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
         </div>
      </div>
   </div>
</div>