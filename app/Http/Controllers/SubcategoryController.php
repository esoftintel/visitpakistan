<?php

namespace App\Http\Controllers;

use App\subcategory;
use App\category;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = subcategory::where('st_status','active')
                            ->Join('categories', 'categories.ct_id', '=', 'subcategories.st_ct_id')
                           ->get();
                         
        return view('admin.subCategory.subCategory_list')->with('subCategory_data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = category::where('ct_status','active')->get();
        return view('admin.subCategory.subCategory_add')->with('category_data',$data);
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
        $post =$request->input();
        $subcategory=$request->input('name');
        $category=$request->input('category');
       
        $data =array(
            'st_name' => $subcategory,                   
            'st_ct_id' => $category                   
          );
     subcategory::create($data);  
     return redirect('subcategory')->with('info','Data is Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(subcategory $subcategory)
    {
        //
        $data['category_data'] = category::where('ct_status','active')->get();
        $data['subcategory']=$subcategory;
     
        return view('admin.subCategory.subCategory_update')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        
        $subcategory=$request->input('subcategory');
        $category=$request->input('category_id');
       
        $data =array(
            'st_name' => $subcategory,                   
            'st_ct_id' => $category                   
          );
        
     subcategory::wherest_id($id)->update($data);  
     return redirect('subcategory')->with('info','Data is updated Successfully!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function distory($id)
    {
        //
        $data =array(
            'st_status' =>'deactive'                   
                              
          );
        
     subcategory::wherest_id($id)->update($data);  
     return redirect('subcategory')->with('info','Data is updated Successfully!');
    }
}
