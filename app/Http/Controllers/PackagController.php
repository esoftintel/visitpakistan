<?php

namespace App\Http\Controllers;

use App\packag;
use App\category;
use App\subcategory;
use Illuminate\Http\Request;

class PackagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $packages = packag::where('pk_status','active')->get();
        
      
        return view('admin.packages.packages_list')->with('packages_data',$packages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //package create function for controller
         $data=category::where('ct_status','active')->get();
         

         return view('admin.packages.package_create')->with('categories',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //package submit data
        $title=$request->input('title');
        $detail=$request->input('description');
        $price=$request->input('price');
        $duration=$request->input('duration');
        $category=$request->input('category');
        $subcategory=$request->input('subcategory');
        //$category=$request->input('category');
       
        $data =array(
            'pk_title' => $title,                   
            'pk_detail' => $detail ,
            'pk_price' => $price,                   
            'pk_duration' => $duration,
            'pk_ct_id' => $category,                   
            'pk_st_id' => $subcategory                  
          );
        //   echo '<pre>'; 
        //   print_r($data); exit;
        
          
     packag::create($data);  
     return redirect('packages')->with('info','Data is Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\packag  $packag
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //package upatae data
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\packag  $packag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=packag:: findOrFail($id);
        
        return view('admin.packages.package_update')->with('package_data',$data);
        //print_r($packag); exit;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\packag  $packag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $title=$request->input('title');
        $detail=$request->input('description');
        $price=$request->input('price');
        $duration=$request->input('duration');

        $data =array(
            'pk_title' => $title,                   
            'pk_detail' => $detail ,
            'pk_price' => $price,                   
            'pk_duration' => $duration,                 
          );
          
     packag::where('pk_id',$id)->update($data);  
     return redirect('packages')->with('info','Data is updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\packag  $packag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete package function
        $data =array(
            'pk_status' =>'deactive'                                      
          );
     packag::wherepk_id($id)->update($data);  
     return redirect('packages')->with('info','Data is Deleted Successfully!');
    }

    public function relation()
    {
        $category = packag::find(1)->category;
        echo '<pre>';
        print_r($category); exit;
    }
}
