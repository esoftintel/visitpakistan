<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // return view('home');
       
        return view('home');
    }

    public function user_login(Request $request)
    {
      $post=$request->input();
      $data=array(
          'email'=>$post['email'],
          'password'=>$post['password'],

      );

      $check=User::where('email',$post['email'])
                   ->where('password',$post['password'])
                   ->first();
                 
      
      if($check)
      {
    
        session(['user' => $check->name]);
        //$request->session()->put('user', $check->name);
      }
   
      return view('user.index');

    }

    public function user_logout()
    {
        session()->forget('user');
        return view('user.index');
    }

    public function user_register(Request $request)
    {
        $post=$request->input();
        pritn_r($post); exit;
    }
}
