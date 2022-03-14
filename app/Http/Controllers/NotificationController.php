<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class NotificationController extends Controller
{
    public function indexnotify(){

         return view('pages.notification');
     }

     public function readall(){
        $user = auth()->user();
        $user->unreadNotifications()->update(['read_at' => now()]);
        return back();
     }

     public function delete($id){
        $note = DB::table('notifications')->delete($id);
        return back();
     }





     /** **************************************************************************
      *************************** Admin Notifications *****************************
      **************************************************************************** */

     public function notificationsAdmin(){
        // $notifications = auth()->guard('admin')->user()->notifications->where('data.status','pending');
        // dd($notifications);
         return view('admin.notification.index');
     }

     public function readallAdmin(){
        $user = auth()->guard('admin')->user();
        $user->unreadNotifications()->update(['read_at' => now()]);
        return back();
     }

     public function deleteAdmin($id){
        $note = DB::table('notifications')->delete($id);
        return back();
     }
}
