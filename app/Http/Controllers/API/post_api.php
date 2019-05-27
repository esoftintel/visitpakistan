<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User; 
use App\category; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use App\post;
use App\subcategory;
use App\post_attribute;
use App\midea;
use App\like;
use Carbon\Carbon;


class post_api extends Controller
{
    //post against category
    public function category_post($id)
        { 
        $post_data = post::where('ps_status','active')->where('ps_ct_id',$id)->get();
        $post1 = post::where('ps_status','active')->where('ps_ct_id',$id)->first();
        
        if(!empty($post1))
        {
            
            foreach ($post_data as $key) {
                $key->media_data          = midea::where('m_ps_id',$key->ps_id)->first();
                $key->category_data       = category::find($key->ps_ct_id);
                $key->subcategory_data    = subcategory::find($key->ps_st_id); 
                $key->create_by           = user::find($key->ps_ur_id); 
                $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            }
            $category_data       = category::get();
            foreach ($category_data as $key1) {
                $i=0;
                $post_d = post::where('ps_status','active')->where('ps_ct_id',$key1->ct_id)->get();
                 foreach ($post_d as $key2) {
                     $i++;
                 }
                 $key1->its_post =$i;
            }
            $result['status']=1;
            $result['result']=$post_data;
            return response()->json([$result]); 
        }
        else{
            $result['status']=0;
            $result['result']=$post_data;
            return response()->json([$result]); 
                    
        }
        
      }
     
    public function all_categories_post()
    { 
     $category_data       = category::where('ct_status','active')->get();
     $ct_data             = category::where('ct_status','active')->first();
     foreach($category_data as $category)
     {
     $category->image_path= asset('images').'/'.$category->ct_icone;
    $post_data = post::where('ps_status','active')
                       ->where('ps_ct_id',$category->ct_id)
                       ->limit(4)   
                       ->orderByRaw("ps_type = 'normal' asc")
                       ->orderByRaw("ps_type = 'feature' asc")
                       ->get();
     foreach ($post_data as $key) {
         
            $key->media_data          = midea::where('m_ps_id',$key->ps_id)->get();
            foreach($key->media_data as $image)
            {
                $image->image_path= asset('images').'/media/'.$image->m_url;
            }
           
            
            $key->subcategory_data    = subcategory::find($key->ps_st_id); 
            $key->create_by           = user::find($key->ps_ur_id); 
            $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
        }
        $category->itspost= $post_data;
    
    }
    if(!empty($ct_data))
    {
        $result['status']=1;
        $result['result']=$category_data;
        return response()->json([$result]); 
    }
    else{
        $result['status']=0;
        $result['result']=$category_data;
        return response()->json([$result]); 
                
    }
     
    
    }

        public function postsOfCategory($id)
        {
            $categoryPosts=post::where('ps_ct_id',$id)
                        ->Join('categories', 'categories.ct_id', '=', 'posts.ps_ct_id')
                        ->join('users','users.id', '=', 'posts.ps_ur_id')
                        ->limit(4)   
                         ->orderByRaw("ps_type = 'normal' asc")
                        ->orderByRaw("ps_type = 'feature' asc")
                        ->get();
                        
                        
                        
              foreach ($categoryPosts as $key) {
                  $key->image_path= asset('images').'/'.$key->ct_icone;
                  
             
                $key->media_data          = midea::where('m_ps_id',$key->ps_id)->get();
                foreach($key->media_data as $image)
                {
                    $image->image_path= asset('images').'/'.$image->m_url;
                }
                $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            }
              if($categoryPosts)
              {
                    $result['status']=1;
                    $result['result']=$categoryPosts;
                    return response()->json([$result]); 
                  
              }
              else
              {
                  $result['status']=1;
                    $result['result']=$categoryPosts;
                    return response()->json([$result]); 
              }
                        
         
        }
        
        
           
        

