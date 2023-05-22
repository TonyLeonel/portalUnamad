<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Permiso;
use DataTables;
use Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar(Request $request)
    {
        $query = User::with('permisos');
        return DataTables::of($query)->toJson();
    }

    public function nuevo(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'dni' => ['required', 'string', 'min:8'],
            'nombre' => 'required',
            'apaterno' => 'required',
            'amaterno' => 'required',
            'tipo' => 'required',
            'estado' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']             
        ]);
    
        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }      

        try 
        {            
            $user = new User;
            $user->dni = $request->dni;
            $user->nombre = $request->nombre;
            $user->apaterno = $request->apaterno;
            $user->amaterno = $request->amaterno;
            $user->email = $request->email;
            $user->password = Hash::make($request->password); 
            $user->telefono = $request->telefono;
            $user->direccion = $request->direccion;
            $user->tipo = $request->tipo;
            $user->estado = $request->estado;  

            if($user->save()){
                $permisos = $request->permisos;
                foreach ($permisos as $permiso) {
                    $nuevo_permiso = new Permiso;
                    $nuevo_permiso->elemento = $permiso["elemento"];
                    $nuevo_permiso->elemento_id = $permiso["elemento_id"];
                    $nuevo_permiso->accion = "ALL";
                    $nuevo_permiso->user_id = $user->id;
                    $nuevo_permiso->save();
                }

                return response()->json(['data'=>$user, 'message'=>'Registrado correctamente'], 200);
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
        $validator = Validator::make($request->all(), [             
            'dni' => ['required', 'string', 'min:8'],
            'nombre' => 'required',
            'apaterno' => 'required',
            'amaterno' => 'required',
            'tipo' => 'required',
            'estado' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        if($request->has('password')) {
            if($request->password != '' && strlen($request->password) < 8) {
                return response()->json(['message'=>'La contraseña debe contener por lo menos 8 digitos'], 500);  
            }
        }

        try 
        {
            $user = User::find($id);

            if($user == null)
                return response()->json(['message'=>'No se pudo encontrar el usuario'], 500); 

            $user->dni = $request->dni;
            $user->nombre = $request->nombre;
            $user->apaterno = $request->apaterno;
            $user->amaterno = $request->amaterno;                     
            $user->telefono = $request->telefono;
            $user->direccion = $request->direccion;
            $user->tipo = $request->tipo;
            $user->estado = $request->estado;  
            //cambiar contraseña
            if($request->has('password')) {
                if($request->password != '') {
                    $user->password = Hash::make($request->password); 
                }
            }
            //cambiar permisos
            $eliminados = Permiso::where('user_id', $user->id)->delete();    
            $permisos = $request->permisos;
            foreach ($permisos as $permiso) {
                $nuevo_permiso = new Permiso;
                $nuevo_permiso->elemento = $permiso["elemento"];
                $nuevo_permiso->elemento_id = $permiso["elemento_id"];
                $nuevo_permiso->accion = "ALL";
                $nuevo_permiso->user_id = $user->id;
                $nuevo_permiso->save();
            }

            if($user->save())
                return response()->json(['data'=>$user, 'message'=>'Actualizado correctamente'], 200);
            else 
                return response()->json(['message'=>'No se pudo actualizar'], 500);            
        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }
    }

    public function eliminar(Request $request, $id)
    {
        $user = User::find($id);

        if($user == null)
            return response()->json(['message'=>'No se pudo encontrar el usuario'], 500); 

        try 
        {
            //validar registros
            
            $eliminados = Permiso::where('user_id', $user->id)->delete();  

            if($user->delete()){                
                return response()->json(['data'=>$user, 'message'=>'Actualizado correctamente'], 200);  
            }                
            else 
                return response()->json(['message'=>'No se pudo actualizar'], 500); 

        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }

    }


    //uno mismo
    public function renovar_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password_old' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed']      
        ]);

        if ($validator->fails()) {
            return response()->json(['message'=>$validator->errors()], 500);
        }

        try 
        {
            $user = Auth::user();
            $input = $request->all();

            if(Hash::check($input["password_old"], $user->password)) {
                $user->password = Hash::make($input['password']); 
                if($user->save())
                    return response()->json(['message'=>'Actualizado correctamente'], 200);
                else 
                    return response()->json(['message'=>'No se pudo actualizar'], 500);
            }
            else
             return response()->json(['message'=>'La contraseña proporcionada no es la correcta'], 500);

        }
        catch (\Exception $e) {
            return response()->json(['message'=>$e->getMessage()], 500);
        }
    }


}
