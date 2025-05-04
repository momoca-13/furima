<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [
            'image' => 'storage/tokei.png',
            'user_id' => 1,
            'condition' => 1,
            'name' => '腕時計',
            'brand' => '',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'price' => 15000,  
        ],
        
        [
            'image' => 'storage/HDD.png',
            'user_id' => 2,
            'condition' => 2, 
            'name' => 'HDD',
            'brand' => '',
            'description' => '高速で信頼性の高いハードディスク',
            'price' => 5000,
        ],
        
        [
            'image' => 'storage/tamanegi.png',
            'user_id' => 3,
            'condition' => 3, 
            'name' => '玉ねぎ３束',
            'brand' => '',
            'description' => '新鮮な玉ねぎ3束のセット',
            'price' => 300,      
        ],
        
        [
            'image' => 'storage/kutu.png',
            'user_id' => 1,
            'condition' => 4, 
            'name' => '革靴',
            'brand' => '',
            'description' => 'クラシックなデザインの革靴',
            'price' => 4000,
        ],
        
        [
            'image' => 'storage/pc.png',
            'user_id' => 2,
            'condition' => 1, 
            'name' => 'ノートPC',
            'brand' => '',
            'description' => '高性能なノートパソコン',
            'price' => 45000,
        ],
        
        [
            'image' => 'storage/maiku.png',
            'user_id' => 3,
            'condition' => 2,
            'name' => 'マイク',
            'brand' => '',
            'description' => '高音質のレコーディング用マイク',
            'price' => 8000,
        ],

        [
            'image' => 'storage/bag.png',
            'user_id' => 1,
            'condition' => 3, 
            'name' => 'ショルダーバック',
            'brand' => '',
            'description' => 'おしゃれなショルダーバッグ',
            'price' => 3500,
        ],

        [
            'image' => 'storage/tanbura.png',
            'user_id' => 2,
            'condition' => 4, 
            'name' => 'タンブラー',
            'brand' => '',
            'description' => '使いやすいタンブラー',
            'price' => 500,
        ],

        [
            'image' => 'storage/coffee.png',
            'user_id' => 3,
            'condition' => 1, 
            'name' => 'コーヒーミル',
            'brand' => '',
            'description' => '手動のコーヒーミル',
            'price' => 4000,
        ],

        [
            'image' => 'storage/makeup.png',
            'user_id' => 1,
            'condition' => 2,
            'name' => 'メイクセット',
            'brand' => '',
            'description' => '便利なメイクアップセット',
            'price' => 2500,
        ],
      ]);
    }
}
