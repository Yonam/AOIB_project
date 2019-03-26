<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    public $timestamps=false;

    public $fillable=['IDPART','NBRENFANT','DATEDEMANTE','DATECLOTURE','ETATDEMANDE'];
}
