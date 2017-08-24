<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
	use CanBeLiked, CanBeFavorited;
	
     protected $fillable = [
        'user_id','title', 'description','montant_estime','categorie'
    ];
}
