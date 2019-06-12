<?php

namespace App\Http\Controllers;
use App\post;
use Session;
use App\subcategory;
use App\post_attribute;
use App\midea;
use App\packag;
use App\category;
use App\User;
use App\chat;
use Illuminate\Support\Facades\Auth; 


use Illuminate\Http\Request;

class admin extends Controller
{

   
    //
    public function dashboard()
    {
        $posts['posts']=post::where('ps_status','active')
        ->select('*','posts.created_at AS p_created_at')  
        ->orderByRaw("ps_type = 'feature' asc")
        ->orderByRaw("created_at  desc")
        ->get();
        $user=Auth::user()->u_image;
        //Session::put('variableName', $value);
        Session::put('_admimage', $user);
        //session(['_adm_Image' => $user->u_image]);
        // echo '<pre>';
        // print_r(Session::get('_adm_image')); exit;
        $posts['numberOfPosts']=post::count();
        $posts['packages']=packag::count();
        return view('admin.dashboard')->with($posts);
    }
    public function index()
    {
        $Posts=post::where('ps_status','active')
        ->select('*','posts.created_at AS p_created_at')
        ->Join('categories', 'categories.ct_id', '=', 'posts.ps_ct_id')
        ->join('users','users.id', '=', 'posts.ps_ur_id')
        ->limit(12)   
         ->orderByRaw("ps_type = 'normal' asc")
        ->orderByRaw("ps_type = 'feature' asc")
        //->orderByRaw("created_at = 'feature' desc")
        ->get();
        foreach ($Posts as $key) {
          $key->image_path= asset('images').'/'.$key->ct_icone;
          $key->media_data          = midea::where('m_ps_id',$key->ps_id)->get();
          foreach($key->media_data as $image)
          {
              $key->media_path= asset('images').'/media/'.$image->m_url;
          }
          $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
      }
        return view('admin.dashboard1')->with('posts',$Posts);
    }

    public function posts()
    {
        $Posts=post::where('ps_status','active')
        ->select('*','posts.created_at AS p_created_at')
        ->limit(12)   
        ->orderByRaw("ps_type = 'feature' asc")
        ->orderByRaw("created_at  desc")
        ->get();

        return view('admin.posts.posts_list')->with('posts',$Posts);
    }
   
    public function post_details($id)
    {
        $Post=post::where('ps_id',$id)
                ->Join('categories', 'categories.ct_id', '=', 'posts.ps_ct_id')
                ->join('users','users.id', '=', 'posts.ps_ur_id')
                ->limit(4)   
                 ->orderByRaw("ps_type = 'normal' asc")
                ->orderByRaw("ps_type = 'feature' asc")
                ->get();
                
                
                
      foreach ($Post as $key) {
          $key->image_path= asset('images').'/'.$key->ct_icone;
          
     
        $key->media_data = midea::where('m_ps_id',$key->ps_id)->get();
        foreach($key->media_data as $image)
        {
            $image->media_path= asset('images').'/media/'.$image->m_url;
        }
      
        $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
    }
    
    return view('admin.posts.post_details')->with('post',$Post);
    }

    public function post_chat($id)
    {
        $chats=chat::where('ch_ps_id',$id)
                 ->select('*','chats.created_at AS ch_created_at')
                ->join('users','users.id', '=', 'chats.ch_u_id')
                ->get();
     return view('admin.posts.post_chat')->with('chats',$chats);
    
    }
}
