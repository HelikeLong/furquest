<?php

use Illuminate\Database\Seeder;

class ContactsTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts_types')->delete();
        
        \DB::table('contacts_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'phone',
                'icon' => 'mdi-phone',
                'mask' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'telegram',
                'icon' => 'mdi-telegram',
                'mask' => 'https://t.me/#VALUE#',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'furaffinity',
                'icon' => 'mdi-paw',
                'mask' => 'https://www.furaffinity.net/user/#VALUE#',
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'facebook',
                'icon' => 'mdi-facebook-box',
                'mask' => 'https://fb.me/#VALUE#',
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 'twitter',
                'icon' => 'mdi-twitter',
                'mask' => 'https://twitter.com/#VALUE#',
            ),
            5 => 
            array (
                'id' => 6,
                'type' => 'deviantart',
                'icon' => 'mdi-deviantart',
                'mask' => 'https://#VALUE#.deviantart.com',
            ),
            6 => 
            array (
                'id' => 7,
                'type' => 'other',
                'icon' => 'mdi-earth',
                'mask' => NULL,
            ),
        ));
        
        
    }
}