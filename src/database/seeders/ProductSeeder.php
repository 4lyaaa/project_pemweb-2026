<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([

            [
                'nama' => 'Cookies Bomb',
                'slug' => 'cookies-bomb',
                'deskripsi' => 'Cookies lembut dengan isian cokelat lumer.',
                'rasa' => 'manis',
                'harga' => 20000,
                'gambar' => 'cookies-bomb-1.png',
                'stok' => 100,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Cheesecake Protein',
                'slug' => 'cheesecake-protein',
                'deskripsi' => 'Cheesecake tinggi protein dan rendah gula.',
                'rasa' => 'manis, asin',
                'harga' => 20000,
                'gambar' => 'cheesecake_protein_1.png',
                'stok' => 100,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Protein Pancake',
                'slug' => 'protein-pancake',
                'deskripsi' => 'Pancake sehat dengan protein tinggi.',
                'rasa' => 'manis',
                'harga' => 25000,
                'gambar' => 'protein_pancake_1.png',
                'stok' => 100,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Lava Cake',
                'slug' => 'lava-cake',
                'deskripsi' => 'Chocolate lava cake dengan cokelat lumer.',
                'rasa' => 'manis',
                'harga' => 20000,
                'gambar' => 'lava_cake_1.png',
                'stok' => 100,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Mochi Matcha',
                'slug' => 'mochi-matcha',
                'deskripsi' => 'Mochi lembut dengan rasa matcha premium.',
                'rasa' => 'manis',
                'harga' => 15000,
                'gambar' => 'mochi.png',
                'stok' => 100,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Pudding',
                'slug' => 'pudding',
                'deskripsi' => 'Pudding vanilla lembut dan creamy.',
                'rasa' => 'manis',
                'harga' => 25000,
                'gambar' => 'pudding_vanilla.png',
                'stok' => 100,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Yogurt Bowl',
                'slug' => 'yogurt-bowl',
                'deskripsi' => 'Yogurt segar dengan topping buah.',
                'rasa' => 'asam',
                'harga' => 30000,
                'gambar' => 'yogurt_bowl_1.png',
                'stok' => 100,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Dubai Chewy Cookie',
                'slug' => 'dubai-chewy-cookie',
                'deskripsi' => 'Chewy cookie premium khas Dubai.',
                'rasa' => 'manis, gurih',
                'harga' => 25000,
                'gambar' => 'dubai-chewy.png',
                'stok' => 100,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Bolu Ketan Hitam',
                'slug' => 'bolu-ketan',
                'deskripsi' => 'Bolu ketan hitam yang lembut dan manis.',
                'rasa' => 'manis, gurih',
                'harga' => 25000,
                'gambar' => 'bolu-ketan.png',
                'stok' => 100,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}