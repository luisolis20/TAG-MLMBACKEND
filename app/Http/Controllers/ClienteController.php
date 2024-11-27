<?php

namespace App\Http\Controllers;
use App\Models\ClienteModel;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ClienteModel::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->input();
        $res = ClienteModel::create($inputs);
        return response()->json([
            'data'=>$res,
            'mensaje'=>"Agregado con Éxito!!",
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $res = ClienteModel::find($id);
        if(isset($res)){
            return response()->json([
                'data'=>$res,
                'mensaje'=>"Encontrado con Éxito!!",
            ]);
           
           
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>"El Usuario con id: $id no Existe",
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $res = ClienteModel::find($id);
        if(isset($res)){
            $res->nombres_apellidos = $request->nombres_apellidos;
            $res->correo = $request->correo;
            if($res->save()){
                return response()->json([
                    'data'=>$res,
                    'mensaje'=>"Actualizado con Éxito!!",
                ]);
            }
            else{
                return response()->json([
                    'error'=>true,
                    'mensaje'=>"Error al Actualizar",
                ]);
            }
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>"El Cliente con id: $id no Existe",
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
