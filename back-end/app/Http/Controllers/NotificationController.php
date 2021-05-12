<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    //
    public function getAll()
    {
        # code...
        return Auth::user()->notifications;
    }
    public function getUnread()
    {
        # code...
        // foreach (Auth::user()->unreadNotifications as $notification) {
        //     echo $notification;
        // }
        return response()->json(Auth::user()->unreadNotifications);
    }
    public function readNotif()
    {
        # code...
        // foreach (Auth::user()->unreadNotifications as $notification) {
        //     echo $notification;
        // }
        $notifs = Auth::user()->unreadNotifications;

        $notifications = $notifs->filter(function ($notif)  {
            return $notif->type != 'App\\Notifications\\newMessageNotification' || $notif->type != 'App\\Notifications\\newTransactionNotification';
        });
        $notifications->markAsRead();
        return response()->json(Auth::user()->unreadNotifications);
    }
    public function readMessageNotif(Request $request)
    {
        $notifs = Auth::user()->unreadNotifications;
        $notifications = $notifs->filter(function ($notif) use($request)  {
            return ($notif->type == 'App\\Notifications\\newMessageNotification' || $notif->type == 'App\\Notifications\\newTransactionNotification') && ($notif->data['sender'] == $request->email);
        });
        $notifications->markAsRead();
        foreach($notifications as $notif){
            $notif->delete();
        }
        return response()->json(Auth::user()->unreadNotifications);
    }
    public function clearNotif()
    {
        # code...
       $data = Auth::user()->notifications;

       foreach($data as $notif){
            $notif->delete();
       }
    }
}
