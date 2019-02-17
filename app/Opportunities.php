<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunities extends Model
{

    protected $table = 'opportunities';
    public $timestamps = true;
    protected $fillable = array('titre', 'type', 'description', 'pays', 'quantity', 'price', 'userType','user_id');

    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}