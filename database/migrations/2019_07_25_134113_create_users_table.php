<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('social_name', 250)->nullable();
			$table->string('name', 250);
			$table->string('species', 150)->nullable();
			$table->string('photo', 200)->nullable();
			$table->text('bio', 65535)->nullable();
			$table->string('phone', 15)->nullable();
			$table->integer('phone_show')->nullable();
			$table->string('document', 15)->nullable();
			$table->string('document_type', 20)->nullable();
			$table->string('email', 200)->unique('email_UNIQUE');
			$table->string('password');
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
		Schema::drop('users');
	}

}
