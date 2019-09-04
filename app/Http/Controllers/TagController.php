<?php

namespace App\Http\Controllers;

use App\tag;
use App\category;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feature_data = tag::where('tg_status','active')
                            ->Join('categories', 'categories.ct_id', '=', 'tags.tg_ct_id')
                            ->get();
        return view('admin.tag.tag_list')->with('tag_data',$feature_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = category::where('ct_status','active')->get();
      
        return view('admin.tag.tag_create')->with('category_data',$data);
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
           $icon     = $request->file('userfile');
           $image    = $request->file('image');
           $ctname   = $request->input('name');
           $category = $request->input('category');

           $iconname = time().'.'.$icon->getClientOriginalExtension();
            
            $new_name=rand().'.'. $image->getClientOriginalExtension();
           
            $Path = public_path('/images/tag');
            $image->move($Path, $new_name);
            $icon->move($Path, $iconname);
            
            $data =array(
                            'tg_name'       => $ctname,                   
                            'tg_green_icon' => $iconname,
                            'tg_ct_id'      => $category,
                            'tg_wight_icon' => $new_name                   
                        );
                   
              tag::create($data);  
              return redirect('tag')->with('info','Data is Added Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['tag_data'] = tag::where('tg_id',$id)->first();
        return view('admin.tag.tag_update',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'userfile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'userfilewhite' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
   

       if ($request->hasFile('userfile')&&$request->hasFile('userfilewhite')) {
          
          $icon_green = $request->file('userfile');
          $icon_wight = $request->file('userfilewhite');
           $ctname    = $request->input('name');
         
          
           $iconname = time().'.'.$icon->getClientOriginalExtension();
           $iconwhitename = rand().'.'.$iconwhite->getClientOriginalExtension();
         
         
           $destinationPath = public_path('/images/tag');
           $icon->move($destinationPath, $iconname);
           $iconwhite->move($destinationPath,$iconwhitename);
           $image->move($destinationPath, $imagename);
           $data =array(
                    'tg_name' => $ctname,                   
                    'tg_green_icon' => $iconname,
                    'tg_wight_icon' => $iconwhitename,               
                  );
                  

       }
       else{ 
           
           $data =array(
                        'tg_name' =>  $request->input('name'),                   
                        'tg_green_icon' => $request->input('oldimg') ,
                        'tg_wight_icon' => $request->input('oldimgwhite')
                      ); 
                        }
         
       $ok= tag::wheretg_id($id)->update($data); 
     
         
        return redirect('tag')->with('info','Data is Udateded Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =array(
                      'tg_status' =>'deactive'                                      
                    );
     tag::wheretg_id($id)->update($data);  
     return redirect('tag')->with('info','Data is Deleted Successfully!');
    }
}
