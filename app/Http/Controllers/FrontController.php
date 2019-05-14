<?php

namespace App\Http\Controllers;

use App\post;
use App\category;
use App\subcategory;
use App\attribute;
use App\attribute_value;
use Illuminate\Http\Request;

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
        $data['attribute_data'] = attribute::where('status','active')->where('at_st_id',$id)->get();
        foreach ($data['attribute_data'] as $key) {
           $key->attribute_value_data  = attribute_value::where('atv_status','active')->where('atv_at_id',$key->at_id)->get();
        
        }
        return view('user.post.post_create',$data) ; //->with('category',$data);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
