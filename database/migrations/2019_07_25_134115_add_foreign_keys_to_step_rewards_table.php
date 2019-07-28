<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStepRewardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('step_rewards', function(Blueprint $table)
		{
			$table->foreign('reward_type_id', 'fk_step_rewards_reward_types1')->references('id')->on('reward_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('steps_id', 'fk_step_rewards_steps1')->references('id')->on('steps')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('step_rewards', function(Blueprint $table)
		{
			$table->dropForeign('fk_step_rewards_reward_types1');
			$table->dropForeign('fk_step_rewards_steps1');
		});
	}

}
