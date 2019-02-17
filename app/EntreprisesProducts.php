<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntreprisesProducts extends Model
{


    public function entreprise()
    {
        return $this->belongsTo(Entreprises::class);
    }
}
