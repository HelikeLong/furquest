<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserQuestStepTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_quest_step', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_quest_id')->index('fk_user_quest_step_user_quest_idx');
			$table->integer('step_id')->index('fk_user_quest_step_steps_idx');
			$table->integer('status')->default(0);
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
		Schema::drop('user_quest_step');
	}

}
