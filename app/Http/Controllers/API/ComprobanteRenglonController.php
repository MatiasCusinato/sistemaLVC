<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ComprobanteRenglon;
use Illuminate\Http\Request;

class ComprobanteRenglonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comprobanteRenglon = ComprobanteRenglon::all();
        return $comprobanteRenglon->toJson(JSON_PRETTY_PRINT);
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
        $comprobanteRenglon = ComprobanteRenglon::create($request->all());
        return response()->json($comprobanteRenglon, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comprobanteRenglon = ComprobanteRenglon::find($id);
        return $comprobanteRenglon->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComprobanteRenglon  $comprobanteRenglon
     * @return \Illuminate\Http\Response
     */
    public function edit(ComprobanteRenglon $comprobanteRenglon)
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
    public function update(Request $request, ComprobanteRenglon $comprobanteRenglon)
    {
        $comprobanteRenglon->update($request->all());
        return response()->json($comprobanteRenglon, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComprobanteRenglon $comprobanteRenglon)
    {
        ComprobanteRenglon::destroy($comprobanteRenglon->id);
        return response()->json(['Petición' => 'Exitosa', 'Mensaje' => 'Comprobante Renglon eliminado']);
    }
}
