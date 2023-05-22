<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pagina_categoria;
use App\Models\Pagina;
use App\Models\Permiso;
use DataTables;
use Validator;

class PaginaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar(Request $request)
    {
        $categoria_id = $request->has('categoria_id') ? $request->categoria_id : 0;
        $query = Pagina::with('categoria'); 

        if($categoria_id != 0){ //muestra paginas de la categoria seleccionada
            $query->where('pagina_categoria_id', '=', $categoria_id);
        } else { //mustra paginas de todas las categorias a las que tiene habilitado el permiso
            $user = Auth::user();
            $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PAGINA')->get(); 
            $categoria_ids = $permisos->map(function ($permiso) { return $permiso->elemento_id; });
            $query->whereIn('pagina_categoria_id', $categoria_ids);          
        }

        return DataTables::of($query)->toJson();
    }

    public function nuevo(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [              
            'pagina_categoria_id' => 'required',
            'flag' => 'required',
            'titulo' => 'required',  
            'contenido' => 'required',  
            'estado' => 'required',            
        ]);
    
        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PAGINA')->where('elemento_id', $request->pagina_categoria_id)->count();
        if($permisos <= 0) {
            return response()->json(['message' => 'No tienes los permisos necesarios para crear en esta categoria.'], 500);
        }

        try 
        {
            $item = new Pagina();
            $item->pagina_categoria_id = $request->pagina_categoria_id;
            $item->flag = $request->flag;
            $item->titulo = $request->titulo;
            $item->contenido = $request->contenido;
            $item->estado = $request->estado;
            $item->block = 0;
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
            'pagina_categoria_id' => 'required',
            'flag' => 'required',
            'titulo' => 'required',  
            'contenido' => 'required',  
            'estado' => 'required',        
        ]);

        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PAGINA')->where('elemento_id', $request->pagina_categoria_id)->count();
        if($permisos <= 0) {
            return response()->json(['message' => 'No tienes los permisos necesarios para editar en esta categoria.'], 500);
        }

        try 
        {
            $item = Pagina::find($id);

            if($item)
            {         
                $item->pagina_categoria_id = $request->pagina_categoria_id;
                $item->flag = $request->flag;
                $item->titulo = $request->titulo;
                $item->contenido = $request->contenido;
                $item->estado = $request->estado;
                
                if($item->save())
                    return response()->json(['data'=>$item, 'message'=>'Actualizado correctamente'], 200);
                else 
                    return response()->json(['message'=>'No se pudo actualizar'], 500);                
            }
            else
                return response()->json(['message'=>'No se pudo encontrar'], 500);
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }
    }

    public function eliminar(Request $request, $id)
    {
        $user = Auth::user();
        $pagina = Pagina::find($id);
      
        if($pagina == null)
            return response()->json(['message'=>'No se pudo encontrar'], 500);

        $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PAGINA')->where('elemento_id', $pagina->pagina_categoria_id)->count();
        if($permisos <= 0) {
            return response()->json(['message' => 'No tienes los permisos necesarios para eliminar en esta categoria.'], 500);
        }

        if($pagina->block == 1)
            return response()->json(['message'=>'La página no se puede eliminar [BLOQUEADO].'], 500);        

        try 
        {
            if($pagina->delete())
                return response()->json(['message'=>'Eliminado correctamente'], 200);
            else 
                return response()->json(['message'=>'No se pudo eliminar'], 500); 
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }    
        
    }
}
