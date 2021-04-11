<?php

namespace App\Http\Controllers;

use App\Mail\emailConfirmation;
use App\Models\User;
use App\Models\Messages;
use App\Models\userAddress;
use App\Models\userInformation;
use App\Models\userLanguages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class userInformationController extends Controller
{
    //
    public function getPersonal()
    {
        # code...
        $user = Auth::user();
        $data = DB::select('SELECT * FROM tbl_userInformation WHERE  email = \''.$user->email.'\'');
    
        return response()->json($data[0]);
    }

    public function getAddress()
    {
        # code...
        $user = Auth::user();
        $data = DB::select('SELECT * FROM tbl_userAddress WHERE email = \''.$user->email.'\'');
    
        if($data == null)
            return response()->json('');
        return response()->json($data[0]);
    }

    public function getLanguages()
    {
        # code...
        $user = Auth::user();
        $data = DB::select('SELECT * FROM tbl_userLanguages WHERE email = \''.$user->email.'\'');

        if($data == null)
            return response()->json('');
        return response()->json($data[0]);
    }

    public function getValidID()
    {
        # code...
        $user = Auth::user();
        $data = DB::select('SELECT * FROM tbl_userid WHERE email = \''.$user->email.'\'');

        if($data == null)
            return response()->json('');
        return response()->json($data[0]);
    }

     public function confirmUser(Request $request)
    {
        # code...
        $validator=Validator::make($request->all(),[
            'password' => ['required'],
            'email' => ['required','email','unique:tbl_userAuthentication']
       ]);
        if($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $hashedPassword = Auth::user()->getAuthPassword();
        if (Hash::check( $request->password,  $hashedPassword)) {
            $code = mt_rand(100000, 999999);
            $data =[
                'name' => $request->firstName,
                'verification_code' =>  $code
            ];
            $email = trim($request->email);   
            $returnValue = ['code'=>Hash::make($code) ];
            if($request != null){
                Mail::to($email)->send(new emailConfirmation($data));
                return response()->json($returnValue,200);
            }
            return response()->json(['error'=>'An error occured'],422);
        }else{
            return response()->json(['password'=>'Incorrect Password'],422);
        }
    }

    public function changeEmail(Request $request)
    {
        # code...
        if (Hash::check( $request->typeCode,  $request->code)){
            $user = userInformation::where('email',Auth::user()->email)->first();
            $user->email = $request->email;
            if($user->save()){
                return response()->json(['message'=>'Successfully changed email'],200);
            }else{
                return response()->json(['error'=>'An error occured'],422);
            }
           
        }else{
            return response()->json(['error'=>'Incorrect Code'],422);
        }

    }

    public function changePassword(Request $request)
    {
        # code...

        $validator=Validator::make($request->all(),[
            'currentPassword' => ['required'],
            'password' => ['required','confirmed','min:8']
        ]);
        if($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $hashedPassword = Auth::user()->getAuthPassword();
        if (Hash::check( $request->currentPassword,  $hashedPassword)){
            $user = User::where('email',Auth::user()->email)->first();
            $user->password = Hash::make($request->password);
            if($user->save()){
               return response()->json(['message'=>'Successfully changed password'],200);
            }else{
                return response()->json(['error'=>'An error occured'],422);
            }
        }else{
            return response()->json(['password'=>'Incorrect current password'],422);
        }

    }

    public function editPersonal(Request $request)
    {
        # code...
      
        $request->validate([
             'firstname' => ['required'],
             'lastname' => ['required'],
             'phone_number' => ['required'],
             'gender' => '',
             'birdate' => ['required'],
             'language' => ['required']
        ]);
        
        //updating userinfo table
        $userEmail = Auth::User()->email;
        $user = userInformation::where('email',$userEmail)->first();
        $user->firstName = $request->firstname;
        $user->lastName = $request->lastname;
        $user->phoneNumber = $request->phone_number;
        $user->gender = $request->gender;
        $user->birthDate = $request->birdate;
       
        if($user->save()){
            //updating user languages
            $userLang = userLanguages::find(Auth::User()->email);
            if($userLang == null){
                $userLang= new userLanguages();
                $userLang->email = Auth::User()->email;
                $userLang->userLanguageNumber = userLanguages::count()+1;
                $userLang->languages = $request->language;
                $userLang->save();
                return response()->json(['message'=>'Success, Information saved.'],200);
            }
            else{
                $userLang = userLanguages::where('email',Auth::User()->email)->first();
                $userLang->languages = $request->language;
                $userLang->save();
                return response()->json(['message'=>'Success, Information saved.'],200);
            }
            
        }
        else{
            return response()->json('error, information not saved');
        }

    }

    public function editAddress(Request $request)
    {
        # code...
      
        $request->validate([
             'house_number' => ['required'],
             'province' => ['required'],
             'city' => ['required'],
             'barangay' => ['required']
        ]);
        //updating userinfo table
        $userEmail = Auth::User()->email;
        $user = userAddress::where('email',$userEmail)->first();
        if($user==null){
            $user = new userAddress();
            $user->email = $userEmail;
        }
        $user->houseNumber = $request->house_number;
        $user->province = $request->province;
        $user->cityMunicipality = $request->city;
        $user->barangay = $request->barangay;
       
        if($user->save()){
            return response()->json(['message'=>'Success, Information saved'],200);
        }
        else{
            return response()->json(['error'=>'An error occured'],422);
        }
    }
  

}
