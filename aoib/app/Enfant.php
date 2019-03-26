<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    public $timestamps=false;

    public $fillable=['NOMENF','MATRICULE','PRENOMENF','SEXE','DATENAISS','NATIONALITE','LIEUNAISS','TYPEFORMATION','ETATENF','STATUEENF','PHOTOPASS',
        'NOMPERE','DATEDECESPERE','CAUSEDECESPERE','LIEUDECESPERE','NOMMERE','ETATMERE','DATEDECESMERE','CAUSEDECESMERE','LIEUDECESMERE',
        'NOMTUTEUR','CONTACTTUTEUR','NBREFRERE','NBRESOEUR','TYPEFORMATION','IDUSERSCAN','IDUSERVALIDER','ACTENAISS',
        'ACTEDECESPERE','NBRFRERETRAVAIL','ADRESSEENF','GAINFAMILLE','LANGUEENF'];


    public function scopeEnregistrementPartiel($query){
        return $query->whereStatueenf(0)->orderBy('NOMENF');
    }

    public function scopeEnregistrer($query){
        return $query->whereStatueenf('1')->orderBy('NOMENF');
    }

    public function scopeSelectionnee($query){
        return $query->whereStatueenf('2')->orderBy('NOMENF');
    }

    public function scopeParainee($query){
        return $query->whereStatueenf('3')->orderBy('NOMENF');
    }



}
