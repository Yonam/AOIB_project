<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autorisation extends Model
{
    public $timestamps=false;

    public $fillable=['IDACTION','IDPRIVILEGE'];
}