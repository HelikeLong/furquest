<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('user_types')->insert([
            [
                'type' => 'Admin'
            ],
            [
                'type' => 'Default'
            ],
            [
                'type' => 'Adventurer'
            ],
            [
                'type' => 'Super Adventurer'
            ],
        ]);
    }
}
