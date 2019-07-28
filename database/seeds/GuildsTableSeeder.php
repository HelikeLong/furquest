<?php

use Illuminate\Database\Seeder;

class GuildsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('guilds')->insert([
            [
                'name' => 'Yellow'
            ]
        ]);

        \Illuminate\Support\Facades\DB::table('guild_user')->insert([
            [
                'guild_id' => 1,
                'user_id' => 2
            ],
            [
                'guild_id' => 1,
                'user_id' => 3
            ],
            [
                'guild_id' => 1,
                'user_id' => 4
            ]
        ]);

        \Illuminate\Support\Facades\DB::table('logs_guild_user')->insert([
            [
                'guild_id' => 1,
                'user_id' => 2
            ],
            [
                'guild_id' => 1,
                'user_id' => 3
            ],
            [
                'guild_id' => 1,
                'user_id' => 4
            ]
        ]);
    }
}
