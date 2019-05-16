<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class test_api extends Controller
{
    //
    public function login(Request $resquest)
    {
       $data=$resquest->input();
       $res= DB::table('users')
                              ->where('email', $data['email'])
                              ->where('password', $data['password'])
                              ->first();
        if($res)
        {
            
            return $result = array("status"=>1 , "result"=> $res, "message"=>"Login Successfull");
        }
       else{
            return $result = array("status"=>0 ,"message"=>"Email or Password is incorrect");
                
           }
}

public function add_user(Request $request)
{
    //return view('addressee_dtls')->with('adrs_dtls', $adrs);
   //ini_set('memory_limit', '-1');
   $data=$request->input();
   $ok= DB::table('users')->where('email', $data['email'])->first();
   if($ok)
   {
        return $res = array("status"=>2 ,"message"=>"you have al ready register please login ");
   }
   else{

                $res_id =  DB::table('users')->insertGetId(
                        [
                            'name'          => $data['name'],
                            'email'         => $data['email'],
                            'password'       => $data['password'],
                        ]
            );
            if($res_id)
            {
                $res1=DB::table('users')->where('id', (int)$res_id)->first();
                return $res = array("status"=>1 , "result"=> $res1, "message"=>"You are register successfully");
            }
            else{
                return $res = array("status"=>0 ,"message"=>"There is some error to add the users Please try again");
            }
            
       }
}
}
