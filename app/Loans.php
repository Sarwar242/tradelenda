<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    protected $fillable = [
        'email','reason','amount','loan_tenor','interest','status','note','user_id','admin_id',
        'lpofile','public_id_lpo','proformafile','public_id_proforma', 'acknowledgement',
        'acknowledge_active_page',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function admin(){
        return $this->belongsTo(Admin::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class, 'loan_id');
    }

}
