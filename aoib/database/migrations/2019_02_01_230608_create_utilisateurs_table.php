<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('IDUSER');
            $table->string('NOMUSER')->nullable();
            $table->string('PRENOMUSER')->nullable();
            $table->string('CONTACTUSER')->nullable();
            $table->string('LOGIN')->nullable();
            $table->string('PASSWORD')->nullable();
            $table->string('TYPEUSER')->nullable();
            $table->dateTime('HEURECONNEXION')->nullable();
            $table->dateTime('HEUREDECONNEXION')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
