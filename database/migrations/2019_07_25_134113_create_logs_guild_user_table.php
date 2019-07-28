<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogsGuildUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logs_guild_user', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('guild_id')->index('fk_guilds_has_users_guilds1_idx');
			$table->integer('user_id')->index('fk_guilds_has_users_users1_idx');
			$table->dateTime('created_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('logs_guild_user');
	}

}
