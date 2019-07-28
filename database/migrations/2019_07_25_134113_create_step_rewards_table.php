<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStepRewardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('step_rewards', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('steps_id')->index('fk_step_rewards_steps1_idx');
			$table->integer('reward_type_id')->index('fk_step_rewards_reward_types1_idx');
			$table->string('value', 100)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('step_rewards');
	}

}
