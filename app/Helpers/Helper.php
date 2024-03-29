<?php

namespace App\Helpers;
use App\User;
class Helper {

    public static function creditScore($user_id){
        $score = 0;
        $total = 0;
        $given = 0;
        $user = User::find($user_id);
        foreach($user->toArray() as $key => $value){
            $total+=1;
            if(!is_null($value))
                $given +=1;
        }

        $score = round ($given * 100 / $total);
        return $score;
    }
    public static function getReasons(){
        return array(
            'Working Capitals',
            'LPO',
            'Pay a Supplier',
            'Pay Salary',
            'Expand My Business',
            'Purchase Inventory',
            'Purchase Equipment'
        );
    }
    public static function getDurations(){
        return array(
            '30 days',
            '60 days',
            '90 days',
            '180 days'
        );
    }
}
