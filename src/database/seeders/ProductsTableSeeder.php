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
        $param = [
            'image' => 'storage/tokei.png',
            'category_id' => '',
            'user_id' => '',
            'condition' => '良好',
            'name' => '腕時計',
            'maker' => '',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'price' => '15000'    
        ];
        DB::table('products')->insert($param);
        $param = [
            'image' => 'storage/HDD.png',
            'category_id' => ''
            'user_id' => '',
            'condition' => '目立った傷や汚れなし', 
            'name' => 'HDD',
            'maker' => '',
            'description' => '高速で信頼性の高いハードディスク',
            'price' => '5000' 
        ];
        DB::table('products')->insert($param);
        $param = [
            'image' => 'storage/tamanegi.png',
            'category_id' => '',
            'user_id' => '',
            'condition' => 'やや傷や汚れあり', 
            'name' => '玉ねぎ３束',
            'maker' => '',
            'description' => '新鮮な玉ねぎ3束のセット',
            'price' => '300'       
        ];
        DB::table('products')->insert($param);
        $param = [
            'image' => 'storage/kutu.png',
            'category_id' => '',
            'user_id' => '',
            'condition' => '状態が悪い', 
            'name' => '革靴',
            'maker' => '',
            'description' => 'クラシックなデザインの革靴',
            'price' => '4000'
        ];
        DB::table('products')->insert($param);
        $param = [
            'image' => 'storage/pc.png',
            'category_id' => '',
            'user_id' => '',
            'condition' => '良好', 
            'name' => 'ノートPC',
            'maker' => '',
            'description' => '高性能なノートパソコン',
            'price' => '45000'
        ];
        DB::table('products')->insert($param);
        $param = [
            'image' => 'storage/maiku.png',
            'category_id' => '',
            'user_id' => '',
            'condition' => '目立った傷や汚れなし',
            'name' => 'マイク',
            'maker' => '',
            'description' => '高音質のレコーディング用マイク',
            'price' => '8000'
        ];
        DB::table('products')->insert($param);
        $param = [
            'image' => 'storage/bag.png',
            'category_id' => '',
            'user_id' => '',
            'condition' => 'やや傷や汚れあり', 
            'name' => 'ショルダーバック',
            'maker' => '',
            'description' => 'おしゃれなショルダーバッグ',
            'price' => '3500'
        ];
        DB::table('products')->insert($param);
        $param = [
            'image' => 'storage/tanbura.png',
            'category_id' => '',
            'user_id' => '',
            'condition' => '状態が悪い', 
            'name' => 'タンブラー',
            'maker' => '',
            'description' => '使いやすいタンブラー',
            'price' => '500'
        ];
        DB::table('products')->insert($param);
        $param = [
            'image' => 'storage/coffee.png',
            'category_id' => '',
            'user_id' => '',
            'condition' => '良好', 
            'name' => 'コーヒーミル',
            'maker' => '',
            'description' => '手動のコーヒーミル',
            'price' => '4000'
        ];
        DB::table('products')->insert($param);
        $param = [
            'image' => 'storage/makeup.png',
            'category_id' => '',
            'user_id' => '',
            'condition' => '目立った傷や汚れなし',
            'name' => 'メイクセット',
            'maker' => '',
            'description' => '便利なメイクアップセット',
            'price' => '2500'
        ];
        DB::table('products')->insert($param);
    }
}
