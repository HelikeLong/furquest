<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserQuestStepTipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_quest_step_tip', function(Blueprint $table)
		{
			$table->foreign('tip_id', 'fk_user_quest_step_tip_tips1')->references('id')->on('tips')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_quest_id', 'fk_user_quest_step_tip_user_quest1')->references('id')->on('user_quest')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_quest_step_id', 'fk_user_quest_step_tip_user_quest_step1')->references('id')->on('user_quest_step')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_quest_step_tip', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_quest_step_tip_tips1');
			$table->dropForeign('fk_user_quest_step_tip_user_quest1');
			$table->dropForeign('fk_user_quest_step_tip_user_quest_step1');
		});
	}

}
