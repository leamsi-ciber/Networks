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
        $jobs=Jobs::all();
      return response()->json($jobs,202);
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
        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show( $category)
    {


       //get Job by category
       $jobs=Jobs::orderBy('created_at', 'DESC')->where(['category_id'=>$category ])->paginate(10);

       //return jobs of that category
        return response()->json($jobs,202);



        // $categoria = category::find($jobs);
        // $jobs = Jobs::find($jobs);
        // $data = array(['success'=>true,
        //         'categoria'=>$categoria,
        //         'jobs'=>$jobs
        //        ]);
        //        if(is_null($categoria)){
        //            return response()->json(['message' => 'Category Not Found'], 404);
        //        }
        //        else if (is_null($jobs)){
        //            return response()->json(['message' => 'Job Not Found'], 404);
        //        }
        // return response()->json($data, 200,[]);
        
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
    public function update(Request $request, $id)
    {
        
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy($idjobs)
    {
        $job=Jobs::findOrFail($idjobs);
        //delete Job
    if($job->delete()){
      return 'Well Done the Job is Eliminate';
    }
    }
}
