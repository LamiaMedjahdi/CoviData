<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function idee ()
    {
        return $this->belongsTo('App\Idee');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
