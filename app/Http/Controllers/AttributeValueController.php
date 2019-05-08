<?php

namespace App\Http\Controllers;

use App\attribute_value;
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
       $attribute_value = attribute_value::get();
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
    public function edit(attribute_value $attribute_value)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, attribute_value $attribute_value)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function destroy(attribute_value $attribute_value)
    {
        //
    }
}
