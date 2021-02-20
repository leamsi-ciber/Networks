<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryJobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll($idcategoria, $idjobs)
    {
        
    }
    public function index($id)
    {
     $categoria = category::find($id);
     $jobs = Jobs::find($id);
     $data = ['success'=>true,
             'categoria'=>$categoria,
             'jobs'=>$jobs
            ];
      
     return response()->json($data, 200,[]);





       //$jobs = Jobs::find($id);
     //if(is_null($jobs)){
       // return response()->json(['message' => 'Job Not Found'], 404);
    // }
    // return response()->json($jobs::find($id), 200);
          
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //return  "Mostrando formulario para trabajos que pertenecen a las categorias  "."$id";
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
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show($idcategoria,$idjobs)
    {
         $category = category::find($idcategoria);
     if(is_null($category)){
        return response()->json(['message' => 'Job Not Found'], 404);
    }
     return response()->json($category::find($idcategoria), 200);
       
       //Jobsif 

      $jobs = Jobs::find($idjobs);

      if(is_null($jobs)){
        return response()->json(['message' => 'Job Not Found'], 404);
    }
     return response()->json($jobs::find($idjobs), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit($idcategoria, $idjobs)
    {
        //return "Mostrando el formulario para editar el trabajo ".$idjobs." de la categoria ".$idcategoria;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update($idcategoria, $idjobs)
    {
        //return "Mostrando el formulario para actualizar el trabajo".$jobs."de la categoria".$categoria;
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy( $jobs)
    {
        //
    }
}
/* public function getJobs(){
        return response()->json(Jobs::all(), 200);
    }

    public function getJobsByCategory($category){
        $jobs = Jobs::find($category);
        if(is_null($jobs)){
            return response()->json(['message' => 'Job Not Found'], 404);
        }
        return response()->json($jobs::find($category), 200);
    }
    
    public function createJobs(Request $request){
        $jobs = Jobs::create($request->all());
        return response($jobs, 201);
    }*/