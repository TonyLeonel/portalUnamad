<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Docente;
use Illuminate\Http\Request;
use DataTables;
use Validator;

class DocenteController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar(Request $request)
    {
        $query = Docente::with('carrera')->get();
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
            $ruta = $request->file('file')->store('');
            $resultado = 'storage/'. $ruta;; 
            $docente = new Docente;
            $docente->nombre = $request->nombre;
            $docente->carrera_id = $request->carrera_id;
            $docente->cv = $request->cv;
            $docente->imagen = $resultado;
            $docente->estado = $request->estado;
            if($docente->save()){
                return response()->json(['data'=>$docente, 'message'=>'Registrado correctamente'], 200);
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
            $docente = Docente::find($id);
            if($request->has('file')) {
                $ruta = $request->file('file')->store('');
                $resultado = 'storage/'. $ruta; 
                $docente->imagen = $resultado;
            }
        
            $docente->nombre = $request->nombre;
            $docente->cv = $request->cv;
            $docente->carrera_id = $request->carrera_id;
            $docente->estado = $request->estado;
            if($docente->save()){
                return response()->json(['data'=>$docente, 'message'=>'Registrado correctamente'], 200);
            }
            else 
                return response()->json(['message'=>'No se pudo registrar'], 500);            
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }
    }

}
