<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_contacts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->index('fk_users_contacts_users2_idx');
			$table->integer('contacts_types_id')->index('fk_users_contacts_contacts_types1_idx');
			$table->string('value');
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
		Schema::drop('users_contacts');
	}

}
