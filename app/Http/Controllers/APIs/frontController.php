<?php

namespace App\Http\Controllers\APIs;

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
use Dotenv\Regex\Result;
use App\feature; 
use App\tag; 
use App\comment; 
use App\post_tag;
use App\post_feature;
use App\postClick;
use Redirect;
use Session;
use Carbon\Carbon;
class frontController extends Controller
{
    //
    public function pakistan()
    {
        $post_data = category::get();
        foreach ($post_data as $key) {
            $key->post_record =  post::where('ps_status', 'active')
                                ->where('ps_ct_id', $key->ct_id)
                                ->orderByRaw("ps_type = 'normal' asc")
                                ->orderByRaw("ps_type = 'feature' asc")
                                ->paginate(6);
            foreach ($key->post_record as $key2) {
                $key2->media_data          = midea::where('m_ps_id', $key2->ps_id)->first();
                $key2->category_data       = category::find($key2->ps_ct_id);
                $key2->create_by           = user::find($key2->ps_ur_id);
                $key2->post_attribute_data = post_attribute::where('pt_ps_id', $key2->ps_id)->get();
                $created = Carbon::createFromTimeStamp(strtotime($key2->created_at));
                $created ->diff(Carbon::now())->format('%d days, %h hours and %i minutes');
                $diff = $created->diff(Carbon::now());
                if ($diff->y) {
                    $key2->duration=  $diff->y." Years";
                } elseif ($diff->m) {
                    $key2->duration=  $diff->m." Months";
                } elseif ($diff->d) {
                    $key2->duration=  $diff->d." Days";
                } elseif ($diff->h) {
                    $key2->duration=  $diff->h." Hours";
                } elseif ($diff->i) {
                    $key2->duration=  $diff->i." Mints";
                } elseif ($diff->s) {
                    $key2->duration=  $diff->s." Second";
                }
            }
        }
        $category_data       = category::get();
        foreach ($category_data as $key1) {
            $i=0;
            $post_d = post::where('ps_status', 'active')->where('ps_ct_id', $key1->ct_id)->get();
            foreach ($post_d as $key2) {
                $i++;
            }
            $key1->its_post =$i;
        }
        $location = post::select('ps_city')->where('ps_status', 'active')->distinct()->get();  // groupby
        foreach ($location as $key1) {
            $i=0;
            $post_d = post::where('ps_status', 'active')->where('ps_city', $key1->ps_city)->get();
            $post_dd = post::where('ps_status', 'active')->where('ps_city', $key1->ps_city)->first();
            $media_d = midea::where('m_ps_id', $post_dd->ps_id)->first();
            $key1->location_media = $media_d;
            foreach ($post_d as $key2) {
                $i++;
            }
            $key1->location_num_post =$i;
        }
        //    print_r($post_data);
        //    exit();
        // return view('user.new_index', ['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location]) ;
        if ($post_data) {
            $result['status']=1;
            $result['posts']=$post_data;
            $result['categories']=$post_data;
            $result['location']=$location;
            return response()->json([$result]);
        } else {
            $result['posts']=$post_data;
            $result['categories']=$post_data;
            $result['location']=$location;
            return response()->json($result);
        }
    }

    public function topView()
    {
        $post_data=post::orderBy('ps_views', 'DESC')->get();
            foreach ($post_data as $key2) {
                $media_data          = midea::where('m_ps_id', $key2->ps_id)->first();
                $key2->media_url=asset('images').'/media/'.$media_data['m_url'];
                $key2->category_data       = category::find($key2->ps_ct_id);
                $key2->create_by           = user::find($key2->ps_ur_id);
                $key2->post_attribute_data = post_attribute::where('pt_ps_id', $key2->ps_id)->get();
                $created = Carbon::createFromTimeStamp(strtotime($key2->created_at));
                $created ->diff(Carbon::now())->format('%d days, %h hours and %i minutes');
                $diff = $created->diff(Carbon::now());
                if ($diff->y) {
                    $key2->duration=  $diff->y." Years";
                } elseif ($diff->m) {
                    $key2->duration=  $diff->m." Months";
                } elseif ($diff->d) {
                    $key2->duration=  $diff->d." Days";
                } elseif ($diff->h) {
                    $key2->duration=  $diff->h." Hours";
                } elseif ($diff->i) {
                    $key2->duration=  $diff->i." Mints";
                } elseif ($diff->s) {
                    $key2->duration=  $diff->s." Second";
                }
            }
        $category_data       = category::get();
        foreach ($category_data as $key1) {
            $key1->ct_icone=asset('/images').'/'.$key1->ct_icone;
            $key1->ct_image=asset('/images').'/'.$key1->ct_image;
            $i=0;
            $post_d = post::where('ps_status', 'active')->where('ps_ct_id', $key1->ct_id)->get();
            foreach ($post_d as $key2) {
                $i++;
            }
            $key1->its_post =$i;
        }
        $location = post::select('ps_city')->where('ps_status', 'active')->distinct()->get();  // groupby
        foreach ($location as $key1) {
            $i=0;
            $post_d = post::where('ps_status', 'active')->where('ps_city', $key1->ps_city)->get();
            $post_dd = post::where('ps_status', 'active')->where('ps_city', $key1->ps_city)->first();
            $media_d = midea::where('m_ps_id', $post_dd->ps_id)->first();
            $key1->location_media = $media_d;
            foreach ($post_d as $key2) {
                $i++;
            }
            $key1->location_num_post =$i;
        }
        //    print_r($post_data);
        //    exit();
        // return view('user.new_index', ['post_data'=>$post_data,'category_data'=>$category_data,'location'=>$location]) ;
        if ($post_data) {
            $result['status']=1;
            $result['posts']=$post_data;
            $result['categories']=$category_data;
            $result['location']=$location;
            return response()->json([$result]);
        } else {
            $result['posts']=$post_data;
            $result['categories']=$category_data;
            $result['location']=$location;
            return response()->json($result);
        }
    }

