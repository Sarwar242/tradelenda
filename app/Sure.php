<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sure extends Model
{

    public function loans()
    {
        return $this->belongsTo(Loans::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
