<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; 
use App\post;
use App\category;
use App\subcategory;
use App\attribute;
use App\attribute_value;
use App\post_attribute;
use App\midea;
use App\User;
use App\like; 
use App\rating; 
use App\feature; 
use App\tag; 
use App\comment; 
use App\post_tag;
use App\post_feature;
use Illuminate\Http\Request;
use Redirect;
use Session;
use Carbon\Carbon;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
      
        $post_data = post::where('ps_status','active')
                          ->orderByRaw("ps_type = 'normal' asc")
                          ->orderByRaw("ps_type = 'feature' asc")
                          ->paginate(6);
                         
        foreach ($post_data as $key) {
            $key->media_data          = midea::where('m_ps_id',$key->ps_id)->first();
            $key->category_data       = category::find($key->ps_ct_id);
            $key->subcategory_data    = subcategory::find($key->ps_st_id);
            $key->create_by           = user::find($key->ps_ur_id);  
            $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key->created_at));
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
       $location = post::select('ps_city')->where('ps_status','active')->distinct()->get();  // groupby
       foreach ($location as $key1) {
        $i=0;
        $post_d = post::where('ps_status','active')->where('ps_city',$key1->ps_city)->get();
        $post_dd = post::where('ps_status','active')->where('ps_city',$key1->ps_city)->first();
        $media_d = midea::where('m_ps_id',$post_dd->ps_id)->first();
        $key1->location_media = $media_d;
         foreach ($post_d as $key2) {
             $i++;
         }
         $key1->location_num_post =$i;
    }
       
        return view('user.index2',['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location]) ; 
      
    }

    public function category_posts($id)
    {
        $post_data = post::where('ps_status','active')
        ->where('ps_ct_id',$id)
        ->orderByRaw("ps_type = 'normal' asc")
        ->orderByRaw("ps_type = 'feature' asc")
        ->get();
        foreach ($post_data as $key) {
            $key->media_data          = midea::where('m_ps_id',$key->ps_id)->first();
            $key->category_data       = category::find($key->ps_ct_id);
            $key->subcategory_data    = subcategory::find($key->ps_st_id); 
            $key->create_by           = user::find($key->ps_ur_id); 
            $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key->created_at));
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
       
        $location = post::select('ps_city')->where('ps_status','active')->distinct()->get();  // groupby
       
        return view('user.index2',['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location]) ; 
      
      
    }

    public function search(Request $request)
    {
        $search   = $request->input('search');
        $category = $request->input('category');
        $price    = (int)$request->input('price');
        $location = $request->input('location');
        $post_data = post::where('ps_status','active') 
                        ->where('ps_price','>=',$price)
                        ->where('ps_ct_id','like', '%' .$category. '%')
                        ->where('ps_city','like', '%' .$location. '%')
                        ->Where('ps_title', 'like', '%' .$search. '%')
                        ->orderByRaw("ps_type = 'normal' asc")
                        ->orderByRaw("ps_type = 'feature' asc")
                        ->get();
        foreach ($post_data as $key) {
            $key->media_data          = midea::where('m_ps_id',$key->ps_id)->first();
            $key->category_data       = category::find($key->ps_ct_id);
            $key->subcategory_data    = subcategory::find($key->ps_st_id); 
            $key->create_by           = user::find($key->ps_ur_id); 
            $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key->created_at));
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
       
        $location = post::select('ps_city')->where('ps_status','active')->distinct()->get();  // groupby
       
        return view('user.index2_search',['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location]) ; 
      
      
    }
    public function post_detail($id)
    {
        $key1 = post::find($id);
        if($key1)
        {
            $key1->media_data          = midea::where('m_ps_id',$key1->ps_id)->first();
            $key1->media_all_data      = midea::where('m_ps_id',$key1->ps_id)->get();
           
            $key1->category_data       = category::find($key1->ps_ct_id);
            $key1->subcategory_data    = subcategory::find($key1->ps_st_id); 
            $key1->create_by           = user::find($key1->ps_ur_id); 
            $key1->rating_are          = rating::where('r_ps_id',$key1->ps_id)->get(); 
            $key1->post_attribute_data = post_attribute::where('pt_ps_id',$key1->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key1->created_at));
            $created ->diff(Carbon::now())->format('%d days, %h hours and %i minutes');
            $diff = $created->diff(Carbon::now());
            if($diff->y)
            {
               $key1->duration=  $diff->y." Years"; 
            }
            elseif($diff->m) {
                $key1->duration=  $diff->m." Months";
            }
            elseif($diff->d) {
                $key1->duration=  $diff->d." Days";
            } elseif($diff->h) {
                $key1->duration=  $diff->h." Hours";
            } elseif($diff->i) {
                $key1->duration=  $diff->i." Mints";
            }
            elseif($diff->s) {
                $key1->duration=  $diff->s." Second";
            }
      
            $post_data = post::where('ps_status','active')
            ->where('ps_ct_id',$key1->ps_ct_id)
            ->orderByRaw("ps_type = 'normal' asc")
            ->orderByRaw("ps_type = 'feature' asc")
            ->get();
            foreach ($post_data as $key) {
                $key->media_data          = midea::where('m_ps_id',$key->ps_id)->first();
                $key->category_data       = category::find($key->ps_ct_id);
                $key->subcategory_data    = subcategory::find($key->ps_st_id); 
                $key->create_by           = user::find($key->ps_ur_id); 
                $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
                $created = Carbon::createFromTimeStamp(strtotime($key->created_at));
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
            }
          
          
        return view('user.ad_details',['post_data'=>$key1 , 'related_data'=>$post_data]) ; 
        }
        else
        {
            
            return Redirect::back()->withErrors(['msg', 'The Message']);  
        }
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = category::where('ct_status','active')->get();
        return view('user.post.category_show',$data) ; //->with('category',$data); 
    
    }
    public function post_create()
    {
      
        $data['category'] = category::where('ct_status','active')->get();
        $data['subcategory'] = subcategory::where('st_status','active')->get();
        return view('user.post.post_create',$data) ; //->with('category',$data);
    
    } 
    public function ad_details(){
        return view('user.ad_details') ; //->with('category',$data);
    }
 


    public function post_form($id)
    {
        $subcategory = subcategory::find($id);
        $category    = category::find($id); 


        $data['category_name'] =$category->ct_name;
        //$data['subcategory_name'] =$subcategory->st_name;
        $data['category_id'] =$category->ct_id;
      //  $data['subcategory_id'] =$subcategory->st_id;
        $data['attribute_data'] = attribute::where('status','active')->where('at_ct_id',$id)->get();
        $data['feature_data']   = feature::where('fe_status','active')->where('fe_ct_id',$id)->get();
        $data['tag_data']       = tag::where('tg_status','active')->where('tg_ct_id',$id)->get();
        $data['user_data'] =User::find(session('user_data'));
        foreach ($data['attribute_data'] as $key) {
           $key->attribute_value_data  = attribute_value::where('atv_status','active')->where('atv_at_id',$key->at_id)->get();
        
        }
        return view('user.post.post_create',$data) ; //->with('category',$data);
    
    }


    
    public function post_store(Request $request)
    {
        $uu  = Auth::user();

        $data=$request->input();
       
        $attribute=$request->input('attribute');
        $tag     = $request->input('tag_name');
        $feature = $request->input('feature_name');
        $attribute_value=$request->input('attribute_value');
    //    print_r($attribute);
    //    exit;
        $data = array(
                        "ps_title"   => $request->input('title'),
                        "ps_detail"  => $request->input('detail'),
                        "ps_price"   => $request->input('price'),
                        "ps_address" => $request->input('address'),
                        "ps_ct_id"   => $request->input('ctid'),
                       // "ps_st_id"   => $request->input('sctid'),
                        "ps_ur_id"   => $uu->id,
                        "ps_lati"    => $request->input('state'),
                        "ps_longi"   => $request->input('city'),
                     );
                       
                    $d =  post::create($data);
                  $i=0;
                  if($attribute)
                  {
                      
                   foreach($attribute as $key)
                   {
                       $at = array(
                                      "pt_title" =>$key,
                                      "pt_value" =>$attribute_value[$i++],
                                      "pt_ps_id" =>$d->ps_id,
                                    );
                                   
                                    post_attribute::create($at);
                   }
                  if($feature)
                  {
                    foreach($feature as $key)
                    {
                        $at = array(
                                        "pf_fe_id" =>$key,
                                        "pf_ps_id" =>$d->ps_id,
                                        );
                                    
                                        post_feature::create($at);
                    }
                  }
                  if($tag)
                  {
                    foreach($tag as $key)
                    {
                        $at = array(
                                    "pt_tg_id" =>$key,
                                    "pt_ps_id" =>$d->ps_id,
                                    );
                       post_tag::create($at);
                    }
                  }
                  }
                   $request->session()->put('post_id', $d->ps_id); 
                   return redirect()->to('image_post/'.$d->ps_id);

    }


    public function image_post($id) 
    {
          $data['post_data']           = post::find($id);
         $cid = $data['post_data']->ps_ct_id;
         $sid = $data['post_data']->ps_st_id;
         $psid = $data['post_data']->ps_id;
        //   exit();
          $data['category_data']       = category::find($cid);
          $data['subcategory_data']    = subcategory::find($sid);
          $data['post_attribute_data'] = post_attribute::where('pt_ps_id',$psid)->get();
         
        return view('user.post.image_post',$data) ; //->with('category',$data);
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post) 
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }

    public function userprofile($id)
    {
       
        $user = User::find($id);
       
        if($user)
        {
            $rt = rating::where('r_u_id',$user->id)->get();
            $pst = post::where('ps_ur_id',$user->id)->where('ps_status',"active")->get();
            $rtt =0;
            $i =0;
            foreach($rt as $r)
            {
                $rtt=$rtt+$r->r_rating;
                $i++;
            }
            if($rtt==0)
            {
                $user->rate = 0;
            }
            else
            {
                $user->rate = $rtt/$i;
            }
           
           $user->number_view = $i;
           $user->number_post = count($pst);
           $user->review = $rt;

           $created = Carbon::createFromTimeStamp(strtotime($user->created_at));
            $created ->diff(Carbon::now())->format('%d days, %h hours and %i minutes');
            $diff = $created->diff(Carbon::now());
            if($diff->y)
            {
               $user->duration=  $diff->y." Years";
            }
            elseif($diff->m) {
                $user->duration=  $diff->m." Months";
            }
            elseif($diff->d) {
                $user->duration=  $diff->d." Days";
            } elseif($diff->h) {
                $user->duration=  $diff->h." Hours";
            } elseif($diff->i) {
                $user->duration=  $diff->i." Mints";
            }
            elseif($diff->s) {
                $user->duration=  $diff->s." Second";
            }
        $post_data = post::where('ps_status','active')
        ->where('ps_ur_id',$id)
        ->orderByRaw("ps_type = 'normal' asc")
        ->orderByRaw("ps_type = 'feature' asc")
        ->paginate(6);
        foreach ($post_data as $key) {
            $key->media_data          = midea::where('m_ps_id',$key->ps_id)->first();
            $key->category_data       = category::find($key->ps_ct_id);
            $key->subcategory_data    = subcategory::find($key->ps_st_id); 
            $key->create_by           = user::find($key->ps_ur_id); 
            $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key->created_at));
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
        }
      
       // exit;
              
        return view('user.user_profile',['post_data'=>$post_data, 'user_r'=>$user]) ; 

        }
        return Redirect::back()->withErrors(['msg', 'The Message']); 

    }

    public function userdashboard()
    {
        $flg = session('user_data');
       
        if($flg)
        {
           
        $post_data = post::where('ps_status','active')
        ->where('ps_ur_id',$flg)
        ->orderByRaw("ps_type = 'normal' asc")
        ->orderByRaw("ps_type = 'feature' asc")
        ->get();
        foreach ($post_data as $key) {
            $key->media_data          = midea::where('m_ps_id',$key->ps_id)->first();
            $key->category_data       = category::find($key->ps_ct_id);
            $key->subcategory_data    = subcategory::find($key->ps_st_id); 
            $key->create_by           = user::find($key->ps_ur_id); 
            $key->rating_are          = rating::where('r_ps_id',$key->ps_id); //its for rating 
            $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key->created_at));
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
        }
      
       
        $likes = like::where('l_u_id',$flg)->get();  
        $like_data = array();
        for ($i = 0; $i<count($likes); $i++) { 
            foreach ($post_data as $key ) {
                if($key->ps_id==$likes[$i]->l_ps_id)
                {
                    array_push($like_data,$key);
                }
            }
        }
        if(session('user_data'))
        {
            
            $user = User::find(session('user_data'));
            
        }
    
        return view('user.user_dashboard',['post_data'=>$post_data,'like_data'=>$like_data , 'user_record'=>$user]) ; 

        }
        return Redirect::back()->withErrors(['msg', 'The Message']);   
    }
       

