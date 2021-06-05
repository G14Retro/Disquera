<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistas', function (Blueprint $table) {
            $table->id();
            $table->string('noDocumento',20)->unique();
            $table->string('tipoDocumento',20);
            $table->string('nombreArtista',50);
            $table->string('apellidoArtista',50)->nullable();
            $table->string('nombreArtistico',50);
            $table->date('feNacimAtista');
            $table->string('emailArtista',50)->unique();
            $table->foreignId('idDisqueraFK')->nullable()->references('id')->on('disqueras');
            $table->string('estadoArtista',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artistas');
    }
}
