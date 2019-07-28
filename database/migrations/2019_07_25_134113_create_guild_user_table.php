<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuildUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guild_user', function(Blueprint $table)
		{
			$table->integer('guild_id')->index('fk_users_has_guilds_guilds1_idx');
			$table->integer('user_id')->index('fk_users_has_guilds_users_idx');
			$table->primary(['guild_id','user_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guild_user');
	}

}
