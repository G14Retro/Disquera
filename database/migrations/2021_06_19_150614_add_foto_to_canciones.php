<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFotoToCanciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('canciones', function (Blueprint $table) {
            $table->string('foto',100)->after('nombreCancion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('canciones', function (Blueprint $table) {
            $table->dropColumn('foto');
        });
    }
}
