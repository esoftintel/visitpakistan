<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\User; 
use App\category; 
use Validator;
use App\post;
use App\subcategory;
use App\post_attribute;
use App\attribute_value;
use App\attribute;
use App\midea;
use App\like;
use App\rating;
use Carbon\Carbon;
use Dotenv\Regex\Result;
class post_api extends Controller
{
    private $photos_path;
    public function __construct()
    {
        $this->photos_path = public_path('/images/media');
    }
    //post against category
    public function category_post($id)
    { 
    $post_data = post::where('ps_status','active')->where('ps_ct_id',$id)->get();
    $post1 = post::where('ps_status','active')->where('ps_ct_id',$id)->first();
    $userId=Auth::user()->id;
    if(!empty($post1))
    {
        foreach ($post_data as $key) {
            $postId=$key->ps_id;
                $data =array('l_ps_id'=>$postId,
                            'l_u_id' =>$userId
                            );
                $liked=   like::where($data)->first();
                if($liked)
                {
                    $key->likedstatus=true;
                }
                else
                {
                    $key->likedstatus=false;
                }
            $md= midea::where('m_ps_id',$key->ps_id)->first();
            $key->media_as         = asset('public/images/media/')."/".$md['m_url'];
           
            $key->media_data          = midea::where('m_ps_id',$key->ps_id)->get();
            foreach($key->media_data as $image)
            {
                $image->media_path= asset('public/images').'/media/'.$image->m_url;
            }
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
     $userId=Auth::user()->id;
     foreach($category_data as $category)
     {
     //$category->image_path= asset('public/images').'/'.$category->ct_icone;
     $category->bannar_path= asset('public/images').'/'.$category->ct_image;
     $post_data = post::where('ps_status','active')
                       ->where('ps_ct_id',$category->ct_id)
                         ->limit(6)   
                       ->orderByRaw("ps_type = 'normal' asc")
                       ->orderByRaw("ps_type = 'feature' asc")
                       ->get();
     foreach ($post_data as $key) {
                    $postId=$key->ps_id;
                    $rate =rating::where('r_ps_id',$postId)->get();
                              $i=0;
                              $totalrating=0;
                              foreach($rate  as $r)
                              {
                                  $i++;
                                  $totalrating +=$r->r_rating;
                              }
                              if($i!=0)
                              {
                                  (float)$overallrating=$totalrating/$i;
                              }
                              else
                              {
                                  $overallrating=0;
                              }
                              $key->timeofrating=$i;
                              $key->overallrating=$overallrating;
                    $data =array('l_ps_id'=>$postId,
                                'l_u_id' =>$userId
                            );

                    $liked = like::where($data)->first();
                    if($liked)
                    {
                        $key->likedstatus=true;
                    }
                    else
                    {
                        $key->likedstatus=false;
                    }
         
            $key->media_data          = midea::where('m_ps_id',$key->ps_id)->get();
            foreach($key->media_data as $image)
            {
                $image->media_path= asset('public/images').'/media/'.$image->m_url;
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
                  $key->image_path= asset('public/images').'/'.$key->ct_icone;
                  
             
                $key->media_data          = midea::where('m_ps_id',$key->ps_id)->get();
                foreach($key->media_data as $image)
                {
                    $image->image_path= asset('public/images').'/'.$image->m_url;
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

        public function myposts($id)
            {
                $posts=post::where('ps_ur_id',$id)
                        ->select('*', 'posts.created_at AS ps_created_at')
                        ->Join('categories', 'categories.ct_id', '=', 'posts.ps_ct_id')
                        ->join('subcategories','subcategories.st_ct_id', '=', 'categories.ct_id')
                         ->orderByRaw("ps_type = 'normal' asc")
                        ->orderByRaw("ps_type = 'feature' asc")
                        ->get();
                        // return response()->json($post); 
                        //  exit;
                        foreach($posts as $post)
                        {
                        $created = Carbon::createFromTimeStamp(strtotime($post->ps_created_at));
                        $created ->diff(Carbon::now())->format('%d days, %h hours and %i minutes');
                        $diff = $created->diff(Carbon::now());
                        if($diff->y)
                        {
                           $post->duration=  $diff->y." Years";
                        }
                        elseif($diff->m) {
                            $post->duration=  $diff->m." Months";
                        }
                        elseif($diff->d) {
                            $post->duration=  $diff->d." Days";
                        } elseif($diff->h) {
                            $post->duration=  $diff->h." Hours";
                        } elseif($diff->i) {
                            $post->duration=  $diff->i." Mints";
                        }
                        elseif($diff->s) {
                            $post->duration=  $diff->s." Second";
                        }
                  $post->category_icon= asset('public/images').'/'.$post->ct_icone;
                  $media_image          = midea::where('m_ps_id',$post->ps_id)->first();
               
                  $post->media_image= asset('public/images').'/media/'.$media_image['m_url'];
                  $post->post_attribute_data = post_attribute::where('pt_ps_id',$post->ps_id)->get();  
                }
             if($posts)
              {
                    $result['status']=1;
                    $result['result']=$posts;
                    return response()->json($result); 
              }
              else
              {
                    $result['status']=0;
                    $result['result']=$posts;
                    return response()->json($result); 
              }
        
            }
            
            public function post_details($id)
            {
                $rate =rating::where('r_ps_id',$id)->get();
                              $i=0;
                              $totalrating=0;
                              foreach($rate  as $r)
                              {
                                  $i++;
                                  $totalrating +=$r->r_rating;
                              }
                              if($i!=0)
                              {
                                  (float)$overallrating=$totalrating/$i;
                              }
                              else
                              {
                                  $overallrating=0;
                              }
                              $data1['ratetimes']=$i;
                              $data1['overallrating']=round($overallrating,1);
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
                $Post[0]->image_path= asset('public/images').'/'.$Post[0]->ct_icone;
                $Post[0]->user_image_path= asset('images/user').'/'.$Post[0]->u_image;
                $Post[0]->media_data          = midea::where('m_ps_id',$Post[0]->ps_id)->get();
                foreach($Post[0]->media_data as $image)
                {
                    $image->media_path= asset('public/images').'/media/'.$image->m_url;
                }
                $Post[0]->post_attribute_data = post_attribute::where('pt_ps_id',$Post[0]->ps_id)->get();

                $categoryPosts=post::where('ps_ct_id',$postCategoryId)
                        ->select('*', 'posts.created_at AS ps_created_at')
                        ->Join('categories', 'categories.ct_id', '=', 'posts.ps_ct_id')
                        ->join('users','users.id', '=', 'posts.ps_ur_id')
                        ->limit(4)   
                         ->orderByRaw("ps_type = 'normal' asc")
                        ->orderByRaw("ps_type = 'feature' asc")
                        ->get();

                foreach ($categoryPosts as $key) {
                  $key->category_icon_path= asset('public/images').'/'.$key->ct_icone;
                  $key->user_image_path= asset('images/user').'/'.$key->u_image;
                  
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
                    $image->image_path= asset('public/images').'/media/'.$image->m_url;
                }
                $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            }

            if($Post)
              {
                    $result['status']=1;
                    $result['rating']=$data1;
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
                $id=Auth::user()->id;  
                if($id)
                {
                    $data =array('l_ps_id'=>$data1['post_id'],
                                 'l_u_id' =>$data1['user_id']
                            );

                    $liked = like::where($data)->first();
                    if($liked)
                    {   $record = like::find($liked->l_id);
                        $record->delete();
                        $result['status']=0;
                        $result['result']='unliked';
                        
                        return response()->json($result); 
                    }
                    else
                    {
                        $like = like::create($data);
                        $result['status']=1;
                        $result['result']='liked';
                        return response()->json($result); 
                    }
                }
                else{
                    $result['status']=0;
                    $result['result']='Unauthorised';
                        
                    return response()->json($result); 
                }
            }

        public function liked_posts()
        {
            $userId=Auth::user()->id;
            if($userId)
            {
                $posts=like::where('l_u_id',$userId)
                        ->select('*', 'posts.created_at AS ps_created_at')
                        ->join('posts','posts.ps_id' ,'=', 'likes.l_ps_id')
                        ->Join('categories', 'categories.ct_id', '=', 'posts.ps_ct_id')
                        ->join('users','users.id', '=', 'posts.ps_ur_id')
                         ->orderByRaw("ps_type = 'normal' asc")
                        ->orderByRaw("ps_type = 'feature' asc")
                        ->get();

                        foreach ($posts as $key) {
                            $postId=$key->ps_id;
                                     $data =array('l_ps_id'=>$postId,
                                                  'l_u_id' =>$userId
                                                );
                                     $liked=   like::where($data)->first();
                                     if($liked)
                                     {
                                         $key->likedstatus=true;
                                     }
                                     else
                                     {
                                         $key->likedstatus=false;
                                     }
                            $key->image_path= asset('public/images').'/'.$key->ct_icone;
                            
                       
                          $key->media_data          = midea::where('m_ps_id',$key->ps_id)->get();
                          foreach($key->media_data as $image)
                          {
                              $image->media_path= asset('public/images').'/media/'.$image->m_url;
                          }
                          $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
                      }
                      if($posts)
                      {
                        $result['status']=1;
                        $result['result']=$posts;
                            
                        return response()->json($result);  
                      }
                      else
                      {
                        $result['status']=0;
                        $result['result']=$posts;
                        return response()->json($result);
                      }
            }
            else{
                $result['status']=0;
                $result['result']='Unauthorised';  
                return response()->json($result); 
            }
        }

        public function post_submit(Request $request)
        {
            // $data=$request->input();
            $request->validate([
                'title' => 'required',
                'detail'  =>'required',
                'address'  =>'required',
                'category_id'  =>'required',
                'subcategory_id'  =>'required',
                'latitude'  =>'required',
                'logitude'  =>'required',
                'price'  =>'required',
                // 'detail'  =>'required',
                'photos'      =>'required',
                'user_id'  =>'required'
            ]);

            $userId=$request->input('user_id');
            if($userId)
            {
                $attribute=$request->input('attribute');
               // $attribute_value=$request->input('attribute_value');
                $data = array(
                                "ps_title"   => $request->input('title'),
                                "ps_detail"  => $request->input('detail'),
                                "ps_price"   => $request->input('price'),
                                "ps_address" => $request->input('address'),
                                "ps_ct_id"   => $request->input('category_id'),
                                "ps_st_id"   => $request->input('subcategory_id'),
                                "ps_ur_id"   => $userId,
                                "ps_lati"    => $request->input('latitude'),
                                "ps_longi"   => $request->input('logitude'),
                             );
                          $post =  post::create($data);
                        //   print_r($attribute);
                        //   exit;
                          if($attribute)
                          {
                           foreach($attribute as $key)
                           {
                               
                               $at = array(
                                              "pt_title" =>$key['attribute'],
                                              "pt_value" =>$key['value'],
                                              "pt_ps_id" =>$post->ps_id,
                                            );
                                            post_attribute::create($at);
                            }

                          }
                          $photos = $request->file('photos'); 
                          foreach ($photos as $photo) {
                           // print_r($photo); exit;
                              $original_name = basename($photo->getClientOriginalName());
                              $name = sha1(date('YmdHis') . str_random(30));
                              $save_name = $name . '.' . $photo->getClientOriginalExtension();
                              $resize_name =  $photo->getClientOriginalExtension();
                              $photo->move($this->photos_path, $save_name);
                                midea::create([
                                            'm_url' => $save_name,                   
                                            'm_type' => $resize_name,
                                            'm_name' =>$original_name = basename($photo->getClientOriginalName()),
                                            'm_ps_id' =>$post->ps_id  
                                ]);
                        }
    
                       if($post)
                       {
                        $result['status']=1;
                        $result['result']=$post;
                        
                        return response()->json($result); 
                       }
                       else
                       {
                        $result['status']=0;
                        $result['result']=$post;
                        
                        return response()->json($result); 
                       }
            }
            else
            {
                $result['status']=0;
                $result['result']='unAuthenticate';
                
                return response()->json($result); 
            }
            
    
        }
        
        public function getcategories()
        {
            $data = category::where('ct_status','active')->get();
            $data1 = category::where('ct_status','active')->first();
            if($data)
            {
                foreach ($data as $key) {
                    $key->image_path= asset('public/images').'/'.$key->ct_icone;
                }
            }
            if($data1)
            {
                $result['status']=1;
                $result['result']=$data;
                return response()->json($result);
            }
            else
            {
                $result['status']=0;
                $result['result']=$data;
                 return response()->json($result);
            }
        }
        
        public function getsubcategories($id)
        {
            $category = category::where('ct_id',$id)->first();
            $category->image_path= asset('public/images').'/'.$category->ct_icone; 
            $category->image_path_white= asset('public/images').'/'.$category->ct_iconewhite;
            $category->bannar_path= asset('public/images').'/'.$category->ct_image; 
            
            
            $data = subcategory::where('st_ct_id',$id)->get();
             $data1 = subcategory::where('st_ct_id',$id)->first();
           
            if($data1)
            {
                $result['status']=1;
                $result['category']=$category;
                $result['result']=$data;
                 return response()->json($result);

            }
            else
            {
                $result['status']=0;
                $result['result']=$data;
                 return response()->json($result);
            }
            
        }
        
        public function getsubcategory_attributes($id)
        {
             $data = attribute::where('at_st_id',$id)->get();
             $data1 = attribute::where('at_st_id',$id)->first();
             foreach($data as $key)
             {
                 $keyId=$key->at_id;
                 $key->attribute_values=attribute_value::where('atv_at_id',$keyId)->get();
             }
            if($data1)
            {
                $result['status']=1;
                $result['result']=$data;
                 return response()->json($result);
            }
            else
            {
                $result['status']=0;
                $result['result']=$data;
                 return response()->json($result);
            }
        }
        
        public function getsubcategory_attributevalues($id)
        {
            $data = attribute_value::where('atv_at_id',$id)->get();
            $data1= attribute_value::where('atv_at_id',$id)->first();
            if($data1)
            {
                $result['status']=1;
                $result['result']=$data;
                 return response()->json($result);
            }
            else
            {
                $result['status']=0;
                $result['result']=$data;
                 return response()->json($result);
            }
        }

        public function commentadd(Request $request)
        {
             $request->validate([
                'comment' => 'required',
                'post_id'  =>'required',
                'user_id'  =>'required',
                'rate'  =>'required',

            ]);
                
               $message = $request->input('comment');
               $post_id = $request->input('post_id');
               $user_id = $request->input('user_id');
               $rate    = $request->input('rate');
               $data = array(
                               'r_comment'  =>$message,
                               'r_rating'   =>$rate,
                               'r_ps_id'    =>$post_id,
                               'r_u_id'     =>$user_id,
                               'created_at' =>date('Y:m:d H:i:s')
                            );
                     $rating=rating::create($data);
                     if($rating)
                     {
                        $result['status']=1;
                        $result['result']=$rating;
                         return response()->json($result); 
                     }
                     else
                     {
                        $result['status']=0;
                        $result['result']=$rating;
                        return response()->json($result);  
                     }
        }
            
        public function getpostrating($id)
        {
               $data =rating::where('r_ps_id',$id)
                              ->select('*', 'ratings.created_at AS rating_created_at','ratings.id AS rating_id')
                              ->join('users','users.id','=','ratings.r_u_id')
                              ->get();
                              $i=0;
                              $totalrating=0;
                              foreach($data as $user)
                              {
                                  $i++;
                                  $totalrating +=$user->r_rating;
                                  $user->user_image_url=asset('public').'/images/user/'.$user->u_image;
                              }
                              if($i!=0)
                              {
                                  (float)$overallrating=$totalrating/$i;
                              }
                              else
                              {
                                  $overallrating=0;
                              }
                              $data1['totalcomments']=$i;
                              $data1['overallrating']=$overallrating;
                              
                    if($data)
                     {
                        $result['status']=1;
                        $result['ratings']=$data1;
                        $result['result']=$data;
                         return response()->json($result); 
                     }
                    else
                     {
                        $result['status']=0;
                        $result['result']=$data;
                        return response()->json($result);  
                     }
       }

}

