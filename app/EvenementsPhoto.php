<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvenementsPhoto extends Model
{
      protected $fillable = ['evenement_id', 'filename'];
 
    public function evenement()
    {
        return $this->belongsTo('App\Evenement');
    }


}
