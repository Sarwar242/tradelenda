<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'cpid','amount','fee','status','ip','channel','method',
        'reference', 'initiator', 'reason', 'description',
        'x_collect_signature', 'charged_at',
        'user_id','integrate_id', 'loan_id', 'admin_id',
    ];
    protected $casts = [
        'charged_at' => 'datetime',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
    public function loan(){
        return $this->belongsTo(Loans::class);
    }
    public function integrate(){
        return $this->belongsTo(Integrate::class);
    }
}
