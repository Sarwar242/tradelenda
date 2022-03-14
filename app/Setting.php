<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'name', 'slug', 'value', 'data', 'admin_id'
    ];


    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
