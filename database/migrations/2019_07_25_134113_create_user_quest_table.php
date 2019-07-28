<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserQuestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_quest', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->index('fk_user_quest_users1_idx');
			$table->integer('quest_route_id')->index('fk_user_quest_quest_routes1_idx');
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
		Schema::drop('user_quest');
	}

}
