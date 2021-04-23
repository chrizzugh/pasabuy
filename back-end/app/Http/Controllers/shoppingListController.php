<?php

namespace App\Http\Controllers;

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
}
