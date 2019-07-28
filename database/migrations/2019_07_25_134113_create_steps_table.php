<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStepsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('steps', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('quest_id')->index('fk_steps_quests1_idx');
			$table->string('name', 45);
			$table->text('qrcode', 65535);
			$table->text('content', 65535)->nullable();
			$table->string('lat', 45);
			$table->string('long', 45);
			$table->integer('status')->default(1);
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
		Schema::drop('steps');
	}

}
