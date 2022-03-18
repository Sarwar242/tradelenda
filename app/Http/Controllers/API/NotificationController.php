<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class NotificationController extends Controller
{
    public function index(Request $request){

        $user = auth('api')->user();
        if(is_null($user)){
            return response()->json([
                'success'=>false,
                'message'=>'No user found in database, invalid user id!'
               ], 404);
        }
    info(json_encode( auth('api')->user()->notifications, true));
        $response = [
            'success' => true,
            'verified' => $user->email_verified_at? true:false,
            'notifications' => $user->notifications,
        ];
        return response($response, 200);
    }

    public function readall(Request $request){
       $user = auth('api')->user();
       $user->unreadNotifications()->update(['read_at' => now()]);
       $response = [
        'success' => true,
        'verified' => $user->email_verified_at? true:false,
        'notifications' => $user->notifications,
        'message' => "Notifications have been Read",
        ];
        return response($response, 200);
    }
    public function readOne(Request $request){
        $user = auth('api')->user();
        $noti = DB::table('notifications')->find($request->id);
        if($noti && is_null($noti->read_at)){
            DB::table('notifications')
            ->where('id','=', $request->id)
            ->update(['read_at' => now()]);
        }

        $response = [
            'success' => true,
            'verified' => $user->email_verified_at? true:false,
            'notifications' => $user->notifications,
            'message' => "Notification has been Read",
            ];
            return response($response, 200);
        }

    public function delete(Request $request){
       $note = DB::table('notifications')->delete($request->id);
       $user = auth('api')->user();
       $response = [
        'success' => true,
        'verified' => $user->email_verified_at? true:false,
        'notifications' => $user->notifications,
        'message' => "Notification Deleted",
        ];
        return response($response, 200);
    }
}
