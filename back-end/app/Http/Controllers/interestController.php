<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\interest;
// use App\Models\listInterest;
//use App\Models\skill;
use Illuminate\Http\Request;

class interestController extends Controller
{
    public function getListInterests()
    {
        return interest::select("*")
                        ->orderBy("interests")
                        ->get();
    }
}
