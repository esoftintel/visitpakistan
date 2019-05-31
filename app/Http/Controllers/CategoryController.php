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
    
        if ($request->hasFile('userfile') && $request->hasFile('image')) {
           $icon = $request->file('userfile');
           $image= $request->file('image');
           $ctname = $request->input('name');

           $iconname = time().'.'.$icon->getClientOriginalExtension();
            
            $new_name=rand().'.'. $image->getClientOriginalExtension();
           
            $Path = public_path('/images');
            $image->move($Path, $new_name);
            $icon->move($Path, $iconname);
            
            $data =array(
                     'ct_name' => $ctname,                   
                     'ct_icone' => $iconname,
                     'ct_image' => $new_name                   
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
    public function edit(category $category ,$id)
    {
        $data['category_data'] = category::where('ct_id',$id)->first();
        return view('admin.category.category_update',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      
        $this->validate($request, [
            'userfile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    

        if ($request->hasFile('userfile') && $request->hasFile('image')) {
           
           $icon= $request->file('userfile');
           $image = $request->file('image');
            $ctname = $request->input('name');
            $iconname = time().'.'.$icon->getClientOriginalExtension();
            $imagename = time().'.'.$image->getClientOriginalExtension();
          
            $destinationPath = public_path('/images');
            $icon->move($destinationPath, $iconname);
            $image->move($destinationPath, $imagename);
            $data =array(
                     'ct_name' => $ctname,                   
                     'ct_icone' => $iconname,
                     'ct_image'=>$imagename                  
                   );

        }
        else{
            
            $data =array(
                'ct_name' =>  $request->input('name'),                   
                'ct_icone' => $request->input('oldimg') , 
                'ct_image' => $request->input('oldimage')                
              );
              
            }
          
         category::where('ct_id',$id)->update($data);  
         return redirect('category')->with('info','Data is Udateded Successfully!');
  
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data =array(
            'ct_status' =>'deactive'                                      
          );
     category::wherect_id($id)->update($data);  
     return redirect('category')->with('info','Data is Deleted Successfully!');
    }

    public function elequent()
    {
        
        $categories = category::with('subcategory')->get();
        // $data = $this->categories
        //             ->where('ct_id', '!=', null)
        //             ->whereHas('subCats')
        //             ->with('subCats')
        //             ->get();
        dd($categories);

        return view('elequent', compact('categories'));
    }
}
