<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserQuestStepTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_quest_step', function(Blueprint $table)
		{
			$table->foreign('step_id', 'fk_user_quest_step_steps1')->references('id')->on('steps')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_quest_id', 'fk_user_quest_step_user_quest1')->references('id')->on('user_quest')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_quest_step', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_quest_step_steps1');
			$table->dropForeign('fk_user_quest_step_user_quest1');
		});
	}

}
