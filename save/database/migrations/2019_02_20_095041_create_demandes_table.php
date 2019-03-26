<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('IDDEMANDE');
            $table->integer('NBRENFANT')->nullable();
            $table->dateTime('DATEDEMANTE')->nullable();
            $table->dateTime('DATECLOTURE')->nullable();
            $table->integer('ETATDEMANDE')->nullable();
            $table->integer('IDPART')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}
