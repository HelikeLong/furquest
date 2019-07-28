<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserQuestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_quest', function(Blueprint $table)
		{
			$table->foreign('quest_route_id', 'fk_user_quest_quest_routes1')->references('id')->on('quest_routes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_user_quest_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_quest', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_quest_quest_routes1');
			$table->dropForeign('fk_user_quest_users1');
		});
	}

}
