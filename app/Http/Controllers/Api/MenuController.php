<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pagina;
use App\Models\Menu;
use DataTables;
use Validator;

class MenuController extends Controller
{
    //
    public function listar(Request $request)
    {
        $query = Menu::withCount('menu')->with('menu.menu','categorias'); 
        return DataTables::of($query)->toJson();
    }
    public function nuevo(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [              
            'nombre' => 'required',
            'estado' => 'required',            
        ]);
    
        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        try 
        {                   
            $despues=Menu::find($request->posicion);
            //recorremos y actualizamos las posiciones
            $menus=Menu::orderBy('posicion')->get();
            $i=0;
            $encontrado=0;
            $pos=1;
            $temp=new Menu;
            foreach($menus as $items){
                $temp=Menu::find($items->id);
                $i++;
                if ($encontrado==0) {
                    $temp->posicion=$i;
                } 
                else {
                    $temp->posicion=$i+1;
                }  

                if ($items->id==$request->posicion) {
                   $encontrado=1;
                   $pos=$i+1;
                }                         
                $temp->save();              
            }
            $menu= new Menu;
            $menu->nombre=$request->nombre;
            $menu->flag=$request->flag;
            $menu->posicion=$pos;
            $menu->estado=$request->estado;
            $menu->fuente=$request->fuente;
            $menu->tipo=$request->tipo;
            if($menu->save()){
                if($menu->tipo==1 && $request->fuente==0){                                     
                    $item = new Pagina();
                    $item->menu = $menu->id;
                    $item->flag = $request->flag;
                    $item->titulo = "Inicio";
                    $item->contenido = "";
                    $item->estado = $request->estado;
                    $item->block = 0;
                    $item->user_id = $user->id;                      
                    if ($item->save()) {
                        return response()->json(['data'=>$menu, 'message'=>'Registrado correctamente'], 200);
                    }
                    else 
                        return response()->json(['message'=>'No se pudo registrar'], 500);                                                                           
                }
                else
                    return response()->json(['data'=>$menu, 'message'=>'Registrado correctamente'], 200);

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
            'estado' => 'required',        
        ]);

        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        try 
        {
            $despues=Menu::find($request->posicion);
            //recorremos y actualizamos las posiciones
            $menus=Menu::orderBy('posicion')->get();
            $i=0;
            $encontrado=0;
            $pos=0;
            $temp=new Menu;
            foreach($menus as $items){
                $temp=Menu::find($items->id);
                $i++;
                if ($encontrado==0) {
                    $temp->posicion=$i;
                } 
                else {
                    $temp->posicion=$i+1;
                }  

                if ($items->id==$request->posicion) {
                   $encontrado=1;
                   $pos=$i+1;
                }                         
                $temp->save();              
            }
            //return $menus;
            $menu= Menu::find($id);
            if($menu)
            {  
                $menu->nombre=$request->nombre;
                $menu->flag=$request->flag;
                $menu->posicion=$pos;
                $menu->fuente=$request->fuente;
                $menu->estado=$request->estado;
                $menu->tipo=$request->tipo;
                if($menu->save()){
                    if($menu->tipo==1 && $request->fuente==0){                                     
                        $item = new Pagina();
                        $item->menu_id = $menu->id;
                        $item->pagina_categoria_id = null;
                        $item->flag = $request->flag;
                        $item->titulo = "Inicio";
                        $item->contenido = "";
                        $item->estado = $request->estado;
                        $item->block = 0;
                        $item->user_id = $user->id;                      
                        if ($item->save()) {
                            return response()->json(['data'=>$menu, 'message'=>'Registrado correctamente'], 200);
                        }
                        else 
                            return response()->json(['message'=>'No se pudo registrar'], 500);                                                                           
                    }
                    else
                        return response()->json(['data'=>$menu, 'message'=>'Registrado correctamente'], 200);
    
                }
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
        return $categoria = Menu::withCount('paginas')->find($id);
      
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

}
