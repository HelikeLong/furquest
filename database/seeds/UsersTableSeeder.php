<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                'user_type_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('102030'),
            ],
            [
                'user_type_id' => 2,
                'name' => 'Default',
                'email' => 'default@furquest.com',
                'password' => bcrypt('102030'),
            ],
            [
                'user_type_id' => 3,
                'name' => 'Adventurer',
                'email' => 'adventurer@furquest.com',
                'password' => bcrypt('102030'),
            ],
            [
                'user_type_id' => 4,
                'name' => 'Super Adventurer',
                'email' => 'super@furquest.com',
                'password' => bcrypt('102030'),
            ]
        ]);
    }
}
