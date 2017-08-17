<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Partenaire extends Model
{
     protected $fillable = [
        'name', 'logo'
    ];

public function delete(){
	
	$file = public_path('/images/partners/').$this->attributes['logo'];


    if($file && $this->attributes['logo']!="default_partner.png"){

        if(File::isFile($file)){
            \File::delete($file);
        }
    }
    parent::delete();
}


}
