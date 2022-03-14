<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddSure extends Model
{

    public function sure(){
        return $this->belongsTo(Sure::class);
     }
    

}
