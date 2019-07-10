<?php

namespace App\Http\Controllers;

use App\rating;
use Illuminate\Http\Request;
use Session;
use Redirect;
class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       $message = $request->input('message');
       $post_id = $request->input('post_id');
       $user_id = $request->input('user_id');
       $rate    = $request->input('rate');
      
       $data = array(
                       'r_comment'  =>$message,
                       'r_rating'   =>$rate,
                       'r_ps_id'    =>$post_id,
                       'r_u_id'     =>$user_id,
                       'created_at' =>date('Y:m:d H:i:s')
                    );
             rating::create($data);
             Session::flash('message', "Special message goes here");
return Redirect::back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(rating $rating)
    {
        //
    }
}
