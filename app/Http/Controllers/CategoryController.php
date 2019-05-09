<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = category::where('ct_status','active')->get();
        
        return view('admin.category.category_list')->with('category_data',$data);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.category_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'userfile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('userfile')) {
           $image = $request->file('userfile');
            $ctname = $request->input('name');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $data =array(
                     'ct_name' => $ctname,                   
                     'ct_icone' => $name                   
                   );
                   
              category::create($data);  
              return redirect('category')->with('info','Data is Added Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
     
     
        $data['category_data'] = category::findOrFail($id);
        return view('admin.category.category_update',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        
        $id=$category->ct_id;

        if($image= $request->file('userfile')){
            $new_name=rand().'.'. $image->getClientOriginalExtension();
            $image->move(public_path('images'),$new_name);
            $form_data=array(
                'ct_name'          =>$request->name,
                'ct_icone'         =>$new_name
    
               );
        }
        else{
            $form_data=array(
                'ct_name'    =>$request->name,
                'image'      =>$request->oldimage
    
               );
        }
       
        category::wherect_id($id)->update($form_data);
        return redirect('category')->with('info','Data is Updated Successfully!');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }

    public function category_delete($id)
    {
        $delete_data=array(
            'ct_status'=>'deactive'
        );
        category::wherect_id($id)->update($delete_data);
        return redirect('category')->with('info','Data is Deleted Successfully!');
    }
}
