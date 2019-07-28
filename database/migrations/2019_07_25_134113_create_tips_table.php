<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tips', function(Blueprint $table)
		{
			$table->integer('id', true);
            $table->integer('quest_id')->index('fk_tips_quests_idx');
			$table->integer('step_id')->index('fk_tips_steps_idx');
			$table->text('content');
			$table->integer('map')->default(0);
			$table->integer('delay');
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
		Schema::drop('tips');
	}

}
