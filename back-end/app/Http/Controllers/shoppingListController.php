<?php

namespace App\Http\Controllers;

use App\Models\ShoppingList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class shoppingListController extends Controller
{
    //
    public function getShoppingList()
	{
		# code...
		// $data = DB::select('SELECT * FROM tbl_shoppingList WHERE email = \''.Auth::user()->email.'\'');
		// return $data[0];
		$data = DB::table('tbl_shoppingList')->where('email','=',Auth::user()->email)->get();
		return $data;
	}
    public function editList(Request $request)
	{
		# code...
		// $data = DB::select('SELECT * FROM tbl_shoppingList WHERE email = \''.Auth::user()->email.'\'');
		// return $data[0];
        $validator=Validator::make($request->all(),[
            'listNum'=>'required',
            'list'=>'required'
            ]);

        if($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
		if(DB::table('tbl_shoppingList')->where('email','=',Auth::user()->email)->where('shoppingListNumber', $request->listNum)->update(["text"=>$request->list])){
            return response()->json(["message"=>"List updated"],201);
        }else{
            return response()->json(["error"=>"error in updating list"],422);

        }
	}
    public function createList(Request $request)
	{
		# code...
		// $data = DB::select('SELECT * FROM tbl_shoppingList WHERE email = \''.Auth::user()->email.'\'');
		// return $data[0];
        $validator=Validator::make($request->all(),[
            'list'=>'required'
            ]);

        if($validator->fails()) {
            return response()->json($validator->errors(),422);
        }

		if(DB::table('tbl_shoppingList')->where('email','=',Auth::user()->email)->insert(["text"=>$request->list, 'shoppingListNumber'=> '076-'.str_pad(Auth::user()->indexUserAuthentication,4,'0',STR_PAD_LEFT).'-'.str_pad(ShoppingList::count()+1,5,'0',STR_PAD_LEFT), 'email'=>Auth::user()->email])){
            return response()->json(["message"=>"Shopping list created"],201);
        }else{
            return response()->json(["error"=>"error in updating list"],422);

        }
	}
   
}
