<?php

namespace App\Http\Controllers;
use App\Models\userAbout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class userAboutController extends Controller
{
    public function getUserAbout(){
        $data = userAbout::orderBy('tbl_userabout.dateCreated','desc')->get();

		return response()->json($data);
    }
    
    public function postUserSkills(Request $request)
    {
            $request->validate([
                'indexUserAbout' => [],
                'email' => ['required'],
                'skills' => [''],
                'interests' => [],
                'visitedPlace' => [],
                'dateCreated' => [],
            ]);

            $record = new userAbout;
            $record->email = $request->email;
            if($request->skills!=null)
            $record->skills = implode("," , $request->skills);
            else
            $record->skills = null;
            $record->save();
    }

    public function updateUserSkills(Request $request)
    {
        $request->validate([
            'indexUserAbout' => ['required'],
            'email' => ['required'],
            'skills' => [''],
            'interests' => [],
            'visitedPlace' => [],
            'dateCreated' => [],
        ]);
        // $skill = implode("," , $request->skills);
        if($request->skills!=null)
            $record = implode("," , $request->skills);
        else
            $record = null;

        date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d h:i:s');

        DB::table('tbl_userabout')
        ->where('indexUserAbout', $request->indexUserAbout)
        ->update(['skills' => $record,'dateModified' => $date]);
    }

    public function postUserInterests(Request $request)
    {
        $request->validate([
            'indexUserAbout' => [],
            'email' => [],
            'skills' => [],
            'interests' => [],
            'visitedPlace' => [],
            'dateCreated' => [],
        ]);

            $record = new userAbout;
            $record->email = $request->email;
            if($request->interests!=null)
            $record->interests = implode("," , $request->interests);
            else
            $record->interests = null;
            $record->save();
    }

    public function updateUserInterests(Request $request)
    {
            $request->validate([
                'indexUserAbout' => ['required'],
                'email' => ['required'],
                'skills' => [''],
                'interests' => [],
                'visitedPlace' => [],
                'dateCreated' => [],
            ]);
            // $skill = implode("," , $request->skills);
            if($request->interests!=null)
                $record = implode("," , $request->interests);
            else
                $record = null;

            date_default_timezone_set('Asia/Manila');
            $date = date('Y-m-d h:i:s');

            DB::table('tbl_userabout')
            ->where('indexUserAbout', $request->indexUserAbout)
            ->update(['interests' => $record,'dateModified' => $date]);
    }

    public function postUserVisitedPlaces(Request $request)
    {
        $request->validate([
            'indexUserAbout' => [],
            'email' => [],
            'skills' => [],
            'interests' => [],
            'visitedPlace' => [],
            'dateCreated' => [],
        ]);

            $user = new userAbout;
            $user->email = $request->email;
            $user->visitedPlace = implode("," , $request->visitedPlace);
            $user->save();
    }

    public function updateUserVisitedPlaces(Request $request)
    {
            $request->validate([
                'indexUserAbout' => ['required'],
                'email' => ['required'],
                'skills' => [''],
                'interests' => [],
                'visitedPlace' => [],
                'dateCreated' => [],
            ]);
            // $skill = implode("," , $request->skills);
            if($request->visitedPlace!=null)
                $record = implode("," , $request->visitedPlace);
            else
                $record = null;

            date_default_timezone_set('Asia/Manila');
            $date = date('Y-m-d h:i:s');
            
            DB::table('tbl_userabout')
            ->where('indexUserAbout', $request->indexUserAbout)
            ->update(['visitedPlace' => $record,'dateModified' => $date]);
    }
}
