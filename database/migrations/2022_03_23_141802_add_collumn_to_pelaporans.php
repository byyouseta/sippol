<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCollumnToPelaporans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catatan_pelaporans', function (Blueprint $table) {
            $table->string('file', 30)->nullable()->after('catatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catatan_pelaporans', function (Blueprint $table) {
            $table->dropColumn('file');
        });
    }
}
