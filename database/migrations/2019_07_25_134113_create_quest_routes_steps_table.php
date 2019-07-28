<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestRoutesStepsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quest_routes_steps', function(Blueprint $table)
		{
			$table->integer('id', true);
            $table->integer('quest_route_id')->index('fk_quest_routes_steps_quest_routes1_idx');
			$table->integer('quest_id')->index('fk_quest_routes_steps_quest_idx');
			$table->integer('step_origin_id')->index('fk_quest_routes_steps_quest_steps_idx');
			$table->integer('step_dest_id')->index('fk_quest_routes_steps_quest_steps2_idx');
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
		Schema::drop('quest_routes_steps');
	}

}
