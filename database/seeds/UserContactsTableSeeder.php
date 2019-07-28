<?php

use Illuminate\Database\Seeder;

class UserContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('user_contacts')->delete();
        
        \DB::table('user_contacts')->insert(array (
            array (
                'user_id' => 2,
                'contacts_types_id' => 1,
                'value' => '(11) 11111-1111',
            ),
            array (
                'user_id' => 2,
                'contacts_types_id' => 2,
                'value' => 'default',
            ),
            array (
                'user_id' => 2,
                'contacts_types_id' => 3,
                'value' => 'default',
            ),
            array (
                'user_id' => 2,
                'contacts_types_id' => 4,
                'value' => 'default',
            ),
            array (
                'user_id' => 2,
                'contacts_types_id' => 5,
                'value' => 'default',
            ),
            array (
                'user_id' => 2,
                'contacts_types_id' => 6,
                'value' => 'default',
            ),
            array (
                'user_id' => 2,
                'contacts_types_id' => 7,
                'value' => 'default.com.br',
            ),

            array (
                'user_id' => 3,
                'contacts_types_id' => 1,
                'value' => '(11) 11111-1111',
            ),
            array (
                'user_id' => 3,
                'contacts_types_id' => 2,
                'value' => 'default',
            ),
            array (
                'user_id' => 3,
                'contacts_types_id' => 3,
                'value' => 'default',
            ),
            array (
                'user_id' => 3,
                'contacts_types_id' => 5,
                'value' => 'default',
            ),
            array (
                'user_id' => 3,
                'contacts_types_id' => 6,
                'value' => 'default',
            ),

            array (
                'user_id' => 4,
                'contacts_types_id' => 2,
                'value' => 'default',
            ),
            array (
                'user_id' => 4,
                'contacts_types_id' => 3,
                'value' => 'default',
            ),
        ));
    }
}