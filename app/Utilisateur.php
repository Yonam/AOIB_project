<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    public $timestamps=false;

    public $fillable=['NOMUSER','PRENOMUSER','CONTACTUSER','LOGIN','PASSWORD','TYPEUSER', 'HEURECONNEXION','HEUREDECONNEXION'];
}
