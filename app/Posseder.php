<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posseder extends Model
{
    public $timestamps=false;

    public $fillable=['IDPRIVILEGE','IDUSER'];
}
