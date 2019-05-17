<?php

namespace App\Http\Controllers;

use App\midea;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class MideaController extends Controller
{
   

    private $photos_path;

    public function __construct()
    {
        $this->photos_path = public_path('/images/media');
    }

    /**
     * Display all of the images.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = midea::all();
        return view('uploaded-images', compact('photos'));
    }

    /**
     * Show the form for creating uploading new images.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload');
    }

    /**
     * Saving images uploaded through XHR Request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photos = $request->file('file'); 
        $pid  = $request->session()->get('post_id');
    
        if (!is_array($photos)) {
            $photos = [$photos];
        }

        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777);
        }

        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            echo $i;
            echo "yesss";
            $original_name = basename($photo->getClientOriginalName());
           
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $photo->getClientOriginalExtension();
            $resize_name =  $photo->getClientOriginalExtension();
            $photo->move($this->photos_path, $save_name);
           $data =array(
                        'm_url' => $save_name,                   
                        'm_type' => $resize_name,
                        'm_name' =>$original_name = basename($photo->getClientOriginalName()),
                        'm_ps_id' =>$pid                    
                       );
                    
                       midea::create($data); 
                      
         
         
        }
        return Response::json(['message' => 'Image saved Successfully'], 200);
       
    }

    /**
     * Remove the images from the storage.
     *
     * @param Request $request
     */
    public function destroy(Request $request)
    {
        $filename = $request->id;
       
        $uploaded_image = midea::where('m_name', basename($filename))->first();

        if (empty($uploaded_image)) {
            return Response::json(['message' => 'Sorry file does not exist'], 400);
        }

        $file_path = $this->photos_path . '/' . $uploaded_image->m_url;
        

        if (file_exists($file_path)) {
            unlink($file_path);
        }

        

        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }

        return Response::json(['message' => 'File successfully delete'], 200);
    }
}

