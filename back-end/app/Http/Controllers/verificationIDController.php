<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\userid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class verificationIDController extends Controller
{
    //
    public function getVerifiedUsers()
    {
        # code...
        $data =  userid::where('verifyStatus', 'verified')->orWhere('verifyStatus', 'pending')->get();
        return response()->json($data,200);
    }
}
