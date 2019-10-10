<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStepsChangeQrcodeToResolution extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('steps', function (Blueprint $table) {
            $table->addColumn('integer', 'resolution_type')->after('qrcode');
            $table->renameColumn('qrcode', 'resolution');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('steps', function (Blueprint $table) {
            $table->renameColumn('resolution', 'qrcode');
            $table->removeColumn('resolution_type');
        });
    }
}
