<?php

use Illuminate\Database\Seeder;

class StepRewardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('step_rewards')->delete();
        
        \DB::table('step_rewards')->insert(array (
            0 => 
            array (
                'steps_id' => 1,
                'reward_type_id' => 1,
                'value' => NULL
            ),
            1 => 
            array (
                'steps_id' => 1,
                'reward_type_id' => 2,
                'value' => 'aksjdhaksjdakjsdhkajd'
            ),
            2 => 
            array (
                'steps_id' => 2,
                'reward_type_id' => 1,
                'value' => NULL
            ),
            3 => 
            array (
                'steps_id' => 2,
                'reward_type_id' => 2,
                'value' => 'pogijdfjnskiu'
            ),
            4 => 
            array (
                'steps_id' => 3,
                'reward_type_id' => 1,
                'value' => NULL
            ),
            5 => 
            array (
                'steps_id' => 4,
                'reward_type_id' => 1,
                'value' => NULL
            ),
            6 => 
            array (
                'steps_id' => 4,
                'reward_type_id' => 2,
                'value' => 'dhsfdsf'
            ),
            7 => 
            array (
                'steps_id' => 5,
                'reward_type_id' => 2,
                'value' => 'oihngdfdf'
            ),
        ));
        
        
    }
}