<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprises extends Model
{

    public function products()
    {
        return $this->hasMany(EntreprisesProducts::class);
    }
}
