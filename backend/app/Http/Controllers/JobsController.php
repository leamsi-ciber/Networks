<?php

namespace App\Http\Controllers;

use App\Jobs;
use App\category;
use App\Http\Controllers\Controller;
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
        $jobs=Jobs::all();
        return response()->json($jobs,202);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->get('id_company') || $request->get('Company') || $request->get('workingDay_id')  || $request->get('logo')  || $request->get('Url')  || $request->get('position')  || $request->get('address')  || $request->get('description')  || $request->get('apply')  || $request->get('email') || $request->get('job_category_id') )
        {
            return response()->json(['mensaje'=>'Datos Invalidos o Incompletos','codigo'=>'422'],422);
        }
        Jobs::create([
        'Company'=>$request->get('Company'),
        'workingDay_id'=>$request->get('workingDay_id'),
        'logo'=>$request->get('logo'),
        'Url'=>$request->get('Url'),
        'position'=>$request->get('position'),
        'address'=>$request->get('address'),
        'description'=>$request->get('description'),
        'email'=>$request->get('email'),
        'category_id'=>$request->get('category_id')
        ]);
        return response()->json(['mensaje'=>'El Trabajo ha sido insertado','codigo'=>'201'],201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
         return "Mi nombre es Jesus y el tuyo ?";
    //     if($request->get('id_company') || $request->get('Company') || $request->get('workingDay_id')  || $request->get('logo')  || $request->get('Url')  || $request->get('position')  || $request->get('address')  || $request->get('description')  || $request->get('apply')  || $request->get('email') || $request->get('job_category_id') )
    //     {
    //         return response()->json(['mensaje'=>'Datos Invalidos o Incompletos','codigo'=>'422'],422);
    //     }
    //     Jobs::create([
    //     'Company'=>$request->get('Company'),
    //     'workingDay_id'=>$request->get('workingDay_id'),
    //     'logo'=>$request->get('logo'),
    //     'Url'=>$request->get('Url'),
    //     'position'=>$request->get('position'),
    //     'address'=>$request->get('address'),
    //     'description'=>$request->get('description'),
    //     'email'=>$request->get('email'),
    //     'category_id'=>$request->get('category_id')
    //     ]);
    //     return response()->json(['mensaje'=>'El Trabajo ha sido insertado','codigo'=>'201'],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $category)
    {
           //get Job by category
       $jobs=Jobs::orderBy('created_at', 'DESC')->where(['category_id'=>$category ])->paginate(10);

       //return jobs of that category
        return response()->json($jobs,202);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jobs  $jobs
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
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $idjobs)
    {
        $job=Jobs::findOrFail($idjobs);
        //delete Job
    if($job->delete()){
      return 'Well Done the Job is Eliminate';
    }
    }
    }

