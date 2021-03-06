<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnfantIm extends Model
{
    public $timestamps=false;

    public $fillable=['NOMENFIM','PRENOMENFIM','DATENAISSIM','LIEUNAISSIM','TYPEFORMATIONIM',
        'NOMPEREIM','DATEDECESPEREIM','CAUSEDECESPEREIM','NOMMEREIM','ETATMEREIM','DATEDECESMEREIM',
        'CAUSEDECESMEREIM','LIEUDECESPEREIM', 'NOMTUTEURIM','CONTACTTUTEURIM','NBREFREREIM',
        'NBRESOEURIM','TYPEFORMATIONIM','NBRFRERETRAVAILIM','ADRESSEENFIM','GAINFAMILLEIM','LANGUEENFIM','IDUSERVALIDERTRADUCTION'];
}
