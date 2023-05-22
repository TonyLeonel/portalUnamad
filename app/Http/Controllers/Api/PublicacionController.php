<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Publicacion_categoria;
use App\Models\Publicacion;
use App\Models\Permiso;
use DataTables;
use Validator;

class PublicacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar(Request $request)
    {
        $categoria_id = $request->has('categoria_id') ? $request->categoria_id : 0;
        $query = Publicacion::with('categoria'); 

        if($categoria_id != 0){ //muestra publicaciones de la categoria seleccionada
            $query->where('publicacion_categoria_id', '=', $categoria_id);
        } else { //mustra publicaciones de todas las categorias a las que tiene habilitado el permiso
            $user = Auth::user();
            $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PUBLICACION')->get(); 
            $categoria_ids = $permisos->map(function ($permiso) { return $permiso->elemento_id; });
            $query->whereIn('publicacion_categoria_id', $categoria_ids);          
        }

        return DataTables::of($query)->toJson();
    }

    public function nuevo(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [              
            'publicacion_categoria_id' => 'required',
            'titulo' => 'required',
            'resumen' => 'required',    
            'file' => ['required', 'image'],
            'contenido' => 'required',            
            'estado' => 'required',            
        ]);
    
        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PUBLICACION')->where('elemento_id', $request->publicacion_categoria_id)->count();
        if($permisos <= 0) {
            return response()->json(['message' => 'No tienes los permisos necesarios para crear en esta categoria.'], 500);
        }        

        try 
        {            
            $ruta = $request->file('file')->store('public');
            $resultado = str_replace('public/','storage/', $ruta); 

            $item = new Publicacion();
            $item->publicacion_categoria_id = $request->publicacion_categoria_id;
            $item->titulo = $request->titulo;
            $item->resumen = $request->resumen;
            $item->imagen = $resultado;
            $item->contenido = $request->contenido;
            $item->estado = $request->estado;   
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
            'publicacion_categoria_id' => 'required',
            'titulo' => 'required',
            'resumen' => 'required',                
            'contenido' => 'required',            
            'estado' => 'required'            
        ]);

        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        $item = Publicacion::find($id);
        if($item == null) { 
            return response()->json(['message' => 'No se encontro la publicacion a editar.'], 500);
        }

        $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PUBLICACION')->where('elemento_id', $request->publicacion_categoria_id)->count();
        if($permisos <= 0) {
            return response()->json(['message' => 'No tienes los permisos necesarios para modificar en esta categoria.'], 500);
        }       

        try 
        {
            if($request->has('file')) {
                $ruta = $request->file('file')->store('public');
                $resultado = str_replace('public/','storage/', $ruta); 
                $item->imagen = $resultado;
            }
        
            $item->publicacion_categoria_id = $request->publicacion_categoria_id;
            $item->titulo = $request->titulo;
            $item->resumen = $request->resumen;
            $item->contenido = $request->contenido;
            $item->estado = $request->estado;  

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
        $publicacion = Publicacion::find($id);
      
        if($publicacion == null)
            return response()->json(['message'=>'No se pudo encontrar'], 500);

        $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PUBLICACION')->where('elemento_id', $publicacion->publicacion_categoria_id)->count();
        if($permisos <= 0) {
            return response()->json(['message' => 'No tienes los permisos necesarios para eliminar en esta categoria.'], 500);
        }

        try 
        {
            if($publicacion->delete())
                return response()->json(['message'=>'Eliminado correctamente'], 200);
            else 
                return response()->json(['message'=>'No se pudo eliminar'], 500); 
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }    
        
    }

}
