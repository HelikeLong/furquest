<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLogsGuildUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('logs_guild_user', function(Blueprint $table)
		{
			$table->foreign('guild_id', 'fk_guilds_has_users_guilds1')->references('id')->on('guilds')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_guilds_has_users_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('logs_guild_user', function(Blueprint $table)
		{
			$table->dropForeign('fk_guilds_has_users_guilds1');
			$table->dropForeign('fk_guilds_has_users_users1');
		});
	}

}
