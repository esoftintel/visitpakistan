<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\User;
use Validator;

class userLoginController extends Controller
{
    //
    public function user_login(Request $request)
    {
      //echo "yess";
      //print_r(request('email'));
     // exit;
      if(Auth::attempt(['email' => request('email'), 'password' => request('password')]))
      {
        $user = Auth::user(); 
        // print_r($user);
        // exit;
        session(['user' => $user->name,'user_data'=>$user->id]);
        
      }
   
       return redirect()->route('user_dashboard');

    }

    public function user_logout()
    {
        session()->forget('user');
        session()->forget('user_data');
        return view('user.index');
    }

    public function user_register(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required',  
        ]);
    if ($validator->fails()) { 
         return view('user.index');           
        }
        else
        {
            $user_is = User::where('email',$request->input('email'))->first();
           
            if($user_is)
            {
                return view('user.index');  
            }
            else{
                $input = $request->all(); 
                $user = User::create($input); 
                if($user)
                {
                   session(['user' => $user->name]);
                }
                return view('user.index');
            }
            
             
        }
       
        
    }
}
