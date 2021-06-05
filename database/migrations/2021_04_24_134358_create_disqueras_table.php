<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisquerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disqueras', function (Blueprint $table) {
            $table->id();
            $table->string('nit_disquera',20)->unique();
            $table->string('nombreDisquera',100);
            $table->string('telefonoDisquera',15);
            $table->string('direccionDisquera',100);
            $table->string('estadoDisquera',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disqueras');
    }
}
