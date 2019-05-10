<?php

namespace App\Http\Controllers;

use App\attribute;
use App\subcategory;
use App\category;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attribute = attribute::where('status','active')->get();
      
        return view('admin.attribute.attribute_list')->with('attribute_data',$attribute);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $data = category::where('ct_status','active')->get();
        return view('admin.attribute.attribute_create')->with('category_data',$data);
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
        $attribute=$request->input('attribute');
        $subcategory=$request->input('subcategory');
        //$category=$request->input('category');
       
        $data =array(
            'at_name' => $attribute,                   
            'at_st_id' => $subcategory                   
          );
        
          
     attribute::create($data);  
     return redirect('attribute')->with('info','Data is Added Successfully!');
       // $post=$request->input();
       // print_r($post); exit;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function show(attribute $attribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //print_r($id); exit;
        $data=attribute:: findOrFail($id);
        return view('admin.attribute.attribute_update')->with('attribute_data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $attribute=$request->input('attribute');
       
       
        $data =array(
            'at_name' => $attribute  ,                                   
          );
        
     attribute::whereat_id($id)->update($data);  
     return redirect('attributer')->with('info','Data is updated Successfully!');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          $data =array(
            'status' =>'deactive'                   
                              
          );
        
     attribute::whereat_id($id)->update($data);  
     return redirect('attribute')->with('info','Data is Added Successfully!');
    }

    public function attribute_store(Request $request)
    {
        $post=$request->post();
        print_r($post); exit;
    }

    public function getcategory($id)
    {
        $subcategories = subcategory::where('st_ct_id', $id)->get();
        //print_r($subcategories) ; exit;     
        return json_encode($subcategories);

    }

    public function getattribute($id)
    {
        $attribute = attribute::where('at_st_id', $id)->get();
        //print_r($attribute) ; exit;     
        return json_encode($attribute);
    }
}
