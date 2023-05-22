<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comunicado_categoria;
use App\Models\Comunicado;
use App\Models\Permiso;
use DataTables;
use Validator;
use Carbon\Carbon;

class ComunicadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar(Request $request)
    {
        $categoria_id = $request->has('categoria_id') ? $request->categoria_id : 0;
        $query = Comunicado::with('categoria'); 

        if($categoria_id != 0){ //muestra comunicados de la categoria seleccionada
            $query->where('comunicado_categoria_id', '=', $categoria_id);
        } else { //mustra comunicados de todas las categorias a las que tiene habilitado el permiso
            $user = Auth::user();
            $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'COMUNICADO')->get(); 
            $categoria_ids = $permisos->map(function ($permiso) { return $permiso->elemento_id; });
            $query->whereIn('comunicado_categoria_id', $categoria_ids);
        }

        return DataTables::of($query)->toJson();
    }

    public function nuevo(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [              
            'comunicado_categoria_id' => 'required',
            'titulo' => 'required',            
            'file' => ['required', 'image'],
            'fecha_fin' => ['required','date'],            
            'estado' => 'required',            
        ]);
    
        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'COMUNICADO')->where('elemento_id', $request->comunicado_categoria_id)->count();
        if($permisos <= 0) {
            return response()->json(['message' => 'No tienes los permisos necesarios para crear en esta categoria.'], 500);
        }

        $ahora = Carbon::now()->startOfDay();
        $fin = new Carbon($request->fecha_fin);
        $fin->endOfDay();
        $duracion = $ahora->diffInDays($fin, false);

        if($duracion <= 1) {
            return response()->json(['message' => 'La fecha de término debe ser mayor en 1 día a la fecha actual.'], 500);
        }

        try 
        {            
            $ruta = $request->file('file')->store('public');
            $resultado = str_replace('public/','storage/', $ruta); 

            $item = new Comunicado();
            $item->comunicado_categoria_id = $request->comunicado_categoria_id;
            $item->titulo = $request->titulo;
            $item->imagen = $resultado;
            $item->contenido = $request->contenido;
            $item->estado = $request->estado; 
            $item->fecha_fin = $request->fecha_fin;
            $item->duracion = $duracion;         
            $item->user_id = $user->id;            

            if($item->save())
                return response()->json(['data'=>$item, 'message'=>'Registrado correctamente'], 200);
            else 
                return response()->json(['message'=>'No se pudo registrar'], 500);            
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }
    }

    public function modificar(Request $request, $id)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [              
            'comunicado_categoria_id' => 'required',
            'titulo' => 'required',        
            'fecha_fin' => ['required','date'],            
            'estado' => 'required',            
        ]);

        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        $item = Comunicado::find($id);
        if($item == null) { 
            return response()->json(['message' => 'No se encontro el comunicado a editar.'], 500);
        }

        $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'COMUNICADO')->where('elemento_id', $request->comunicado_categoria_id)->count();
        if($permisos <= 0) {
            return response()->json(['message' => 'No tienes los permisos necesarios para modificar en esta categoria.'], 500);
        }

        $ahora = $item->created_at->startOfDay();
        $fin = new Carbon($request->fecha_fin);
        $fin->endOfDay();
        $duracion = $ahora->diffInDays($fin, false);

        if($duracion <= 1) {
            return response()->json(['message' => 'La fecha de término debe ser mayor en 1 día a la fecha actual.'], 500);
        }

        try 
        {
            if($request->has('file')) {
                $ruta = $request->file('file')->store('public');
                $resultado = str_replace('public/','storage/', $ruta); 
                $item->imagen = $resultado;
            }
        
            $item->comunicado_categoria_id = $request->comunicado_categoria_id;
            $item->titulo = $request->titulo;
            $item->contenido = $request->contenido;
            $item->estado = $request->estado; 
            $item->fecha_fin = $request->fecha_fin;
            $item->duracion = $duracion; 

            if($item->save())
                return response()->json(['data'=>$item, 'message'=>'Actualizado correctamente'], 200);
            else 
                return response()->json(['message'=>'No se pudo actualizar'], 500);                
           
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }
    }

    public function eliminar(Request $request, $id)
    {
        $user = Auth::user();
        $comunicado = Comunicado::find($id);
      
        if($comunicado == null)
            return response()->json(['message'=>'No se pudo encontrar'], 500);

        $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'COMUNICADO')->where('elemento_id', $comunicado->comunicado_categoria_id)->count();
        if($permisos <= 0) {
            return response()->json(['message' => 'No tienes los permisos necesarios para eliminar en esta categoria.'], 500);
        }

        try 
        {
            if($comunicado->delete())
                return response()->json(['message'=>'Eliminado correctamente'], 200);
            else 
                return response()->json(['message'=>'No se pudo eliminar'], 500); 
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }    
        
    }
    
}
