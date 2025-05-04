<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'test1',
                'email' => 'test1@gmail.com',
                'password' => bcrypt('coachtech1'),
            ],
            [
                'name' => 'test2',
                'email' => 'test2@gmail.com',
                'password' => bcrypt('coachtech2'),
            ],
            [
                'name' => 'test3',
                'email' => 'test3@gmail.com',
                'password' => bcrypt('coachtech3'),
            ],

            ]);
    }
}
