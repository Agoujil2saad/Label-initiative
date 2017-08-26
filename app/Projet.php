<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;
use Overtrue\LaravelFollow\Traits\CanBeLiked;

class Projet extends Model
{
	use CanBeLiked, CanBeFavorited;
	
     protected $fillable = [
        'user_id','title', 'description','montant_estime','categorie'
    ];

        public function photos() 
   {
      return $this->hasMany('App\ProjetsPhoto');
   }

   public function owner()
   {
   	return $this->hasOne('App\User','id','user_id');
   }
}