    public function allUsers()
    {
        $users=User::all();
        if ($users) {
            $result['status']=1;
            $result['result']=$users;
            return response()->json($result);
        } else {
            $result['status']=0;
            $result['result']=$users;
            return response()->json($result);
        }
    }

    public function allCategories()
    {
        $categories=category::all();
        if ($categories) {
            $result['status']=1;
            $result['result']=$categories;
            return response()->json($result);
        } else {
            $result['status']=0;
            $result['result']=$categories;
            return response()->json($result);
        }
    }

    public function categoryListings($id)
    {
        $ctimg = category::find($id);
        $post_data = post::where('ps_status', 'active')
        ->where('ps_ct_id', $id)
        ->orderByRaw("ps_type = 'normal' asc")
        ->orderByRaw("ps_type = 'feature' asc")
        ->paginate(10);
        foreach ($post_data as $key) {
            $key->media_data          = midea::where('m_ps_id', $key->ps_id)->first();
            $key->category_data       = category::find($key->ps_ct_id);
            $key->subcategory_data    = subcategory::find($key->ps_st_id);
            $key->create_by           = user::find($key->ps_ur_id);
            $key->user_comments      =  comment::where('cm_ps_id', $key->ps_id)
                                                    ->Join('users', 'users.id', '=', 'comments.cm_u_id')
                                                    ->take(10)
                                                    ->get();
            $key->post_attribute_data = post_attribute::where('pt_ps_id', $key->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key->created_at));
            $created ->diff(Carbon::now())->format('%d days, %h hours and %i minutes');
            $diff = $created->diff(Carbon::now());
            if ($diff->y) {
                $key->duration=  $diff->y." Years";
            } elseif ($diff->m) {
                $key->duration=  $diff->m." Months";
            } elseif ($diff->d) {
                $key->duration=  $diff->d." Days";
            } elseif ($diff->h) {
                $key->duration=  $diff->h." Hours";
            } elseif ($diff->i) {
                $key->duration=  $diff->i." Mints";
            } elseif ($diff->s) {
                $key->duration=  $diff->s." Second";
            }
        }
        $category_data       = category::get();
        foreach ($category_data as $key1) {
            $i=0;
            $post_d = post::where('ps_status', 'active')->where('ps_ct_id', $key1->ct_id)->get();
            foreach ($post_d as $key2) {
                $i++;
            }
            $key1->its_post =$i;
        }
       
        $location = post::select('ps_city')->where('ps_status', 'active')->distinct()->get();  // groupby

