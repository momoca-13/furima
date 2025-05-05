<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        DB::table('profiles')->insert([

        [
            'user_id' => 1,
            'postcode' => 1111111,
            'address' => '東京都',
            'building' => 'コーチテックビル',
            'image' => 'images1',
        ],
        [
            'user_id' => 2,
            'postcode' => 2222222,
            'address' => '東京都',
            'building' => 'コーチテックビル２',
            'image' => 'images2',
        ],
        [
            'user_id' => 3,
            'postcode' => 3333333,
            'address' => '京都',
            'building' => 'コーチテックビル３',
            'images' => 'images3',
        ],
        ]);
    }
}
