<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Product_categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'product_id' => '1',
                'category_id' => '1' '5',
            ],
            [
                'product_id' => '2',
                'category_id' => '2',
            ],
            [
                'product_id' => '3',
                'category_id' => '10',
            ],
            [
                'product_id' => '4',
                'category_id' => '1' '5',
            ],
            [
                'product_id' => '5',
                'category_id' => '2',
            ],
            [
                'product_id' => '6',
                'category_id' => '2',
            ],
            [
                'product_id' => '7',
                'category_id' => '1' '4',
            ],
            [
                'product_id' => '8',
                'category_id' => '4' '5' '10',
            ],
            [
                'product_id' => '9',
                'category_id' => '2' '10',
            ],
            [
                'product_id' => '10',
                'category_id' => '4' '6',
            ],
        ]);
    }
}
