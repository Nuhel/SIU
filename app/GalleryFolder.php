<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryFolder extends Model
{
    public function gallery(){
        return $this->belongsTo('App\Gallery');
    }
}
