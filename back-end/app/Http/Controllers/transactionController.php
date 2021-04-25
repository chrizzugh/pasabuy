<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\transaction;
use App\Models\User;
use App\Models\userInformation;
use App\Notifications\cancelledRequestNotification;
use App\Notifications\confirmRequestNotification;
use App\Notifications\declinedRequestNotification;
use App\Notifications\newTransactionNotification;
use App\Notifications\UpdateRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class transactionController extends Controller
{
    //
    public function createTransaction(Request $request)
    {
        # code...
        $newTransaction = new transaction;
        $user = userInformation::where('email', Auth::user()->email)->first();
        $postOwner = userInformation::where('email', $request->email)->first();
        $newTransaction->transactionNumber = '084'.str_pad($postOwner->indexUserInformation,4,'0',STR_PAD_LEFT).str_pad($user->indexUserInformation,4,'0',STR_PAD_LEFT).str_pad(transaction::count()+1, 4, '0', STR_PAD_LEFT); 
        $newTransaction->postNumber = $request->postNumber;
        $newTransaction->transactionReceiver = $request->email;
        $newTransaction->transactionData = serialize($request->transactionData);
        $newTransaction->emailCustomerShopper = Auth::user()->email;

        if($newTransaction->save()){
            $userToNotif = User::where('email',$request->email)->get();
			$userToNotif = User::find($userToNotif[0]->indexUserAuthentication);
			$userToNotif->notify(new newTransactionNotification($request->postNumber));
            return response()->json('ok');
        }else{
            return response()->json('not ok');

        }

    }
    public function getTransaction(Request $request)
    {

        # code...
        $transaction = transaction::with('post','post.offer_post','post.request_post','post.user','post.request_post.shoppingList','transactionSender')
            ->where(function($query) {
                $query->where('emailCustomerShopper', Auth::user()->email)
                ->orWhere('transactionReceiver', Auth::user()->email);
            })->orderBy('dateCreated','desc')
              ->get();
        // $transaction = transaction::with('post','post.offer_post','post.request_post','transactionSender')->orWhere([['emailCustomerShopper','\''.Auth::user()->email.'\''],['transactionReceiversss','\''.Auth::user()->email.'\'']])->where('transactionStatus','\'pending\'')->orderBy('dateCreated','desc')->get();
        // $transaction = transaction::with('post','post.offer_post','post.request_post','transactionSender')->where('emailCustomerShoppeasr',Auth::user()->email)->orWhere('transactionReceiver',Auth::user()->email)->where('transactionStatus','=','pending')->orderBy('dateCreated','desc')->get();
        // $transaction = Post::has('transaction')->where('email',Auth::user()->email)->orWhere('email','hokage.igneel@gmail.com')->join('tbl_transaction.emailCustomerShopper','=','tbl_post.email')->where('tbl_transaction.emailCustomerShopper',Auth::user()->email)->orWhere('tbl_transaction.emailCustomerShopper','hokage.igneel@gmail.com')->where('tbl_transaction.transactionStatus','pending')->orderBy('tbl_transaction.dateCreated','desc')->get();
        for($i=0;$i<$transaction->count();$i++){
            $transaction[$i]->transactionData = unserialize($transaction[$i]->transactionData);
        }
        
        return response()->json($transaction);
    }
    public function cancelRequest(Request $request)
    {
          # code...
 
        $transaction = transaction::find($request->ID);
        $transaction->transactionStatus = "cancelled";
        if($transaction->save()){
            //find the right user to notify, in this case the owner of the post
			$userToNotif = Post::where('postNumber',$request->postNumber)->get();
			$userToNotif = User::where('email',$userToNotif[0]->email)->get();
			$userToNotif = User::find($userToNotif[0]->indexUserAuthentication);
			$userToNotif->notify(new cancelledRequestNotification($request->postNumber));
            return response()->json('ok');
        }
        else 
            return response()->json('not ok');
            
    }
    public function declineRequest(Request $request)
    {
          # code...
 
        $transaction = transaction::find($request->ID);
        $transaction->transactionStatus = "declined";
        if($transaction->save()){
            //find the right user to notify, in this case the owner of the post
			$userToNotif = User::where('email',$request->userNotif)->get();
			$userToNotif = User::find($userToNotif[0]->indexUserAuthentication);
			$userToNotif->notify(new declinedRequestNotification($request->postNumber));
            return response()->json('ok');
        }
        else 
            return response()->json('not ok');
            
    }
    public function confirmRequest(Request $request)
    {
          # code...
 
        $transaction = transaction::find($request->ID);
        $transaction->transactionStatus = "confirmed";
        if($transaction->save()){
            //find the right user to notify, in this case the owner of the post
			$userToNotif = User::where('email',$request->userNotif)->get();
			$userToNotif = User::find($userToNotif[0]->indexUserAuthentication);
			$userToNotif->notify(new confirmRequestNotification($request->postNumber));

            if($request->postIdentity == "request_post"){
                $transaction = transaction::with('post')->where('transactionStatus', 'pending')->where('postNumber', $request->postNmmber)->get();
                foreach($transaction as $trans){
                    $trans->transactionStatus = "Declined";
                    $trans->post->postStatus = "Order Taken";
                    $trans->save();
                    $userToNotif = User::where('email',$transaction->emailCustomerShopper)->get();
                    $userToNotif = User::find($userToNotif[0]->indexUserAuthentication);
                    $userToNotif->notify(new declinedRequestNotification($request->postNumber));
                }
                return response()->json('ok');
            }
            return response()->json('ok');
        }
        else 
            return response()->json('not ok');
            
    }
    public function updateTransaction(Request $request)
    {
        # code...
        $transaction = transaction::find($request->ID);
        $transaction->transactionStatus = $request->status;
        if($transaction->save()){
            //find the right user to notify, in this case the owner of the post
			$userToNotif = User::where('email',$request->userNotif)->get();
			$userToNotif = User::find($userToNotif[0]->indexUserAuthentication);
			$userToNotif->notify(new UpdateRequestNotification($request->status,$request->postNumber));
            return response()->json(["message"=>"Transaction succesfully updated."],201);
        }
        else 
            return response()->json(["error"=>"Error updating transaction."],201);

    }
}
