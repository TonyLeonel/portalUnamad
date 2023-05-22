<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrera;
use DataTables;
use Validator;

class CarreraController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar(Request $request)
    {
        $query = Carrera::with('facultad')->get();
        return DataTables::of($query)->toJson();
    }
    public function nuevo(Request $request)
    {
       
        $validator = Validator::make($request->all(), [ 
            'nombre' => 'required',            
        ]);
    
        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }      

        try 
        {            
            $carrera = new Carrera;
            $carrera->nombre = $request->nombre;
            $carrera->vision = $request->vision;
            $carrera->mision = $request->mision;
            $carrera->perfil = $request->perfil;
            $carrera->descripcion = $request->descripcion;
            $carrera->malla = $request->malla;
            $carrera->abreviatura = $request->abreviatura;
            $carrera->facultad_id = $request->facultad_id;
            $carrera->telefono = $request->telefono;
            $carrera->correo = $request->correo;
            $carrera->direccion = $request->direccion;
            $carrera->facebook = $request->facebook;
            $carrera->whatsapp = $request->whatsapp;
            
            if($carrera->save()){
                return response()->json(['data'=>$carrera, 'message'=>'Registrado correctamente'], 200);
            }
            else 
                return response()->json(['message'=>'No se pudo registrar'], 500);            
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }
    }
    public function modificar(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [ 
            'nombre' => 'required',            
        ]);
    
        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }      

        try 
        {            
            $carrera = Carrera::find($id);
            $carrera->nombre = $request->nombre;
            $carrera->vision = $request->vision;
            $carrera->mision = $request->mision;
            $carrera->perfil = $request->perfil;
            $carrera->descripcion = $request->descripcion;
            $carrera->malla = $request->malla;
            $carrera->abreviatura = $request->abreviatura;
            $carrera->facultad_id = $request->facultad_id;
            $carrera->telefono = $request->telefono;
            $carrera->correo = $request->correo;
            $carrera->direccion = $request->direccion;
            $carrera->facebook = $request->facebook;
            $carrera->whatsapp = $request->whatsapp;
            if($carrera->save()){
                return response()->json(['data'=>$carrera, 'message'=>'Registrado correctamente'], 200);
            }
            else 
                return response()->json(['message'=>'No se pudo registrar'], 500);            
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }
    }

}
