<?php

namespace App\Http\Controllers;
use App\Models\reviews;
use App\Models\transaction;
use App\Models\userInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    public function listReviews(){
        // return reviews::all();
        // return tbl_shoppingofferposts::All();
        // $data = reviews::with('user','posts.user')
        // ->whereHas('posts', function($query){
        //     $query->where('email', Auth::user()->email);
        // })->join('tbl_post', 'tbl_shoppingOfferPost.postNumber', '=', 'tbl_post.postNumber')
        // ->orderBy('tbl_post.dateCreated', 'desc')->get();
        // return $data;

        $data = reviews::with('userreviewee', 'userreviewer')
        ->orderBy('tbl_reviews.created_at','desc')
        ->get();

		return response()->json($data);
    }

    public function saveReview(Request $request){
        $request->validate([
            'revieweeID' => ['required'],
            'reviewerID' => ['required'],
            'revieweeEmail' => ['required'],
            'reviewerEmail' => ['required'],
            'rate' => ['required'],
            'feedback' => ['required'],
            'dateCreated' => [],
        ]);

        // $user = userInformation::All(){
        //     ->where('email','=',$request->revieweeEmail)
        // };
        $record = new reviews;
        $record->reviewNumber = '082-'.str_pad($request->revieweeID,4,'0',STR_PAD_LEFT).str_pad($request->reviewerID,4,'0',STR_PAD_LEFT).'-'.str_pad(reviews::count()+1, 4, '0', STR_PAD_LEFT);
        $record->revieweeEmail = $request->revieweeEmail;
        $record->reviewerEmail = $request->reviewerEmail;
        $record->rate = $request->rate;
        $record->feedback = $request->feedback;
        $record->save();
    }
}
