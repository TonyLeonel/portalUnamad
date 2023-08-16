<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunicado;
use App\Models\Carpeta;
use App\Models\Archivo;
use App\Models\Publicacion;
use App\Models\Publicacion_categoria;
use App\Models\Facultad;
use App\Models\Comunicado_categoria;
use App\Models\Menu;
use Carbon\Carbon;
use DataTables;
use stdClass;

class PortalController extends Controller
{
    //
    public function index()
    {
        $ahora = Carbon::now();
        $comunicados = Comunicado::where('estado', 1)->whereDate('created_at','<=', $ahora)->whereDate('fecha_fin','>=', $ahora)->orderBy('created_at', 'desc')->get();        
        $publicaciones = Publicacion::where('estado', 1)->orderBy('created_at', 'desc')->limit('5')->get();
        return view('portal.index', compact('comunicados','publicaciones'));
    }

    /**
     * UNIVERSIDAD
     */

    public function presentacion() {
        return view('portal.universidad.presentacion');
    }


    /**
     * FACULTADES
     */


    
























    public function comunicados(Request $request)
    {
        $ahora = Carbon::now();
        $facultades=Facultad::with('carreras')->get();
        $menus = Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        $comunicados = Comunicado::where('estado', 1)->orderBy('created_at', 'desc')->paginate(12);
        $categorias = Comunicado_categoria::get();
        return view('portal.comunicados', compact('comunicados','ahora','facultades','menus','categorias'));
    }
    public function comunicado_detalle(Request $request, $id)
    {
        $ahora = Carbon::now();
        $facultades=Facultad::with('carreras')->get();
                $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();

        $comunicado = Comunicado::with(['user','categoria'])->where('estado',1)->findOrFail($id);
        $otros = Comunicado::where('estado', 1)
                ->where('comunicado_categoria_id', $comunicado->comunicado_categoria_id)
                ->where('id', '!=', $id)
                ->orderBy('created_at', 'desc')
                ->take(5)->get();
        return view('portal.comunicado_detalle', compact('comunicado','ahora','otros','facultades','menus'));
    }
    public function documentos(Request $request)
    {
        $buscar = '';
        $facultades=Facultad::with('carreras')->get();
                $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();

        if($request->has('buscar')) {
            $buscar = $request->buscar;
        }       

        if($buscar != '') {  
            $palabras = explode(" ", $buscar);
            $documentos = Archivo::where('estado',1)
            ->where(function($query) use ($palabras) {
                $primero = true;
                foreach ($palabras as $palabra) {
                    if(trim($palabra) != ''){
                        if($primero) {
                            $query->where('nombre','like','%'.$palabra.'%');
                        } else {
                            $query->orWhere('nombre','like','%'.$palabra.'%');
                        }                        
                        $query->orWhere('alias','like','%'.$palabra.'%');
                        $primero = false;
                    }
                }                
            })->get();                        
        } else {
            $carpetas = Carpeta::where('estado',1)->get();
            $archivos = Archivo::where('estado',1)->get();
            $documentos = $this->ordenar($carpetas, $archivos, null);
        }
        //return $documentos;
        $destacados = Archivo::where('estado',1)->where('destacado',1)->get();
        
        return view('portal.documentos', compact('documentos', 'buscar', 'destacados','facultades','menus'));
    }    
    protected function ordenar($carpetas, $archivos, $padre)
    {
        $resultado = collect();  
        $facultades=Facultad::with('carreras')->get();
                $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();

        //carpetas
        foreach ($carpetas as $carpeta) {
            if($carpeta->carpeta_id == $padre) {
                $elemento = new stdClass();
                $elemento->tipo = 'CARPETA';
                $elemento->id = $carpeta->id;
                $elemento->nombre = $carpeta->nombre;
                $elemento->alias = $carpeta->alias;
                $elemento->enlace = '';
                $elemento->hijos = $this->ordenar($carpetas, $archivos, $carpeta->id);
                $resultado->push($elemento);
            }
        }
        //archivos
        foreach ($archivos as $archivo) {
            if($archivo->carpeta_id == $padre) {
                $elemento = new stdClass();
                $elemento->tipo = 'ARCHIVO';
                $elemento->id = $archivo->id;
                $elemento->nombre = $archivo->nombre;
                $elemento->alias = $archivo->alias;
                $elemento->enlace = $archivo->enlace;
                $resultado->push($elemento);
            }            
        }
        return $resultado;
    }
    public function publicaciones(Request $request)
    {
        $categoria_id = 0;
        $facultades=Facultad::with('carreras')->get();
                $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();

        if ($request->has('categoria_id')) {
            $categoria_id = $request->categoria_id;
        }

        $texto = '';
        if ($request->has('texto')) {
            $texto = $request->texto;
        }

        $categorias = Publicacion_categoria::withCount('publicaciones')->where('estado', 1)->get();

        $publicaciones_query = Publicacion::with(['categoria', 'user'])->where('estado', 1);
        if($categoria_id != 0){
            $publicaciones_query->where('publicacion_categoria_id', $categoria_id);
        }
        if($texto != ''){
            $publicaciones_query->where(function($query) use ($texto) {
                $query->where('titulo', 'like', '%'.$texto.'%')
                      ->orWhere('resumen', 'like', '%'.$texto.'%');
            });
        }
        $publicaciones = $publicaciones_query->orderBy('created_at', 'desc')->paginate(10);

        return view('portal.publicaciones', compact('publicaciones','categorias','categoria_id','texto','facultades','menus'));
    }

    public function publicacion_detalle(Request $request, $id)
    {
        $facultades=Facultad::with('carreras')->get();
                $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();

        $publicacion = Publicacion::with(['user','categoria'])->where('estado',1)->findOrFail($id);
        $otros = Publicacion::where('estado', 1)
        ->where('publicacion_categoria_id', $publicacion->publicacion_categoria_id)
        ->where('id', '!=', $id)
        ->orderBy('created_at', 'desc')
        ->take(5)->get();
        return view('portal.publicacion_detalle', compact('publicacion','otros','facultades','menus'));

    }
    public function comunicados_lista(Request $request)
    {
        $query= Comunicado::with('categoria')->get();
        return DataTables::of($query)->toJson();
    }
    
}
