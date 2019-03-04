<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfants', function (Blueprint $table) {

            /*  DONNEES ENFANT */
            $table->increments('IDENFANT')->unique();
            $table->integer('MATRICULE')->unique();
            $table->string('NOMENF')->nullable();
            $table->string('PRENOMENF')->nullable();
            $table->string('PHOTOPASS')->nullable();
            $table->dateTime('DATENAISS')->nullable();
            $table->string('LIEUNAISS')->nullable();
            $table->string('TYPEFORMATION')->nullable();
            $table->integer('ETATENF')->nullable();
            $table->integer('STATUEENF')->nullable();
            $table->string('ACTENAISS')->nullable();


            /*  DONNEES PERE */
            $table->string('NOMPERE')->nullable();
            $table->dateTime('DATEDECESPERE')->nullable();
            $table->string('CAUSEDECESPERE')->nullable();
            $table->string('LIEUDECESPERE')->nullable();
            $table->string('ACTEDECESPERE')->nullable();

            /*  DONNEES MERE */
            $table->string('NOMMERE')->nullable();
            $table->string('ETATMERE')->nullable();
            $table->dateTime('DATEDECESMERE')->nullable();
            $table->string('CAUSEDECESMERE')->nullable();
            $table->string('LIEUDECESMERE')->nullable();

            /*  DONNEES TUTEUR */
            $table->string('NOMTUTEUR')->nullable();
            $table->integer('CONTACTTUTEUR')->nullable();

            /*  DONNEES DES FRERES ET SOEURS */
            $table->tinyInteger('NBREFRERE')->nullable();
            $table->tinyInteger('NBRESOEUR')->nullable();
            $table->integer('NBRFRERETRAVAIL')->nullable();
            $table->string('ADRESSEENF')->nullable();
            $table->string('GAINFAMILLE')->nullable();
            $table->string('LANGUEENF')->nullable();

            /*  UTILISATEUR AYANT ENREGISTRER L'ENFANT */
            $table->integer('IDUSERSCAN')->nullable();
            $table->integer('IDUSERVALIDER')->nullable();

            $table->timestamps()->nullable();
        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enfants');
    }
}
