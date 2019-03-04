<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectionnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectionnes', function (Blueprint $table) {
            $table->increments('IDSELEC');
            $table->integer('NBRENFANTSELEC')->nullable();
            $table->dateTime('DATEENVOIE')->nullable();
            $table->integer('ETATSELECTION')->nullable();
            $table->integer('IDDEMANDE')->index();
            $table->integer('IDUSER')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selectionnes');
    }
}
