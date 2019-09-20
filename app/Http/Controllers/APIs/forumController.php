<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class forumController extends Controller
{
    //p
    public function forum_add(Request $request)
    {
        $post=$this->input();
        $data=array(
          'fp_cat_id'=>$post['category'],
          'fp_topic'=>$post['topic'],
          'fp_detail'=>$post['details']
          'fp_contants'

        );
        
    }
}
