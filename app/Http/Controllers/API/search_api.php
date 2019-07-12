<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\post;
use App\category;
use App\subcategory;
use App\attribute;
use App\attribute_value;
use App\post_attribute;
use App\midea;
use App\User;
use App\like; 

use Redirect;
use Session;
use Carbon\Carbon;

class search_api extends Controller
{
    //
    
       public function search(Request $request)
    {
        $search   = $request->input('search');
        // $category = $request->input('category');
        // $price    = (int)$request->input('price');
        // $location = $request->input('location');
        $post_data = post::where('ps_status','active') 
                       // ->where('ps_price','>=',$price)
                        // ->where('ps_ct_id','like', '%' .$category. '%')
                        // ->where('ps_city','like', '%' .$location. '%')
                        ->Where('ps_title', 'like', '%' .$search. '%')
                        ->Join('categories', 'categories.ct_id', '=', 'posts.ps_ct_id')
                        ->Join('subcategories', 'subcategories.st_id', '=', 'posts.ps_st_id')
                        ->join('users','users.id', '=', 'posts.ps_ur_id')
                        ->orderByRaw("ps_type = 'normal' asc")
                        ->orderByRaw("ps_type = 'feature' asc")
                        ->get();
                        
        foreach ($post_data as $key) {
            $media_data          = midea::where('m_ps_id',$key->ps_id)->first();
            $key->post_image_url=asset('public/images').'/media/'.$media_data['m_url'];
            
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

       
        // $category_data       = category::get();
        // foreach ($category_data as $key1) {
        //     $i=0;
        //     $post_d = post::where('ps_status','active')->where('ps_ct_id',$key1->ct_id)->get();
        //      foreach ($post_d as $key2) {
        //          $i++;
        //      }
        //      $key1->its_post =$i;
        // }
      
       
      
      
      
    
    
    if($post_data)
        {

            $result['status']=1;
            $result['result']=$post_data;
            return response()->json($result); 
        }
        else{
            $result['status']=0;
            $result['result']=$post_data;
            return response()->json($result);
        }
    }
    
    public function search_category(Request $request)
    {
        
        //print_r($request->input())
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
           $data[$i++] = $d;
        }
        $post_data = post::where('ps_status','active')
                        ->where('ps_ct_id', $category)
                        ->where('ps_st_id', $subcategory)
                        ->where('ps_city','like', '%' .$location. '%')
                        ->Where('ps_title', 'like', '%' .$search. '%')
                        ->orderByRaw("ps_type = 'normal' asc")
                        ->orderByRaw("ps_type = 'feature' asc")
                        ->paginate(15);

                        // print_r($post_data);
                        // exit;
                     
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
        
         if($post_data)
        {

            $result['status']=1;
            $result['result']=$post_data;
            return response()->json($result); 
        }
        else{
            $result['status']=0;
            $result['result']=$post_data;
            return response()->json($result);
        }
        
        
        
    }
    
    
}
