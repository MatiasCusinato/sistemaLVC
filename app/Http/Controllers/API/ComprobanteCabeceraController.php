<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ComprobanteCabecera;
use Illuminate\Http\Request;


class ComprobanteCabeceraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comprobanteCabecera = ComprobanteCabecera::all();
        return $comprobanteCabecera->toJson(JSON_PRETTY_PRINT);
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
        $comprobanteCabecera = ComprobanteCabecera::create($request->all());
        return response()->json($comprobanteCabecera, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comprobanteCabecera = ComprobanteCabecera::find($id);
        return $comprobanteCabecera->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComprobanteCabecera  $comprobanteCabecera
     * @return \Illuminate\Http\Response
     */
    public function edit(ComprobanteCabecera $comprobanteCabecera)
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
    public function update(Request $request, ComprobanteCabecera $comprobanteCabecera)
    {
        $comprobanteCabecera->update($request->all());
        return response()->json($comprobanteCabecera, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComprobanteCabecera $comprobanteCabecera)
    {
        ComprobanteCabecera::destroy($comprobanteCabecera->id);
        return response()->json(['Petición' => 'Exitosa', 'Mensaje' => 'Cabecera del comprobante eliminado']);
    }

    public function operacion (Request $request)
    {
        dd($request->id);

    }
}
