<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrate extends Model
{
    protected $fillable = [
        'email','ba_auth','currency','country','customer_code',
        'payment_method','account_name','bank_name','signature',
        'is_reusable', 'is_active','is_connected','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function integrations(){
        return $this->hasMany(Integrate::class)->where('payment_method','collect');
    }
}
