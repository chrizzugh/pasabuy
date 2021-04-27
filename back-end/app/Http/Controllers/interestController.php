<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\interest;
use App\Models\skill;
use Illuminate\Http\Request;

class interestController extends Controller
{
    public function getInterest()
    {
        return interest::all();
        # code...
        // $user = Auth::user();
        // $data = DB::select('SELECT * FROM tbl_interest WHERE email = \''.$user->email.'\'');

        // if($data == null)
        //     return response()->json([]);
        // return response()->json($data[0]);
    }

    public function getSkills()
    {
        return skill::all();
        # code...
        // $user = Auth::user();
        // $data = DB::select('SELECT * FROM tbl_interest WHERE email = \''.$user->email.'\'');

        // if($data == null)
        //     return response()->json([]);
        // return response()->json($data[0]);
    }

}
