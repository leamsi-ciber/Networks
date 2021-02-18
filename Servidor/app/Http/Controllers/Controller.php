<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
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