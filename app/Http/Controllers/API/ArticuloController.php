<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulo = Articulo::all();
        return $articulo->toJson(JSON_PRETTY_PRINT);
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
        $val = Validator::make($request->all(), [
            'nombre' => 'required',
            'codigo' => 'requerid',
            'descripcion' => 'requerid',
            'cantidad' => 'requerid',
            'precio' => 'required',
            'fecha_vencimiento' => 'required',
            'stock_min' => 'required',
            'stock_max' => 'required',
            'rubro_id' => 'required'
        ]); 
        if($val->fails()){
            return response()->json(['Petición' => 'Error', 'Mensaje' => 'Faltan datos por ingresar']);
        } else {
        $articulo = Articulo::create($request->all());
        return response()->json($articulo, 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo = Articulo::find($id);
        return $articulo->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
        $articulo->update($request->all());
        return response()->json(['Petición' => 'Exitosa', 'Mensaje' => 'Articulo modificado']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        Articulo::destroy($articulo->id);
        return response()->json(['Petición' => 'Exitosa', 'Mensaje' => 'Articulo eliminado']);
    }
}
