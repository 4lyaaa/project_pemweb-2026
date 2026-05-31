<!-- MODAL FRUIT YOGURT BOWL -->
<div class="modal fade" id="modalYogurtBowl" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">🥣 Fruit Yogurt Bowl</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <img src="{{ asset('assets/images/yogurt_bowl_1.png') }}" class="modal-resep-img" style="width: 200px; display: block; margin: 0 auto;">
            <div class="resep-bahan">
               <h5>🥣 Bahan-bahan:</h5>
               <ul>
                  <li>150-200 ml yogurt plain greek</li>
                  <li>1/2 cup stroberi / secukupnya, potong-potong</li>
                  <li>1 buah pisang / secukupnya, iris tipis</li>
                  <li>1/2 cup blueberry / secukupnya</li>
                  <li>bisa menggunakan aneka buah seger yang anda inginkan, seperti strawberi, kiwi, atau mango. Potong-potong sesuai selera.</li>
                  <li>1/2 sdm granola</li>
                  <li>1 sdm madu (opsional)</li>
                  <li>1 sdm chia seeds (opsional)</li>
                  <li>Daun mint untuk hiasan</li>
               </ul>
            </div>
            
            <div class="resep-langkah">
               <h5>📝 Langkah-langkah:</h5>
               <ol>
                  <li>Siapkan mangkuk saji.</li>
                  <li>Masukkan yogurt plain greek ke dalam mangkuk.</li>
                  <li>Potong-potong buah-buahan sesuai selera.</li>
                  <li>Susun potongan buah yang sudah dipotong di atas yogurt.</li>
                  <li>Taburkan granola di atas buah-buahan.</li>
                  <li>Tambahkan madu dan chia seeds jika suka.</li>
                  <li>Hias dengan daun mint.</li>
                  <li>Sajikan segera selagi segar.</li>
               </ol>
            </div>
            
            <div class="resep-tersimpan" id="simpanYogurtMsg">
               ✅ Resep Fruit Yogurt Bowl telah disimpan!
            </div>
         </div>
         <div class="modal-footer">
            <button class="btn-simpan-resep" onclick="simpanResep('Fruit Yogurt Bowl')">📖 Simpan Resep</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
         </div>
      </div>
   </div>
</div>