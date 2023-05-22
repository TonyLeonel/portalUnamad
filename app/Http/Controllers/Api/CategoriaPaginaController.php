<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pagina_categoria;
use App\Models\Pagina;
use DataTables;
use Validator;

class CategoriaPaginaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar(Request $request)
    {
        $query = Pagina_categoria::withCount('paginas'); 
        return DataTables::of($query)->toJson();
    }

    public function nuevo(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [              
            'nombre' => 'required',
            'descripcion' => 'required',  
            'estado' => 'required',            
        ]);
    
        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        try 
        {
            $categoria=new Pagina_categoria;
            $categoria->nombre=$request->nombre;
            $categoria->descripcion=$request->descripcion;
            $categoria->estado=$request->estado;
            $categoria->menu_id=$request->menu_id;
            $categoria->posicion=$request->posicion;
            $categoria->tipo=$request->tipo;
            $categoria->pagina_categorias_id=$request->categoria_id==0? null:$request->categoria_id;
            $categoria->fuente=$request->fuente;
            $categoria->flag=$request->flag;
            $categoria->whatsapp=$request->whatsapp;
            $categoria->facebook=$request->facebook;
            $categoria->telefono=$request->telefono;
            $categoria->correo=$request->correo;
            $categoria->direccion=$request->direccion;
            if($categoria->save()){
                if($request->tipo==1 && $request->fuente==0){                    
                    $item = new Pagina();
                    $item->pagina_categoria_id = $categoria->id;
                    $item->flag = $request->flag;
                    $item->titulo = "Inicio";
                    $item->contenido = "";
                    $item->estado = $request->estado;
                    $item->block = 0;
                    $item->user_id = $user->id; 
                    if ($item->save()) 
                        return response()->json(['data'=>$categoria, 'message'=>'Registrado correctamente'], 200);
                    else 
                        return response()->json(['message'=>'No se pudo registrar'], 500);                                                                           
                }
                else
                    return response()->json(['data'=>$categoria, 'message'=>'Registrado correctamente'], 200);
            }
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
            'nombre' => 'required',
            'descripcion' => 'required',  
            'estado' => 'required',   
        ]);

        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        try 
        {
            $categoria = Pagina_categoria::find($id);
            $categoria->nombre=$request->nombre;
            $categoria->descripcion=$request->descripcion;
            $categoria->estado=$request->estado;
            $categoria->menu_id=$request->menu_id;
            $categoria->posicion=$request->posicion;
            $categoria->tipo=$request->tipo;
            $categoria->pagina_categorias_id=$request->categoria_id==0? null:$request->categoria_id;
            $categoria->fuente=$request->fuente;
            $categoria->flag=$request->flag;
            $categoria->whatsapp=$request->whatsapp;
            $categoria->facebook=$request->facebook;
            $categoria->telefono=$request->telefono;
            $categoria->correo=$request->correo;
            $categoria->direccion=$request->direccion;                
            if($categoria->save())
                return response()->json(['data'=>$categoria, 'message'=>'Actualizado correctamente'], 200);
            else 
                return response()->json(['message'=>'No se pudo actualizar'], 500);  
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }
    }

    public function eliminar(Request $request, $id)
    {
        $categoria = Pagina_categoria::withCount('paginas')->find($id);
      
        if($categoria == null)
            return response()->json(['message'=>'No se pudo encontrar'], 500);

        if($categoria->paginas_count > 0)
            return response()->json(['message'=>'La categoria tiene páginas registradas'], 500);        

        try 
        {
            if($categoria->delete())
                return response()->json(['message'=>'Eliminado correctamente'], 200);
            else 
                return response()->json(['message'=>'No se pudo eliminar'], 500); 
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }    
        
    }
    public function lista_categoria(Request $request, $id)
    {
      return Pagina_categoria::where('menu_id',$id)->where('tipo',0)->get();                     
    }
}
