<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function gallergolders(){
        return $this->hasMany('App\GalleryFolder');
    }
}
