<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class educationController extends Controller
{
    //
    public function getEduc()
    {
        # code...
        return DB::select('SELECT * from tbl_usereducation WHERE email = \'' . Auth::user()->email . '\'');
        

    }
    public function updateEduc(Request $request)
    {
        # code...
        // DB::table('tbl_usereducation')
        // ->where('email', Auth::user()->email)
        // ->update(['active' => true]);
    }
}
