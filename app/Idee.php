<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idee extends Model
{
    protected $table='idees';
    protected $fillable = [
        'titre' , 'contenu','image','cat_id','cit_id'
    ];
}