///5cf0d61925777_1559287321.jpg

    public function categorylisting($id)
    {
        $ctimg = category::find($id);
        $post_data = post::where('ps_status','active')
        ->where('ps_ct_id',$id)
        ->orderByRaw("ps_type = 'normal' asc")
        ->orderByRaw("ps_type = 'feature' asc")
        ->paginate(10);
        foreach ($post_data as $key) {
            $key->media_data          = midea::where('m_ps_id',$key->ps_id)->first();
            $key->category_data       = category::find($key->ps_ct_id);
            $key->subcategory_data    = subcategory::find($key->ps_st_id); 
            $key->create_by           = user::find($key->ps_ur_id); 
            $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key->created_at));
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
       
        $location = post::select('ps_city')->where('ps_status','active')->distinct()->get();  // groupby
       
        // return view('user.index2',['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location]) ; 
      
      
        return view('user.category_listing',['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location , 'ctid'=>$id , 'ctimg'=>$ctimg]) ; 

    }

    public function search_category1k(Request $request)
    {
       
        $search   = $request->input('search');
        $category = $request->input('category');
        $location = $request->input('location');
        
        $post_data = post::where('ps_status','active')
                        ->where('ps_ct_id','like', '%' .$category. '%')
                        ->where('ps_city','like', '%' .$location. '%')
                        ->Where('ps_title', 'like', '%' .$search. '%')
                        ->orderByRaw("ps_type = 'normal' asc")
                        ->orderByRaw("ps_type = 'feature' asc")
                        ->get();
        foreach ($post_data as $key) {
            $key->media_data          = midea::where('m_ps_id',$key->ps_id)->first();
            $key->category_data       = category::find($key->ps_ct_id);
            $key->subcategory_data    = subcategory::find($key->ps_st_id); 
            $key->create_by           = user::find($key->ps_ur_id); 
            $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key->created_at));
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
       
        $location = post::select('ps_city')->where('ps_status','active')->distinct()->get();  // groupby
       
       /// return view('user.index2',['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location]) ; 
        return view('user.category_listing',['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location ]) ; 

      
    }

    public function search_attribute($id)
    {
        $subcategory  = subcategory::where('st_ct_id',$id)->get();
        $data =array();
        foreach ($subcategory as $key) {
            $r =0;
            $attt = attribute::where('status','active')->where('at_st_id',$key->st_id)->get(); 
            foreach ($attt as $key1) {
               $res =  attribute_value::where('atv_status','active')->where('atv_at_id',$key1->at_id)->get();
               $r++;
               if (count($res)==0)
               {
                $c = count($attt);
                 unset($attt[$r-1]);
               }
               else{
                $key1->attribute_value_data  = $res;
              }
               
             }
       
             $key->its_attribute = $attt;
          
             array_push($data,$key);
         }
             
         return json_encode($data);
    
    }

   
    public function search_category(Request $request)
    {
        $ctimg = category::find($request->input('category'));
        $search   = $request->input('search');
        $category = $request->input('category');
        $subcategory = $request->input('subcategory');
        $location = $request->input('location');
        $attri    = $request->input('attri');
        $attribute_value = $request->input('attribute_value');
        $data = array();
        $i=0;
       
        foreach($attri as $key=>$value)
        {
            $d = array('title' =>$value,
                        'value' =>$attribute_value[$key]
                       );
           $data[] = $d;
        }
        echo '<pre>';
        print_r($data); exit;
   
    //     print_r($data);
    //   exit;
        
        $post_data = post::where('ps_status','active')
                        ->where('ps_ct_id', $category)
                        ->where('ps_st_id', $subcategory)
                        ->where('ps_city','like', '%' .$location. '%')
                        ->Where('ps_title', 'like', '%' .$search. '%')
                        ->orderByRaw("ps_type = 'normal' asc")
                        ->orderByRaw("ps_type = 'feature' asc")
                        ->paginate(15);
                        foreach($post_data as $keyz=>$v)
                        {
                            $z=0;
                            $post_attribute_data = post_attribute::where('pt_ps_id',$v->ps_id)->get();
                            foreach($post_attribute_data as  $keyp=> $value)
                            {
                               
                 
                                foreach($data as $dt)
                               {
                                  if($value->pt_title===$dt['title'] && $value->pt_value===$dt['value'])
                                  {
                                     
                                      $z++;
                                  }
                                  if($value->pt_title===$dt['title'] && $dt['value']=="any")
                                  {
                                    $z++;
                                  }
                               }
                               
                            }
                            if($z!=count($data))
                            {
                                unset($post_data[$keyz]);
                            }
                           
                            $v->matchs=$z;
                        }
                    //    print_r($post_data);
                    //    exit;
                    
        foreach ($post_data as $key) {
            $key->media_data          = midea::where('m_ps_id',$key->ps_id)->first();
            $key->category_data       = category::find($key->ps_ct_id);
            $key->subcategory_data    = subcategory::find($key->ps_st_id); 
            $key->create_by           = user::find($key->ps_ur_id); 
            $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key->created_at));
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
       
        $location = post::select('ps_city')->where('ps_status','active')->distinct()->get();  // groupby
       
       /// return view('user.index2',['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location]) ; 
        return view('user.category_listing',['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location, 'ctid'=>$category ,'ctimg'=>$ctimg]) ; 

      
    }


    public function search_attribute1($id)
    {
        $subcategory  = subcategory::where('st_ct_id',$id)->first();
       // echo json_encode($subcategory);
        //exit;
        $data =array();
       // foreach ($subcategory as $key) {
            $r =0;
            $attt = attribute::where('status','active')->where('at_st_id',$subcategory->st_id)->get(); 
            foreach ($attt as $key1) {
               $res =  attribute_value::where('atv_status','active')->where('atv_at_id',$key1->at_id)->get();
               $r++;
               if (count($res)==0)
               {
                $c = count($attt);
                 unset($attt[$r-1]);
               }
               else{
                $key1->attribute_value_data  = $res;
              }
               
             }
       
             $subcategory->its_attribute = $attt;
          
             array_push($data,$subcategory);
        // }
        //   print_r($data);
        //   exit;   
         return  json_encode($data);
    
    }

    public function search_attribute_sb($id)
    {
        $subcategory  = subcategory::where('st_id',$id)->first();
       // echo json_encode($subcategory);
        //exit;
        $data =array();
       // foreach ($subcategory as $key) {
            $r =0;
            $attt = attribute::where('status','active')->where('at_st_id',$subcategory->st_id)->get(); 
            foreach ($attt as $key1) {
               $res =  attribute_value::where('atv_status','active')->where('atv_at_id',$key1->at_id)->get();
               $r++;
               if (count($res)==0)
               {
                $c = count($attt);
                 unset($attt[$r-1]);
               }
               else{
                $key1->attribute_value_data  = $res;
              }
               
             }
       
             $subcategory->its_attribute = $attt;
          
             array_push($data,$subcategory);
        // }
        //   print_r($data);
        //   exit;   
         return  json_encode($data);
    
    }

    public function pakistan()
    {
        $post_data = category::get();         
        foreach ($post_data as $key) {

          $key->post_record =  post::where('ps_status','active')
                                ->where('ps_ct_id',$key->ct_id)
                                ->orderByRaw("ps_type = 'normal' asc")
                                ->orderByRaw("ps_type = 'feature' asc")
                                ->paginate(6);
            foreach ($key->post_record as $key2) {
                
           
            $key2->media_data          = midea::where('m_ps_id',$key2->ps_id)->first();
            $key2->category_data       = category::find($key2->ps_ct_id);
            $key2->create_by           = user::find($key2->ps_ur_id);  
            $key2->post_attribute_data = post_attribute::where('pt_ps_id',$key2->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key2->created_at));
            $created ->diff(Carbon::now())->format('%d days, %h hours and %i minutes');
            $diff = $created->diff(Carbon::now());
            if($diff->y)
            {
               $key2->duration=  $diff->y." Years";
            }
            elseif($diff->m) {
                $key2->duration=  $diff->m." Months";
            }
            elseif($diff->d) {
                $key2->duration=  $diff->d." Days";
            } elseif($diff->h) {
                $key2->duration=  $diff->h." Hours";
            } elseif($diff->i) {
                $key2->duration=  $diff->i." Mints";
            }
            elseif($diff->s) {
                $key2->duration=  $diff->s." Second";
            }
        }
            
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
       $location = post::select('ps_city')->where('ps_status','active')->distinct()->get();  // groupby
       foreach ($location as $key1) {
        $i=0;
        $post_d = post::where('ps_status','active')->where('ps_city',$key1->ps_city)->get();
        $post_dd = post::where('ps_status','active')->where('ps_city',$key1->ps_city)->first();
        $media_d = midea::where('m_ps_id',$post_dd->ps_id)->first();
        $key1->location_media = $media_d;
         foreach ($post_d as $key2) {
             $i++;
         }
         $key1->location_num_post =$i;
    }
    //    print_r($post_data);
    //    exit();
        return view('user.new_index',['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location]) ; 
      
    }



    public function new_post_detail($id) 
    {
        $key1 = post::find($id);
        if($key1)
        {
            $key1->media_data          = midea::where('m_ps_id',$key1->ps_id)->first();
            $key1->media_all_data      = midea::where('m_ps_id',$key1->ps_id)->get();
           
            $key1->category_data       = category::find($key1->ps_ct_id);
            $key1->subcategory_data    = subcategory::find($key1->ps_st_id); 
            $key1->create_by           = user::find($key1->ps_ur_id); 
            $key1->comment_total       = comment::where('cm_ps_id',$key1->ps_id)->count(); 
            $key1->rating_total        = rating::where('r_ps_id',$key1->ps_id)->count(); 
            $key1->rating_like         = rating::where('r_rating','1')->where('r_ps_id',$key1->ps_id)->count(); 
            $key1->rating_love         = rating::where('r_rating','2')->where('r_ps_id',$key1->ps_id)->count(); 
            $key1->rating_soso         = rating::where('r_rating','3')->where('r_ps_id',$key1->ps_id)->count(); 
            $key1->rating_dislike      = rating::where('r_rating','0')->where('r_ps_id',$key1->ps_id)->count(); 
            $key1->feature_are         = post_feature::where('pf_ps_id',$key1->ps_id)
                                                ->Join('features', 'features.fe_id', '=', 'post_features.pf_fe_id')
                                                ->get();
                                                
            $key1->tag_are             =  post_tag::where('pt_ps_id',$key1->ps_id)
                                                   ->Join('tags', 'tags.tg_id', '=', 'post_tags.pt_tg_id')
                                                   ->get(); 
            $key1->user_comments       =  comment::where('cm_ps_id',$key1->ps_id)
                                                ->Join('users', 'users.id', '=', 'comments.cm_u_id')
                                                ->take(10)
                                                ->get();  
            $key1->user_rating         =  rating::where('r_ps_id',$key1->ps_id)
                                                ->Join('users', 'users.id', '=', 'ratings.r_u_id')
                                                ->get();                                        
            $key1->post_attribute_data = post_attribute::where('pt_ps_id',$key1->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key1->created_at));
            $created ->diff(Carbon::now())->format('%d days, %h hours and %i minutes');
            $diff = $created->diff(Carbon::now());
            if($diff->y)
            {
               $key1->duration=  $diff->y." Years"; 
            }
            elseif($diff->m) {
                $key1->duration=  $diff->m." Months";
            }
            elseif($diff->d) {
                $key1->duration=  $diff->d." Days";
            } elseif($diff->h) {
                $key1->duration=  $diff->h." Hours";
            } elseif($diff->i) {
                $key1->duration=  $diff->i." Mints";
            }
            elseif($diff->s) {
                $key1->duration=  $diff->s." Second";
            }
      
            $post_data = post::where('ps_status','active')
            ->where('ps_ct_id',$key1->ps_ct_id)
            ->orderByRaw("ps_type = 'normal' asc")
            ->orderByRaw("ps_type = 'feature' asc")
            ->get();
            foreach ($post_data as $key) {
                $key->media_data          = midea::where('m_ps_id',$key->ps_id)->first();
                $key->category_data       = category::find($key->ps_ct_id);
                $key->subcategory_data    = subcategory::find($key->ps_st_id); 
                $key->create_by           = user::find($key->ps_ur_id); 
                $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
                $created = Carbon::createFromTimeStamp(strtotime($key->created_at));
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
            }
        //   print_r($key1->media_data);
        //   exit;
          
        return view('user.new_ad_detail',['post_data'=>$key1 , 'related_data'=>$post_data]) ; 
        }
        else
        {
            
            return Redirect::back()->withErrors(['msg', 'The Message']);  
        }
      
    }




    public function new_categorylisting($id)
    {
        $ctimg = category::find($id);
        $post_data = post::where('ps_status','active')
        ->where('ps_ct_id',$id)
        ->orderByRaw("ps_type = 'normal' asc")
        ->orderByRaw("ps_type = 'feature' asc")
        ->paginate(10);
        foreach ($post_data as $key) {
            $key->media_data          = midea::where('m_ps_id',$key->ps_id)->first();
            $key->category_data       = category::find($key->ps_ct_id);
            $key->subcategory_data    = subcategory::find($key->ps_st_id); 
            $key->create_by           = user::find($key->ps_ur_id); 
            $key->user_comments      =  comment::where('cm_ps_id',$key->ps_id)
                                                    ->Join('users', 'users.id', '=', 'comments.cm_u_id')
                                                    ->take(10)
                                                    ->get(); 
            $key->post_attribute_data = post_attribute::where('pt_ps_id',$key->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key->created_at));
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
       
        $location = post::select('ps_city')->where('ps_status','active')->distinct()->get();  // groupby
       
        // return view('user.index2',['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location]) ; 
      
      
        return view('user.new_category_listing',['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location , 'ctid'=>$id , 'ctimg'=>$ctimg]) ; 

    }


    public function post_forum()
    {

        $data['user_data'] =User::find(session('user_data'));
        $data['category'] =category::get(); 
      
        return view('user.post.post_forum_create',$data) ; //->with('category',$data);
    
    }

    public function forum_store(Request $request)
    {
        $uu  = Auth::user();

        $data=$request->input();
       
        $attribute=$request->input('attribute');
        $tag     = $request->input('tag_name');
        $feature = $request->input('feature_name');
        $attribute_value=$request->input('attribute_value');
    //    print_r($attribute);
    //    exit;
        $data = array(
                        "ps_title"   => $request->input('title'),
                        "ps_detail"  => $request->input('detail'),
                        "ps_price"   => $request->input('price'),
                        "ps_address" => $request->input('address'),
                        "ps_ct_id"   => $request->input('ctid'),
                       // "ps_st_id"   => $request->input('sctid'),
                        "ps_ur_id"   => $uu->id,
                        "ps_lati"    => $request->input('state'),
                        "ps_longi"   => $request->input('city'),
                     );
                       
                    $d =  post::create($data);
                  $i=0;
                  if($attribute)
                  {
                      
                   foreach($attribute as $key)
                   {
                       $at = array(
                                      "pt_title" =>$key,
                                      "pt_value" =>$attribute_value[$i++],
                                      "pt_ps_id" =>$d->ps_id,
                                    );
                                   
                                    post_attribute::create($at);
                   }
                  if($feature)
                  {
                    foreach($feature as $key)
                    {
                        $at = array(
                                        "pf_fe_id" =>$key,
                                        "pf_ps_id" =>$d->ps_id,
                                        );
                                    
                                        post_feature::create($at);
                    }
                  }
                  if($tag)
                  {
                    foreach($tag as $key)
                    {
                        $at = array(
                                    "pt_tg_id" =>$key,
                                    "pt_ps_id" =>$d->ps_id,
                                    );
                       post_tag::create($at);
                    }
                  }
                  }
                   $request->session()->put('post_id', $d->ps_id); 
                   return redirect()->to('image_post/'.$d->ps_id);

    }

}
