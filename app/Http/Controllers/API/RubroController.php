<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Rubro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RubroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubro = Rubro::all();
        return $rubro->toJson(JSON_PRETTY_PRINT);
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
        ]); 
        if($val->fails()){
            return response()->json(['Petición' => 'Error', 'Mensaje' => 'Faltan datos por ingresar']);
        } else {
            $rubro = Rubro::create($request->all());
            return response()->json($rubro, 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rubro = Rubro::find($id);
        return $rubro->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rubro $rubro)
    {
        $rubro->update($request->all());
        return response()->json($rubro);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rubro $rubro)
    {
        Rubro::destroy($rubro->id);
        return response()->json(['Petición' => 'Exitosa', 'Mensaje' => 'Rubro eliminado']);
    }
}
