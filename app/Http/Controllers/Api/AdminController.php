<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //subir imagen
    public function imagen(Request $request)
    {
        $ruta = $request->file('file')->store('public');
        $resultado = str_replace('public/','storage/', $ruta);
        return response()->json(['location' => asset($resultado)], 200); 
    }
}
