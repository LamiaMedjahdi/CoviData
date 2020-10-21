<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{
    protected $table = 'signals';
    protected $fillable = [
        'contenu', 'localisation', 'image','date', 'cat_id', 'wilaya_id', 'cit_id'
    ];
}
