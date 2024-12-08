<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'name' => "Petit Pain",
                'description' => "Petit Pain",
                'type' => "Viennoiserie",
                'price' => 2,
                'inventory' => $faker->numberBetween($min = 1, $max = 100),
                'image' => "https://assets.afcdn.com/recipe/20181107/83668_w1024h1024c1cx2880cy1920cxt0cyt0cxb5760cyb3840.jpg"
            ]);
        }
    }
}
