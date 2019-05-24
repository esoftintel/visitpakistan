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
            $image->image_path= asset('images').'/'.$image->md_url;
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
   
}
