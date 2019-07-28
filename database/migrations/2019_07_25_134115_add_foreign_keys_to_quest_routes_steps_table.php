<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToQuestRoutesStepsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('quest_routes_steps', function(Blueprint $table)
		{
            $table->foreign('quest_id', 'fk_quest_routes_steps_quest')->references('id')->on('quests')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('step_origin_id', 'fk_quest_routes_steps_quest_steps1')->references('id')->on('steps')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('step_dest_id', 'fk_quest_routes_steps_quest_steps2')->references('id')->on('steps')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('quest_route_id', 'fk_quest_routes_steps_quest_routes')->references('id')->on('quest_routes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('quest_routes_steps', function(Blueprint $table)
		{
			$table->dropForeign('fk_quest_routes_steps1');
			$table->dropForeign('fk_quest_routes_steps2');
			$table->dropForeign('fk_quest_routes_steps_quest_routes1');
		});
	}

}
