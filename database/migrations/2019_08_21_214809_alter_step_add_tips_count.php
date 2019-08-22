<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStepAddTipsCount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('steps', function(Blueprint $table) {
            $table->integer('tips_count')->after('long')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('steps', function(Blueprint $table) {
            $table->dropColumn('tips_count');
        });
    }
}
