<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
     protected $fillable = [
        'user_id','title', 'description','montant_estime',
    ];
}
