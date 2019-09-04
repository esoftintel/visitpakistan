<?php

namespace App\Http\Controllers;

use App\feature;
use App\category;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $feature_data = feature::get();
        $feature_data = feature::where('fe_status','active')
                            ->Join('categories', 'categories.ct_id', '=', 'features.fe_ct_id')
                            ->get();
        return view('admin.feature.feature_list')->with('feature_data',$feature_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = category::where('ct_status','active')->get();
      
        return view('admin.feature.feature_add')->with('category',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attribute=$request->input('name');
      
        $category=$request->input('category');
       
        $data1 =array(
                        'fe_name' => $attribute,                   
                        'fe_ct_id' => $category                   
                    );
         feature::create($data1);  
    
     return redirect('feature')->with('info','Data is Added Successfully!');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=feature:: findOrFail($id);
        return view('admin.feature.feature_update')->with('feature_data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attribute=$request->input('name');
       
       
        $data =array(
                      'fe_name' => $attribute  ,                                   
                    );
        
     feature::wherefe_id($id)->update($data);  
     return redirect('feature')->with('info','Data is updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =array(
                       'fe_status' =>'deactive' ,                                     
                    );
     feature::wherefe_id($id)->update($data);  
     return redirect('feature')->with('info','Data is Added Successfully!'); 
    }
}
