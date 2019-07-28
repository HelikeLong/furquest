<?php

use Illuminate\Database\Seeder;

class QuestRoutesStepsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('quest_routes_steps')->delete();
        
        \DB::table('quest_routes_steps')->insert(array (
            array (
                'quest_route_id' => 1,
                'quest_id' => 1,
                'step_origin_id' => 1,
                'step_dest_id' => 2
            ),
            array (
                'quest_route_id' => 1,
                'quest_id' => 1,
                'step_origin_id' => 2,
                'step_dest_id' => 3
            ),
            array (
                'quest_route_id' => 1,
                'quest_id' => 1,
                'step_origin_id' => 3,
                'step_dest_id' => 4
            ),
            array (
                'quest_route_id' => 1,
                'quest_id' => 1,
                'step_origin_id' => 4,
                'step_dest_id' => 5
            ),

            array (
                'quest_route_id' => 2,
                'quest_id' => 1,
                'step_origin_id' => 1,
                'step_dest_id' => 5
            ),
            array (
                'quest_route_id' => 2,
                'quest_id' => 1,
                'step_origin_id' => 5,
                'step_dest_id' => 3
            ),
            array (
                'quest_route_id' => 2,
                'quest_id' => 1,
                'step_origin_id' => 3,
                'step_dest_id' => 4
            ),
            array (
                'quest_route_id' => 2,
                'quest_id' => 1,
                'step_origin_id' => 4,
                'step_dest_id' => 2
            ),

            array (
                'quest_route_id' => 3,
                'quest_id' => 1,
                'step_origin_id' => 4,
                'step_dest_id' => 2
            ),
            array (
                'quest_route_id' => 3,
                'quest_id' => 1,
                'step_origin_id' => 2,
                'step_dest_id' => 1
            ),
            array (
                'quest_route_id' => 3,
                'quest_id' => 1,
                'step_origin_id' => 1,
                'step_dest_id' => 3
            ),
            array (
                'quest_route_id' => 3,
                'quest_id' => 1,
                'step_origin_id' => 3,
                'step_dest_id' => 5
            ),
        ));
        
        
    }
}