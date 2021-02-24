<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Jobs;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showAll($id)
    {
        
        //return "Mostrando todas las categorias";
    }

    public function index()
    {
        return response()->json(category::all(), 200);
        //return  "Mostrando las diferentes categorias";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return  "Mostrando el menu de  cear categorias";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->get('name'))
        {
            return response()->json(['mensaje'=>'Datos Invalidos o Incompletos','codigo'=>'422'],422);
        }
        category::create($request->all());
        return response()->json(['mensaje'=>'La Categoria se ha creado','codigo'=>'201'],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return "Mostrando la categoria con el id $id";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return "Creando la categoria para editar el id $id";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       $metodo=$request->method();
       $category=category::find($id);  
       if ($metodo==="PATCH"){
        $name=$request->get('name');
        if ($name!=null && $name!='') {
            $category->name=$name;
        }
        $category->save();
        return "Registro editado con PATCH";
      
       }
       $name=$request->get('name');
       if (!$name) {
           return "Error";
       } 
       $category->name=$name;
       $category->save();
       return "Grabado con Put correctamente ";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($idcategorias)
    {
        $categoria=category::findOrFail($idcategorias);
    }
}
