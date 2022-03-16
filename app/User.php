<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\PasswordResetNotification;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements MustVerifyEmail , JWTSubject
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'email', 'phone_no', 'user_image', 'public_id', 'password',
        'title', 'first_name', 'last_name', 'position', 'share', 'otp',
        'dob', 'gender', 'bvn', 'id_type', 'id_num', 'director', 'secretary',
        'address', 'country_id', 'state_id', 'city_id', 'residential_status', 'marital_status',
        'wdymtta', 'dependents', 'edu_level', 'business_type', 'business_name',
        'registered', 'rc_num', 'establishment_date', 'business_address', 'b_country_id',
        'b_state_id', 'b_city_id', 'b_wdymtta', 'seal', 'public_seal', 'owned_or_rented', 'outlets',
        'total_employees', 'sales_method', 'industry', 'monthly_sales', 'monthly_expenses',
        'business_duration', 'tin', 'b_id_type', 'b_id_num', 'cac7',
        'cac2', 'cac_certificate', 'customer_id', 'bank_name', 'bank_account_name', 'bank_account_number',
        'has_online_banking', 'last_loan_period', 'loan_amount', 'bank_statement',
        'public_id_bank', 'public_id_cac7', 'public_id_cac2', 'public_id_cac_certificate', 'device_id','google_id',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'otp',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function loans()
    {
        return $this->hasMany(Loans::class);
    }
    public function sures()
    {
        return $this->hasMany(Sure::class);
    }


    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function b_country()
    {
        return $this->belongsTo(Country::class, 'b_country_id');
    }
    public function b_state()
    {
        return $this->belongsTo(State::class, 'b_state_id');
    }
    public function b_city()
    {
        return $this->belongsTo(City::class, 'b_city_id');
    }


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordResetNotification($token));
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
