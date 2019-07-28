<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tips', function(Blueprint $table)
		{
            $table->foreign('quest_id', 'fk_tips_quest')->references('id')->on('quests')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('step_id', 'fk_tips_steps')->references('id')->on('steps')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tips', function(Blueprint $table)
		{
			$table->dropForeign('fk_tips_steps1');
		});
	}

}
