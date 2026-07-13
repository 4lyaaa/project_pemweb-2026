<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        Recipe::truncate();

        $recipes = [

            [
                'nama' => 'Lava Cake',
                'rasa' => 'Manis',
                'harga' => 25000,
                'foto' => 'assets/images/lava_cake_1.png',
                'deskripsi' => 'Chocolate lava cake dengan tekstur lembut dan lumer.',
                'bahan' => 'Tepung, Telur, Dark Chocolate, Mentega, Gula',
                'langkah' => 'Campur bahan, panggang 12 menit, sajikan hangat.',
            ],

            [
                'nama' => 'Protein Pancake',
                'rasa' => 'Manis',
                'harga' => 30000,
                'foto' => 'assets/images/protein_pancake_1.png',
                'deskripsi' => 'Pancake tinggi protein cocok untuk sarapan.',
                'bahan' => 'Oatmeal, Whey Protein, Telur, Susu',
                'langkah' => 'Campur semua bahan lalu masak di pan.',
            ],

            [
                'nama' => 'Cheesecake Protein',
                'rasa' => 'Creamy',
                'harga' => 35000,
                'foto' => 'assets/images/cheesecake_protein_1.png',
                'deskripsi' => 'Cheesecake tinggi protein dengan rasa creamy.',
                'bahan' => 'Cream Cheese, Yogurt, Protein Powder',
                'langkah' => 'Campur lalu panggang hingga matang.',
            ],

            [
                'nama' => 'Cookies Bomb',
                'rasa' => 'Manis',
                'harga' => 22000,
                'foto' => 'assets/images/cookies-bomb-1.png',
                'deskripsi' => 'Cookies isi coklat lumer.',
                'bahan' => 'Tepung, Butter, Chocolate',
                'langkah' => 'Bentuk adonan lalu panggang.',
            ],

            [
                'nama' => 'Yogurt Bowl',
                'rasa' => 'Segar',
                'harga' => 20000,
                'foto' => 'assets/images/yogurt_bowl_1.png',
                'deskripsi' => 'Yogurt segar dengan buah-buahan.',
                'bahan' => 'Yogurt, Strawberry, Blueberry, Granola',
                'langkah' => 'Susun semua bahan dalam mangkuk.',
            ],

            [
                'nama' => 'Pudding Vanilla',
                'rasa' => 'Creamy',
                'harga' => 18000,
                'foto' => 'assets/images/pudding_vanilla.png',
                'deskripsi' => 'Pudding vanilla lembut.',
                'bahan' => 'Susu, Agar, Vanilla',
                'langkah' => 'Masak semua bahan lalu dinginkan.',
            ],

            [
                'nama' => 'Mochi Matcha',
                'rasa' => 'Manis',
                'harga' => 28000,
                'foto' => 'assets/images/mochi.png',
                'deskripsi' => 'Mochi isi krim matcha.',
                'bahan' => 'Tepung Ketan, Matcha, Krim',
                'langkah' => 'Kukus adonan lalu isi krim.',
            ],

            [
                'nama' => 'Dubai Chewy',
                'rasa' => 'Manis',
                'harga' => 38000,
                'foto' => 'assets/images/dubai-chewy.png',
                'deskripsi' => 'Dessert chewy viral ala Dubai.',
                'bahan' => 'Coklat, Pistachio, Knafeh',
                'langkah' => 'Campur bahan lalu dinginkan.',
            ],

        ];

        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}