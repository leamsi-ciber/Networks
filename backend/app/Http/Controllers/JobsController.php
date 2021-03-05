<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\category;
use Illuminate\Http\Request;

class JobsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(['datos'=>Category::all()],202);
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


    public function showAll()
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
        
        
    if(!$request->get('id_company')|| !$request->get('workingDay_id') || !$request->get('logo') || !$request->get('Url') || !$request->get( 'position') || !$request->get('address') || !$request->get('category_id') || !$request->get('description') || !$request->get( 'apply') || !$request->get('email') || !$request->get('job_category'))
    {
        return response()->json(['mensaje'=>'Datos Invalidos o Incompletos','codigo'=>'422'],422);
    }
       Jobs::create($request->all()); 
       return response()->json(['mensaje'=>'El trabajo ha sido creado'],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $jobs)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobs $jobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $jobs)
    {
        //
    }
}
