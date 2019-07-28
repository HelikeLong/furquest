<?php

use Illuminate\Database\Seeder;

class QuestRoutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('quest_routes')->delete();
        
        \DB::table('quest_routes')->insert(array (
            array (
                'quest_id' => 1,
            ),
            array (
                'quest_id' => 1,
            ),
            array (
                'quest_id' => 1,
            ),
        ));
        
        
    }
}