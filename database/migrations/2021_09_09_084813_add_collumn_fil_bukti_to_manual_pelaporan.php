<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCollumnFilBuktiToManualPelaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('manual_pelaporans', function (Blueprint $table) {
            //
            $table->string('file_bukti', 50)->after('file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manual_pelaporans', function (Blueprint $table) {
            //
            $table->dropColumn('file_bukti');
        });
    }
}
