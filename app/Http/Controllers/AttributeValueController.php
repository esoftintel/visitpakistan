<?php

namespace App\Http\Controllers;

use App\attribute_value;
use App\attribute;
use App\subcategory;
use App\category;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $attribute_value = attribute_value::where('atv_status','active')->get();
       return view('admin.attributevalue.attribute_value_list')->with('attributevalue_data',$attribute_value);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['category'] = category::where('ct_status','active')->get();
        
        //$data['attribute']=attribute::where('at_status','active')->get();
        return view('admin.attributevalue.attribute_value_add')->with($data);

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
        $attribute_value=$request->input('value');
        $attribute=$request->input('attribute');
        
       
        $data =array(
            'atv_name' => $attribute_value,                   
            'atv_at_id' => $attribute                   
          );
        
          
          attribute_value::create($data);  
     return redirect('AttributeValue')->with('info','Data is Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function show(attribute_value $attribute_value)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=attribute_value:: findOrFail($id);
        return view('admin.attributevalue.attribute_value_update')->with('attribute_value_data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $attribute_value=$request->input('value');
       
       
        $data =array(
            'atv_name' => $attribute_value  ,                                   
          );
        
     attribute_value::whereatv_id($id)->update($data);  
     return redirect('attribute_value')->with('info','Data is updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data =array(
            'atv_status' =>'deactive'                   
                              
          );
        
     attribute_value::whereatv_id($id)->update($data);  
     return redirect('attribute_value')->with('info','Data is Deleted Successfully!');
       
    }
}
