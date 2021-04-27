<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\User;
use App\Models\userInformation;
use App\Notifications\followNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class followController extends Controller
{
    //
    public function followStatus(Request $request)
    {
        # code..
        $followData = Follow::where(function ($query) {
            $query->where("email1", Auth::user()->email)
                ->orWhere("email2", Auth::user()->email);
        })->where("email1", $request->email)
            ->orWhere("email2", $request->email)->first();

        if (empty($followData)) {
            $followData = new Follow;
            $email2Index = userInformation::where("email", $request->email)->first();
            $email1Index = userInformation::where("email", Auth::user()->email)->first();
            $followData->followNumber = '070-' . str_pad($email1Index->indexUserInformation, 4, '0', STR_PAD_LEFT) . str_pad($email2Index->indexUserInformation, 4, '0', STR_PAD_LEFT);
            $followData->email1 = Auth::user()->email;
            $followData->email2 = $request->email;
            $followData->email1FollowEmail2 = 1;
            $followData->email1FollowEmail2_date = Carbon::now("Asia/Manila");
            $followData->save();

            $userToNotif = User::where('email', $request->email)->get();
            $userToNotif = User::find($userToNotif[0]->indexUserAuthentication);
            $userToNotif->notify(new followNotification());
            return 201;
        }
        if ($request->status === "Follow") {

            if ($followData->email1 === Auth::user()->email) {
                $followData->email1FollowEmail2 = 1;
                $followData->email1FollowEmail2_date = Carbon::now("Asia/Manila");
                $followData->save();
                $userToNotif = User::where('email',$followData->email2)->get();
                $userToNotif = User::find($userToNotif[0]->indexUserAuthentication);
                $userToNotif->notify(new followNotification());
            } else {
                $followData->email2FollowEmail1 = 1;
                $followData->email2FollowEmail1_date = Carbon::now("Asia/Manila");
                $followData->save();
                $userToNotif = User::where('email',$followData->email1)->get();
                $userToNotif = User::find($userToNotif[0]->indexUserAuthentication);
                $userToNotif->notify(new followNotification());
            }
        } else {
            if ($followData->email1 === Auth::user()->email) {
                $followData->email1FollowEmail2 = 0;
                $followData->email1FollowEmail2_date = Carbon::now("Asia/Manila");
                $followData->save();
            } else {
                $followData->email2FollowEmail1 = 0;
                $followData->email2FollowEmail1_date = Carbon::now("Asia/Manila");
                $followData->save();
            }
        }
    }
    public function getUserFollow(Request $request)
    {
        # code...
        $followData = Follow::with('email1', 'email2')->where('email1', $request->email)->orWhere('email2', $request->email)->get();
        return $followData;
    }
}
