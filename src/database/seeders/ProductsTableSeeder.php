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
            'name' => '腕時計',
            'price' => '15000',
            'image' => 'storage/tokei.png',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'condition' => '良好',     
        ],
        [
            'name' => 'HDD',
            'price' => '5000',
            'image' => 'storage/HDD.png',
            'description' => '高速で信頼性の高いハードディスク',
            'condition' => '目立った傷や汚れなし', 
        ],
        [
            'name' => '玉ねぎ３束',
            'price' => '300',
            'image' => 'storage/tamanegi.png',
            'description' => '新鮮な玉ねぎ3束のセット',
            'condition' => 'やや傷や汚れあり', 
        ],
        [
            'name' => '革靴',
            'price' => '4000',
            'image' => 'storage/kutu.png',
            'description' => 'クラシックなデザインの革靴',
            'condition' => '状態が悪い', 
        ],
        [
            'name' => 'ノートPC',
            'price' => '45000',
            'image' => 'storage/pc.png',
            'description' => '高性能なノートパソコン',
            'condition' => '良好', 
        ],
        [
            'name' => 'マイク',
            'price' => '8000',
            'image' => 'storage/maiku.png',
            'description' => '高音質のレコーディング用マイク',
            'condition' => '目立った傷や汚れなし', 
        ],
        [
            'name' => 'ショルダーバック',
            'price' => '3500',
            'image' => 'storage/bag.png',
            'description' => 'おしゃれなショルダーバッグ',
            'condition' => 'やや傷や汚れあり', 
        ],
        [
            'name' => 'タンブラー',
            'price' => '500',
            'image' => 'storage/tanbura.png',
            'description' => '使いやすいタンブラー',
            'condition' => '状態が悪い', 
        ],
        [
            'name' => 'コーヒーミル',
            'price' => '4000',
            'image' => 'storage/coffee.png',
            'description' => '手動のコーヒーミル',
            'condition' => '良好', 
        ],
        [
            'name' => 'メイクセット',
            'price' => '2500',
            'image' => 'storage/makeup.png',
            'description' => '便利なメイクアップセット',
            'condition' => '目立った傷や汚れなし', 
        ],
     ]);
    }
}
