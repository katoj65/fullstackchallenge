<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsersWeatherFocustModel;

class UserWeatherForecustController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //


$get=UsersWeatherFocustModel::orderby('id','ASC')->get();
return response()->json(['status'=>true,'data'=>$get,'count'=>count($get)]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
