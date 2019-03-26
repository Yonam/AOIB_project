<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    public $timestamps=false;

    public $fillable=['NOMPART','PAYSPARTENAIRE','CONTACTPART','TYPEPART'];
}