        if ($category_data) {
            $result['status']=1;
            $result['category']=$ctimg;
            $result['posts']=$post_data;
            $result['location']=$location;
            return response()->json($result);
        } else {
            $result['status']=0;
            $result['category']=$ctimg;
            $result['posts']=$post_data;
            $result['location']=$location;
            return response()->json($result);
        }
    }
    public function postDetails($id)
    {
        $key1 = post::find($id);
        $key1->ps_views+=1;
        $key1->update();
        $product_click =  new postClick;

        $product_click->post_id = $key1->ps_id;
        $product_click->click_date = Carbon::now()->format('Y-m-d');
        $product_click->save();          
        //$pmeta = $product->tags;

        //  if($product->color != null)
        // {
        //     $color = explode(',', $product->color);            
        // }     
        // $product->views+=1;
        // $product->update(); 
        // $product_click =  new ProductClick;
        // $product_click->product_id = $product->id;
        // $product_click->date = Carbon::now()->format('Y-m-d');
        // $product_click->save();          
        // $pmeta = $product->tags;


        //$data=post::where('ps_id',$id)->update(['ps_views' => $view]);
        if ($key1) {
            $key1->media_data          = midea::where('m_ps_id', $key1->ps_id)->first();
            $key1->media_all_data      = midea::where('m_ps_id', $key1->ps_id)->get();
             foreach($key1->media_all_data as $media)
            {
                $media->m_url=asset('images').'/media/'.$media->m_url;
            }
            $key1->category_data       = category::find($key1->ps_ct_id);
            $key1->subcategory_data    = subcategory::find($key1->ps_st_id);
            $key1->create_by           = user::find($key1->ps_ur_id);
            $key1->comment_total       = comment::where('cm_ps_id', $key1->ps_id)->count();
            $key1->rating_total        = rating::where('r_ps_id', $key1->ps_id)->count();
            $key1->rating_like         = rating::where('r_rating', '1')->where('r_ps_id', $key1->ps_id)->count();
            $key1->rating_love         = rating::where('r_rating', '2')->where('r_ps_id', $key1->ps_id)->count();
            $key1->rating_soso         = rating::where('r_rating', '3')->where('r_ps_id', $key1->ps_id)->count();
            $key1->rating_dislike      = rating::where('r_rating', '0')->where('r_ps_id', $key1->ps_id)->count();
            $key1->feature_are         = post_feature::where('pf_ps_id', $key1->ps_id)
                                                ->Join('features', 'features.fe_id', '=', 'post_features.pf_fe_id')
                                                ->get();
                                                
            $key1->tag_are             =  post_tag::where('pt_ps_id', $key1->ps_id)
                                                   ->Join('tags', 'tags.tg_id', '=', 'post_tags.pt_tg_id')
                                                   ->get();
            $key1->user_comments       =  comment::where('cm_ps_id', $key1->ps_id)
                                                ->Join('users', 'users.id', '=', 'comments.cm_u_id')
                                                ->take(10)
                                                ->get();
            $key1->user_rating         =  rating::where('r_ps_id', $key1->ps_id)
                                                ->Join('users', 'users.id', '=', 'ratings.r_u_id')
                                                ->get();
            $key1->post_attribute_data = post_attribute::where('pt_ps_id', $key1->ps_id)->get();
            $created = Carbon::createFromTimeStamp(strtotime($key1->created_at));
            $created ->diff(Carbon::now())->format('%d days, %h hours and %i minutes');
            $diff = $created->diff(Carbon::now());
            if ($diff->y) {
                $key1->duration=  $diff->y." Years";
            } elseif ($diff->m) {
                $key1->duration=  $diff->m." Months";
            } elseif ($diff->d) {
                $key1->duration=  $diff->d." Days";
            } elseif ($diff->h) {
                $key1->duration=  $diff->h." Hours";
            } elseif ($diff->i) {
                $key1->duration=  $diff->i." Mints";
            } elseif ($diff->s) {
                $key1->duration=  $diff->s." Second";
            }
      
            $post_data = post::where('ps_status', 'active')
            ->where('ps_ct_id', $key1->ps_ct_id)
            ->orderByRaw("ps_type = 'normal' asc")
            ->orderByRaw("ps_type = 'feature' asc")
            ->get();
            foreach ($post_data as $key) {
                $key->media_data          = midea::where('m_ps_id', $key->ps_id)->first();
                $key->category_data       = category::find($key->ps_ct_id);
                $key->subcategory_data    = subcategory::find($key->ps_st_id);
                $key->create_by           = user::find($key->ps_ur_id);
                $key->post_attribute_data = post_attribute::where('pt_ps_id', $key->ps_id)->get();
                $created = Carbon::createFromTimeStamp(strtotime($key->created_at));
                $created ->diff(Carbon::now())->format('%d days, %h hours and %i minutes');
                $diff = $created->diff(Carbon::now());
                if ($diff->y) {
                    $key->duration=  $diff->y." Years";
                } elseif ($diff->m) {
                    $key->duration=  $diff->m." Months";
                } elseif ($diff->d) {
                    $key->duration=  $diff->d." Days";
                } elseif ($diff->h) {
                    $key->duration=  $diff->h." Hours";
                } elseif ($diff->i) {
                    $key->duration=  $diff->i." Minutes";
                } elseif ($diff->s) {
                    $key->duration=  $diff->s." Second";
                }
            }
            if ($key1) {
                $result['status']=1;
                $result['result']=$key1;
                $result['relatedposts']=$post_data;
                return response()->json($result);
            } else {
                $result['status']=0;
                $result['result']=$key1;
                $result['relatedposts']=$post_data;
                return response()->json($result);
            }

        }
        else{
            $result['status']=0;
                return response()->json($result);
        }
        
    }
    public function add_question()
    {
    }
}
