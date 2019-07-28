<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStepsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('steps', function(Blueprint $table)
		{
			$table->foreign('quest_id', 'fk_steps_quests1')->references('id')->on('quests')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('steps', function(Blueprint $table)
		{
			$table->dropForeign('fk_steps_quests1');
		});
	}

}
