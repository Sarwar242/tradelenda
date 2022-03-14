<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name', 'short_name'
    ];

   public function states()
   {
       return $this->hasMany(State::class);
   }
}
