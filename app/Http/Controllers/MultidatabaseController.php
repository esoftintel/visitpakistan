<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\multidatabase;
use Illuminate\Http\Request;
use App\products; 

class MultidatabaseController extends Controller
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

    public function fetchDataFromOtherDatabase()
    {
        $user_id=1;
        $products = products::find($user_id)
                    ->with('users','user.id','products.c_id')
                    ->first();
        echo '<pre>';
        print_r($products); exit;
    
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
     * @param  \App\multidatabase  $multidatabase
     * @return \Illuminate\Http\Response
     */
    public function show(multidatabase $multidatabase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\multidatabase  $multidatabase
     * @return \Illuminate\Http\Response
     */
    public function edit(multidatabase $multidatabase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\multidatabase  $multidatabase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, multidatabase $multidatabase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\multidatabase  $multidatabase
     * @return \Illuminate\Http\Response
     */
    public function destroy(multidatabase $multidatabase)
    {
        //
    }
}
