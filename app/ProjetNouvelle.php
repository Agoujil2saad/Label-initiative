<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class ProjetNouvelle extends Model
{
    protected $fillable=['projet_id','title','description','photo'];

    public function projet(){
   return $this->belongsTo('App\Projet');
    }

    public function delete(){
	
	$file = public_path('/images/photo_nouvelles/').$this->attributes['photo'];


    if($file && $this->attributes['photo']!="default_photo.png"){

        if(File::isFile($file)){
            \File::delete($file);
        }
    }
    parent::delete();
}

}
