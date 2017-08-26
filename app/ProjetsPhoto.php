<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjetsPhoto extends Model
{	
	protected $fillable = ['projet_id', 'filename'];
    public function projet()
    {

        return $this->belongsTo('App\Projet');
    }
}
