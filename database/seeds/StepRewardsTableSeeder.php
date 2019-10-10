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
            array (
                'step_id' => 1,
                'reward_type_id' => 2,
                'value' => 'data:image/png;base64,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'
            ),
            array (
                'step_id' => 2,
                'reward_type_id' => 2,
                'value' => 'pogijdfjnskiu'
            ),
            array (
                'step_id' => 4,
                'reward_type_id' => 2,
                'value' => 'dhsfdsf'
            ),
            array (
                'step_id' => 5,
                'reward_type_id' => 2,
                'value' => 'oihngdfdf'
            ),
        ));
    }
}
