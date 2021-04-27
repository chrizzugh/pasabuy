<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\shoppingOrders;
use Illuminate\Http\Request;

class shoppingOrdersController extends Controller
{
    function listShoppingOrders(){
        //return shoppingOrders::all();
        //return tbl_shoppingofferposts::All();
        $data = shoppingOrders::with('posts','posts.user')
        ->whereHas('posts', function($query){
            $query->where('email', Auth::user()->email);
        })->join('tbl_post', 'tbl_orderrequestpost.postNumber', '=', 'tbl_post.postNumber')
        ->orderBy('tbl_post.dateCreated', 'desc')->get();
        return $data;
    }

    public function editshoppingoffers(Request $request){
        $request->validate([
            'indexOrderRequestPost' => ['required'],
            'postNumber' => ['required'],
            'postStatus' => ['required'],
            'deliveryAddress' => ['required'],
            'shoppingPlace' => ['required'],
            'deliverySchedule' => ['required'],
            'paymentMethod' => ['required'],
            'shoppingListNumber' => ['required'],
            'caption' => ['required'],
       ]);

        $record = shoppingOffers::where('indexShoppingOfferPost',$request->indexOrderRequestPost)->first();
        $record->postNumber  = $request->postNumber ;
        $record->postStatus = $request->postStatus;
        $record->deliveryArea = $request->deliveryArea;
        $record->shoppingPlace = $request->shoppingPlace;
        $record->deliverySchedule = $request->deliverySchedule;
        $record->transportMode = $request->transportMode;
        $record->capacity = $request->capacity;
        $record->paymentMethod = $request->paymentMethod;
        $record->caption = $request->caption;
        $record->save();
        // return $record;
        // if($record->save()){
        //     return response()->json(['message'=>'Success, Information saved'],200);
        // }
        // else{
        //     return response()->json(['error'=>'An error occured'],422);
        // }
    }
}
