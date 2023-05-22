<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Carpeta;
use App\Models\Archivo;
use DataTables;
use Validator;
use stdClass;

class DocumentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * CARPETAS
     */
    public function carpetas(Request $request)
    {
        $carpetas = Carpeta::all();
        $ordenado = $this->ordenar($carpetas, null);
        return response()->json(['carpetas' => $ordenado], 200);
    }

    public function nuevo_carpeta(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [  
            'carpeta_id' => 'required',            
            'nombre' => 'required',
            'alias' => 'required',  
            'estado' => 'required',            
        ]);
    
        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        try 
        {
            $item = new Carpeta();
            $item->carpeta_id = $request->carpeta_id != 0 ? $request->carpeta_id : null;
            $item->nombre = $request->nombre;
            $item->alias = $request->alias;
            $item->ubicacion = '-';
            $item->estado = $request->estado;

            if($item->save())
                return response()->json(['data'=>$item, 'message'=>'Registrado correctamente'], 200);
            else 
                return response()->json(['message'=>'No se pudo registrar'], 500);            
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }
    }

    public function modificar_carpeta(Request $request, $id)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [ 
            'nombre' => 'required',
            'alias' => 'required',  
            'estado' => 'required', 
        ]);

        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        try 
        {
            $item = Carpeta::find($id);            

            if($item)
            {              
                $item->nombre = $request->nombre;
                $item->alias = $request->alias;
                $item->ubicacion = '-';
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

    public function mover_carpeta(Request $request, $id)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [ 
            'carpeta_id' => 'required'          
        ]);

        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        try 
        {
            $item = Carpeta::find($id);            

            if($item)
            {              
                $item->carpeta_id = $request->carpeta_id != 0 ? $request->carpeta_id : null;             
    
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

    public function eliminar_carpeta(Request $request, $id)
    {
        $carpeta = Carpeta::withCount(['subcarpetas','archivos'])->find($id);
      
        if($carpeta == null)
            return response()->json(['message'=>'No se pudo encontrar'], 500);

        if($carpeta->subcarpetas_count > 0)
            return response()->json(['message'=>'La carpeta tiene subcarpetas registradas'], 500);   
            
        if($carpeta->archivos_count > 0)
            return response()->json(['message'=>'La carpeta tiene archivos registrados'], 500);   
         
        try 
        {
            if($carpeta->delete())
                return response()->json(['message'=>'Eliminado correctamente'], 200);
            else 
                return response()->json(['message'=>'No se pudo eliminar'], 500); 
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }    
        
    }

    /**
     * ARCHIVOS
     */
    public function nuevo_archivo(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [  
            'carpeta_id' => 'required',            
            'nombre' => 'required',
            'alias' => 'required',  
            'enlace' => 'required',  
            'estado' => 'required',
            'destacado' => 'required',               
        ]);
    
        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        try 
        {
            $item = new Archivo();
            $item->carpeta_id = $request->carpeta_id != 0 ? $request->carpeta_id : null;
            $item->nombre = $request->nombre;
            $item->alias = $request->alias;
            $item->enlace = $request->enlace;
            $item->estado = $request->estado;
            $item->destacado = $request->destacado;

            if($item->save())
                return response()->json(['data'=>$item, 'message'=>'Registrado correctamente'], 200);
            else 
                return response()->json(['message'=>'No se pudo registrar'], 500);            
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }
    }

    public function modificar_archivo(Request $request, $id)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [ 
            'nombre' => 'required',
            'alias' => 'required',  
            'enlace' => 'required',  
            'estado' => 'required', 
            'destacado' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        try 
        {
            $item = Archivo::find($id);            

            if($item)
            {              
                $item->nombre = $request->nombre;
                $item->alias = $request->alias;
                $item->enlace = $request->enlace;
                $item->estado = $request->estado;
                $item->destacado = $request->destacado;
    
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

    public function mover_archivo(Request $request, $id)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [ 
            'carpeta_id' => 'required'          
        ]);

        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        try 
        {
            $item = Archivo::find($id);            

            if($item)
            {              
                $item->carpeta_id = $request->carpeta_id != 0 ? $request->carpeta_id : null;             
    
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

    public function eliminar_archivo(Request $request, $id)
    {
        $archivo = Archivo::find($id);
      
        if($archivo == null)
            return response()->json(['message'=>'No se pudo encontrar'], 500);  
        try 
        {
            if($archivo->delete())
                return response()->json(['message'=>'Eliminado correctamente'], 200);
            else 
                return response()->json(['message'=>'No se pudo eliminar'], 500); 
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }    
        
    }

    //-------------------------------
    protected function ordenar($carpetas, $padre)
    {
        $resultado = collect();  
        //carpetas
        foreach ($carpetas as $carpeta) {
            if($carpeta->carpeta_id == $padre) {
                $elemento = new stdClass();
                $elemento->id = $carpeta->id;
                $elemento->nombre = $carpeta->nombre;
                $elemento->alias = $carpeta->alias;
                $elemento->estado = $carpeta->estado;                
                $elemento->hijos = $this->ordenar($carpetas, $carpeta->id);
                $resultado->push($elemento);
            }
        }       
        return $resultado;
    }


}
