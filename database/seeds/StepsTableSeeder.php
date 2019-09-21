<?php

use Illuminate\Database\Seeder;

class StepsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('steps')->delete();
        
        \DB::table('steps')->insert(array (
            0 => 
            array (
                'id' => 1,
                'quest_id' => 1,
                'name' => 'Step 1',
                'resolution' => 'aaa###bbb###ccc###ddd',
                'resolution_count' => 4,
                'content' => NULL,
                'lat' => '1.3243',
                'long' => '54.3452',
                'tips_count' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'quest_id' => 1,
                'name' => 'Step 2',
                'resolution' => 'aaa',
                'resolution_count' => 1,
                'content' => NULL,
                'lat' => '1.3243',
                'long' => '54.3452',
                'tips_count' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'quest_id' => 1,
                'name' => 'Step 3',
                'resolution' => 'i8435rge',
                'resolution_count' => 0,
                'content' => NULL,
                'lat' => '1.3243',
                'long' => '54.3452',
                'tips_count' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'quest_id' => 1,
                'name' => 'Step 4',
                'resolution' => '09845nfg',
                'resolution_count' => 0,
                'content' => NULL,
                'lat' => '1.3243',
                'long' => '54.3452',
                'tips_count' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'quest_id' => 1,
                'name' => 'Step 5',
                'resolution' => 'mnzxcclkr',
                'resolution_count' => 0,
                'content' => NULL,
                'lat' => '1.3243',
                'long' => '54.3452',
                'tips_count' => 4,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'quest_id' => 1,
                'name' => 'Step 5',
                'resolution' => 'mnzxcclkr',
                'resolution_count' => 0,
                'content' => NULL,
                'lat' => '1.3243',
                'long' => '54.3452',
                'tips_count' => 4,
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
