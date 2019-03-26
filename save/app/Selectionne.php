<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selectionne extends Model
{
    public $timestamps=false;

    public $fillable=['NBRENFANTSELEC','DATEENVOIE','ETATSELECTION','IDDEMANDE','IDUSER'];
}
