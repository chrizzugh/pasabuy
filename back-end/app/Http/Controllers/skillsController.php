<?php

namespace App\Http\Controllers;
use App\Models\skill;
use Illuminate\Http\Request;

class skillsController extends Controller
{
    public function getListSkills()
    {
        // return skill::all();

        return skill::select("*")
                        ->orderBy("skills")
                        ->get();
        // echo ($users);
        
        // return $users;
        // $data = skill::with('email', 'email')
        // ->orderBy("skills")
        // ->get();

		// return response()->json($data);
    }
}
