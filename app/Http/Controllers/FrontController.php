<?php

namespace App\Http\Controllers;

use App\post;
use App\category;
use App\subcategory;
use App\attribute;
use App\attribute_value;
use App\post_attribute;
use App\midea;
use Illuminate\Http\Request;
use Redirect;
use Session;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = category::where('ct_status','active')->get();
        foreach ($data['category'] as $key) {
           $key->subcategory = $data['subcategory'] = subcategory::where('st_status','active')->where('st_ct_id',$key->ct_id)->get();
        
        }
        return view('user.post.category_show',$data) ; //->with('category',$data);
    
    }
    public function post_create()
    {
      
        $data['category'] = category::where('ct_status','active')->get();
        $data['subcategory'] = subcategory::where('st_status','active')->get();
        return view('user.post.post_create',$data) ; //->with('category',$data);
    
    }



    public function post_form($id)
    {
        $subcategory = subcategory::find($id);
        $category    = category::find($subcategory->st_ct_id);
        $data['category_name'] =$category->ct_name;
        $data['subcategory_name'] =$subcategory->st_name;
        $data['category_id'] =$category->ct_id;
        $data['subcategory_id'] =$subcategory->st_id;
        $data['attribute_data'] = attribute::where('status','active')->where('at_st_id',$id)->get();
        foreach ($data['attribute_data'] as $key) {
           $key->attribute_value_data  = attribute_value::where('atv_status','active')->where('atv_at_id',$key->at_id)->get();
        
        }
        return view('user.post.post_create',$data) ; //->with('category',$data);
    
    }

    
    public function post_store(Request $request)
    {
       
        $data=$request->input();
        $attribute=$request->input('attribute');
        $attribute_value=$request->input('attribute_value');
    //    print_r($attribute);
    //    exit;
        $data = array(
                        "ps_title"   => $request->input('title'),
                        "ps_detail"  => $request->input('detail'),
                        "ps_price"   => $request->input('price'),
                        "ps_address" => $request->input('address'),
                        "ps_ct_id"   => $request->input('ctid'),
                        "ps_st_id"   => $request->input('sctid'),
                        "ps_ur_id"   => 1,
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
}
