<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User Data
        $this->call(ContactsTypesTableSeeder::class);
        $this->call(UserTypesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserContactsTableSeeder::class);
        $this->call(GuildsTableSeeder::class);

        // Quests
        $this->call(RewardTypesTableSeeder::class);
        $this->call(QuestsTableSeeder::class);
        $this->call(StepsTableSeeder::class);
        $this->call(StepRewardsTableSeeder::class);
        $this->call(TipsTableSeeder::class);
        $this->call(QuestRoutesTableSeeder::class);
        $this->call(QuestRoutesStepsTableSeeder::class);
    }
}
