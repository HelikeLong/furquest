<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStepsRewardsChangeStepsIdToStepId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('step_rewards', function (Blueprint $table) {
            $table->renameColumn('steps_id', 'step_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('step_rewards', function (Blueprint $table) {
            $table->renameColumn('step_id', 'steps_id');
        });
    }
}