        public function post_details($id)
            {
                $Post=post::where('ps_id',$id)
                        ->select('*', 'posts.created_at AS ps_created_at')
                        ->Join('categories', 'categories.ct_id', '=', 'posts.ps_ct_id')
                        ->join('users','users.id', '=', 'posts.ps_ur_id')
                         ->orderByRaw("ps_type = 'normal' asc")
                        ->orderByRaw("ps_type = 'feature' asc")
                        ->get();
                        
                        
                        $created = Carbon::createFromTimeStamp(strtotime($Post[0]->ps_created_at));
                        $created ->diff(Carbon::now())->format('%d days, %h hours and %i minutes');
                        $diff = $created->diff(Carbon::now());
                        if($diff->y)
                        {
                           $Post[0]->duration=  $diff->y." Years";
                        }
                        elseif($diff->m) {
                            $Post[0]->duration=  $diff->m." Months";
                        }
                        elseif($diff->d) {
                            $Post[0]->duration=  $diff->d." Days";
                        } elseif($diff->h) {
                            $Post[0]->duration=  $diff->h." Hours";
                        } elseif($diff->i) {
                            $Post[0]->duration=  $diff->i." Mints";
                        }
                        elseif($diff->s) {
                            $Post[0]->duration=  $diff->s." Second";
                        }
                        
                      
                        
                    
                     $postCategoryId=  $Post[0]->ps_ct_id;
                     //print_r($postCategoryId); exit;
                        
                        
              foreach ($Post as $key) {
                  $key->image_path= asset('images').'/'.$key->ct_icone;
                  
             
                $key->media_data          = midea::where('m_ps_id',$key->ps_id)->get();
                foreach($key->media_data as $image)
                {
                    $image->media_path= asset('images').'/media/'.$image->m_url;
                }
                $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            }
            
             $categoryPosts=post::where('ps_ct_id',$postCategoryId)
                        ->select('*', 'posts.created_at AS ps_created_at')
                        ->Join('categories', 'categories.ct_id', '=', 'posts.ps_ct_id')
                        ->join('users','users.id', '=', 'posts.ps_ur_id')
                        ->limit(4)   
                         ->orderByRaw("ps_type = 'normal' asc")
                        ->orderByRaw("ps_type = 'feature' asc")
                        ->get();
                        
                        
                        
              foreach ($categoryPosts as $key) {
                  $key->category_icon_path= asset('images').'/'.$key->ct_icone;
                  
                   $created = Carbon::createFromTimeStamp(strtotime($key->ps_created_at));
                        $created ->diff(Carbon::now())->format('%d days, %h hours and %i minutes');
                        $diff = $created->diff(Carbon::now());
                        if($diff->y)
                        {
                           $key->duration=  $diff->y." Years";
                        }
                        elseif($diff->m) {
                            $key->duration=  $diff->m." Months";
                        }
                        elseif($diff->d) {
                            $key->duration=  $diff->d." Days";
                        } elseif($diff->h) {
                            $key->duration=  $diff->h." Hours";
                        } elseif($diff->i) {
                            $key->duration=  $diff->i." Mints";
                        }
                        elseif($diff->s) {
                            $key->duration=  $diff->s." Second";
                        }
                        
                  
             
                $key->media_data          = midea::where('m_ps_id',$key->ps_id)->get();
                foreach($key->media_data as $image)
                {
                    $image->image_path= asset('images').'/media/'.$image->m_url;
                }
                $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            }
            
            
             if($Post)
              {
                    $result['status']=1;
                    $result['result']=$Post;
                    $result['populerPosts']=$categoryPosts;
                    return response()->json([$result]); 
                  
              }
              else
              {
                  $result['status']=1;
                    $result['result']=$Post;
                    return response()->json([$result]); 
              }
        
            }

            public function like_post(Request $request)
            {
                $data1 = $request->input();
                print_r($data1); exit;
                $data =array('l_ps_id'=>$data1['post_id'],
                             'l_u_id' =>$data1['user_id']
                            );
                    $liked = like::where($data)->first();
                    if($liked)
                    {   $record = like::find($liked->l_id);
                        $record->delete();
                        return json_encode(['reslut'=>0]);
                    }
                    else
                    {
                        $like = like::create($data);
                        return json_encode(['result'=>1]);
                    }
            }
            
}
