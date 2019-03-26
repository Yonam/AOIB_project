<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfantImsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfant_ims', function (Blueprint $table) {
            /*  DONNEES ENFANT */
            $table->string('NOMENFIM')->nullable();
            $table->string('PRENOMENFIM')->nullable();
            $table->string('SEXEIM')->nullable();
            $table->date('DATENAISSIM')->nullable();
            $table->string('NATIONALITEIM')->nullable();
            $table->string('LIEUNAISSIM')->nullable();
            $table->string('TYPEFORMATIONIM')->nullable();


            /*  DONNEES PERE */
            $table->string('NOMPEREIM')->nullable();
            $table->date('DATEDECESPEREIM')->nullable();
            $table->string('CAUSEDECESPEREIM')->nullable();
            $table->string('LIEUDECESPEREIM')->nullable();

            /*  DONNEES MERE */
            $table->string('NOMMEREIM')->nullable();
            $table->string('ETATMEREIM')->nullable();
            $table->date('DATEDECESMEREIM')->nullable();
            $table->string('CAUSEDECESMEREIM')->nullable();
            $table->string('LIEUDECESMEREIM')->nullable();

            /*  DONNEES TUTEUR */
            $table->string('NOMTUTEURIM')->nullable();
            $table->integer('CONTACTTUTEURIM')->nullable();

            /*  DONNEES DES FRERES ET SOEURS */
            $table->tinyInteger('NBREFREREIM')->nullable();
            $table->tinyInteger('NBRESOEURIM')->nullable();
            $table->integer('NBRFRERETRAVAILIM')->nullable();
            $table->string('ADRESSEENFIM')->nullable();
            $table->string('GAINFAMILLEIM')->nullable();
            $table->string('LANGUEENFIM')->nullable();

            /*  UTILISATEUR  */
            $table->integer('IDUSERVALIDERTRADUCTION')->nullable();

            $table->timestamps();
            $table->integer('IDENFANT')->index()->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enfant_ims');
    }
}
