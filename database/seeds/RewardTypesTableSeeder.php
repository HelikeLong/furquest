<?php

use Illuminate\Database\Seeder;

class RewardTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reward_types')->delete();
        
        \DB::table('reward_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'step',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'glyph',
            ),
        ));
        
        
    }
}