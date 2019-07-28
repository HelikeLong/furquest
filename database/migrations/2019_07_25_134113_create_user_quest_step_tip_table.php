<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserQuestStepTipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_quest_step_tip', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_quest_step_id')->index('fk_user_quest_step_tip_user_quest_step1_idx');
			$table->integer('user_quest_id')->index('fk_user_quest_step_tip_user_quest1_idx');
			$table->integer('tip_id')->index('fk_user_quest_step_tip_tips1_idx');
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
		Schema::drop('user_quest_step_tip');
	}

}
